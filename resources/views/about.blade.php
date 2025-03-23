@extends('layouts.app')



@section('content')
{{-- centres and puts padding on the container --}}
<div class="container mx-auto px-4 py-10">
    <h1 class="text-4xl font-bold text-center text-green-600">About Us</h1>

    {{-- mx-auto. centre text inside the card           p-6 add padding of 6 --}}
    <div class="mt-8 mx-auto bg-white rounded-lg p-6">
    <p class="text-gray-700 text-lg leading-relaxed">
            Welcome to <span class="font-semibold text-green-500">Discover Ireland</span>, your ultimate guide to exploring the beauty of Ireland. 
            We are passionate about sharing the most stunning locations, rich history, and breathtaking landscapes Ireland has to offer.
        </p>

        <h2 class="text-2xl font-bold mt-6 text-gray-800">Our Mission</h2>

        <p class="text-gray-600 mt-2">
            Our goal is to provide visitors with a curated list of must-see attractions, hidden gems, and travel tips
            to make their Irish adventure unforgettable.
        </p>

        <h2 class="text-2xl font-bold mt-6 text-gray-800">Why Choose Us?</h2>
        {{-- list disc - bullet points, list-inside - puts them inside container, space-y-2 - space between each item in list.. --}}
        <ul class="list-disc list-inside text-gray-600 mt-2 space-y-2">
            {{-- https://emojipedia.org/check-mark-button --}}
            <li>✅ The best attractions</li>
            <li>✅ Insider travel tips</li>
            <li>✅ Blog posts</li>
            </ul>
    </div>
</div>
@endsection
