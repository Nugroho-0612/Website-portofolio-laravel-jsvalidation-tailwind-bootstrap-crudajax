<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Service\ImageService;
use App\Service\ProjectService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;


class ProjectController extends Controller
{
    public function __construct(private ProjectService $projectService, private ImageService $imageService) {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.projects');
    }

    public function serversideTable(): JsonResponse
    {
        return $this->projectService->getDatatable();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $uploadImg = $this->imageService->uploadImg($data);
            $data['image'] = $uploadImg;

            $this->projectService->create($data);
            return response()->json(['title' => 'Good Job', 'text' => 'Poject created sucessfully', 'icon' => 'success']);
        } catch (Exception $error) {
            return response()->json(['title' => 'Error', 'text' => $error->getMessage(), 'icon' => 'error']);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        try {
            return response()->json([
                'data' => $this->projectService->getByuid($id),
            ]);
        } catch (Exception $th) {
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, string $id)
    {
        $data = $request->validated();

        $getImage = $this->projectService->getByuid($id);

        try {
            if ($request->hasFile('image')) {
                $uploadImg = $this->imageService->uploadImg($data, $getImage->image);
                $data['image'] = $uploadImg;
            }

            $this->projectService->update($data, $id);

            return response()->json(['title' => 'Good Job', 'text' => 'Poject updated sucessfully', 'icon' => 'success']);
        } catch (Exception $error) {
            return response()->json(['title' => 'Error', 'text' => $error->getMessage(), 'icon' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->projectService->delete($id);

        return response()->json(['message' => 'Project deleted successfully']);
    }
}
