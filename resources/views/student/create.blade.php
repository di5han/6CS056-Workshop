@extends('layouts.app')

@section('title', 'Create Student')

@section('content')

    <h1>Create Student</h1>

    <x-alert />

    @include('student._form')

@endsection