@extends('admin.layouts.app')

@section('content')
<!-- Content -->
<div class="content">
    <h2>Projects</h2>
    <div class="card mt-4">
        <div class="card-header">
            <button class="btn btn-primary mb-1" onclick="showModal()">Create</button>
        </div>
        <div class="card-body">
            <table id="tableProject" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Release_Date</th>
                        <th>Url_Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.partials.modalProjects')


<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\ProjectRequest', '#projectForm') !!}

<script>
    let save_method;

    $(document).ready(function() {
        projectsTable()
    });

    function projectsTable() {
        $('#tableProject').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: 'projects/dataTable',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'description',
                    name: 'description',
                },
                {
                    data: 'release_date',
                    name: 'release_date',
                },
                {
                    data: 'url_link',
                    name: 'url_link',
                },
                {
                    data: 'image',
                    name: 'image',
                },
                {
                    data: 'action',
                    name: 'action',
                },
            ]
        });
    }

    function resetValidation() {
        $('.is-invalid').removeClass('is-invalid');
        $('.is-valid').removeClass('is-valid');
        $('span.invalid-feedback').remove();
    }

    function showModal() {
        $('#projectForm')[0].reset();
        resetValidation()
        $('#projectModal').modal('show');

        save_method = 'create';

        $('.modal-title').text('Create New Project');
        $('.btnSubmit').text('Create');

    }

    $('#projectForm').on('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this)
        var url, method;
        url = 'projects';
        method = 'POST';

        if (save_method == 'update') {
            url = 'projects/' + $('#id').val();
            formData.append('_method', 'PUT');
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: method,
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#projectModal').modal('hide');
                $('#tableProject').DataTable().ajax.reload();
                Swal.fire({
                    title: response.title,
                    text: response.text,
                    icon: response.icon,
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
                alert("Error :" + jqXHR.responseText);

            }
        })
    });

    function editModal(e) {
        let id = e.getAttribute('data-id');

        save_method = 'update';

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: "projects/" + id,
            success: function(response) {
                $('#name').val(response.data.name);
                $('#description').val(response.data.description);
                $('#release_date').val(response.data.release_date);
                $('#url_link').val(response.data.url_link);
                // $('#image').val(response.data.image);
                $('#id').val(response.data.uuid);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
                alert("Error displaying data :" + jqXHR.responseText);
            }
        })
        resetValidation()
        $('#projectModal').modal('show');
        $('.modal-title').text('Update New Project');
        $('.btnSubmit').text('Update');

    }

    function deleteModal(e) {
        let id = e.getAttribute('data-id');
        Swal.fire({
            title: 'Delete Project',
            text: 'Are you sure?',
            icon: 'question',
            showCancelButton: true,
            cancelButtonColor: '#3085d6',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "DELETE",
                    url: "projects/" + id,
                    dataType: 'json',
                    success: function(response) {
                        $('#projectModal').modal('hide');
                        $('#tableProject').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Good job!",
                            text: response.message,
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText);
                        alert(jqXHR.responseText);

                    }

                })
            }
        })
    }
</script>


@endsection