@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->

        <!-- Main -->
        <div class="flex-1 flex flex-col">

            <!-- Header -->

            <!-- Content -->
            <main class="flex-1 px-10 py-10 bg-white">
                <div class="border border-gray-200 rounded-2xl p-10 max-w-5xl">

                    <div
                        class="w-28 h-28 rounded-full bg-gradient-to-br from-sky-300 via-emerald-200 to-sky-400 flex items-center justify-center mb-8 ring-4 ring-white shadow">
                        <img src="{{ asset('images/user/image.png') }}" alt="Profile Image" class="w-full h-full object-cover rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <h1 class="text-2xl font-bold text-blue-950">Personal Information</h1>
                    <div class="border-b-2 border-blue-950 w-full mb-8 mt-2"></div>

                    <div class="grid grid-cols-2 gap-x-16 gap-y-6">
                        <div>
                            <p class="font-semibold text-blue-950 mb-2">Full Name</p>
                            <input type="text" value="Forensya Marcella Medelline Lim" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>
                        <div>
                            <p class="font-semibold text-blue-950 mb-2">Full Address</p>
                            <input type="text" value="Jl. Mekar Indah Raya GG. Citra Abadi No. A5" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>

                        <div>
                            <p class="font-semibold text-blue-950 mb-2">Class</p>
                            <input type="text" value="XII TKJ 3" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>
                        <div>
                            <p class="font-semibold text-blue-950 mb-2">City</p>
                            <input type="text" value="Pontianak" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>

                        <div>
                            <p class="font-semibold text-blue-950 mb-2">NIS</p>
                            <input type="text" value="1234" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>
                        <div>
                            <p class="font-semibold text-blue-950 mb-2">Number</p>
                            <input type="text" value="+62 987 6543 2109" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>

                        <div>
                            <p class="font-semibold text-blue-950 mb-2">NISN</p>
                            <input type="text" value="1234567890" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>
                        <div>
                            <p class="font-semibold text-blue-950 mb-2">Email</p>
                            <input type="text" value="Forsaquhe@Immalend.sch.id" readonly
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
@endsection