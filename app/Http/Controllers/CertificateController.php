<?php

namespace App\Http\Controllers;

use Exception;
use App\Service\ImageService;
use Illuminate\Http\JsonResponse;
use App\Service\CertificateService;
use Illuminate\Contracts\View\View;
use App\Http\Requests\CertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;

class CertificateController extends Controller
{
    public function __construct(private CertificateService $certificateService, private ImageService $imageService) {}
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.certificates');
    }

    public function serversideTable(): JsonResponse
    {
        return $this->certificateService->getDatatable();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CertificateRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $uploadImg = $this->imageService->uploadImg($data);
            $data['image'] = $uploadImg;

            $this->certificateService->create($data);
            return response()->json(['title' => 'Good Job', 'text' => 'Certificate created sucessfully', 'icon' => 'success']);
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
                'data' => $this->certificateService->getByuid($id),
            ]);
        } catch (Exception $th) {
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, string $id)
    {
        $data = $request->validated();

        $getImage = $this->certificateService->getByuid($id);

        try {
            if ($request->hasFile('image')) {
                $uploadImg = $this->imageService->uploadImg($data, $getImage->image);
                $data['image'] = $uploadImg;
            }

            $this->certificateService->update($data, $id);

            return response()->json(['title' => 'Good Job', 'text' => 'Certificate updated sucessfully', 'icon' => 'success']);
        } catch (Exception $error) {
            return response()->json(['title' => 'Error', 'text' => $error->getMessage(), 'icon' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->certificateService->delete($id);

        return response()->json(['message' => 'Certificate deleted successfully']);
    }
}
