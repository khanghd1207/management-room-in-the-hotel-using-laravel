@extends('layout')
@section('content')
<style>
    body {background-image: url({{ asset('bg.jpg') }})}
</style>
    <h1 style="text-align:center; ">Home Page</h1> 
    <div style="text-align:center;color:rgb(255, 0, 0);">This is the page to manage hotel (Hotel management system). You can add new rooms with many arrtributes like room number, price and quantity of people.
    You also add customers when they stay in your hotel. Specially, this page allows you to check in and check out all customers, show details information about customers.
    </div>
@endsection