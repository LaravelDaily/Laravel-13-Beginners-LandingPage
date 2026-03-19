@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold">{{ $headline }}</h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ $subheadline }}</p>
    </div>

    <div class="mt-16 grid grid-cols-1 gap-8 md:grid-cols-3">
        @foreach ($features as $feature)
            <div class="rounded-lg border border-gray-200 p-6 dark:border-gray-800">
                <h3 class="font-semibold">{{ $feature['title'] }}</h3>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $feature['description'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
