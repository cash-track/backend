@extends('layout.base')

@section('title') Home @endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Home
        </div>

        @include('modules.sub-menu')
    </div>
@endsection