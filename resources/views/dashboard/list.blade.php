@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
        <h1>Edit List</h1>
        <!-- MAIN CONTENT -->
        {{ $property->title }}

        </div>

        <!-- RIGHT SIDEBAR [ get columns from sidebar template ] -->
        @include('dashboard.layouts.right-sidebar')
    </div>
</div>
@endsection