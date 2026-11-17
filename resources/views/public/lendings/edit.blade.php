@extends('layouts.app')

@section('title', $title ?? 'Edit Peminjaman')

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR ============ -->

        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8">

                {{-- TODO: ganti data statis di bawah ini dengan data $lending & $item (route model binding) saat backend
                siap --}}
                @php
                    $lending = $lending ?? (object) [
                        'id' => 1,
                        'name' => 'Forsaquhe',
                        'class_id' => 1,
                        'item_id' => 1,
                        'amount' => 1,
                        'borrow_date' => '2026-08-22',
                        'return_date' => '2026-08-23',
                        'reason' => 'To participate in a cybersecurity competition.',
                    ];

                    $item = $item ?? (object) [
                        'id' => 1,
                        'name' => 'Monitor LG 24 Inch',
                        'code' => 'TEK-006',
                        'category' => 'Technology',
                        'location' => 'Computer Lab 2',
                        'condition' => 'Good',
                        'status' => 'Available',
                        'stock' => 6,
                        'specifications' => 'LG 24-inch monitor, Full HD 1920 x 1080 resolution, IPS panel, up to 75 Hz refresh rate, HDMI and VGA connectivity, and widescreen display.',
                    ];
                @endphp

                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

                    <!-- ============ LEFT COLUMN: ITEM PREVIEW ============ -->
                    <div class="xl:col-span-1 flex flex-col gap-6 h-full">

                        <!-- ITEM IMAGE + INFO CARD -->
                        <div class="bg-[#EEF2F6] border border-[#B6B6B6] rounded-2xl p-5 shrink-0">
                            <div class="bg-white rounded-xl h-44 flex items-center justify-center overflow-hidden">
                                <svg class="w-20 h-16 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                    stroke-width="1.5">
                                    <rect x="6" y="4" width="36" height="20" rx="2" />
                                    <path d="M18 28h12M24 24v4" stroke-linecap="round" />
                                </svg>
                            </div>

                            <span
                                class="inline-block mt-4 text-[11px] font-semibold bg-blue-100 text-[#082B6D] px-2.5 py-1 rounded-full">
                                {{ $item->category }}
                            </span>

                            <p class="text-sm font-bold text-[#082B6D] mt-2">{{ $item->name }}</p>

                            <div class="flex items-center justify-between mt-2">
                                <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    {{ $item->status }}
                                </span>
                                <span class="text-xs text-slate-500">{{ $item->stock }} units</span>
                            </div>
                        </div>

                        <!-- ITEM DETAILS CARD -->
                        <div class="bg-[#EEF2F6] border border-[#B6B6B6] rounded-2xl p-6 flex-1">
                            <h2 class="text-lg font-bold text-[#082B6D] text-center mb-4">Item Details</h2>

                            <div class="text-sm text-slate-700 leading-relaxed space-y-0.5">
                                <p><span class="font-semibold text-[#082B6D]">Item Name:</span> {{ $item->name }}</p>
                                <p><span class="font-semibold text-[#082B6D]">Item Code:</span> {{ $item->code }}</p>
                                <p><span class="font-semibold text-[#082B6D]">Category:</span> {{ $item->category }}</p>
                                <p><span class="font-semibold text-[#082B6D]">Location:</span> {{ $item->location }}</p>
                                <p><span class="font-semibold text-[#082B6D]">Condition:</span> {{ $item->condition }}
                                </p>
                            </div>

                            <div class="mt-4 text-sm text-slate-700 leading-relaxed">
                                <p class="font-semibold text-[#082B6D] mb-1">Specifications:</p>
                                <p>{{ $item->specifications }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- ============ RIGHT COLUMN: FORM ============ -->
                    <div class="xl:col-span-2 bg-[#EEF2F6] border border-[#B6B6B6] rounded-2xl p-8">

                        <div class="text-center mb-6">
                            <h1 class="text-2xl font-extrabold text-[#082B6D]">Edit Borrowing Form</h1>
                            <p class="text-sm text-slate-500 mt-1">SMK Kristen Immanuel Pontianak</p>
                        </div>

                        {{-- TODO: sesuaikan route update dengan nama route asli, contoh: route('lendings.update',
                        $lending->id) --}}
                        <form action="{{ route('lendings.update', $lending->id) }}" method="POST" class="space-y-5">
                            @csrf
                            @method('PUT')

                            <div>
                                <label for="name" class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5z" />
                                    </svg>
                                    Name
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name', $lending->name) }}"
                                    placeholder="Type your fullname here"
                                    class="w-full bg-white border border-[#B6B6B6] rounded-xl px-4 py-3 text-sm text-slate-700 placeholder-slate-400 outline-none focus:border-[#082B6D]">
                                @error('name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="class"
                                    class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                    Class
                                </label>
                                {{-- TODO: ganti isi <option> dengan @foreach($classes as $class) saat backend siap --}}
                                    <select id="class" name="class_id"
                                        class="w-full bg-white border border-[#B6B6B6] rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-[#082B6D]">
                                        <option value="1" {{ (string) old('class_id', $lending->class_id) === '1' ? 'selected' : '' }}>
                                            XII TKJ 3
                                        </option>
                                    </select>
                                    @error('class_id')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="item"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 7.5l-8.25-4.5L3.75 7.5m16.5 0l-8.25 4.5m8.25-4.5v9l-8.25 4.5m-8.25-13.5l8.25 4.5m-8.25-4.5v9l8.25 4.5m0-9v9" />
                                        </svg>
                                        Item to be borrowed
                                    </label>
                                    {{-- TODO: ganti isi <option> dengan @foreach($items as $i) saat backend siap --}}
                                        <select id="item" name="item_id"
                                            class="w-full bg-white border border-[#B6B6B6] rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-[#082B6D]">
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        </select>
                                        @error('item_id')
                                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div>
                                    <label for="amount"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 6h12M8.25 12h12M8.25 18h12M3.75 6h.008v.008H3.75V6zm0 6h.008v.008H3.75V12zm0 6h.008v.008H3.75V18z" />
                                        </svg>
                                        Amount
                                    </label>
                                    <div class="flex items-center bg-white border border-[#B6B6B6] rounded-xl px-4 py-1">
                                        <input type="number" id="amount" name="amount" min="1"
                                            value="{{ old('amount', $lending->amount) }}"
                                            placeholder="Choose the amount of item here"
                                            class="flex-1 py-2 text-sm text-slate-700 placeholder-slate-400 outline-none min-w-0 bg-transparent">
                                    </div>
                                    @error('amount')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="borrow_date"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                                        </svg>
                                        Borrowing Date
                                    </label>
                                    <input type="date" id="borrow_date" name="borrow_date"
                                        value="{{ old('borrow_date', $lending->borrow_date) }}"
                                        class="w-full bg-white border border-[#B6B6B6] rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-[#082B6D]">
                                    @error('borrow_date')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="return_date"
                                        class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                                        </svg>
                                        Returning Date
                                    </label>
                                    <input type="date" id="return_date" name="return_date"
                                        value="{{ old('return_date', $lending->return_date) }}"
                                        class="w-full bg-white border border-[#B6B6B6] rounded-xl px-4 py-3 text-sm text-slate-700 outline-none focus:border-[#082B6D]">
                                    @error('return_date')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="reason"
                                    class="flex items-center gap-2 text-sm font-semibold text-[#082B6D] mb-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.75 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.75 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                    </svg>
                                    Reason for borrowing
                                </label>
                                <textarea id="reason" name="reason" rows="4" placeholder="Explain your reasonings here"
                                    class="w-full bg-white border border-[#B6B6B6] rounded-xl px-4 py-3 text-sm text-slate-700 placeholder-slate-400 outline-none resize-none focus:border-[#082B6D]">{{ old('reason', $lending->reason) }}</textarea>
                                @error('reason')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center gap-4 pt-2">
                                <a href="{{ route('lendings.index', ['tab' => 'pending']) }}"
                                    class="flex-1 text-center bg-[#B6B6B6] hover:bg-[#a3a3a3] text-white text-sm font-semibold py-3 rounded-xl transition">
                                    Cancel
                                </a>
                                <button type="submit"
                                    class="flex-1 bg-[#082B6D] hover:bg-[#061f4f] text-white text-sm font-semibold py-3 rounded-xl transition">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection