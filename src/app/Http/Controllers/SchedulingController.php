<?php

namespace App\Http\Controllers;

use App\Models\Scheduling;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SchedulingController extends Controller
{

    public function create(Request $request)
    {
        try {
            $scheduling = new Scheduling();

            $scheduling->date_time = Carbon::createFromFormat('d/m/Y H:i', $request->date_time)->format('Y-m-d H:i:s');
            $scheduling->id_service  = $request->id_service;
            $scheduling->name     = $request->name;
            $scheduling->phone    = $request->phone;

            $scheduling->save();

            return response()->json(["message" => "Agendamento criado com sucesso!"], 200);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao criar agendamento: " . $error->getMessage()], 400);
        }
    }

    public function read($id)
    {
        try {
            $scheduling = Scheduling::find($id);

            return !empty($scheduling) ? response()->json($scheduling, 200) : response()->json(["message" => "Agendamento não cadastrado!"], 404);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao buscar agendamento: " . $error->getMessage()], 400);
        }
    }

    public function readAll()
    {
        try {
            $schedulings = Scheduling::all();

            return response()->json($schedulings, 200);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao buscar agendamentos: " . $error->getMessage()], 400);
        }
    }

    public function readAllPerDate($date)
    {
        try {
            $dateInitial = "$date 00:00:00";
            $dateFinal = "$date 23:59:00";
            $schedulings = Scheduling::select('scheduling.id', 'scheduling.date_time', 'scheduling.name', 'scheduling.phone', 'services.description as service')
                ->join('services', 'scheduling.id_service', '=', 'services.id')
                ->whereBetween('date_time', [$dateInitial, $dateFinal])                
                ->get();

            return response()->json($schedulings, 200);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao buscar agendamentos: " . $error->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $scheduling = Scheduling::find($id);

            if (!empty($scheduling)) {
                $scheduling->date_time = is_null($request->date_time) ? $scheduling->date_time : $request->date_time;
                $scheduling->id_service  = is_null($request->id_service)  ? $scheduling->id_service  : $request->id_service;
                $scheduling->name     = is_null($request->name)     ? $scheduling->name     : $request->name;
                $scheduling->phone    = is_null($request->phone)    ? $scheduling->phone    : $request->phone;

                $scheduling->save();

                return response()->json(["message" => "Agendamento atualizado com sucesso!"], 200);
            } else {
                return response()->json(["message" => "Agendamento não cadastrado!"], 404);
            }
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao atualizar agendamento: " . $error->getMessage()], 400);
        }
    }

    public function delete($id)
    {
        try {
            $scheduling = Scheduling::find($id);

            if (!empty($scheduling)) {
                $scheduling->delete();
                return response()->json(["message" => "Agendamento excluído com sucesso!"], 200);
            } else {
                return response()->json(["message" => "Agendamento não cadastrado!"], 404);
            }
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao excluir agendamento: " . $error->getMessage()], 400);
        }
    }
}
