@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-4xl font-bold text-center mt-8 mb-6 text-green-700">Top 10 Irish Attractions!</h1>

    {{-- 3 cards on each row --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($attractions as $attraction)
        <div class="bg-white rounded-lg overflow-hidden transition duration-300">

            {{-- class="w-full h-48 object-cover" make images fit the cards --}}
            @if($attraction->image)
                <img src="{{ asset('images/' . $attraction->image) }}" class="w-full h-48 object-cover" alt="{{ $attraction->name }}">  
            @endif
            <div class="p-5">
                <h5 class="text-xl font-semibold text-gray-800">{{ $attraction->name }}</h5>
                <p class="text-gray-600 mt-2">{{ $attraction->description }}</p>
                <p class="text-gray-500 text-sm mt-3">Location: {{ $attraction->location }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection