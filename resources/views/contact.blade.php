@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1 class="text-3xl font-bold">Contact Us</h1>
    <p class="mt-4 text-gray-600 dark:text-gray-400">We'd love to hear from you.</p>

    <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2">
        <div>
            <h2 class="font-semibold">Email</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">{{ $email }}</p>
        </div>
        <div>
            <h2 class="font-semibold">Address</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">{{ $address }}</p>
        </div>
    </div>
@endsection
