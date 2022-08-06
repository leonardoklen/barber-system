<?php

namespace App\Http\Controllers;

use App\Models\DayOff;
use App\Models\Schedule;
use App\Models\Scheduling;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function getSchedulesPerStatus(Request $request)
    {
        try {
            $inputDateCarbon = Carbon::createFromFormat('d/m/Y', $request->query('date'));
            $inputDateString = $inputDateCarbon->format('Y-m-d');

            $isDayOff = DayOff::where('date', '=', $inputDateString)->exists();

            if ($isDayOff) {
                return response()->json([]);
            }

            $dateInitial = $inputDateString . ' 00:00:00';
            $dateFinal = $inputDateString . ' 23:59:59';

            $schedulings = Scheduling::whereBetween('date_time', [$dateInitial, $dateFinal])->get();

            $dayNumber = $inputDateCarbon->dayOfWeek;

            $schedules = json_decode(Schedule::where('day_number', '=', $dayNumber)->where('status', '=', true)->first()->getAttributes()['schedules'], true);

            $return = [];
            $status = true;

            foreach ($schedules as $schedule) {
                foreach ($schedulings as $scheduling) {
                    if (Carbon::createFromFormat('Y-m-d H:i:s', $scheduling['date_time'])->format('H:i') === $schedule) {
                        $status = false;
                    }
                }
                $return[] = ['schedule' => $schedule, 'status' => $status];
                $status = true;
            }            

            $currentTime = Carbon::createFromFormat('H:i', Carbon::now()->format('H:i'));

            if($inputDateCarbon->format('d-m-y') === Carbon::now()->format('d-m-y')){
                $return = array_filter($return, function($schedule) use ($currentTime){
                    if(Carbon::createFromFormat('H:i', $schedule['schedule'])->gt($currentTime)) return true;
                });
            }

            return response()->json($return);
        } catch (\Throwable $error) {
            return response()->json(["message" => "Falha ao obter horários: " . $error->getMessage()], 500);
        };
    }
}
