@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Available Rooms') }}</div>

                <div class="card-body">
                <table class="table">
                        <thead>
                                <tr>
                                    <th> Room Number </th>
                                    <th> Room Type </th>
                                    <th> Room Status </th>
                                    <th>  </th> 
                                </tr>
                        </thead>

                        <tbody>
                        @foreach ($rooms as $room)
                        <tr>
                            
                                    <td> {{ $room->room_number }} </td>
                                    <td> {{ $room->room_type }} </td>
                                    <td> {{ $room->room_status }} </td>
                                    <td> <a  href="/rooms/{{$room->room_id}}" class="btn btn-primary"> View </a> </td>
                                    
                        </tr>
                        @endforeach
                        </tbody>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection