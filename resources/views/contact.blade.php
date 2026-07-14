@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12">
    <div class="rounded-2xl bg-white p-8 shadow-sm border">
        <h1 class="text-3xl font-bold text-[#4A7C2F]">Contact Us</h1>
        <p class="mt-4 text-gray-600">We’d love to hear from you. Reach out for product questions, delivery support, or wholesale inquiries.</p>

        <div class="mt-8 grid gap-8 md:grid-cols-2">
            <div>
                <h2 class="text-xl font-semibold">Get in touch</h2>
                <p class="mt-3 text-gray-600">Email: support@ambatugrow.com</p>
                <p class="mt-2 text-gray-600">Phone: +63 912 345 6789</p>
                <p class="mt-2 text-gray-600">Address: Davao City, Philippines</p>
            </div>

            <div class="rounded-xl bg-[#F6FDF1] p-6">
                <h2 class="text-xl font-semibold">Business Hours</h2>
                <p class="mt-3 text-gray-600">Monday – Friday: 8:00 AM to 6:00 PM</p>
                <p class="mt-2 text-gray-600">Saturday: 9:00 AM to 3:00 PM</p>
                <p class="mt-2 text-gray-600">Sunday: Closed</p>
            </div>
        </div>
    </div>
</div>
@endsection
