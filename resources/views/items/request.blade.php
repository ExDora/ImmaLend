@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="flex-1 flex flex-col min-w-0 bg-white rounded-l-[32px] overflow-hidden shadow-2xl">

        <!-- HEADER TOPBAR -->

        <!-- CONTENT AREA -->
        <main class="flex-1 p-8 bg-white overflow-y-auto flex justify-center items-start">
            <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <!-- KARTU FORM (SEBELAH KIRI - 7/12 COLUMNS) -->
                <div class="lg:col-span-7 bg-[#EAEEFF]/60 border border-slate-200/60 rounded-[32px] p-8 shadow-sm">

                    <!-- Judul Form -->
                    <div class="text-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Request Item Form</h1>
                        <p class="text-xs text-gray-700 font-medium mt-1">SMK Kristen Immanuel Pontianak</p>
                    </div>

                    <!-- Form Input -->
                    <form action="#" method="POST" class="space-y-5">
                        @csrf

                        <!-- Field 1: Name -->
                        <div>
                            <label class="flex items-center gap-2 text-xs font-bold text-gray-800 mb-2">
                                <svg class="w-4 h-4 text-[#0B3478]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2" />
                                </svg>
                                <span>Name</span>
                            </label>
                            <input type="text" name="name" placeholder="Type your fullname here"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0B3478]/20 focus:border-[#0B3478] transition">
                        </div>

                        <!-- Field 2: Class -->
                        <div>
                            <label class="flex items-center gap-2 text-xs font-bold text-gray-800 mb-2">
                                <svg class="w-4 h-4 text-[#0B3478]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span>Class</span>
                            </label>
                            <input type="text" name="class" placeholder="Choose your class here"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0B3478]/20 focus:border-[#0B3478] transition">
                        </div>

                        <!-- Field 3: Name of Item & Category (2 Kolom Sejajar) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-800 mb-2">Name of Item</label>
                                <input type="text" name="item_name" placeholder="Type the name of the item here"
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0B3478]/20 focus:border-[#0B3478] transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-800 mb-2">Category</label>
                                <input type="text" name="category" placeholder="Choose or add category here"
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0B3478]/20 focus:border-[#0B3478] transition">
                            </div>
                        </div>

                        <!-- Field 4: Reason of Request -->
                        <div>
                            <label class="flex items-center gap-2 text-xs font-bold text-gray-800 mb-2">
                                <svg class="w-4 h-4 text-[#0B3478]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                                <span>Reason of Request</span>
                            </label>
                            <textarea name="reason" rows="4" placeholder="Explain your reasonings here"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0B3478]/20 focus:border-[#0B3478] transition resize-none"></textarea>
                        </div>

                        <!-- Checkbox Persetujuan -->
                        <div class="flex items-center justify-end gap-2 pt-2">
                            <input type="checkbox" id="terms" name="terms"
                                class="w-4 h-4 rounded border-gray-300 text-[#0B3478] focus:ring-0 cursor-pointer">
                            <label for="terms" class="text-[11px] font-semibold text-gray-700 cursor-pointer select-none">
                                I have read the Request Conditions
                            </label>
                        </div>

                        <!-- Tombol Action (Cancel & Submit) -->
                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <a href="{{ route('items.index') }}"
                                class="w-full flex items-center justify-center bg-[#b8b8b8] hover:bg-[#a3a3a3] text-gray-800 font-bold py-3 rounded-xl text-xs transition duration-200">
                                Cancel
                            </a>
                            <button type="submit"
                                class="w-full bg-[#0B3478] hover:bg-[#072352] text-white font-bold py-3 rounded-xl text-xs transition duration-200 shadow-md">
                                Submit Request
                            </button>
                        </div>
                    </form>
                </div>

                <!-- KARTU CONDITIONS (SEBELAH KANAN - 5/12 COLUMNS) -->
                <div
                    class="lg:col-span-5 bg-white border border-gray-200 rounded-[32px] p-8 shadow-sm flex flex-col justify-between min-h-[580px]">
                    <div>
                        <!-- Icon Info Besar -->
                        <div class="flex justify-center mb-4">
                            <div
                                class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center font-serif text-2xl font-bold italic">
                                i
                            </div>
                        </div>

                        <!-- Judul Request Conditions -->
                        <h2 class="text-xl font-bold text-center text-gray-900 mb-6">Request Conditions</h2>

                        <!-- Daftar Syarat (Numbered List) -->
                        <ol class="space-y-4 text-[11px] text-gray-700 font-semibold leading-relaxed">
                            <li class="border-b border-gray-100 pb-3">
                                1. Items that are already available but not listed here will be processed within 24 hours.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                2. Items that are unavailable could take between weeks to month to be provided.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                3. Item requests have to be reasonable, useful, appropriate, and only used for learning
                                purposes.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                4. Any troll or prank request will result in penalties.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                5. You will be notified if your request is accepted or rejected.
                            </li>
                        </ol>
                    </div>

                    <!-- Footer Kartu Conditions (Need help?) -->
                    <div class="pt-6">
                        <a href="#"
                            class="flex items-center gap-2 text-[11px] font-bold text-gray-800 hover:text-[#0B3478] transition">
                            <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 9a2.25 2.25 0 1 1 3.96 1.48c-.78.87-1.71 1.27-1.71 2.52" />
                                <path stroke-linecap="round" d="M12 16.5h.01" />
                            </svg>
                            <span>Need help?</span>
                        </a>
                    </div>
                </div>

            </div>
        </main>
    </div>
@endsection