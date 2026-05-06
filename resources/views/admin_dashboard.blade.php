<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-primary": "#4fdbc8",
                    "on-secondary": "#ffffff",
                    "surface-container-low": "#f2f4f6",
                    "primary-fixed-dim": "#4fdbc8",
                    "outline": "#6c7a77",
                    "secondary": "#55615f",
                    "on-primary-container": "#00423b",
                    "tertiary-container": "#9ca4bd",
                    "on-primary-fixed-variant": "#005048",
                    "on-tertiary-container": "#323a4f",
                    "on-primary": "#ffffff",
                    "tertiary-fixed-dim": "#bec6e0",
                    "surface-variant": "#e0e3e5",
                    "surface-container-highest": "#e0e3e5",
                    "on-tertiary": "#ffffff",
                    "surface": "#f7f9fb",
                    "secondary-fixed-dim": "#bcc9c6",
                    "on-tertiary-fixed-variant": "#3f465c",
                    "on-error-container": "#93000a",
                    "on-primary-fixed": "#00201c",
                    "secondary-container": "#d8e5e2",
                    "on-surface": "#191c1e",
                    "error": "#ba1a1a",
                    "on-error": "#ffffff",
                    "background": "#f7f9fb",
                    "surface-container-lowest": "#ffffff",
                    "inverse-surface": "#2d3133",
                    "tertiary-fixed": "#dae2fd",
                    "on-secondary-fixed": "#121e1c",
                    "surface-dim": "#d8dadc",
                    "surface-container-high": "#e6e8ea",
                    "secondary-fixed": "#d8e5e2",
                    "on-background": "#191c1e",
                    "on-tertiary-fixed": "#131b2e",
                    "on-secondary-fixed-variant": "#3d4947",
                    "inverse-on-surface": "#eff1f3",
                    "primary": "#006b5f",
                    "on-surface-variant": "#3c4947",
                    "surface-tint": "#006b5f",
                    "tertiary": "#565e74",
                    "surface-container": "#eceef0",
                    "primary-fixed": "#71f8e4",
                    "surface-bright": "#f7f9fb",
                    "primary-container": "#14b8a6",
                    "error-container": "#ffdad6",
                    "outline-variant": "#bbcac6",
                    "on-secondary-container": "#5b6765"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "container-max": "1280px",
                    "base": "8px",
                    "margin": "32px",
                    "stack-lg": "64px",
                    "gutter": "24px",
                    "stack-md": "32px",
                    "stack-sm": "16px"
            },
            "fontFamily": {
                    "label-xs": ["Inter"],
                    "label-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "h2": ["Manrope"],
                    "h1": ["Manrope"],
                    "h3": ["Manrope"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .grid-bg {
            background-image: radial-gradient(circle at 1px 1px, #e2e8f0 1px, transparent 0);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-background min-h-screen grid-bg">
<!-- TopAppBar -->
<header class="fixed top-0 w-full h-16 flex justify-between items-center px-8 z-50 bg-white dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800 font-manrope antialiased flat no shadows">
<div class="flex items-center">
<span class="text-2xl font-black tracking-tight text-teal-600 dark:text-teal-400">TIX</span>
</div>
<div class="flex items-center">
<div class="relative">
<button id="profileBtn" class="h-10 w-10 rounded-full bg-surface-container-high overflow-hidden border border-outline-variant focus:outline-none">
<img alt="Admin Profile" class="h-full w-full object-cover" data-alt="A professional headshot of a modern corporate administrator in a minimalist office setting. The lighting is soft and high-key, emphasizing a clean and professional look with a neutral, slightly warm color palette. The individual is wearing a sophisticated dark blazer against a blurred architectural background that hints at glass and light-filled spaces." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPQ-UbkR8mD0dqOpl0yInCca98qifNZ52MDcOZeeKqFO_WmAeTBobgCjALMl_aY5MYMxG6P9CiMa2qWDdxiBC6gyoGpW8saQ0oh_80CwJzktzrm-pPxibQYNh6E9KjHTBy6ztySXW6QdyXfp_ApyE6lLuJiyMJw_xlZ7P078hzgLvWP4Q1Z3HBvSvX85DXAHSLl_b5ZGErFrFCGAyCNFZ0mfz4BfSJaFByz6QRZm8fFcVE4kEHrd6GyhnsF3-Uv3wm_yWGsmw3Jzah"/>
</button>
<div id="profileMenu" class="hidden absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-[0_20px_40px_rgba(0,0,0,0.08)] border border-slate-100 py-2 z-50 transition-all origin-top-right">
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-label-sm text-error hover:bg-error-container/20 rounded-lg transition-colors group">
        <span class="material-symbols-outlined">logout</span>
        Sign Out
    </button>
</form>
</div>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="pt-16 min-h-screen">
<div class="max-w-[1280px] mx-auto px-margin py-stack-lg">
<!-- Welcome Header -->
<!-- Primary Actions Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div id="addVenueBtn" class="group relative overflow-hidden bg-white border border-outline-variant rounded-2xl hover:bg-secondary-container transition-all duration-300 cursor-pointer flex flex-col items-center text-center shadow-sm hover:shadow-md active:scale-[0.98] px-12 py-24 min-h-[500px] justify-center">
<div class="inline-flex items-center justify-center w-24 h-24 bg-primary-container/20 text-primary rounded-2xl mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-6xl">add</span>
</div>
<h3 class="font-h3 text-3xl text-on-surface mb-4">Venues</h3>
<p class="font-body-md text-body-md text-secondary max-w-sm">Add and manage your venue destinations, capacities, and specifications.</p>
</div>
<div id="addEventBtn" class="group relative overflow-hidden bg-white border border-outline-variant rounded-2xl hover:bg-secondary-container transition-all duration-300 cursor-pointer flex flex-col items-center text-center shadow-sm hover:shadow-md active:scale-[0.98] px-12 py-24 min-h-[500px] justify-center">
<div class="inline-flex items-center justify-center w-24 h-24 bg-primary-container/20 text-primary rounded-2xl mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-6xl">add</span>
</div>
<h3 class="font-h3 text-3xl text-on-surface mb-4">Events</h3>
<p class="font-body-md text-body-md text-secondary max-w-sm">Curate experiences, manage ticketing, and upload event promotional assets.</p>
</div>
<div id="addDiscountBtn" class="group relative overflow-hidden bg-white border border-outline-variant rounded-2xl hover:bg-secondary-container transition-all duration-300 cursor-pointer flex flex-col items-center text-center shadow-sm hover:shadow-md active:scale-[0.98] px-12 py-24 min-h-[500px] justify-center">
    <div class="inline-flex items-center justify-center w-24 h-24 bg-primary-container/20 text-primary rounded-2xl mb-8 group-hover:scale-110 transition-transform">
        <span class="material-symbols-outlined text-6xl">sell</span>
    </div>
    <h3 class="font-h3 text-3xl text-on-surface mb-4">Discounts</h3>
    <p class="font-body-md text-body-md text-secondary max-w-sm">Create coupon codes, set discount percentages, and expiry dates.</p>
</div>
</section>
</div>
</main>

<!-- Add Venue Modal -->
<div id="venueModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-8">
<div id="venueModalBackdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>

<div class="relative w-full max-w-lg bg-white rounded-2xl shadow-[0_40px_80px_rgba(0,0,0,0.12)] overflow-hidden">
<div class="flex items-center justify-between px-8 py-6 border-b border-slate-100">
<div>
<p class="text-label-xs font-bold text-primary tracking-widest uppercase mb-1">Venue</p>
<h2 class="font-h2 text-h2 text-on-surface">Add Venue</h2>
</div>
<button id="closeVenueModal" class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
</div>

@if(session('success'))
    <div class="text-green-600">
        {{ session('success') }}
    </div>
@endif
<form method="POST" action="{{ route('venue.store') }}" class="p-8 space-y-5">
    @csrf
<div>
<label for="venue_name" class="block text-label-sm text-on-surface mb-2">Venue Name</label>
<input id="venue_name" name="venue_name" type="text" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Enter venue name">
</div>

<div>
<label for="capacity" class="block text-label-sm text-on-surface mb-2">Capacity</label>
<input id="capacity" name="capacity" type="number" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Enter capacity">
</div>

<div>
<label for="location" class="block text-label-sm text-on-surface mb-2">Location</label>
<input id="location" name="location" type="text" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Enter location">
</div>

<button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98]">
    Add
</button>
</form>
</div>
</div>


<!-- Add Event Modal -->
<div id="eventModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-8">
<div id="eventModalBackdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>

<div class="relative w-full max-w-lg bg-white rounded-2xl shadow-[0_40px_80px_rgba(0,0,0,0.12)] overflow-hidden">
<div class="flex items-center justify-between px-8 py-6 border-b border-slate-100">
<div>
<p class="text-label-xs font-bold text-primary tracking-widest uppercase mb-1">Event</p>
<h2 class="font-h2 text-h2 text-on-surface">Add Event</h2>
</div>
<button id="closeEventModal" class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
</div>

<form method="POST" action="{{ route('events.store') }}" class="p-8 space-y-5">
  @csrf
<div>
<label for="event_name" class="block text-label-sm text-on-surface mb-2">Event Name</label>
<input id="event_name" name="event_name" type="text" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Enter event name">
</div>

<div>
<label for="event_date" class="block text-label-sm text-on-surface mb-2">Event Date</label>
<input id="event_date" name="event_date" type="date" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary">
</div>

<div>
<label for="event_time" class="block text-label-sm text-on-surface mb-2">Event Time</label>
<input id="event_time" name="event_time" type="time" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary">
</div>

<div>
  <label for="venue" class="block text-label-sm text-on-surface mb-2">Venue</label>
  <select name="venue_id" required>
    <option value="">Select Venue</option>
    @foreach($venues as $venue)
        <option value="{{ $venue->id }}">
            {{ $venue->venue_name }}
        </option>
    @endforeach
  </select>
</div>

<div>
<label for="category" class="block text-label-sm text-on-surface mb-2">Category</label>
<input id="category" name="category_name" type="text" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Enter category">
</div>

<div>
<label for="description" class="block text-label-sm text-on-surface mb-2">Description</label>
<textarea id="description" name="description" rows="4" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary resize-none" placeholder="Enter description"></textarea>
</div>

<button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98]">
Add
</button>
</form>
</div>
</div>

      <!--Add Discount Modal-->
      <div id="discountModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-8">
    <div id="discountModalBackdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>

    <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-[0_40px_80px_rgba(0,0,0,0.12)] overflow-hidden">
        <div class="flex items-center justify-between px-8 py-6 border-b border-slate-100">
            <div>
                <p class="text-label-xs font-bold text-primary tracking-widest uppercase mb-1">Discount</p>
                <h2 class="font-h2 text-h2 text-on-surface">Add Discount Code</h2>
            </div>
            <button id="closeDiscountModal" class="text-slate-400 hover:text-primary transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form method="POST" action="{{ route('discount.store') }}" class="p-8 space-y-5">
            @csrf

            <div>
                <label for="code" class="block text-label-sm text-on-surface mb-2">Coupon Code</label>
                <input id="code" name="code" type="text" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Example: EID20">
            </div>

            <div>
                <label for="discount_percent" class="block text-label-sm text-on-surface mb-2">Discount Percent</label>
                <input id="discount_percent" name="discount_percent" type="number" min="1" max="100" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary" placeholder="Example: 20">
            </div>

            <div>
                <label for="expiry_date" class="block text-label-sm text-on-surface mb-2">Expiry Date</label>
                <input id="expiry_date" name="expiry_date" type="date" class="w-full rounded-xl border-outline-variant focus:border-primary focus:ring-primary">
            </div>

            <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98]">
                Add Discount
            </button>
        </form>
    </div>
</div>

<section class="mt-12">
    <h2 class="font-h2 text-3xl mb-6">Existing Events</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($events as $event)
            <div 
                class="seatEventCard bg-white border rounded-xl p-6 cursor-pointer hover:shadow-md"
                data-event-id="{{ $event->id }}"
                data-event-name="{{ $event->event_name }}"
                data-venue-id="{{ $event->venue_id }}"
            >
                <h3 class="font-bold text-xl">{{ $event->event_name }}</h3>
                <p class="text-slate-500">{{ $event->event_date }} at {{ $event->event_time }}</p>
                <p class="text-slate-500">Venue: {{ $event->venue->venue_name ?? 'No venue' }}</p>
                <p class="text-teal-600 font-semibold mt-2">Click to generate seats</p>
            </div>
        @endforeach
    </div>
</section>

      <!-- Seat Generation footer -->
<div id="seatModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
    <div id="seatModalBackdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>

    <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Generate Seats</h2>
            <button id="closeSeatModal" class="text-slate-400">✕</button>
        </div>

        <form method="POST" action="{{ route('seats.generate') }}" class="space-y-5">
            @csrf

            <input type="hidden" id="seat_event_id" name="event_id">
            <input type="hidden" id="seat_venue_id" name="venue_id">
            <input type="hidden" id="seat_event_name" name="event_name">

            <div>
                <label>Seat Type</label>
                <select name="seat_type" required class="w-full rounded-xl border">
                    <option value="">Select Type</option>
                    <option value="vip">VIP</option>
                    <option value="regular">Regular</option>
                </select>
            </div>

            <div>
                <label>Number of Seats</label>
                <input type="number" name="seat_count" min="1" required class="w-full rounded-xl border">
            </div>

            <div>
                <label>Price</label>
                <input type="number" name="price" min="0" required class="w-full rounded-xl border">
            </div>

            <button type="submit" class="w-full bg-primary text-white font-bold py-4 rounded-xl">
                Generate Seats
            </button>
        </form>
    </div>
</div>

<!-- Minimal Footer -->
<footer class="py-8 px-margin border-t border-slate-200 bg-white/50 backdrop-blur-sm">
<div class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-6">
<span class="font-h3 text-teal-600 opacity-50">TIX</span>
<span class="text-label-xs font-label-xs text-slate-400">© 2024 TIX Global Management. All rights reserved.</span>
</div>
<div class="flex gap-8">
<a class="text-label-xs font-label-xs text-slate-500 hover:text-teal-600 transition-colors" href="#">Privacy Policy</a>
<a class="text-label-xs font-label-xs text-slate-500 hover:text-teal-600 transition-colors" href="#">Security Standards</a>
<a class="text-label-xs font-label-xs text-slate-500 hover:text-teal-600 transition-colors" href="#">System Status</a>
</div>
</div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const profileBtn = document.getElementById('profileBtn');
  const profileMenu = document.getElementById('profileMenu');

  if (profileBtn && profileMenu) {
    profileBtn.addEventListener('click', function (event) {
      event.stopPropagation();
      profileMenu.classList.toggle('hidden');
    });

    profileMenu.addEventListener('click', function (event) {
      event.stopPropagation();
    });

    document.addEventListener('click', function () {
      profileMenu.classList.add('hidden');
    });
  }

  const addVenueBtn = document.getElementById('addVenueBtn');
  const venueModal = document.getElementById('venueModal');
  const closeVenueModal = document.getElementById('closeVenueModal');
  const venueModalBackdrop = document.getElementById('venueModalBackdrop');

  if (addVenueBtn && venueModal) {
    addVenueBtn.addEventListener('click', function () {
      venueModal.classList.remove('hidden');
    });
  }

  function closeVenuePopup() {
    venueModal.classList.add('hidden');
  }

  if (closeVenueModal) {
    closeVenueModal.addEventListener('click', closeVenuePopup);
  }

  if (venueModalBackdrop) {
    venueModalBackdrop.addEventListener('click', closeVenuePopup);
  }

  const addEventBtn = document.getElementById('addEventBtn');
  const eventModal = document.getElementById('eventModal');
  const closeEventModal = document.getElementById('closeEventModal');
  const eventModalBackdrop = document.getElementById('eventModalBackdrop');

  if (addEventBtn && eventModal) {
    addEventBtn.addEventListener('click', function () {
      eventModal.classList.remove('hidden');
    });
  }

  function closeEventPopup() {
    eventModal.classList.add('hidden');
  }

  if (closeEventModal) {
    closeEventModal.addEventListener('click', closeEventPopup);
  }

  if (eventModalBackdrop) {
    eventModalBackdrop.addEventListener('click', closeEventPopup);
  }

  const seatModal = document.getElementById('seatModal');
  const closeSeatModal = document.getElementById('closeSeatModal');
  const seatModalBackdrop = document.getElementById('seatModalBackdrop');

  document.querySelectorAll('.seatEventCard').forEach(card => {
    card.addEventListener('click', function () {
      document.getElementById('seat_event_id').value = this.dataset.eventId;
      document.getElementById('seat_venue_id').value = this.dataset.venueId;
      document.getElementById('seat_event_name').value = this.dataset.eventName;

      seatModal.classList.remove('hidden');
    });
  });

  function closeSeatPopup() {
    seatModal.classList.add('hidden');
  }

  closeSeatModal.addEventListener('click', closeSeatPopup);
  seatModalBackdrop.addEventListener('click', closeSeatPopup);

  const addDiscountBtn = document.getElementById('addDiscountBtn');
const discountModal = document.getElementById('discountModal');
const closeDiscountModal = document.getElementById('closeDiscountModal');
const discountModalBackdrop = document.getElementById('discountModalBackdrop');

if (addDiscountBtn && discountModal) {
    addDiscountBtn.addEventListener('click', function () {
        discountModal.classList.remove('hidden');
    });
}

function closeDiscountPopup() {
    discountModal.classList.add('hidden');
}

if (closeDiscountModal) {
    closeDiscountModal.addEventListener('click', closeDiscountPopup);
}

if (discountModalBackdrop) {
    discountModalBackdrop.addEventListener('click', closeDiscountPopup);
}
});
</script>
</body></html>