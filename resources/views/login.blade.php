@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-6 py-12">
    <div class="rounded-2xl bg-white p-8 shadow-sm border">
        <h1 class="text-3xl font-bold text-[#4A7C2F]">Welcome Back</h1>
        <p class="mt-3 text-gray-600">Log in to continue shopping and manage your account.</p>

        <form class="mt-8 space-y-4">
            <input class="w-full rounded-lg border px-4 py-3" type="email" placeholder="Email address">
            <input class="w-full rounded-lg border px-4 py-3" type="password" placeholder="Password">
             <a href="{{ route('signup') }}" 
   class="block w-full text-center rounded-lg bg-[#4A7C2F] px-4 py-3 font-semibold text-white">
    Sign Up
</a>
        </form>
    </div>
</div>
@endsection
