@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR ============ -->
        
        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->
            
            <main class="p-8">
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 items-start">

                    <!-- FORM CARD -->
                    <div class="xl:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                        <div class="bg-gradient-to-r from-sky-300 to-blue-500 px-8 py-6">
                            <h1 class="text-2xl font-extrabold text-white">Item Borrowing Form</h1>
                            <p class="text-sm text-blue-50 mt-1">SMK Kristen Immanuel Pontianak</p>
                        </div>

                        <form action="#" method="POST" class="p-8 space-y-5">
                            @csrf

                            <div>
                                <label for="name" class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5z" />
                                    </svg>
                                    Name
                                </label>
                                <input type="text" id="name" name="name" placeholder="Type your fullname here"
                                    class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-600 placeholder-slate-400 outline-none focus:border-[#173863]">
                            </div>

                            <div>
                                <label for="class"
                                    class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                    Class
                                </label>
                                <select id="class" name="class_id"
                                    class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-400 outline-none focus:border-[#173863]">
                                    <option value="" selected disabled>Choose your class here</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="item"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 7.5l-8.25-4.5L3.75 7.5m16.5 0l-8.25 4.5m8.25-4.5v9l-8.25 4.5m-8.25-13.5l8.25 4.5m-8.25-4.5v9l8.25 4.5m0-9v9" />
                                        </svg>
                                        Item to be borrowed
                                    </label>
                                    <select id="item" name="item_id"
                                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-400 outline-none focus:border-[#173863]">
                                        <option value="" selected disabled></option>
                                    </select>
                                </div>
                                <div>
                                    <label for="amount"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 6h12M8.25 12h12M8.25 18h12M3.75 6h.008v.008H3.75V6zm0 6h.008v.008H3.75V12zm0 6h.008v.008H3.75V18z" />
                                        </svg>
                                        Amount
                                    </label>
                                    <div class="flex items-center border border-slate-200 rounded-xl px-4 py-1">
                                        <input type="number" id="amount" name="amount" min="1"
                                            placeholder="Choose the amount of item here"
                                            class="flex-1 py-2 text-sm text-slate-400 placeholder-slate-400 outline-none min-w-0">
                                        <div class="flex items-center gap-2 shrink-0">
                                            <button type="button"
                                                class="w-7 h-7 rounded-full bg-[#173863] text-white flex items-center justify-center">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" d="M5 12h14" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="w-7 h-7 rounded-full bg-[#173863] text-white flex items-center justify-center">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" d="M12 5v14M5 12h14" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="borrow_date"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                                        </svg>
                                        Borrowing Date
                                    </label>
                                    <input type="date" id="borrow_date" name="borrow_date"
                                        placeholder="Choose the date here"
                                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-400 outline-none focus:border-[#173863]">
                                </div>
                                <div>
                                    <label for="return_date"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                                        </svg>
                                        Returning Date
                                    </label>
                                    <input type="date" id="return_date" name="return_date"
                                        placeholder="Choose the date here"
                                        class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-400 outline-none focus:border-[#173863]">
                                </div>
                            </div>

                            <div>
                                <label for="reason"
                                    class="flex items-center gap-2 text-sm font-semibold text-[#173863] mb-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.75 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.75 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                    </svg>
                                    Reason for borrowing
                                </label>
                                <textarea id="reason" name="reason" rows="4" placeholder="Explain your reasonings here"
                                    class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-400 placeholder-slate-400 outline-none resize-none focus:border-[#173863]"></textarea>
                            </div>

                            <div class="flex items-center gap-4 pt-2">
                                <button type="reset"
                                    class="flex-1 bg-slate-400 hover:bg-slate-500 text-white text-sm font-semibold py-3 rounded-xl">Cancel</button>
                                <button type="submit"
                                    class="flex-1 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-3 rounded-xl">Submit
                                    Request</button>
                            </div>
                        </form>
                    </div>

                    <!-- SIDE PANEL -->
                    <div class="space-y-6">
                        <div
                            class="bg-white rounded-2xl border border-slate-100 shadow-sm h-64 flex items-center justify-center">
                            <svg class="w-10 h-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 8.25V15a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 15V8.25m-18 0A2.25 2.25 0 015.25 6h13.5A2.25 2.25 0 0121 8.25m-18 0v-.375c0-.621.504-1.125 1.125-1.125h15.75c.621 0 1.125.504 1.125 1.125v.375" />
                            </svg>
                        </div>

                        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                            <h2 class="text-lg font-bold text-[#173863] text-center mb-4">Terms &amp; Condition</h2>
                            <div class="divide-y divide-slate-100">
                                <a href="#"
                                    class="flex items-center justify-between py-3 text-sm font-medium text-slate-600">
                                    General Rules
                                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between py-3 text-sm font-medium text-slate-600">
                                    Care &amp; Responsibility
                                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between py-3 text-sm font-medium text-slate-600">
                                    Penalties &amp; Approval
                                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between py-3 text-sm font-medium text-slate-600">
                                    Data &amp; System Usage
                                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex items-center justify-between py-3 text-sm font-medium text-slate-600">
                                    Special Circumstances
                                    <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <a href="#"
                                class="flex items-center justify-end gap-1.5 text-sm font-semibold text-[#173863] mt-3">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.451.999-1.451 1.827v.5m0 3h.008v.008h-.008v-.008zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Need help?
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection