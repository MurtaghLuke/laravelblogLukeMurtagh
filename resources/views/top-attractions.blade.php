@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Top Irish Tourist Attractions!</h1>
    <div class="row">
        @foreach ($attractions as $attraction)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $attraction['image']) }}" class="card-img-top" alt="{{ $attraction['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $attraction['name'] }}</h5>
                        <p class="card-text">{{ $attraction['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
