<@extends('layouts.error')

@section('page_title')
    503 - Unavailable
@stop

@section('content')
        <!-- Error Content -->
        <h1 class="text-60">
            503
        </h1>
        <p class="text-36 subheading mb-3">Error!</p>
        <p class="mb-5  text-muted text-18">We are sorry but our service is currently not available.</p>
        <a class="btn btn-lg btn-primary btn-rounded" href="../">Go back to home</a>
@stop