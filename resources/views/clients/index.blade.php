@extends('layout')
@section('content')
<h1 style="text-align: center">Our Records</h1><br>
<p>
    <a class="btn btn-warning" href="{{ route('currentClients.index') }}" style="font-size:15px">Back</a>
</p>
<table class="table table-hover" width="400px" style="text-align:center; background:rgb(215, 233, 249)">
    <thead style="background:rgb(120, 167, 208)";>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Room No</th>
        <th scope="col">Phone</th>
        <th scope="col">Entry</th>
        <th scope="col">Departure</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    @forelse($clients as $client)
        <tbody>
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->room_no }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->created_at->format('Y-m-d') }}</td>
                <td>{{ $client->updated_at->format('Y-m-d') }}
                    <p>
                        Come: {{ $client->updated_at->diffForHumans() }}
                    </p>
                </td>
                <td style="color:red";>{{ $client->status == 1 ? 'Using' : 'Used' }}</td>
            </tr>
        </tbody>
        @empty
            No Data Available
        @endforelse
</table>
@endsection