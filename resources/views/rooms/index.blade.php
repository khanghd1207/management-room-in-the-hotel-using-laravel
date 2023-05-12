@extends('layout')
@section('content')
<h1 style="text-align:center;">Room List</h1><br>
<p>
    <a class="btn btn-warning" href="{{ route('rooms.create') }}" style="font-size:15px">Add New Room</a>
    <a class="btn btn-warning" href="{{ route('clients.create') }}"style="font-size:15px">Add New Clients</a>
    <a class="btn btn-warning" href="{{ route('available.index') }}"style="font-size:15px">Available Rooms</a>
    <a class="btn btn-warning" href="{{ route('currentClients.index') }}"style="font-size:15px">Current Clients</a>
</p>
<table class="table table-hover " width="400px" style="text-align:center; background:rgb(215, 233, 249)">
    <thead style="background:rgb(120, 167, 208)";>
      <tr>
        <th scope="col">Room No</th>
        <th scope="col">Price</th>
        <th scope="col">People</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($rooms as $room)
        <tr>
            <td>{{ $room->room_no }}</td>
            <td>{{ $room->price }}</td>
            <td>{{ $room->people }}</td>
            <td>
                <a href="{{ route('rooms.edit', ['room' => $room->id]) }}" style="font-size:15px" class="btn btn-info btn-block">Edit</a>
            </td>
            <td>
                <form action="{{ route('rooms.destroy', ['room' => $room->room_no]) }}" method="post"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-block" type="submit" style="font-size:15px">Delete</button>
                </form>
            </td>
            </td>
        </tr>
        @empty
            No Data Available
        @endforelse
    </tbody>
</table>
@endsection