@extends('layout')
@section('content')
<h1 style="text-align: center">Available Room List</h1><br>
<p>
    <a class="btn btn-warning" href="{{ route('clients.create') }}" style="font-size:15px">Add New Clients</a>
    <a class="btn btn-warning" href="{{ route('rooms.index') }}" style="font-size:15px">Back</a>
</p>
<table class="table table-hover" width="400px" style="text-align:center; background:rgb(215, 233, 249)">
    <thead style="background:rgb(120, 167, 208)";>
      <tr>
        <th scope="col">Room No</th>
        <th scope="col">Price</th>
        <th scope="col">People</th>
      </tr>
    </thead>
        @forelse($rooms as $room)
        <tbody>
            <tr>
                <td>{{ $room->room_no }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->people }}</td>
            </tr>
        </tbody>
        @empty
            No Data Available
        @endforelse
</table>
@endsection