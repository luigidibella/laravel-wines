@extends('layouts.admin')

@section('content')

    <div class="container my-3">

        <h1>Dashboard</h1>

        <div class="row row-cols-4">
            @foreach ( $wines as $wine )
            <div class="col mb-3">
                <div class="card d-flex justify-content-center align-items-center" style="min-height: 590px;">
                    <img src="{{ $wine->image }}" class="" alt="{{ $wine->wine }}" style="max-height: 300px;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $wine->wine }}</h5>
                    <p class="card-text">{{ $wine->winery }}</p>
                    <p class="card-text">{{ $wine->location }}</p>
                    <p class="card-text">{{ $wine->average }}</p>
                    <p class="card-text">{{ $wine->reviews }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{ $wines->links('pagination::bootstrap-5') }}

    </div>

@endsection
