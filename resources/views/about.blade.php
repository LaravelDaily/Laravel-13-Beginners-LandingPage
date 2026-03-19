@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-bold">About Us</h1>
    <p class="mt-4 text-gray-600 dark:text-gray-400">We're a small team on a mission to make shipping software effortless.</p>

    <div class="mt-12 grid grid-cols-1 gap-6 sm:grid-cols-3">
        @foreach ($teamMembers as $member)
            <div class="rounded-lg border border-gray-200 p-6 dark:border-gray-800">
                <p class="font-semibold">{{ $member['name'] }}</p>
                <p class="mt-1 text-sm text-gray-500">{{ $member['role'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
