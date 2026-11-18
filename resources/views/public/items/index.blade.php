@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR ============ -->

        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8">

                <h1 class="text-2xl font-extrabold text-[#173863]">Available Items for Loan</h1>
                <p class="text-sm text-slate-400 mt-1">Select an item and submit your loan request easily.</p>

                <!-- FILTERS + SEARCH -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mt-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="{{ route('items.index', array_filter(['search' => request('search')])) }}"
                            class="flex items-center gap-2 text-sm font-semibold px-4 py-2.5 rounded-xl {{ !request('category') ? 'bg-[#173863] text-white' : 'bg-white border border-slate-200 text-slate-600' }}">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>
                            All Items
                        </a>
                        <a href="{{ route('items.index', array_filter(['category' => 'Technology', 'search' => request('search')])) }}"
                            class="flex items-center gap-2 text-sm font-semibold px-4 py-2.5 rounded-xl {{ request('category') === 'Technology' ? 'bg-[#173863] text-white' : 'bg-white border border-slate-200 text-slate-600' }}">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.129V17.25m6-12v9.75a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>
                            Technology
                        </a>
                        <a href="{{ route('items.index', array_filter(['category' => 'Music', 'search' => request('search')])) }}"
                            class="flex items-center gap-2 text-sm font-semibold px-4 py-2.5 rounded-xl {{ request('category') === 'Music' ? 'bg-[#173863] text-white' : 'bg-white border border-slate-200 text-slate-600' }}">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 9l10.5-3v11.25M9 9v10.5m0-10.5L19.5 6M6 19.5a3 3 0 100-6 3 3 0 000 6zm10.5 3a3 3 0 100-6 3 3 0 000 6z" />
                            </svg>
                            Music
                        </a>
                        <a href="{{ route('items.index', array_filter(['category' => 'Room', 'search' => request('search')])) }}"
                            class="flex items-center gap-2 text-sm font-semibold px-4 py-2.5 rounded-xl {{ request('category') === 'Room' ? 'bg-[#173863] text-white' : 'bg-white border border-slate-200 text-slate-600' }}">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                            </svg>
                            Facilities
                        </a>
                    </div>

                    <div class="flex items-center gap-3">
                        <form action="{{ route('items.index') }}" method="GET"
                            class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-2.5 w-full md:w-72">
                            <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                            </svg>
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search items..."
                                class="w-full text-sm text-slate-600 placeholder-slate-400 outline-none bg-transparent">
                        </form>

                        <a href="{{ route('items.request') }}"
                            class="flex items-center justify-center gap-2 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold px-5 py-2.5 rounded-xl whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" d="M12 5v14M5 12h14" />
                            </svg>
                            Request Item
                        </a>
                    </div>
                </div>

                @if (session('error'))
                    <div class="mt-6 p-3 bg-red-100 text-red-700 text-sm rounded-lg border border-red-200">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- ITEM GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">

                    @forelse ($items as $item)
                        @php
                            $categoryName = $item->category->name;
                            $isRoom = $categoryName === 'Room';
                            $badge = match ($categoryName) {
                                'Technology' => 'bg-blue-100 text-blue-700',
                                'Music' => 'bg-purple-100 text-purple-700',
                                default => 'bg-orange-100 text-orange-700',
                            };
                        @endphp

                        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-4 flex flex-col">
                            <div class="h-32 rounded-xl bg-white flex items-center justify-center mb-3 overflow-hidden">
                                @if ($item->imageUrl())
                                    <img src="{{ $item->imageUrl() }}" alt="{{ $item->name }}"
                                        class="{{ $isRoom ? 'w-full h-32 object-cover rounded-xl' : 'h-32 w-auto max-w-full object-contain' }}">
                                @else
                                    <svg class="w-16 h-12 text-slate-300" viewBox="0 0 48 32" fill="none" stroke="currentColor"
                                        stroke-width="1.5">
                                        <rect x="6" y="4" width="36" height="20" rx="2" />
                                        <path d="M18 28h12M24 24v4" stroke-linecap="round" />
                                    </svg>
                                @endif
                            </div>

                            <span
                                class="self-start text-[11px] font-semibold {{ $badge }} px-2.5 py-1 rounded-full">{{ $isRoom ? 'Facility' : $categoryName }}</span>
                            <p class="text-sm font-bold text-[#173863] mt-2">{{ $item->name }}</p>

                            <div class="flex items-center justify-between mt-2">
                                @if ($item->available > 0)
                                    <span class="flex items-center gap-1.5 text-xs text-green-600 font-medium">
                                        <span class="w-2 h-2 rounded-full bg-green-500"></span>Available
                                    </span>
                                @else
                                    <span class="flex items-center gap-1.5 text-xs text-red-600 font-medium">
                                        <span class="w-2 h-2 rounded-full bg-red-500"></span>No Available
                                    </span>
                                @endif

                                @unless ($isRoom)
                                    <span class="text-xs text-slate-400">{{ $item->available }}
                                        {{ $item->available === 1 ? 'unit' : 'units' }}</span>
                                @endunless
                            </div>

                            @if ($item->available > 0)
                                <a href="{{ route('lendings.create', ['item' => $item->id]) }}"
                                    class="mt-3 text-center bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-2.5 rounded-xl">Borrow</a>
                            @else
                                <span
                                    class="mt-3 text-center bg-slate-200 text-slate-400 text-sm font-semibold py-2.5 rounded-xl cursor-not-allowed">Borrow</span>
                            @endif
                        </div>
                    @empty
                        <p class="col-span-full text-center text-sm text-slate-400 py-10">No items found.</p>
                    @endforelse

                </div>

                <!-- PAGINATION -->
                <div class="mt-8">
                    {{ $items->links() }}
                </div>

            </main>
        </div>
    </div>
@endsection