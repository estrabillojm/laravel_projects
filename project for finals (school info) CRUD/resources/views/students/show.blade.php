@extends('layouts.app')
@section('content')
<style>
    .cont{
        border:1px solid #ccc;
    }
</style>
<div class="container"> 
    <div class="col-md-8 offset-md-2 p-3 cont">
        <h3>{{ $student -> firstname }} {{ $student -> lastname }}</h3>
        <hr>
        <p class="lead">Student ID: {{ $student -> id }}</p>
        <p class="lead">Course: {{ $student -> course_id }}</p>
        <p class="lead">Year Level: {{ $student -> year }}</p>
        <p class="lead">Age: {{ $student -> age }}</p>
        <p class="lead">Date of Birth: {{ $student -> dob }}</p>
        <p class="lead">Gender: {{ $student -> gender }}</p>
        <hr>
        <p class="text-muted text-right">Date created: {{ $student -> created_at }}</p>
        <a href="/home" class="btn btn-info">Back</a>
    </div>
</div>
@endsection