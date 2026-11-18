@extends('layouts.app')

@section('title', $title)

@section('content')

<main class="p-8">

    <h1 class="text-3xl font-extrabold text-[#173863]">My Borrowings</h1>
    <p class="text-sm text-[#173863]/70 mt-1">Check your borrowing status</p>

    <!-- TABS -->
    <div class="flex items-center gap-8 border-b border-slate-200 mt-6 overflow-x-auto">

        <a href="{{ route('lendings.index', ['tab' => 'current']) }}"
            class="flex items-center gap-2 pb-3 text-sm font-semibold whitespace-nowrap {{ $activeTab === 'current' ? 'border-b-2 border-[#173863] text-[#173863]' : 'text-slate-400 font-medium' }}">
            <span
                class="w-6 h-6 rounded-md flex items-center justify-center shrink-0 {{ $activeTab === 'current' ? 'bg-[#173863] text-white' : 'bg-slate-100 text-slate-400' }}">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 7.5l-8.25 4.5-8.25-4.5M3.75 7.5v9a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-9M3.75 7.5L12 3l8.25 4.5" />
                </svg>
            </span>
            Currently Borrowing ({{ $counts['current'] }})
        </a>

        <a href="{{ route('lendings.index', ['tab' => 'upcoming']) }}"
            class="flex items-center gap-2 pb-3 text-sm font-semibold whitespace-nowrap {{ $activeTab === 'upcoming' ? 'border-b-2 border-amber-500 text-amber-600' : 'text-slate-400 font-medium' }}">
            <span class="w-6 h-6 rounded-md flex items-center justify-center shrink-0 bg-amber-50 text-amber-500">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 7.5H3.75m16.5 0v10.5a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V7.5m16.5 0L12 3 3.75 7.5M12 3v4.5" />
                </svg>
            </span>
            Upcoming ({{ $counts['upcoming'] }})
        </a>

        <a href="{{ route('lendings.index', ['tab' => 'pending']) }}"
            class="flex items-center gap-2 pb-3 text-sm font-semibold whitespace-nowrap {{ $activeTab === 'pending' ? 'border-b-2 border-violet-500 text-violet-600' : 'text-slate-400 font-medium' }}">
            <span class="w-6 h-6 rounded-md flex items-center justify-center shrink-0 bg-violet-50 text-violet-500">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.75V12l3 1.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            Pending Approval ({{ $counts['pending'] }})
        </a>

    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mt-6">
        <table class="w-full table-fixed text-left">
            <colgroup>
                <col class="w-[5%]">
                <col class="w-[27%]">
                <col class="w-[13%]">
                <col class="w-[13%]">
                <col class="w-[12%]">
                <col class="w-[30%]">
            </colgroup>
            <thead>
                <tr class="bg-slate-50 border-b border-slate-100 text-sm font-semibold text-slate-500">
                    <th class="px-3 py-3">No.</th>
                    <th class="px-3 py-3">Items</th>
                    <th class="px-3 py-3">Loan Date</th>
                    <th class="px-3 py-3">Return Date</th>
                    <th class="px-3 py-3">Status</th>
                    <th class="px-3 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse ($lendings as $lending)
                    @php
                        $status = $lending->displayStatus();
                        $badge = match ($status) {
                            'Pending' => 'bg-violet-100 text-violet-700',
                            'Upcoming' => 'bg-amber-100 text-amber-700',
                            'Borrowed' => 'bg-blue-100 text-blue-700',
                            'Overdue' => 'bg-red-100 text-red-700',
                            default => 'bg-slate-100 text-slate-600',
                        };
                    @endphp
                    <tr>
                        <td class="px-3 py-3 text-slate-500 align-top">{{ $loop->iteration }}</td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 shrink-0">
                                    @if ($lending->item->imageUrl())
                                        <img src="{{ $lending->item->imageUrl() }}" alt="{{ $lending->item->name }}">
                                    @endif
                                </div>
                                <div class="min-w-0">
                                    <p class="font-medium text-slate-700 truncate">{{ $lending->item->name }}</p>
                                    <p class="text-xs text-slate-400 truncate">{{ $lending->item->code }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-slate-600 align-top">{{ $lending->borrow_at->format('M d, Y') }}<br>
                            <span class="text-xs text-slate-400">{{ $lending->borrow_at->format('H:i') }}</span></td>
                        <td class="px-3 py-3 text-slate-600 align-top">{{ $lending->return_at->format('M d, Y') }}<br>
                            <span class="text-xs text-slate-400">{{ $lending->return_at->format('H:i') }}</span></td>
                        <td class="px-3 py-3 align-top">
                            <span class="text-xs font-semibold {{ $badge }} px-3 py-1.5 rounded-full inline-block">{{ $status }}</span>
                        </td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    onclick="document.getElementById('modal-details-{{ $lending->id }}').showModal()"
                                    class="whitespace-nowrap bg-white border border-slate-200 text-slate-600 text-xs font-semibold px-3 py-2 rounded-lg">View
                                    Details</button>

                                {{-- TODO: tombol Return dan Cancel belum disambungkan ke backend --}}
                                @if ($activeTab === 'current')
                                    <button type="button"
                                        class="whitespace-nowrap bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">Return
                                        Item</button>
                                @else
                                    <button type="button"
                                        class="whitespace-nowrap bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-3 py-2 rounded-lg">Cancel</button>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-3 py-10 text-center text-slate-400">
                            Belum ada peminjaman di tab ini.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- ============ MODAL: BORROWING DETAILS (satu per peminjaman) ============ -->
    @foreach ($lendings as $lending)
        <dialog id="modal-details-{{ $lending->id }}"
            class="m-auto bg-[#EEF2F6] rounded-3xl w-full max-w-sm p-6 backdrop:bg-black/50">

            <form method="dialog" class="absolute top-4 right-4">
                <button class="text-slate-500 hover:text-slate-700 text-xl leading-none" aria-label="Close">&times;</button>
            </form>

            <h2 class="text-lg font-bold text-[#082B6D] text-center mb-4">Borrowing Details</h2>

            <div class="text-sm text-slate-700 leading-relaxed space-y-1">
                <p><span class="font-semibold text-[#082B6D]">Item Name:</span> {{ $lending->item->name }}</p>
                <p><span class="font-semibold text-[#082B6D]">Item Code:</span> {{ $lending->item->code }}</p>
                <p><span class="font-semibold text-[#082B6D]">Category:</span> {{ $lending->item->category->name }}</p>
                <p><span class="font-semibold text-[#082B6D]">Amount:</span> {{ $lending->amount }}</p>
                <p><span class="font-semibold text-[#082B6D]">Date:</span>
                    {{ $lending->borrow_at->format('d F') }} - {{ $lending->return_at->format('d F Y') }}</p>
                <p><span class="font-semibold text-[#082B6D]">Location:</span> {{ $lending->item->location }}</p>
                <p><span class="font-semibold text-[#082B6D]">Condition:</span> {{ ucfirst($lending->item->condition) }}</p>
                <p><span class="font-semibold text-[#082B6D]">Borrowing Purpose:</span> {{ $lending->reason }}</p>
                @if ($lending->item->specifications)
                    <p class="pt-1"><span class="font-semibold text-[#082B6D]">Specifications:</span></p>
                    <p class="text-slate-600">{{ $lending->item->specifications }}</p>
                @endif
            </div>
        </dialog>
    @endforeach

</main>

@endsection