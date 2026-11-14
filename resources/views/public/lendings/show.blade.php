@extends('layouts.app')

@section('title', $title ?? 'Konfirmasi Peminjaman')

@section('content')

    <main class="p-8 min-h-[calc(100vh-4rem)] flex items-center justify-center">

        {{-- TODO: ganti data statis di bawah ini dengan data dari $lending (model/controller) saat backend siap --}}
        @php
            $lending = $lending ?? (object) [
                'name' => 'Forsaquhe',
                'class' => 'XII TKJ 3',
                'item_name' => 'Monitor LG 24 Inch',
                'amount' => 1,
                'loan_date' => '22 August 2026',
                'return_date' => '23 August 2026',
                'claim_deadline' => '23 August 2026',
            ];
        @endphp

        <div class="bg-white rounded-3xl border border-slate-200 shadow-sm w-full max-w-xl px-10 py-10 text-center">

            <!-- ICON SUCCESS -->
            <div class="mx-auto w-20 h-20 rounded-full bg-[#173863] flex items-center justify-center">
                <svg class="w-9 h-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            </div>

            <!-- TITLE -->
            <h1 class="text-2xl font-extrabold text-[#173863] mt-6">Request Success</h1>
            <p class="text-sm text-slate-500 mt-1">Claim your item at Administration Room</p>

            <!-- DETAIL TABLE -->
            <div class="mt-6 rounded-xl overflow-hidden border border-slate-200 text-left">
                <table class="w-full text-sm">
                    <tbody>
                        <tr class="bg-[#EDF1FA]">
                            <td class="px-6 py-3 font-semibold text-slate-600 w-1/3 border-b border-slate-200">Name</td>
                            <td class="px-6 py-3 text-slate-600 border-b border-slate-200">{{ $lending->name }}</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-3 font-semibold text-slate-600 border-b border-slate-200">Class</td>
                            <td class="px-6 py-3 text-slate-600 border-b border-slate-200">{{ $lending->class }}</td>
                        </tr>
                        <tr class="bg-[#EDF1FA]">
                            <td class="px-6 py-3 font-semibold text-slate-600 border-b border-slate-200">Item</td>
                            <td class="px-6 py-3 text-slate-600 border-b border-slate-200">{{ $lending->item_name }}</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-3 font-semibold text-slate-600 border-b border-slate-200">Amount</td>
                            <td class="px-6 py-3 text-slate-600 border-b border-slate-200">{{ $lending->amount }}</td>
                        </tr>
                        <tr class="bg-[#EDF1FA]">
                            <td class="px-6 py-3 font-semibold text-slate-600">Date</td>
                            <td class="px-6 py-3 text-slate-600">{{ $lending->loan_date }} - {{ $lending->return_date }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- NOTE -->
            <p class="text-xs text-slate-400 text-right mt-2">Claim before {{ $lending->claim_deadline }}</p>

            <!-- BUTTON -->
            <a href="{{ route('lendings.index') }}"
                class="mt-6 inline-block w-full bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold px-6 py-3 rounded-xl">
                Confirm
            </a>

        </div>

    </main> 

@endsection