<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create(Request $request)
    {
        try {
            $service = new Services();

            $service->description = $request->description;
            $service->status = (bool) $request->status;

            $service->save();

            return response()->json(["message" => "Serviço criado com sucesso!"], 200);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao criar serviço: " . $error->getMessage()], 500);
        }
    }

    public function read($id)
    {
        //
    }

    public function readAll()
    {
        try {
            $services = Services::all();

            return response()->json($services, 200);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao buscar serviços: " . $error->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
