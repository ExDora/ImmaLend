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
                <h1 class="text-3xl font-extrabold text-[#173863]">Add New Item</h1>
                <p class="text-sm text-[#173863]/70 mt-1 mb-8">Add a new inventory item to the system.</p>

                <div class="border border-gray-200 rounded-2xl p-8 max-w-6xl">
                    <div class="grid grid-cols-2 gap-10">

                        <!-- Left: image upload -->
                        <div>
                            <p class="font-semibold text-blue-950 mb-3">Item Image</p>
                            <div
                                class="border-2 border-dashed border-indigo-200 bg-indigo-50/60 rounded-2xl flex flex-col items-center justify-center py-16 px-6 text-center">
                                <svg class="w-10 h-10 text-blue-600 mb-3" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="16" rx="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <circle cx="8.5" cy="9.5" r="1.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 15l-5-5-9 9" />
                                </svg>
                                <p class="font-semibold text-blue-950">Upload Item Image</p>
                                <p class="text-sm text-blue-950/60 mt-1">PNG, JPG, JPEG, up to 2 MB</p>
                            </div>
                            <p class="text-sm text-blue-950/60 mt-3">This image will represent the item in the inventory.
                            </p>
                        </div>

                        <!-- Right: name + code -->
                        <div class="space-y-6">
                            <div>
                                <label class="block font-semibold text-blue-950 mb-2">Item name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" placeholder="Enter item name"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 placeholder-blue-950/40 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                            </div>
                            <div>
                                <label class="block font-semibold text-blue-950 mb-2">Item Code <span
                                        class="text-red-500">*</span></label>
                                <input type="text" placeholder="Enter unique item code"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 placeholder-blue-950/40 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                                <p class="text-sm text-blue-950/60 mt-2">Example: PR-001, KH-005, GT-003</p>
                            </div>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="mt-8">
                        <label class="block font-semibold text-blue-950 mb-2">Category <span
                                class="text-red-500">*</span></label>
                        <select
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950/40 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                            <option>Select category</option>
                            <option>Technology</option>
                            <option>Furniture</option>
                            <option>Sports</option>
                            <option>Room</option>
                        </select>
                    </div>

                    <!-- Quantity -->
                    <div class="mt-8">
                        <label class="block font-semibold text-blue-950 mb-2">Quantity <span
                                class="text-red-500">*</span></label>
                        <input type="number" placeholder="Enter total quantity"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-blue-950 placeholder-blue-950/40 focus:outline-none focus:ring-2 focus:ring-blue-900/30">
                        <p class="text-sm text-blue-950/60 mt-2">Total number of this item in inventory</p>
                    </div>

                    <div class="border-t border-gray-200 mt-10 pt-6"></div>
                </div>
            </main>
        </div>
    </div>
@endsection