@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

    <h1>Edit Course</h1>

    <x-alert />

    @include('course._form', ['course' => $course])

@endsection