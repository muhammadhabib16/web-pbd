<div class="fixed inset-0 z-[100] modal-overlay items-center justify-center p-4 hidden" id="modalOverlay">
    <div class="bg-surface-white w-full max-w-[500px] rounded-xl shadow-2xl overflow-hidden relative animate-in fade-in zoom-in duration-300">
        
        <button id="btnCloseModal" class="absolute right-4 top-4 z-10 text-secondary hover:text-primary transition-colors">
            <span class="material-symbols-outlined" style="font-size: 24px;">close</span>
        </button>
        
        <div class="flex border-b border-outline-variant">
            <button class="flex-1 py-6 text-label-md font-label-md transition-all duration-300 border-b-2 border-primary text-on-surface" id="loginTab" onclick="switchTab('login')">
                LOGIN
            </button>
            <button class="flex-1 py-6 text-label-md font-label-md transition-all duration-300 border-b-2 border-transparent text-secondary hover:text-primary" id="signupTab" onclick="switchTab('signup')">
                SIGN UP
            </button>
        </div>
        
        <div class="p-8 md:p-12">
            <div class="space-y-6" id="loginView">
                <div class="space-y-1.5">
                    <label class="text-label-md font-label-md text-on-surface-variant">Username or Email Address</label>
                    <input class="w-full border border-outline-variant rounded-lg p-3 focus:outline-none focus:ring-1 focus:ring-primary transition-all font-body-md" placeholder="Enter your username" type="text"/>
                </div>
                <div class="space-y-1.5">
                    <label class="text-label-md font-label-md text-on-surface-variant">Password</label>
                    <div class="relative">
                        <input class="w-full border border-outline-variant rounded-lg p-3 focus:outline-none focus:ring-1 focus:ring-primary transition-all font-body-md" placeholder="••••••••" type="password"/>
                        <button class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary">
                            <span class="material-symbols-outlined" style="font-size: 20px;">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between text-label-sm font-label-sm">
                    <label class="flex items-center gap-2 cursor-pointer text-on-surface-variant">
                        <input class="w-4 h-4 border-outline-variant rounded text-primary focus:ring-primary" type="checkbox"/>
                        Remember Me
                    </label>
                    <a class="text-primary hover:underline transition-all" href="#">Forgot Password?</a>
                </div>
                <button class="w-full bg-primary-container text-on-primary-container py-4 rounded-lg font-label-md font-bold uppercase tracking-widest hover:brightness-95 active:scale-95 transition-all shadow-md">
                    Log In
                </button>
            </div>
            
            <div class="space-y-6 hidden h-[400px] overflow-y-auto custom-scrollbar pr-2" id="signupView">
                <div class="space-y-1.5">
                    <label class="text-label-md font-label-md text-on-surface-variant">Email</label>
                    <input class="w-full border border-outline-variant rounded-lg p-3 focus:outline-none focus:ring-1 focus:ring-primary transition-all font-body-md" placeholder="Enter your email" type="email"/>
                </div>
                <div class="space-y-1.5">
                    <label class="text-label-md font-label-md text-on-surface-variant">Password</label>
                    <input class="w-full border border-outline-variant rounded-lg p-3 focus:outline-none focus:ring-1 focus:ring-primary transition-all font-body-md" placeholder="Create a password" type="password"/>
                </div>
                <div class="space-y-1.5">
                    <label class="text-label-md font-label-md text-on-surface-variant">Confirm Password</label>
                    <input class="w-full border border-outline-variant rounded-lg p-3 focus:outline-none focus:ring-1 focus:ring-primary transition-all font-body-md" placeholder="Repeat password" type="password"/>
                </div>
                <div class="p-4 bg-surface-muted rounded border border-outline-variant">
                    <p class="text-label-sm font-label-sm text-secondary leading-relaxed">
                        Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our 
                        <a class="text-primary font-bold hover:underline" href="#">privacy policy</a>.
                    </p>
                </div>
                <button class="w-full bg-primary-container text-on-primary-container py-4 rounded-lg font-label-md font-bold uppercase tracking-widest hover:brightness-95 active:scale-95 transition-all shadow-md">
                    Register
                </button>
            </div>
        </div>
    </div>
</div>