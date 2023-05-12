@extends('layout')
@section('content')
<h1 style="text-align:center">Current Client Records</h1><br>
<p>
    <a class="btn btn-warning" href="{{ route('clients.create') }}" style="font-size:15px">Add New Clients</a>
    <a class="btn btn-warning" href="{{ route('available.index') }}" style="font-size:15px">Available Rooms</a>
    <a class="btn btn-warning" href="{{ route('rooms.index') }}" style="font-size:15px">Back</a>
</p>
<table class="table table-hover" width="400px" style="text-align:center; background:rgb(215, 233, 249)">
    <thead style="background:rgb(120, 167, 208)";>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Room No</th>
        <th scope="col">Time</th>
        <th scope="col">Entry</th>
      </tr>
    </thead>
        @forelse($clients as $client)
        <tbody>
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->room_no }}</td>
                <td>{{ $client->created_at->format('Y-m-d') }}</td>
                <td>
                    <form action="{{ route('currentClients.destroy', $client->room_no) }}" method="post"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-block" type="submit" style="font-size:15px">Exit</button>
                </form>
                </td>
            </tr>
        </tbody>
        @empty
            No Data Available
        @endforelse
</table>
@endsection