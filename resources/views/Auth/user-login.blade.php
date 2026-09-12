<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Item Form - ImmaLend</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font Inter & FontAwesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#eef2fd] min-h-screen flex text-gray-800">

    <!-- ================= SISI KIRI: SIDEBAR ================= -->
    <aside class="w-64 bg-[#eef2fd] flex flex-col justify-between py-8 px-6 min-h-screen flex-shrink-0">
        <div>
            <!-- Brand Logo & Title (Diubah ke Tengah Vertikal) -->
            <div class="flex flex-col items-center text-center mb-10 px-2">
                <!-- Gambar Kardus (Di Tengah) -->
                <img 
                    src="{{ asset('images/logo.png') }}" 
                    alt="ImmaLend Logo" 
                    class="h-20 w-auto object-contain mb-3"
                    onerror="this.src='https://via.placeholder.com/80?text=Box'"
                >
                <!-- Teks ImmaLend (Di Bawah Kardus) -->
                <span class="text-2xl font-extrabold text-[#0d2b6b] tracking-tight">ImmaLend</span>
                <!-- Subtitle (Di Bawah ImmaLend) -->
                <span class="text-[11px] font-semibold text-[#0d2b6b] tracking-wide mt-1">School Inventory Lending</span>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-4">
                <a href="{{ url('/') }}" class="flex items-center gap-4 px-3 py-2 text-sm font-semibold text-[#0d2b6b] hover:opacity-80 transition">
                    <i class="fa-solid fa-house text-lg w-5 text-center"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-3 py-2 text-sm font-semibold text-[#0d2b6b] hover:opacity-80 transition">
                    <i class="fa-solid fa-list-ul text-lg w-5 text-center"></i>
                    <span>List of Items</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-3 py-2 text-sm font-semibold text-[#0d2b6b] hover:opacity-80 transition">
                    <i class="fa-regular fa-file-lines text-lg w-5 text-center"></i>
                    <span>My Borrowings</span>
                </a>
                <a href="#" class="flex items-center gap-4 px-3 py-2 text-sm font-semibold text-[#0d2b6b] hover:opacity-80 transition">
                    <i class="fa-solid fa-clock-rotate-left text-lg w-5 text-center"></i>
                    <span>Borrowings History</span>
                </a>
            </nav>
        </div>

        <!-- Help Link -->
        <div>
            <a href="#" class="flex items-center gap-4 px-3 py-2 text-sm font-semibold text-[#0d2b6b] hover:opacity-80 transition">
                <i class="fa-regular fa-circle-question text-lg w-5 text-center"></i>
                <span>Help</span>
            </a>
        </div>
    </aside>

    <!-- ================= AREA UTAMA (KANAN) ================= -->
    <div class="flex-1 flex flex-col min-w-0 bg-white rounded-l-[32px] overflow-hidden shadow-2xl">
        
        <!-- HEADER TOPBAR -->
        <header class="h-20 bg-[#eef2fd] flex items-center justify-between px-8 border-b border-blue-50/50">
            <div class="flex items-center gap-4">
                <button class="text-[#0d2b6b] hover:opacity-75 focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-[#0d2b6b]">Welcome!</span>
                    <span class="text-[11px] text-[#0d2b6b] opacity-80">Find the items you're looking for.</span>
                </div>
            </div>
            <!-- Profile Icon -->
            <div class="flex items-center">
                <a href="#" class="w-9 h-9 rounded-full bg-[#0d2b6b] flex items-center justify-center text-white hover:opacity-90 transition">
                    <i class="fa-regular fa-user text-base"></i>
                </a>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="flex-1 p-8 bg-white overflow-y-auto flex justify-center items-start">
            <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- KARTU FORM (SEBELAH KIRI - 7/12 COLUMNS) -->
                <div class="lg:col-span-7 bg-[#eef2fd]/60 border border-slate-200/60 rounded-[32px] p-8 shadow-sm">
                    
                    <!-- Judul Form -->
                    <div class="text-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Request Item Form</h1>
                        <p class="text-xs text-gray-700 font-medium mt-1">SMK Kristen Immanuel Pontianak</p>
                    </div>

                    <!-- Form Input -->
                    <form action="#" method="POST" class="space-y-5">
                        @csrf

                        <!-- Field 1: Name -->
                        <div>
                            <label class="flex items-center gap-2 text-xs font-bold text-gray-800 mb-2">
                                <i class="fa-regular fa-id-card text-sm"></i>
                                <span>Name</span>
                            </label>
                            <input 
                                type="text" 
                                name="name" 
                                placeholder="Type your fullname here"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d2b6b]/20 focus:border-[#0d2b6b] transition"
                            >
                        </div>

                        <!-- Field 2: Class -->
                        <div>
                            <label class="flex items-center gap-2 text-xs font-bold text-gray-800 mb-2">
                                <i class="fa-solid fa-users text-sm"></i>
                                <span>Class</span>
                            </label>
                            <input 
                                type="text" 
                                name="class" 
                                placeholder="Choose your class here"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d2b6b]/20 focus:border-[#0d2b6b] transition"
                            >
                        </div>

                        <!-- Field 3: Name of Item & Category (2 Kolom Sejajar) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-800 mb-2">Name of Item</label>
                                <input 
                                    type="text" 
                                    name="item_name" 
                                    placeholder="Type the name of the item here"
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d2b6b]/20 focus:border-[#0d2b6b] transition"
                                >
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-800 mb-2">Category</label>
                                <input 
                                    type="text" 
                                    name="category" 
                                    placeholder="Choose or add category here"
                                    class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d2b6b]/20 focus:border-[#0d2b6b] transition"
                                >
                            </div>
                        </div>

                        <!-- Field 4: Reason of Request -->
                        <div>
                            <label class="flex items-center gap-2 text-xs font-bold text-gray-800 mb-2">
                                <i class="fa-regular fa-comment-dots text-sm"></i>
                                <span>Reason of Request</span>
                            </label>
                            <textarea 
                                name="reason" 
                                rows="4" 
                                placeholder="Explain your reasonings here"
                                class="w-full bg-white border border-gray-200 rounded-xl px-4 py-3 text-xs text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0d2b6b]/20 focus:border-[#0d2b6b] transition resize-none"
                            ></textarea>
                        </div>

                        <!-- Checkbox Persetujuan -->
                        <div class="flex items-center justify-end gap-2 pt-2">
                            <input 
                                type="checkbox" 
                                id="terms" 
                                name="terms" 
                                class="w-4 h-4 rounded border-gray-300 text-[#0d2b6b] focus:ring-0 cursor-pointer"
                            >
                            <label for="terms" class="text-[11px] font-semibold text-gray-700 cursor-pointer select-none">
                                I have read the Request Conditions
                            </label>
                        </div>

                        <!-- Tombol Action (Cancel & Submit) -->
                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <button 
                                type="button" 
                                class="w-full bg-[#b8b8b8] hover:bg-[#a3a3a3] text-gray-800 font-bold py-3 rounded-xl text-xs transition duration-200"
                            >
                                Cancel
                            </button>
                            <button 
                                type="submit" 
                                class="w-full bg-[#0d2b6b] hover:bg-[#0a2152] text-white font-bold py-3 rounded-xl text-xs transition duration-200 shadow-md"
                            >
                                Submit Request
                            </button>
                        </div>
                    </form>
                </div>

                <!-- KARTU CONDITIONS (SEBELAH KANAN - 5/12 COLUMNS) -->
                <div class="lg:col-span-5 bg-white border border-gray-200 rounded-[32px] p-8 shadow-sm flex flex-col justify-between min-h-[580px]">
                    <div>
                        <!-- Icon Info Besar -->
                        <div class="flex justify-center mb-4">
                            <div class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center">
                                <i class="fa-solid fa-info text-2xl"></i>
                            </div>
                        </div>

                        <!-- Judul Request Conditions -->
                        <h2 class="text-xl font-bold text-center text-gray-900 mb-6">Request Conditions</h2>

                        <!-- Daftar Syarat (Numbered List) -->
                        <ol class="space-y-4 text-[11px] text-gray-700 font-semibold leading-relaxed">
                            <li class="border-b border-gray-100 pb-3">
                                1. Items that are already available but not listed here will be processed within 24 hours.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                2. Items that are unavailable could take between weeks to month to be provided.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                3. Item requests have to be reasonable, useful, appropriate, and only used for learning purposes.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                4. Any troll or prank request will result in penalties.
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                5. You will be notified if your request is accepted or rejected.
                            </li>
                        </ol>
                    </div>

                    <!-- Footer Kartu Conditions (Need help?) -->
                    <div class="pt-6">
                        <a href="#" class="flex items-center gap-2 text-[11px] font-bold text-gray-800 hover:text-[#0d2b6b] transition">
                            <i class="fa-solid fa-circle-question text-sm"></i>
                            <span>Need help?</span>
                        </a>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>