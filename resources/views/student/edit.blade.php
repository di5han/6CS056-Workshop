@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

    <h1>Edit Student</h1>

    <x-alert />

    @include('student._form', ['student' => $student])

@endsection