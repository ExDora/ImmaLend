@extends('layouts.app')

@section('title', $title)

@section('content')

<main class="p-8">

    <h1 class="text-3xl font-extrabold text-[#173863]">My Borrowings</h1>
    <p class="text-sm text-[#173863]/70 mt-1">Check your borrowing status</p>

    {{-- TODO: nilai $activeTab & jumlah tiap tab nantinya diisi dari controller (query builder) saat backend siap --}}
    @php($activeTab = request()->query('tab', 'current'))

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
            Currently Borrowing (1)
        </a>

        <a href="{{ route('lendings.index', ['tab' => 'upcoming']) }}"
            class="flex items-center gap-2 pb-3 text-sm font-semibold whitespace-nowrap {{ $activeTab === 'upcoming' ? 'border-b-2 border-amber-500 text-amber-600' : 'text-slate-400 font-medium' }}">
            <span class="w-6 h-6 rounded-md flex items-center justify-center shrink-0 bg-amber-50 text-amber-500">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 7.5H3.75m16.5 0v10.5a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V7.5m16.5 0L12 3 3.75 7.5M12 3v4.5" />
                </svg>
            </span>
            Upcoming (1)
        </a>

        <a href="{{ route('lendings.index', ['tab' => 'pending']) }}"
            class="flex items-center gap-2 pb-3 text-sm font-semibold whitespace-nowrap {{ $activeTab === 'pending' ? 'border-b-2 border-violet-500 text-violet-600' : 'text-slate-400 font-medium' }}">
            <span class="w-6 h-6 rounded-md flex items-center justify-center shrink-0 bg-violet-50 text-violet-500">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.75V12l3 1.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            Pending Approval (1)
        </a>

    </div>

    {{-- TODO: ganti data statis di bawah ini dengan @foreach($lendings as $lending) saat backend siap --}}

    @if ($activeTab === 'current')
        <!-- TABLE: CURRENTLY BORROWING -->
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
                    <tr>
                        <td class="px-3 py-3 text-slate-500 align-top">1</td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 shrink-0"></div>
                                <div class="min-w-0">
                                    <p class="font-medium text-slate-700 truncate">Sony SLT A65V</p>
                                    <p class="text-xs text-slate-400 truncate">TEK-009</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 17, 2026<br><span
                                class="text-xs text-slate-400">10:00</span></td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 17, 2026<br><span
                                class="text-xs text-slate-400">15:00</span></td>
                        <td class="px-3 py-3 align-top"><span
                                class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1.5 rounded-full inline-block">Borrowed</span>
                        </td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="whitespace-nowrap bg-white border border-slate-200 text-slate-600 text-xs font-semibold px-3 py-2 rounded-lg">View
                                    Details</button>
                                <button type="button"
                                    class="whitespace-nowrap bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">Return
                                    Item</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-3 text-slate-500 align-top">2</td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 shrink-0"></div>
                                <div class="min-w-0">
                                    <p class="font-medium text-slate-700 truncate">DJI Mini 3 Drone</p>
                                    <p class="text-xs text-slate-400 truncate">TEK-007</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 17, 2026<br><span
                                class="text-xs text-slate-400">10:00</span></td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 17, 2026<br><span
                                class="text-xs text-slate-400">15:00</span></td>
                        <td class="px-3 py-3 align-top"><span
                                class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1.5 rounded-full inline-block">Borrowed</span>
                        </td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="whitespace-nowrap bg-white border border-slate-200 text-slate-600 text-xs font-semibold px-3 py-2 rounded-lg">View
                                    Details</button>
                                <button type="button"
                                    class="whitespace-nowrap bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">Return
                                    Item</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-3 text-slate-500 align-top">3</td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 shrink-0"></div>
                                <div class="min-w-0">
                                    <p class="font-medium text-slate-700 truncate">Acoustic Guitar</p>
                                    <p class="text-xs text-slate-400 truncate">MUS-001</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 17, 2026<br><span
                                class="text-xs text-slate-400">10:00</span></td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 17, 2026<br><span
                                class="text-xs text-slate-400">15:00</span></td>
                        <td class="px-3 py-3 align-top"><span
                                class="text-xs font-semibold bg-blue-100 text-blue-700 px-3 py-1.5 rounded-full inline-block">Borrowed</span>
                        </td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="whitespace-nowrap bg-white border border-slate-200 text-slate-600 text-xs font-semibold px-3 py-2 rounded-lg">View
                                    Details</button>
                                <button type="button"
                                    class="whitespace-nowrap bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">Return
                                    Item</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @elseif ($activeTab === 'upcoming')
        <!-- TABLE: UPCOMING -->
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
                    <tr>
                        <td class="px-3 py-3 text-slate-500 align-top">1</td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 shrink-0"></div>
                                <div class="min-w-0">
                                    <p class="font-medium text-slate-700 truncate">HP Chromebook 15</p>
                                    <p class="text-xs text-slate-400 truncate">TEK-001</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 21, 2026<br><span
                                class="text-xs text-slate-400">10:00</span></td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 21, 2026<br><span
                                class="text-xs text-slate-400">15:00</span></td>
                        <td class="px-3 py-3 align-top"><span
                                class="text-xs font-semibold bg-amber-100 text-amber-700 px-3 py-1.5 rounded-full inline-block">Upcoming</span>
                        </td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="whitespace-nowrap bg-white border border-slate-200 text-slate-600 text-xs font-semibold px-3 py-2 rounded-lg">View
                                    Details</button>
                                <button type="button"
                                    class="whitespace-nowrap bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-3 py-2 rounded-lg">Cancel</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @else
        <!-- TABLE: PENDING APPROVAL -->
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
                    <tr>
                        <td class="px-3 py-3 text-slate-500 align-top">1</td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 shrink-0"></div>
                                <div class="min-w-0">
                                    <p class="font-medium text-slate-700 truncate">Microphone</p>
                                    <p class="text-xs text-slate-400 truncate">MUS-003</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 22, 2026<br><span
                                class="text-xs text-slate-400">09:00</span></td>
                        <td class="px-3 py-3 text-slate-600 align-top">May 22, 2026<br><span
                                class="text-xs text-slate-400">13:00</span></td>
                        <td class="px-3 py-3 align-top"><span
                                class="text-xs font-semibold bg-violet-100 text-violet-700 px-3 py-1.5 rounded-full inline-block">Pending</span>
                        </td>
                        <td class="px-3 py-3 align-top">
                            <div class="flex items-center gap-2">
                                {{-- Label ini membuka modal lewat CSS (checkbox hack), tidak pakai JS --}}
                                <label for="modal-details-1"
                                    class="cursor-pointer whitespace-nowrap bg-white border border-slate-200 text-slate-600 text-xs font-semibold px-3 py-2 rounded-lg">View
                                    Details</label>
                                <button type="button"
                                    class="whitespace-nowrap bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-3 py-2 rounded-lg">Cancel</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif

    <!-- PAGINATION -->
    <div class="flex items-center justify-center gap-2 mt-8">
        <button type="button"
            class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
        </button>
        <button type="button"
            class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#173863] text-white text-sm font-semibold">1</button>
        <button type="button"
            class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        </button>
    </div>

    {{-- Checkbox tersembunyi ini yang jadi "saklar" buka-tutup modal, murni CSS, tanpa JS --}}
    <input type="checkbox" id="modal-details-1" class="hidden peer/details1">

    <!-- ============ MODAL: BORROWING DETAILS (Pending Approval) ============ -->
    {{-- TODO: kalau nanti loop @foreach($lendings as $lending), ganti "modal-details-1" jadi "modal-details-{{
    $lending->id }}" supaya id-nya unik per baris --}}
    <div class="fixed inset-0 z-50 hidden peer-checked/details1:flex items-center justify-center bg-black/50 p-4">
        <div class="bg-[#EEF2F6] rounded-3xl w-full max-w-sm p-6 relative">

            {{-- Label ini juga men-toggle checkbox yang sama, jadi berfungsi sebagai tombol tutup --}}
            <label for="modal-details-1"
                class="cursor-pointer absolute top-4 right-4 text-slate-500 hover:text-slate-700">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>

            <h2 class="text-lg font-bold text-[#082B6D] text-center mb-4">Borrowing Details</h2>

            {{-- TODO: ganti teks statis di bawah dengan data asli dari $lending saat backend siap --}}
            <div class="text-sm text-slate-700 leading-relaxed space-y-1">
                <p><span class="font-semibold text-[#082B6D]">Item Name:</span> LG 24-Inch Monitor</p>
                <p><span class="font-semibold text-[#082B6D]">Item Code:</span> TEK-006</p>
                <p><span class="font-semibold text-[#082B6D]">Category:</span> Technology</p>
                <p><span class="font-semibold text-[#082B6D]">Amount:</span> 1</p>
                <p><span class="font-semibold text-[#082B6D]">Date:</span> 22 August - 23 August 2026</p>
                <p><span class="font-semibold text-[#082B6D]">Location:</span> Computer Lab 2</p>
                <p><span class="font-semibold text-[#082B6D]">Condition:</span> Good</p>
                <p><span class="font-semibold text-[#082B6D]">Borrowing Purpose:</span> To participate in a
                    cybersecurity competition.</p>
                <p class="pt-1"><span class="font-semibold text-[#082B6D]">Specifications:</span></p>
                <p class="text-slate-600">LG 24-inch monitor, Full HD 1920 x 1080 resolution, IPS panel, up to 75 Hz
                    refresh rate, HDMI and VGA connectivity, and widescreen display.</p>
            </div>

            <a href="{{ route('lendings.edit', 1) }}"
                class="mt-5 block text-center bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold py-3 rounded-xl">
                Edit
            </a>

        </div>
    </div>

</main>

@endsection