@extends('layouts.app')

@section('title', $title)

@section('content')
    <main class="p-8">

        <!-- Breadcrumb -->
        <a href="{{ route('items.index') }}" class="text-sm text-slate-400 hover:text-[#173863]">&larr; Back </a>

        <h1 class="text-2xl font-extrabold text-[#173863] mt-2">Item Detail</h1>
        <p class="text-sm text-slate-400 mt-1">Full information about this inventory item.</p>

        <div class="bg-white border border-slate-200 rounded-2xl p-8 mt-6 max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- Left: image -->
                <div class="bg-[#EDF1FA] rounded-2xl flex items-center justify-center min-h-72 overflow-hidden">
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                            class="w-full h-full object-cover">
                    @else
                        <span class="text-sm text-slate-400">No image available</span>
                    @endif
                </div>

                <!-- Right: info -->
                <div>
                    <span class="inline-block text-xs font-semibold bg-[#EDF1FA] text-[#173863] px-3 py-1 rounded-full">
                        {{ $item->category->name }}
                    </span>
                    <h2 class="text-2xl font-extrabold text-[#173863] mt-3">{{ $item->name }}</h2>
                    <p class="text-sm text-slate-400">Code: {{ $item->code }}</p>

                    <div class="mt-6 rounded-xl overflow-hidden border border-slate-200 text-sm">
                        <div class="flex bg-[#EDF1FA] px-5 py-3 border-b border-slate-200">
                            <span class="w-1/3 font-semibold text-slate-600">Location</span>
                            <span class="text-slate-600">{{ $item->location }}</span>
                        </div>
                        <div class="flex bg-white px-5 py-3 border-b border-slate-200">
                            <span class="w-1/3 font-semibold text-slate-600">Condition</span>
                            <span class="text-slate-600">{{ ucfirst($item->condition) }}</span>
                        </div>
                        <div class="flex bg-[#EDF1FA] px-5 py-3 border-b border-slate-200">
                            <span class="w-1/3 font-semibold text-slate-600">Total Quantity</span>
                            <span class="text-slate-600">{{ $item->quantity }}</span>
                        </div>
                        <div class="flex bg-white px-5 py-3">
                            <span class="w-1/3 font-semibold text-slate-600">Available</span>
                            <span class="{{ $item->available > 0 ? 'text-green-600' : 'text-red-500' }} font-semibold">
                                {{ $item->available > 0 ? $item->available . ' available' : 'Out of stock' }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="font-semibold text-[#173863] mb-1">Specifications</p>
                        <p class="text-sm text-slate-500 whitespace-pre-line">{{ $item->specifications ?: 'No specifications provided.' }}</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection