<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Room;
use App\Models\Teacher;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $schedules = Schedule::where('classe_id', $classeId)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        //
        $availableRooms = Room::all();
        $teachers = Teacher::all();
        $timeSlots = [
            '08:00-10:00',
            '10:00-12:00',
            '14:00-16:00',
            '08:00-12:00',
            '14:00-18:00',
            '18:00-20:00',
            '20:00-22:00',
        ];
        //schedule: start_date 	start_time 	end_date 	end_time 	classe_id 	course_id 	room_id 
        foreach ($timeSlots as $slot) {
            $schedule = new Schedule();
            $schedule->course_id = $request->course;
            $schedule->classe_id = $request->classe;
            $schedule->room_id = $availableRooms->random()->id;
            $schedule->teacher_id = $teachers->random()->id;
            $schedule->start_time = $slot; // Ajuster selon le format requis
            $schedule->save();
        }
        return response()->json([
            'status_code' => 200,
            'message' => 'Horaires générés !'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
        // $schedules = Schedule::where('course_id', $courseId)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
