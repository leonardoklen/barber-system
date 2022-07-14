<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Scheduling;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function getSchedulesPerStatus(Request $request)
    {
        try {
            $inputDate = Carbon::createFromFormat('d/m/Y', $request->query('date'))->format('Y-m-d');

            $dateInitial = $inputDate . ' 00:00:00';
            $dateFinal = $inputDate . ' 23:59:59';

            $schedulings = Scheduling::whereBetween('date_time', [$dateInitial, $dateFinal])->get();
            $schedules = Schedule::where('status', '=', true)->get();
            $schedules = ['08:00', '09:00', '10:00'];
            $retorno = [];
            $status = true;

            foreach($schedules as $schedule) {
                foreach($schedulings as $scheduling) {
                    if(Carbon::createFromFormat('Y-m-d H:i:s', $scheduling['date_time'])->format('H:i') === $schedule) {
                        $status = false;
                    }
                }
                $retorno[] = ['schedule' => $schedule, 'status' => $status];
                $status = true;
            }

            return response()->json($retorno);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao obter horários: " . $error->getMessage()], 500);
        };
    }
}
