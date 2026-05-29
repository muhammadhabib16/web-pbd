<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<main class="pt-24 pb-20 bg-white min-h-[70vh]">
    <div class="max-w-[1100px] mx-auto px-6 md:px-16">
        
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest block mb-2">
                <span class="text-[#A68A64]">HOME</span> / CART
            </span>
            <h1 class="text-4xl md:text-[44px] font-bold text-slate-900" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Cart</h1>
        </div>

        <!-- Cart Content -->
        <div class="flex flex-col lg:flex-row gap-10">
            <!-- Left Side: Cart Items Table -->
            <div class="flex-1">
                <!-- Table Header -->
                <div class="hidden md:grid grid-cols-12 gap-4 pb-4 border-b border-gray-100 text-[13px] font-bold text-slate-900">
                    <div class="col-span-7">Product</div>
                    <div class="col-span-2 text-center">Quantity</div>
                    <div class="col-span-3 text-right pr-4">Subtotal</div>
                </div>

                <!-- Cart Item -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 py-6 border-b border-gray-200 items-center">
                    <div class="col-span-12 md:col-span-7 flex items-center gap-6">
                        <div class="w-[80px] h-[80px] bg-gray-100 flex-shrink-0">
                            <!-- Product Image Placeholder -->
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=200&auto=format&fit=crop" alt="Jasa Cari Jurnal" class="w-full h-full object-cover grayscale-[20%]">
                        </div>
                        <div>
                            <h3 class="text-[14px] font-bold text-slate-900 mb-1 leading-snug">Jasa Cari Jurnal Scopus & Sinta untuk Referensi #1 Indonesia</h3>
                            <div class="text-[13px] text-slate-600">Rp100.000</div>
                        </div>
                    </div>
                    
                    <div class="col-span-6 md:col-span-2 flex items-center justify-start md:justify-center mt-4 md:mt-0">
                        <div class="flex items-center border border-[#e5e5e5] w-[90px] h-[40px]">
                            <button class="w-8 h-full flex items-center justify-center text-gray-500 hover:text-black hover:bg-gray-50 transition-colors">-</button>
                            <input type="text" value="1" class="w-full h-full text-center text-[13px] border-none outline-none font-medium text-slate-900" readonly>
                            <button class="w-8 h-full flex items-center justify-center text-gray-500 hover:text-black hover:bg-gray-50 transition-colors">+</button>
                        </div>
                    </div>
                    
                    <div class="col-span-6 md:col-span-3 flex items-center justify-between md:justify-end mt-4 md:mt-0 pr-0 md:pr-4">
                        <span class="md:hidden text-[13px] font-bold">Subtotal: </span>
                        <div class="flex items-center gap-6">
                            <span class="text-[14px] text-slate-600">Rp100.000</span>
                            <button class="text-gray-400 hover:text-red-500 transition-colors">
                                <span class="material-symbols-outlined text-[18px]">delete</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Coupon and Update Cart Actions -->
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-8">
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        <input type="text" placeholder="Coupon code" class="w-full sm:w-[180px] h-[40px] px-4 border border-gray-200 text-[13px] outline-none focus:border-gray-400 transition-colors">
                        <button class="bg-[#B49E78] text-white px-6 h-[40px] text-[13px] font-bold hover:bg-[#a38f6c] transition-colors whitespace-nowrap">
                            Apply coupon
                        </button>
                    </div>
                    <button class="w-full sm:w-auto bg-[#e8e8e8] text-slate-500 px-6 h-[40px] text-[13px] font-bold hover:bg-[#d5d5d5] hover:text-slate-900 transition-colors whitespace-nowrap">
                        Update cart
                    </button>
                </div>
            </div>

            <!-- Right Side: Cart Totals -->
            <div class="w-full lg:w-[350px] flex-shrink-0">
                <div class="border border-gray-200 p-8 shadow-sm bg-[#fafafa]">
                    <h2 class="text-[16px] font-bold text-slate-900 mb-6" style="font-family: ui-serif, Georgia, Cambria, 'Times New Roman', Times, serif;">Cart totals</h2>
                    
                    <div class="flex justify-between items-center py-4 border-b border-gray-200 border-dotted text-[13px]">
                        <span class="font-bold text-slate-900">Subtotal</span>
                        <span class="text-slate-600">Rp100.000</span>
                    </div>
                    
                    <div class="flex justify-between items-center py-4 text-[13px] mb-6">
                        <span class="font-bold text-slate-900">Total</span>
                        <span class="font-bold text-slate-900">Rp100.000</span>
                    </div>

                    <button class="w-full bg-[#B49E78] text-white h-[45px] text-[13px] font-bold hover:bg-[#a38f6c] transition-colors shadow-sm">
                        Proceed to checkout
                    </button>
                </div>
            </div>
        </div>

    </div>
</main>

<?= $this->endSection() ?>
