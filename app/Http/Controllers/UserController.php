<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Project;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dataProject = Project::all();
        $dataCertificate = Certificate::all();

        return view('user', compact('dataProject', 'dataCertificate'));
    }
}
