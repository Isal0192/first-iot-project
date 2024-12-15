<?php

namespace App\Http\Controllers;

use App\Models\dataModel;

class homeController extends Controller
{
    public function index()
    {
        // Ambil data terbaru
        $dataTerbaru = dataModel::latest()->first();
        return view('home', compact('dataTerbaru'));
    }
}
