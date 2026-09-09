@extends('layouts.app')


@section('content')
    <div class="min-h-screen flex">

        <!-- ============ SIDEBAR (Admin) ============ -->

        <!-- ============ MAIN ============ -->
        <div class="flex-1 min-w-0">

            <!-- HEADER -->

            <main class="p-8">

                <h1 class="text-3xl font-extrabold text-[#173863]">Inventory</h1>
                <p class="text-sm text-[#173863]/70 mt-1">Manage all school items and their avaibility.</p>

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
                    <div
                        class="flex items-center justify-between gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 w-full lg:w-56">
                        <span class="text-sm text-slate-400">All Status</span>
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <form action="" method="GET"
                        class="flex items-center gap-2 bg-white border border-slate-200 rounded-xl px-4 py-3 flex-1">
                        <input type="text" name="search" placeholder="Search items"
                            class="w-full text-sm text-slate-600 placeholder-slate-400 outline-none bg-transparent">
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </form>
                    <a href=""
                        class="flex items-center justify-center gap-2 bg-[#173863] hover:bg-[#0F2A4D] text-white text-sm font-semibold px-5 py-3 rounded-xl whitespace-nowrap">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" d="M12 5v14M5 12h14" />
                        </svg>
                        Add new item
                    </a>
                </div>

                <!-- TABLE -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm mt-6 overflow-hidden">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-100 text-sm font-semibold text-slate-500">
                                <th class="px-6 py-4 w-16">No.</th>
                                <th class="px-6 py-4">Items</th>
                                <th class="px-6 py-4">Category</th>
                                <th class="px-6 py-4">Code</th>
                                <th class="px-6 py-4">Quantity</th>
                                <th class="px-6 py-4">Available</th>
                                <th class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <tr>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">HP Chromebo...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-001</td>
                                <td class="px-6 py-4 text-slate-500">7</td>
                                <td class="px-6 py-4 text-slate-500">3</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">2</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Lenovo Ideap...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-002</td>
                                <td class="px-6 py-4 text-slate-500">30</td>
                                <td class="px-6 py-4 text-slate-500">29</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">3</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Router TP-Lin...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-003</td>
                                <td class="px-6 py-4 text-slate-500">10</td>
                                <td class="px-6 py-4 text-slate-500">6</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">4</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Monitor LG 24...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-004</td>
                                <td class="px-6 py-4 text-slate-500">4</td>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">5</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Keyboard Log...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-005</td>
                                <td class="px-6 py-4 text-slate-500">3</td>
                                <td class="px-6 py-4 text-slate-500">2</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">6</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Epson EB X05...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-006</td>
                                <td class="px-6 py-4 text-slate-500">5</td>
                                <td class="px-6 py-4 text-slate-500">2</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">7</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">DJI Mini 3 Dro...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-007</td>
                                <td class="px-6 py-4 text-slate-500">15</td>
                                <td class="px-6 py-4 text-slate-500">12</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">8</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Power Strip</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-008</td>
                                <td class="px-6 py-4 text-slate-500">2</td>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">9</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Sony SLT A65V</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-009</td>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-slate-500">10</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-slate-100 shrink-0"></div><span
                                            class="font-medium text-slate-700">Nikon coolpix...</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-slate-500">Technology</td>
                                <td class="px-6 py-4 text-slate-500">TEK-010</td>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4 text-slate-500">1</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center gap-1.5 bg-[#173863] hover:bg-[#0F2A4D] text-white text-xs font-semibold px-3 py-2 rounded-lg">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                                            </svg>
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="w-8 h-8 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white rounded-lg">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="flex items-center justify-center gap-2 mt-6">
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#173863] text-white text-sm font-semibold">1</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">2</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">3</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">4</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500 text-sm font-semibold">5</button>
                    <button type="button"
                        class="w-9 h-9 flex items-center justify-center rounded-lg border border-slate-200 text-slate-500">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>

            </main>
        </div>
    </div>
@endsection