<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dataModel;

class DataController extends Controller
{
    public function index()
    {
        $dataTerbaru = dataModel::latest()->first();
        return response()->json($dataTerbaru);
    }

    public function allData(){
        $data = dataModel::all();
        return response()->json($data);
    }
    /**
     * Menyimpan data sensor
     * @param Request $request
     * @return Array
     */
    public function storeData(Request $request)
    {
        $request->validate([
            'tempratur' => 'required|numeric',
            'humidity' => 'required|numeric'
        ]);

        $data = dataModel::create([
            'tempratur' => $request->input('tempratur'),
            'humidity' => $request->input('humidity')
        ]);

        if ($data) {
            return ["message" => "berhasil"];
        }
        return ["message" => "gagal"];
    }

    /**
     * Menghapus data sensor
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        $data = dataModel::where('id', $id)->delete();
    }

    /**
     * Mengupdate data sensor
     * @param Request $request | int $id
     * @return Array
     */
    public function update(Request $request, $id)
    {
        $data = dataModel::where('id', $id)->update([
            'tempratur' => $request->input('tempratur'),
            'humidity' => $request->input('humidity'),
            'updated_at' => now()
        ]);

        if ($data) {
            return ["message" => "berhasil"];
        }
        return ["message" => "gagal"];
    }
}
