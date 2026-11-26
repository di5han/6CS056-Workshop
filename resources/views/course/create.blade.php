@extends('layouts.app')

@section('title', 'Create Course')

@section('content')

    <h1>Create Course</h1>

    <x-alert />

    @include('course._form')

@endsection