@extends('layout')
@section('content')
<h1 style="text-align:center;">Update Room</h1><br>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<form method="post" action="{{ route('rooms.update', ['room' => $room->id]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Room No</label>
        <input  name="room_no" placeholder="Room No" value="{{ old('room_no', $room->room_no) }}" class="form-control" style="font-size:15px">
    </div>

    <div class="form-group">
        <label for="roll">Price</label>
        <input  name="price" placeholder="Enter Price" value="{{ old('price', $room->price) }}" class="form-control" style="font-size:15px">
    </div>

    <div class="form-group">
        <label for="section">People</label>
        <input  name="people" placeholder="Enter People" value="{{ old('people', $room->people) }}" class="form-control" style="font-size:15px">
    </div>
    <button type="submit" class="btn btn-info" style="font-size:15px">Update</button>
</form>
</div>
<div class="col-md-4"></div>
    </div>
</div>
@endsection