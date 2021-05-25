@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                <table class="table">
                        <thead>
                                <tr>
                                    <th> Room Number </th>
                                    <th> Room Type </th>
                                    <th> Room Status </th>
                                    <th> Last Reservation Date </th>
                                    <th>  </th> 
                                </tr>
                        </thead>

                        <tbody>
                        
                        <tbody>
                        @foreach ($rooms as $room)
                        <tr>
                                    <td> {{ $room->room_number }} </td>
                                    <td> {{ $room->room_type }} </td>
                                    <td> {{ $room->room_status }} </td>
                                    <td> {{ $room->reservation_date }} </td>
                                    <td> <a  href="/rooms/{{$room->room_id}}/edit" class="btn btn-primary"> Reserve Room </a> </td>
                        </tr>
                        @endforeach
                        </tbody>                  
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection