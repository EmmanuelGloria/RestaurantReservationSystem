<?php

namespace App\Http\Controllers;

use App\Models\roomControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #$posts = roomControl::get();
        #return view('reserveroom', compact('posts'));
        $rooms = DB::table('hotel_rooms')->get();
        return view('reserveroom', ['rooms' =>$rooms]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roomControl  $roomControl
     * @return \Illuminate\Http\Response
     */
    public function show($roomControl)
    {
        #$post = roomControl::find($roomControl);
        $rooms = DB::select('select * from hotel_rooms where room_id = :id', ['id' => $roomControl]);
        return view('reserve', ['rooms' =>$rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roomControl  $roomControl
     * @return \Illuminate\Http\Response
     */
    public function edit(roomControl $roomControl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roomControl  $roomControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roomControl $roomControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roomControl  $roomControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(roomControl $roomControl)
    {
        //
    }
}
