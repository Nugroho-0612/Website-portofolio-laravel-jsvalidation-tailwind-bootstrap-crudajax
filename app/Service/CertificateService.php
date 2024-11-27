<?php

namespace App\Service;

use App\Models\Certificate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CertificateService
{
    public function getByuid(string $id)
    {
        return Certificate::where('uuid', $id)->firstOrFail();
    }

    public function getDatatable()
    {
        $certificate = Certificate::latest()->get();

        return DataTables::of($certificate)
            ->addIndexColumn()
            ->editColumn('image', function ($row) {
                $img = asset('storage/images/' . $row->image);
                return '<div class="text-center">
                            <a href="' . $img . '">
                                <img src="' . $img . '" class="img-thumbnail" alt="certificate Image">
                            </a>
                         </div>';
            })
            ->addColumn('action', function ($row) {
                return '<div class="text-center">
                            <button class="btn btn-sm btn-success" onclick="editModal(this)" data-id="' . $row->uuid . '">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="deleteModal(this)" data-id="' . $row->uuid . '">Delete</button>
                        </div>';
            })
            ->rawColumns(['image', 'action'])
            ->make();
    }

    public function create(array $data)
    {

        $data['uuid'] = Str::uuid();
        return Certificate::create($data);
    }

    public function update(array $data, string $id)
    {
        $data['uuid'] = Str::uuid();
        return Certificate::where('uuid', $id)->update($data);
    }

    public function delete(string $id)
    {
        $certificate = Certificate::where('uuid', $id)->firstOrFail();

        if ($certificate->image) {
            Storage::disk('public')->delete('images/' . $certificate->image);
        }
        return $certificate->delete();
    }
}
