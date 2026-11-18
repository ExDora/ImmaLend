@extends('layouts.admin')

@section('title', $title)

@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR (Admin) ============ -->

        <!-- ============ MAIN ============ -->

        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8">

                <h1 class="text-3xl font-extrabold text-[#173863]">Borrowing Requests</h1>
                <p class="text-sm text-[#173863]/70 mt-1">Review and manage incoming borrowing requests.</p>

                @if (session('success'))
                    <div class="mt-4 rounded-lg bg-green-100 text-green-700 text-sm font-medium px-4 py-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="mt-4 rounded-lg bg-red-100 text-red-700 text-sm font-medium px-4 py-3">
                        {{ session('error') }}
                    </div>
                @endif

                @error('lending_id')
                    <div class="mt-4 rounded-lg bg-red-100 text-red-700 text-sm font-medium px-4 py-3">
                        {{ $message }}
                    </div>
                @enderror

                @php
                    $tabClass = fn(string $name) => $tab === $name
                        ? 'pb-3 border-b-2 border-[#173863] text-[#173863] font-semibold text-sm'
                        : 'pb-3 text-slate-400 font-medium text-sm';
                @endphp

                <!-- TABS -->
                <div class="flex items-center gap-10 border-b border-slate-200 mt-6">
                    <a href="{{ route('lendings.admin-index', ['status' => 'pending']) }}"
                        class="{{ $tabClass('pending') }}">Pending ({{ $pendingCount }})</a>
                    <a href="{{ route('lendings.admin-index', ['status' => 'approved']) }}"
                        class="{{ $tabClass('approved') }}">Approved</a>
                    <a href="{{ route('lendings.admin-index', ['status' => 'rejected']) }}"
                        class="{{ $tabClass('rejected') }}">Rejected</a>
                </div>

                <!-- FILTERS -->
                <div class="flex flex-col lg:flex-row lg:items-center gap-3 mt-6">
                    <div
                        class="flex items-center justify-between gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 w-full lg:w-56">
                        <span class="text-sm text-slate-400">All Categories</span>
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <form action="{{ route('lendings.admin-index') }}" method="GET"
                        class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 flex-1">
                        <input type="hidden" name="status" value="{{ $tab }}">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Select by student or item"
                            class="w-full text-sm text-slate-600 placeholder-slate-400 outline-none bg-transparent">
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </form>
                    <div
                        class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 w-full lg:w-64">
                        <span class="text-sm text-slate-400">Select date</span>
                        <svg class="w-4 h-4 text-slate-400 shrink-0 ml-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3.75 7.5h16.5M4.5 6h15a.75.75 0 01.75.75v13.5a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75V6.75A.75.75 0 014.5 6z" />
                        </svg>
                    </div>
                </div>

                <!-- TABLE -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mt-6 overflow-hidden">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-100 text-sm font-semibold text-slate-500">
                                <th class="px-6 py-4 w-16">No.</th>
                                <th class="px-6 py-4">Student Name</th>
                                <th class="px-6 py-4">Items</th>
                                <th class="px-6 py-4">Loan Date</th>
                                <th class="px-6 py-4">Return Date</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            @forelse ($lendings as $lending)
                                @php
                                    $label = $lending->displayStatus();
                                    $badge = match ($label) {
                                        'Pending', 'Waiting confirmation' => 'bg-amber-100 text-amber-700',
                                        'Rejected', 'Overdue' => 'bg-red-100 text-red-700',
                                        'Completed' => 'bg-green-100 text-green-700',
                                        'Borrowed' => 'bg-blue-100 text-blue-700',
                                        'Upcoming' => 'bg-sky-100 text-sky-700',
                                        default => 'bg-slate-100 text-slate-600',
                                    };
                                @endphp
                                <tr>
                                    <td class="px-6 py-4 text-slate-500 align-top">
                                        {{ $lendings->firstItem() + $loop->index }}
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="font-semibold text-slate-700">{{ $lending->user?->name }}</p>
                                        <p class="text-xs text-slate-400">{{ $lending->user?->role->label() }}</p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex items-center gap-3">
                                            {{-- TODO: tampilkan foto barang setelah upload gambar di ItemController selesai
                                            --}}
                                            <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div>
                                            <div>
                                                <p class="font-medium text-slate-700 truncate max-w-[160px]">
                                                    {{ $lending->item->name }}
                                                </p>
                                                <p class="text-xs text-slate-400">{{ $lending->item->code }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 align-top">
                                        {{ $lending->borrow_at->format('M d, Y') }}<br>
                                        <span class="text-xs text-slate-400">{{ $lending->borrow_at->format('H:i') }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600 align-top">
                                        {{ $lending->return_at->format('M d, Y') }}<br>
                                        <span class="text-xs text-slate-400">{{ $lending->return_at->format('H:i') }}</span>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <span class="text-xs font-semibold {{ $badge }} px-3 py-1.5 rounded-full">
                                            {{ $label }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        @if ($lending->status === \App\Enums\LendingStatus::Pending)
                                            <div class="flex items-center gap-2">
                                                {{-- Approve belum dihubungkan (ApproveLendingController belum dikerjakan) --}}
                                                <form action="{{ route('lendings.approve') }}" method="POST"
                                                    onsubmit="return confirm('Approve this borrowing request?')">
                                                    @csrf
                                                    <input type="hidden" name="lending_id" value="{{ $lending->id }}">
                                                    <button type="submit"
                                                        class="bg-green-600 hover:bg-green-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Approve</button>
                                                </form>

                                                <form action="{{ route('lendings.reject') }}" method="POST"
                                                    onsubmit="return confirm('Reject this borrowing request?')">
                                                    @csrf
                                                    <input type="hidden" name="lending_id" value="{{ $lending->id }}">
                                                    <button type="submit"
                                                        class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-2 rounded-lg">Reject</button>
                                                </form>
                                            </div>
                                        @else
                                            <span class="text-xs text-slate-400">-</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-10 text-center text-slate-400">
                                        No borrowing requests found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="mt-6">
                    {{ $lendings->links() }}
                </div>

            </main>
        </div>
    </div>
@endsection