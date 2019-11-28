@extends('layouts.menu-course')

@section('title', $course->name)
@section('description', $course->subtitle)
@section('content')

@auth
@if(Auth::user()->courses->contains($course->id))
@include('includes.default.course_page.path_enrolled')
@else
@include('includes.default.course_page.path_new')
@endif
@endauth

@guest
@include('includes.default.course_page.path_new')
@endguest

@endsection
