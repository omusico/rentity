@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <!-- MAIN CONTENT -->
            <h1 class="text-center"><span class="fa fa-list"></span> My Listing</h1>
            <table class="table table-responsive">
                <tr>
                    <td>#</td>
                    <td>Title</td>
                    <td>Available</td>
                    <td>Price</td>
                    <td>Actions</td>
                </tr>

               @foreach($properties as $property)
                <tr>
                    <td></td>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->available }}</td>
                    <td>${{ $property->price }}</td>
                    <td>
                        <a href="/dashboard/listing/{{$property->id}}/edit" title="Edit"><span class="fa fa-eye"></span></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- RIGHT SIDEBAR [ get columns from sidebar template ] -->
        @include('dashboard.layouts.right-sidebar')
    </div>
</div>
@endsection

@section('load_to_footer')

@endsection