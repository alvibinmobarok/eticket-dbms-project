<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#4fdbc8",
                        "secondary-container": "#d8e5e2",
                        "primary-fixed": "#71f8e4",
                        "inverse-surface": "#2d3133",
                        "surface-dim": "#d8dadc",
                        "surface-container": "#eceef0",
                        "secondary-fixed-dim": "#bcc9c6",
                        "primary-container": "#14b8a6",
                        "on-tertiary-container": "#323a4f",
                        "on-surface": "#191c1e",
                        "surface-bright": "#f7f9fb",
                        "inverse-primary": "#4fdbc8",
                        "surface-container-high": "#e6e8ea",
                        "error-container": "#ffdad6",
                        "surface": "#f7f9fb",
                        "on-error-container": "#93000a",
                        "surface-callout": "#F0FDFA",
                        "on-error": "#ffffff",
                        "outline-variant": "#bbcac6",
                        "tertiary-fixed-dim": "#bec6e0",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed-variant": "#3d4947",
                        "inverse-on-surface": "#eff1f3",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "tertiary-fixed": "#dae2fd",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#e0e3e5",
                        "on-background": "#191c1e",
                        "tertiary": "#565e74",
                        "outline": "#6c7a77",
                        "on-surface-variant": "#3c4947",
                        "on-secondary-container": "#5b6765",
                        "surface-tint": "#006b5f",
                        "background": "#f7f9fb",
                        "surface-container-highest": "#e0e3e5",
                        "on-tertiary-fixed": "#131b2e",
                        "secondary-fixed": "#d8e5e2",
                        "on-tertiary": "#ffffff",
                        "primary": "#006b5f",
                        "on-primary-fixed-variant": "#005048",
                        "on-primary-fixed": "#00201c",
                        "on-secondary-fixed": "#121e1c",
                        "tertiary-container": "#9ca4bd",
                        "on-primary": "#ffffff",
                        "secondary": "#55615f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-sm": "16px",
                        "stack-md": "32px",
                        "gutter": "24px",
                        "margin": "32px",
                        "container-max": "1280px",
                        "stack-lg": "64px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-xs": ["Inter"],
                        "label-sm": ["Inter"],
                        "h2": ["Manrope"],
                        "h1": ["Manrope"],
                        "h3": ["Manrope"],
                        "manrope": ["Manrope"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .grid-bg {
            background-image: radial-gradient(circle, #E2E8F0 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #006b5f;
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased grid-bg">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 border-b border-slate-100 bg-white/80 backdrop-blur-md">
<div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
<div class="flex items-center gap-12">
<a class="text-2xl font-black tracking-tighter text-teal-600" href="#">TIX</a>
<nav class="hidden md:flex items-center gap-8">
<a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="{{ route('user.profile') }}">Events</a>
<a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="#">Venues</a>
</nav>
</div>
<div class="flex items-center gap-6">
<button class="text-slate-500 hover:text-teal-500 transition-colors relative">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span class="absolute -top-2 -right-2 bg-primary text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full font-bold">2</span>
</button>
<div class="flex items-center gap-3 pl-6 border-l border-slate-200">
<div class="text-right hidden sm:block">
<p class="text-label-sm font-bold text-on-surface">{{ session('user_balance', 0) }} BDT</p>
<p class="text-[10px] text-slate-400 uppercase tracking-wider font-bold">Balance</p>
</div>
<img alt="User Profile" class="w-10 h-10 rounded-full border-2 border-white shadow-sm object-cover" data-alt="A high-quality professional portrait of a smiling person with clean, soft lighting. The background is a minimalist, neutral studio setting that reflects a modern and premium aesthetic. The colors are natural and balanced, fitting perfectly into a sophisticated user interface designed for luxury ticketing services." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIQOtBm4bPvhiCJUHyIClFxY8Zue6mrBfjSJLhlEhz9juSNnu2elCoAp1UfA5tErFgeL8cPOhxptkRdZPZcqNsjv3JeJ7K_sSQQifvR6JqOJ6n8K9bPp0llerU3ThJ55xI3jr7t0fp6Aocb1eSoBlQV2WbXZcR0NEDB8I1Qf3Sp2J3fqsSSNoGXHI-5DAu3zDCWaZaF2l_QhtJ-NI3b-2UnaaIUunicWmYs-ZTsj8n3-qJBVk6xpduw-ckRm-XveqaBdWxk8G26ju5"/>
</div>
</div>
</div>
</header>
<main class="pt-32 pb-stack-lg px-6">
<div class="max-w-7xl mx-auto">
<h1 class="font-h1 text-h1 mb-stack-md text-on-surface">Checkout</h1>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<!-- Ticket List Section -->
<div class="lg:col-span-8 space-y-gutter">
<!-- Ticket Item 1 -->
@foreach($cartItems as $item)
<div class="bg-white border border-slate-200 rounded-xl p-6 flex flex-col md:flex-row gap-6 shadow-[0_20px_40px_rgba(0,0,0,0.04)]">

    <div class="w-full md:w-32 h-32 flex-shrink-0 rounded-lg overflow-hidden bg-slate-100 flex items-center justify-center">
        <span class="material-symbols-outlined text-slate-300 text-4xl">
            confirmation_number
        </span>
    </div>

    <div class="flex-grow flex flex-col justify-between">

        <div>
            <div class="flex justify-between items-start">

                <div>
                    <h3 class="font-h3 text-h3 text-on-surface">
                        {{ $item->event_name }}
                    </h3>

                    <p class="text-slate-500 font-medium flex items-center gap-2 mt-1">
                        <span class="material-symbols-outlined text-[18px]">
                            calendar_today
                        </span>

                        {{ $item->event_date }} • {{ $item->event_time }}
                    </p>
                </div>

                <!-- Trash Button -->
                <form method="POST" action="{{ route('cart.remove', $item->cart_id) }}">
                    @csrf

                    <button type="submit"
                        class="text-slate-400 hover:text-error transition-colors p-2 rounded-full hover:bg-red-50">

                        <span class="material-symbols-outlined" data-icon="delete">
                            delete
                        </span>
                    </button>
                </form>

            </div>

            <div class="mt-4 flex items-center gap-4">

                <span class="bg-slate-100 text-slate-700 px-3 py-1 rounded-full text-label-sm">
                    {{ ucfirst($item->ticket_type) }}
                </span>

                <span class="text-teal-600 font-bold">
                    {{ $item->price }} BDT / ticket
                </span>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">

            <!-- Quantity Controls -->
            <div class="flex items-center border border-slate-200 rounded-full p-1 bg-slate-50">

                <!-- Minus -->
                <form method="POST" action="{{ route('cart.decrease', $item->cart_id) }}">
                    @csrf

                    <button type="submit"
                        class="w-8 h-8 flex items-center justify-center rounded-full text-slate-500 hover:bg-white hover:text-teal-600 transition-all active:scale-90">

                        <span class="material-symbols-outlined text-[18px]">
                            remove
                        </span>
                    </button>
                </form>

                <!-- Quantity -->
                <span class="w-10 text-center font-bold text-on-surface">
                    {{ $item->quantity }}
                </span>

                <!-- Plus -->
                <form method="POST" action="{{ route('cart.increase', $item->cart_id) }}">
                    @csrf

                    <button type="submit"
                        class="w-8 h-8 flex items-center justify-center rounded-full text-slate-500 hover:bg-white hover:text-teal-600 transition-all active:scale-90">

                        <span class="material-symbols-outlined text-[18px]">
                            add
                        </span>
                    </button>
                </form>

            </div>

            <!-- Total -->
            <div class="text-right">
                <p class="text-h3 font-h3 text-on-surface">
                    {{ $item->total_price }} BDT
                </p>
            </div>

        </div>

    </div>
</div>
@endforeach
<!-- Summary Section -->
<div class="lg:col-span-4 sticky top-24">
<div class="bg-white border border-slate-200 rounded-xl p-8 shadow-[0_20px_40px_rgba(0,0,0,0.04)]">
<h2 class="font-h3 text-h3 mb-6">Order Summary</h2>
<!-- Promo Code -->
@if(session('success'))
    <div class="mb-4 text-green-600">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-4 text-red-600">
        {{ session('error') }}
    </div>
@endif
<form method="POST" action="{{ route('discount.apply') }}" class="mb-8">
    @csrf

    <label class="text-label-sm text-slate-500 mb-2 block">Discount Code</label>

    <div class="flex gap-2">
        <input 
            name="discount_code"
            class="flex-grow bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 focus:outline-none focus:border-teal-500 transition-colors font-body-md"
            placeholder="Enter code"
            type="text"
        />

        <button type="submit" class="bg-slate-900 text-white px-6 py-3 rounded-lg font-bold hover:bg-slate-800 transition-colors active:scale-95">
            Apply
        </button>
    </div>
</form>
<!-- Calculations -->
<div class="space-y-4 border-b border-slate-100 pb-6 mb-6">
<div class="flex justify-between text-body-md">
<span class="text-slate-500">Subtotal</span>
<span class="text-on-surface font-medium">{{ $subtotal }} BDT</span>
</div>
<div class="flex justify-between text-body-md text-teal-600">
<span>Discount</span>
<span class="font-medium">--{{ $discountAmount ?? 0 }} BDT</span>
</div>
</div>
<div class="flex justify-between items-end mb-8">
<span class="font-bold text-slate-500 text-body-lg">Total</span>
<span class="font-h1 text-h1 text-on-surface">{{ $totalAfterDiscount ?? $subtotal }} BDT</span>
</div>
<form method="POST" action="{{ route('checkout.confirm') }}">
    @csrf
    <button type="submit" class="w-full bg-primary-container text-white py-5 rounded-xl font-bold text-body-lg shadow-lg shadow-teal-600/20 hover:bg-teal-700 transition-all active:scale-[0.98] flex items-center justify-center gap-3">
        Confirm Purchase
        <span class="material-symbols-outlined">arrow_forward</span>
    </button>
</form>
<div class="mt-6 flex items-center justify-center gap-2 text-slate-400">
<span class="material-symbols-outlined text-[18px]">lock</span>
<span class="text-label-sm">Secure Checkout Powered by TIX</span>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="w-full border-t border-slate-200 mt-24 bg-slate-50">
<div class="max-w-7xl mx-auto py-12 px-8 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex flex-col items-center md:items-start gap-2">
<span class="text-2xl font-black tracking-tighter text-teal-600">TIX</span>
<p class="text-slate-500 font-body-md text-sm">© 2024 TIX Ticketing. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-8">
<a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="#">Terms of Service</a>
<a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="#">Privacy Policy</a>
<a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="#">Refund Policy</a>
<a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="#">Contact</a>
</div>
</div>
</footer>
<!-- Mobile Bottom Nav -->
<nav class="fixed bottom-0 w-full z-50 border-t border-slate-100 bg-white rounded-t-2xl md:hidden shadow-[0_-10px_30px_rgba(0,0,0,0.03)]">
<div class="flex justify-around items-center px-4 py-3 pb-safe">
<button class="flex flex-col items-center justify-center text-slate-400 px-3 py-1">
<span class="material-symbols-outlined">explore</span>
<span class="text-[10px] font-manrope font-semibold tracking-wide">Explore</span>
</button>
<button class="flex flex-col items-center justify-center text-slate-400 px-3 py-1">
<span class="material-symbols-outlined">confirmation_number</span>
<span class="text-[10px] font-manrope font-semibold tracking-wide">Tickets</span>
</button>
<button class="flex flex-col items-center justify-center text-teal-600 bg-teal-50/50 rounded-xl px-3 py-1">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="text-[10px] font-manrope font-semibold tracking-wide">Cart</span>
</button>
<button class="flex flex-col items-center justify-center text-slate-400 px-3 py-1">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-manrope font-semibold tracking-wide">Profile</span>
</button>
</div>
</nav>
</body></html>