@extends('layout')
@section('content')
<h1 style="text-align:center">New Room Entry</h1><br>
<div class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Room No</label>
                    <input  name="room_no" placeholder="Room No" value="{{ old('room_no') }}" class="form-control" style="font-size:15px">
                </div>
        
                <div class="form-group">
                    <label for="price">Price</label>
                    <input  name="price" placeholder="Enter Price" value="{{ old('price') }}" class="form-control" style="font-size:15px">
                </div>
        
                <div class="form-group">
                    <label for="people">People</label>
                    <input  name="people" placeholder="Enter People" value="{{ old('people') }}" class="form-control" style="font-size:15px">
                </div>
        
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-info btn-block" style="font-size:15px">Create</button>
            </form>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>
@endsection