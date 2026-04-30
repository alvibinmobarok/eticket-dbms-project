<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TIX - Event Exploration</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#f7f9fb",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "secondary-fixed-dim": "#bcc9c6",
                        "secondary-container": "#d8e5e2",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#323a4f",
                        "surface-dim": "#d8dadc",
                        "surface-container-highest": "#e0e3e5",
                        "surface-container-high": "#e6e8ea",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#71f8e4",
                        "on-surface": "#191c1e",
                        "primary": "#006b5f",
                        "outline-variant": "#bbcac6",
                        "surface-tint": "#006b5f",
                        "secondary-fixed": "#d8e5e2",
                        "on-secondary-container": "#5b6765",
                        "on-primary-fixed-variant": "#005048",
                        "on-primary-fixed": "#00201c",
                        "surface-container-low": "#f2f4f6",
                        "inverse-primary": "#4fdbc8",
                        "inverse-on-surface": "#eff1f3",
                        "primary-fixed-dim": "#4fdbc8",
                        "on-tertiary-fixed": "#131b2e",
                        "primary-container": "#14b8a6",
                        "background": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "on-primary": "#ffffff",
                        "surface-container": "#eceef0",
                        "tertiary-fixed": "#dae2fd",
                        "outline": "#6c7a77",
                        "tertiary-container": "#9ca4bd",
                        "tertiary": "#565e74",
                        "on-secondary-fixed-variant": "#3d4947",
                        "surface-variant": "#e0e3e5",
                        "on-tertiary": "#ffffff",
                        "error": "#ba1a1a",
                        "on-secondary-fixed": "#121e1c",
                        "secondary": "#55615f",
                        "inverse-surface": "#2d3133",
                        "tertiary-fixed-dim": "#bec6e0",
                        "on-primary-container": "#00423b",
                        "on-surface-variant": "#3c4947",
                        "on-secondary": "#ffffff",
                        "on-background": "#191c1e",
                        "on-error-container": "#93000a",
                        "surface": "#f7f9fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "8px",
                        "margin": "32px",
                        "stack-md": "32px",
                        "stack-lg": "64px",
                        "container-max": "1280px",
                        "stack-sm": "16px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "h3": ["Manrope"],
                        "body-lg": ["Inter"],
                        "h1": ["Manrope"],
                        "label-xs": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "h2": ["Manrope"]
                    },
                    "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface-bright font-body-md text-on-surface antialiased">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 border-b border-slate-100 dark:border-slate-800 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md shadow-[0_20px_40px_rgba(0,0,0,0.04)]">
<div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
<div class="text-2xl font-black tracking-tighter text-teal-600 dark:text-teal-400 font-h1">TIX</div>
<nav class="hidden md:flex gap-8 items-center">
<a class="text-teal-600 dark:text-teal-400 font-semibold border-b-2 border-teal-600 transition-colors" href="#">Events</a>
<a class="text-slate-500 dark:text-slate-400 font-medium hover:text-teal-500 transition-colors" href="#">Venues</a>
<a class="text-slate-500 dark:text-slate-400 font-medium hover:text-teal-500 transition-colors" href="#">Support</a>
</nav>
<div class="flex items-center gap-6">
<button class="relative text-on-surface-variant hover:text-primary transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span class="absolute -top-1 -right-1 w-4 h-4 bg-primary text-white text-[10px] flex items-center justify-center rounded-full">
    {{ session('cart_count', 0) }}
</span>
</button>
<div class="relative group">
<button id="profileBtn" class="flex items-center gap-2 focus:outline-none">
<img alt="User avatar" class="w-9 h-9 rounded-full border-2 border-primary/20" data-alt="A professional close-up headshot of a middle-aged man with a friendly expression. He has short brown hair and is wearing a minimalist charcoal grey shirt. The background is a soft-focus studio setting with cool, neutral tones. The lighting is bright and even, reinforcing a high-end, modern digital interface aesthetic that feels clean and approachable." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxt78UrfCVD5K9U4Tc-kYB8aSjBDvH0c_4wt6ZaArRyLPAvY__Eu1nPmSrQZVAOHvYP4GqhOeLTwAeuQXdfI3oa04jR2Vnm7irbpoZdYdM1Wiy_gvr9V8dWrSY1VsKF4G3--gkkH1WmB6xrwQ4UE4YynkzvdYPsD4k-vOabVWTop13548lNhgFWcyZelhw96Ft3f0o6-MTTyNxEzWASRq2vHfavT7ZsxW0GCpq7AyvqnxwZvvh4xsugqUrlpsA6rI3D8DMiTnmQA-c"/>
</button>
<!-- Profile Dropdown -->
<div id="profileMenu" class="hidden absolute right-0 mt-3 w-64 bg-white rounded-xl shadow-[0_20px_40px_rgba(0,0,0,0.08)] border border-slate-100 py-4 z-50 opacity-100 scale-100 transition-all origin-top-right">
<div class="px-6 pb-3 border-b border-slate-50">
<p class="font-h3 text-body-md font-bold text-on-surface">
{{ auth()->user()->user_name }}
</p>
<p class="text-label-sm text-slate-500">Balance: {{ auth()->user()->balance }}</p>
<button id="loadBalanceBtn" class="mt-2 text-label-sm text-primary hover:underline">
    Load Balance
</button>
</div>
<div class="px-2 pt-2">
<button class="w-full flex items-center gap-3 px-4 py-2 text-label-sm text-slate-700 hover:bg-secondary-container/30 rounded-lg transition-colors group">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary" data-icon="confirmation_number">confirmation_number</span>
                                My Tickets
                            </button>
<button class="w-full flex items-center gap-3 px-4 py-2 text-label-sm text-slate-700 hover:bg-secondary-container/30 rounded-lg transition-colors group">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary" data-icon="settings">settings</span>
                                Settings
                            </button>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-label-sm text-error hover:bg-error-container/20 rounded-lg transition-colors group mt-2">
        <span class="material-symbols-outlined">logout</span>
        Sign Out
    </button>
</form>
</div>
</div>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="pt-24 pb-32 max-w-7xl mx-auto px-margin">
<header class="mb-stack-lg">
<h1 class="font-h1 text-h1 text-on-surface mb-2">Explore Events</h1>
<p class="text-body-lg text-slate-500 max-w-2xl">Discover exclusive experiences and premium gatherings curated for the professional community.</p>
</header>
<!-- Bento-ish Grid of Events -->
<!-- div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter"-->
<!-- Card 1 -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
@foreach($events as $event)
    @php
        $regularPrice = $event->seats
            ->where('seat_type', 'regular')
            ->min('price');

        $vipPrice = $event->seats
            ->where('seat_type', 'vip')
            ->min('price');

        $regularLeft = $event->seats
            ->where('seat_type', 'regular')
            ->where('status', 'available')
            ->count();

        $vipLeft = $event->seats
            ->where('seat_type', 'vip')
            ->where('status', 'available')
            ->count();
    @endphp

    <div
        class="event-card cursor-pointer group bg-white rounded-xl border border-slate-100 overflow-hidden hover:shadow-[0_20px_40px_rgba(0,0,0,0.04)] transition-all duration-300"
        data-type="{{ $event->category_name }}"
        data-title="{{ $event->event_name }}"
        data-date="{{ $event->event_date }}"
        data-time="{{ $event->event_time }}"
        data-location="{{ $event->venue->location ?? 'No location' }}"
        data-venue="{{ $event->venue->venue_name ?? 'No venue' }}"
        data-desc="{{ $event->description }}"
        data-regular-price="{{ $regularPrice ?? 0 }}"
        data-vip-price="{{ $vipPrice ?? 0 }}"
        data-regular-left="{{ $regularLeft }}"
        data-vip-left="{{ $vipLeft }}"
    >
        <div class="aspect-video relative overflow-hidden">
            <img
                alt="Event image"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?q=80&w=1200&auto=format&fit=crop"
            >

            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-label-xs font-bold text-primary shadow-sm">
                {{ strtoupper($event->category_name) }}
            </div>
        </div>

        <div class="p-6">
            <h3 class="font-h3 text-h3 text-on-surface mb-2">
                {{ $event->event_name }}
            </h3>

            <div class="flex justify-between items-center mt-4">
                <span class="text-label-sm text-slate-500 font-medium">From</span>
                <span class="font-h3 text-primary text-body-lg">
                    {{ $regularPrice ?? 'N/A' }} BDT
                </span>
            </div>
        </div>
    </div>
@endforeach
</div>
</main>
<!-- Event Details Modal (Active State) -->
<div id="eventModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-8">
<div id="modalBackdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>
<div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-[0_40px_80px_rgba(0,0,0,0.12)] overflow-hidden flex flex-col md:flex-row max-h-[921px]">
<div class="w-full md:w-1/2 relative bg-slate-100">
<img class="w-full h-64 md:h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2ebIZfMLaHUuWCbhQdEkeqUh8aqMajlVbznr5u3eGJSQmtyLpS8ZqoAO9AS26uqk5ZVlEGD3-6o9AtA_T9F95Jn2l_0Om63X0SKUR5APRZnr3isGHsjvE_6poxgSRc2FvDXvSQMU6svek1wVpRO_-LfNk2GJr2Cabl8FrkL7PO-vuX1AoYmV9c5QWBXQrePUTeWhbz47mzVlxcJlNArFt9TTjMW11l8DkIvaYK-sG3pgILi8DLL78MGLft-DmMfhanEbGM-JDKkd5"/>
<button id="closeModalMobile" class="absolute top-4 left-4 bg-white/20 backdrop-blur-md text-white p-2 rounded-full md:hidden"><span class="material-symbols-outlined">close</span></button>
</div>
<div class="w-full md:w-1/2 p-8 md:p-10 flex flex-col overflow-y-auto">
<div class="flex justify-between items-start mb-6">
<div><span id="modalType" class="text-label-xs font-bold text-primary tracking-widest uppercase mb-2 block">Festival</span><h2 id="modalTitle" class="font-h2 text-h2 text-on-surface">Solstice Music Festival</h2></div>
<button id="closeModal" class="hidden md:flex text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">close</span></button>
</div>
<div class="space-y-4 mb-8">
<div class="flex items-center gap-3 text-on-surface-variant"><span class="material-symbols-outlined text-primary/60">calendar_today</span><span id="modalDate" class="text-label-sm font-medium">Aug 12, 2024</span></div>
<div class="flex items-center gap-3 text-on-surface-variant"><span class="material-symbols-outlined text-primary/60">location_on</span><span id="modalLocation" class="text-label-sm font-medium">Central Park, NY</span></div>
</div>
<p id="modalDesc" class="text-body-md text-slate-500 mb-8 leading-relaxed">Description</p>
<div class="mt-auto border-t border-slate-100 pt-8">
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-label-sm text-slate-500 mb-1">Price per ticket</p>
<p id="modalPrice" class="font-h3 text-h3 text-on-surface">2,500 BDT</p>
</div>
<div class="flex items-center bg-slate-50 border border-slate-200 rounded-lg p-1">
<button id="qtyMinus" class="w-8 h-8 flex items-center justify-center hover:bg-white rounded-md text-slate-500 transition-colors">
<span class="material-symbols-outlined text-[18px]">remove</span>
</button>
<span id="qtyValue" class="w-12 text-center font-bold text-on-surface">1</span>
<div class="mb-4">
    <label class="text-label-sm text-slate-500 mb-1 block">Ticket Type</label>
    <select id="ticketType" class="rounded-lg border border-slate-200 px-3 py-2">
        <option value="regular">Regular</option>
        <option value="vip">VIP</option>
    </select>
</div>
<button id="qtyPlus" class="w-8 h-8 flex items-center justify-center hover:bg-white rounded-md text-slate-500 transition-colors">
<span class="material-symbols-outlined text-[18px]">add</span>
</button>
</div>
</div>
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-error text-[18px]" style="font-variation-settings: 'FILL' 1;">local_fire_department</span>
<span id="ticketsLeft" class="text-label-xs font-bold text-error">12 tickets left</span>
</div>
<button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl">Buy Now</button>
</div></div></div></div>

<!-- Load Balance Modal -->
<div id="balanceModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div id="balanceBackdrop" class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

    <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Load Balance</h2>
            <button id="closeBalanceModal" class="text-slate-400">
                ✕
            </button>
        </div>

        <div class="space-y-4">
            <form method="POST" action="{{ route('load.balance') }}">
                @csrf

                <input name="card_number" type="text" placeholder="Card Number" class="w-full rounded-xl border px-3 py-2">
                <input name="expiry" type="text" placeholder="MM/YY" class="w-full rounded-xl border px-3 py-2">
                <input name="cvc" type="text" placeholder="CVC" class="w-full rounded-xl border px-3 py-2">
                <input name="amount" type="number" placeholder="Amount" class="w-full rounded-xl border px-3 py-2">

                <button type="submit"
                    class="w-full bg-primary text-white py-3 rounded-xl font-bold">
                    Add Balance
                </button>
            </form>
        </div>
    </div>
</div>

<!-- BottomNavBar (Mobile) -->
<nav class="fixed bottom-0 w-full z-50 border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-950 rounded-t-2xl md:hidden shadow-[0_-10px_30px_rgba(0,0,0,0.03)]">
<div class="flex justify-around items-center px-4 py-3 pb-safe">
<button class="flex flex-col items-center justify-center text-teal-600 dark:text-teal-400 bg-teal-50/50 dark:bg-teal-900/20 rounded-xl px-3 py-1 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="explore">explore</span>
<span class="font-manrope text-[10px] font-semibold tracking-wide">Explore</span>
</button>
<button class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-3 py-1 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="confirmation_number">confirmation_number</span>
<span class="font-manrope text-[10px] font-semibold tracking-wide">Tickets</span>
</button>
<button class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-3 py-1 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span class="font-manrope text-[10px] font-semibold tracking-wide">Cart</span>
</button>
<button class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-3 py-1 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-manrope text-[10px] font-semibold tracking-wide">Profile</span>
</button>
</div>
</nav>
<!-- Footer -->
<footer class="w-full border-t border-slate-200 dark:border-slate-800 mt-24 bg-slate-50 dark:bg-slate-900">
<div class="max-w-7xl mx-auto py-12 px-8 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="font-bold text-teal-600 text-xl">TIX</div>
<div class="flex gap-8">
<a class="text-slate-500 hover:text-teal-500 transition-colors font-manrope text-sm" href="#">Terms of Service</a>
<a class="text-slate-500 hover:text-teal-500 transition-colors font-manrope text-sm" href="#">Privacy Policy</a>
<a class="text-slate-500 hover:text-teal-500 transition-colors font-manrope text-sm" href="#">Contact</a>
</div>
<p class="text-slate-400 font-manrope text-sm">© 2024 TIX Ticketing. All rights reserved.</p>
</div>
</footer>

<script>
document.addEventListener('DOMContentLoaded',()=>{
const btn=document.getElementById('profileBtn'),menu=document.getElementById('profileMenu');
btn.addEventListener('click',e=>{e.stopPropagation();menu.classList.toggle('hidden');});
menu.addEventListener('click',e=>e.stopPropagation());
document.addEventListener('click',()=>menu.classList.add('hidden'));

const modal=document.getElementById('eventModal');
const closeBtns=['closeModal','closeModalMobile','modalBackdrop'].map(id=>document.getElementById(id));
let selectedCard = null;

document.querySelectorAll('.event-card').forEach(card => {
    card.addEventListener('click', () => {
        selectedCard = card;

        modal.classList.remove('hidden');

        modal.querySelector('#modalType').textContent = card.dataset.type;
        modal.querySelector('#modalTitle').textContent = card.dataset.title;
        modal.querySelector('#modalDate').textContent = card.dataset.date + ' at ' + card.dataset.time;
        modal.querySelector('#modalLocation').textContent = card.dataset.venue + ', ' + card.dataset.location;
        modal.querySelector('#modalDesc').textContent = card.dataset.desc;

        qty = 1;
        document.getElementById('ticketType').value = 'regular';

        updateTicketInfo();
        renderQty();
    });
});

function updateTicketInfo() {
    if (!selectedCard) return;

    const ticketType = document.getElementById('ticketType').value;

    const price = ticketType === 'vip'
        ? selectedCard.dataset.vipPrice
        : selectedCard.dataset.regularPrice;

    const left = ticketType === 'vip'
        ? selectedCard.dataset.vipLeft
        : selectedCard.dataset.regularLeft;

    modal.querySelector('#modalPrice').textContent = price + ' BDT';
    modal.querySelector('#ticketsLeft').textContent = left + ' tickets left';
}

document.getElementById('ticketType').addEventListener('change', () => {
    qty = 1;
    updateTicketInfo();
    renderQty();
});
document.querySelectorAll('.event-card').forEach(card=>{
 card.addEventListener('click',()=>{
   let d=data[card.id];
   modal.classList.remove('hidden');
   modal.querySelector('#modalType').textContent=d.type;
   modal.querySelector('#modalTitle').textContent=d.title;
   modal.querySelector('#modalDate').textContent=d.date;
   modal.querySelector('#modalLocation').textContent=d.location;
   modal.querySelector('#modalDesc').textContent=d.desc;
   modal.querySelector('#modalPrice').textContent=d.price;
   modal.querySelector('#ticketsLeft').textContent=d.left;
   qty=1;
   renderQty();
 });
});
closeBtns.forEach(el=>el&&el.addEventListener('click',()=>modal.classList.add('hidden')));

const qtyValue=document.getElementById('qtyValue');
const qtyMinus=document.getElementById('qtyMinus');
const qtyPlus=document.getElementById('qtyPlus');
let qty=1;

function renderQty(){
  qtyValue.textContent=qty;
}

qtyMinus.addEventListener('click',function(e){
  e.stopPropagation();
  if(qty>1){
    qty--;
    renderQty();
  }
});

qtyPlus.addEventListener('click', function(e){
    e.stopPropagation();

    const ticketType = document.getElementById('ticketType').value;
    const left = ticketType === 'vip'
        ? parseInt(selectedCard.dataset.vipLeft)
        : parseInt(selectedCard.dataset.regularLeft);

    if (qty < left) {
        qty++;
        renderQty();
    }
});
});

const loadBtn = document.getElementById('loadBalanceBtn');
const modal = document.getElementById('balanceModal');
const closeBtn = document.getElementById('closeBalanceModal');
const backdrop = document.getElementById('balanceBackdrop');

const cardInput = document.getElementById('cardNumber');
const amountInput = document.getElementById('amount');

let currentBalance = parseFloat("{{ auth()->user()->balance }}");

loadBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

function closeModal() {
    modal.classList.add('hidden');
}

closeBtn.addEventListener('click', closeModal);
backdrop.addEventListener('click', closeModal);

document.getElementById('addBalanceBtn').addEventListener('click', () => {
    const card = cardInput.value.trim();
    const amount = parseFloat(amountInput.value);

    // ✅ Simple validation
    if (card.length < 12 || card.length > 19) {
        alert("Invalid card number length");
        return;
    }

    if (!amount || amount <= 0) {
        alert("Enter valid amount");
        return;
    }

    // ✅ Update balance (frontend only)
    currentBalance += amount;

    // Update UI
    document.querySelector('[data-balance]').innerText = "Balance: " + currentBalance;

    closeModal();
});

</script>
</body></html>