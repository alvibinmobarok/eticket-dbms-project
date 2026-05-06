<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TIX - Review Venues</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#006b5f",
                        "surface-bright": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#3c4947",
                    },
                    fontFamily: {
                        h1: ["Manrope"],
                        h2: ["Manrope"],
                        h3: ["Manrope"],
                        "body-md": ["Inter"],
                    },
                    spacing: {
                        margin: "32px",
                        gutter: "24px",
                        "stack-lg": "64px",
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface-bright font-body-md text-on-surface antialiased">

<header class="fixed top-0 w-full z-50 border-b border-slate-100 bg-white/80 backdrop-blur-md shadow-[0_20px_40px_rgba(0,0,0,0.04)]">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
        <div class="text-2xl font-black tracking-tighter text-teal-600 font-h1">TIX</div>

        <nav class="hidden md:flex gap-8 items-center">
            <a class="text-slate-500 font-medium hover:text-teal-500 transition-colors" href="{{ route('user.profile') }}">
                Events
            </a>

            <a class="text-teal-600 font-semibold border-b-2 border-teal-600 transition-colors" href="{{ route('venues') }}">
                Venues
            </a>
        </nav>

        <div class="flex items-center gap-6">
            <a href="{{ route('checkout') }}" class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary text-white text-[10px] flex items-center justify-center rounded-full">
                    {{ session('cart_count', 0) }}
                </span>
            </a>

            <div class="relative">
                <button id="profileBtn" class="flex items-center gap-2 focus:outline-none">
                    <img
                        alt="User avatar"
                        class="w-9 h-9 rounded-full border-2 border-primary/20"
                        src="https://ui-avatars.com/api/?name={{ urlencode(session('user_name', 'User')) }}&background=006b5f&color=fff"
                    >
                </button>

                <div id="profileMenu" class="hidden absolute right-0 mt-3 w-64 bg-white rounded-xl shadow-lg border border-slate-100 py-4 z-50">
                    <div class="px-6 pb-3 border-b border-slate-50">
                        <p class="font-bold text-on-surface">
                            {{ session('user_name') }}
                        </p>
                        <p class="text-sm text-slate-500">
                            Balance: {{ session('user_balance', 0) }}
                        </p>
                    </div>

                    <div class="px-2 pt-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-red-600 hover:bg-red-50 rounded-lg transition-colors">
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

<main class="pt-24 pb-32 max-w-7xl mx-auto px-margin">
    <header class="mb-stack-lg">
        <h1 class="font-h1 text-5xl font-bold text-on-surface mb-2">
            Review Venues
        </h1>
        <p class="text-lg text-slate-500 max-w-2xl">
            Browse venues, check their details, and share your experience.
        </p>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

        @foreach($venues as $venue)

            <div
                class="venue-card cursor-pointer group bg-white rounded-xl border border-slate-100 overflow-hidden hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] transition-all duration-300"
                data-venue-id="{{ $venue->id }}"
                data-name="{{ $venue->venue_name }}"
                data-location="{{ $venue->location }}"
                data-capacity="{{ $venue->capacity }}"
            >

                <div class="aspect-video relative overflow-hidden">
                    <img
                        alt="Venue image"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop"
                    >
                </div>

                <div class="p-6">
                    <h3 class="font-h3 text-2xl font-semibold text-on-surface mb-2">
                        {{ $venue->venue_name }}
                    </h3>

                    <p class="text-sm text-slate-500 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary/70">location_on</span>
                        {{ $venue->location }}
                    </p>

                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm text-slate-500">Capacity</span>
                        <span class="font-bold text-primary">
                            {{ $venue->capacity }}
                        </span>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</main>

<div id="venueModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 md:p-8">
    <div id="venueBackdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm"></div>

    <div class="relative w-full max-w-4xl bg-white rounded-2xl shadow-[0_40px_80px_rgba(0,0,0,0.12)] overflow-hidden flex flex-col md:flex-row max-h-[90vh]">

        <div class="w-full md:w-1/2 bg-slate-100">
            <img
                id="venueModalImage"
                class="w-full h-64 md:h-full object-cover"
                src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop"
            >
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-10 flex flex-col overflow-y-auto">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <span class="text-xs font-bold text-primary tracking-widest uppercase mb-2 block">
                        Venue
                    </span>
                    <h2 id="venueModalName" class="text-3xl font-bold text-on-surface"></h2>
                </div>

                <button id="closeVenueModal" class="text-slate-400 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div class="space-y-4 mb-8">
                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary/70">location_on</span>
                    <span id="venueModalLocation" class="text-sm font-medium"></span>
                </div>

                <div class="flex items-center gap-3 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary/70">groups</span>
                    <span id="venueModalCapacity" class="text-sm font-medium"></span>
                </div>
            </div>

            <form method="POST" action="{{ route('submit.review') }}" class="border-t border-slate-100 pt-6 mb-8">
                @csrf

                
                <input type="hidden" name="venue_id" id="reviewVenueId">

                <label class="text-sm text-slate-500 mb-1 block">Rating</label>
                <select name="rating" class="w-full rounded-xl border border-slate-200 px-3 py-2 mb-4" required>
                    <option value="5">5 - Excellent</option>
                    <option value="4">4 - Good</option>
                    <option value="3">3 - Average</option>
                    <option value="2">2 - Poor</option>
                    <option value="1">1 - Bad</option>
                </select>

                <label class="text-sm text-slate-500 mb-1 block">Comment</label>
                <textarea
                    name="comment"
                    rows="3"
                    class="w-full rounded-xl border border-slate-200 px-3 py-2 mb-4"
                    placeholder="Write your review..."
                    required
                ></textarea>

                <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-3 rounded-xl">
                    Submit Review
                </button>
            </form>

            <div>
                <h3 class="font-bold text-lg mb-4">Other Reviews</h3>

                <div id="otherReviews" class="space-y-4">
                    <p class="text-sm text-slate-500">Click a venue to load reviews.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<nav class="fixed bottom-0 w-full z-50 border-t border-slate-100 bg-white rounded-t-2xl md:hidden shadow-[0_-10px_30px_rgba(0,0,0,0.03)]">
    <div class="flex justify-around items-center px-4 py-3">
        <a href="{{ route('user.profile') }}" class="flex flex-col items-center justify-center text-slate-400 px-3 py-1">
            <span class="material-symbols-outlined">explore</span>
            <span class="text-[10px] font-semibold">Events</span>
        </a>

        <a href="{{ route('venues') }}" class="flex flex-col items-center justify-center text-teal-600 bg-teal-50 rounded-xl px-3 py-1">
            <span class="material-symbols-outlined">location_on</span>
            <span class="text-[10px] font-semibold">Venues</span>
        </a>

        <a href="{{ route('checkout') }}" class="flex flex-col items-center justify-center text-slate-400 px-3 py-1">
            <span class="material-symbols-outlined">shopping_cart</span>
            <span class="text-[10px] font-semibold">Cart</span>
        </a>
    </div>
</nav>

<footer class="w-full border-t border-slate-200 mt-24 bg-slate-50">
    <div class="max-w-7xl mx-auto py-12 px-8 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="font-bold text-teal-600 text-xl">TIX</div>

        <div class="flex gap-8">
            <a class="text-slate-500 hover:text-teal-500 transition-colors text-sm" href="#">Terms of Service</a>
            <a class="text-slate-500 hover:text-teal-500 transition-colors text-sm" href="#">Privacy Policy</a>
            <a class="text-slate-500 hover:text-teal-500 transition-colors text-sm" href="#">Contact</a>
        </div>

        <p class="text-slate-400 text-sm">© 2024 TIX Ticketing. All rights reserved.</p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const profileBtn = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');

    if (profileBtn && profileMenu) {
        profileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            profileMenu.classList.toggle('hidden');
        });

        profileMenu.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        document.addEventListener('click', () => {
            profileMenu.classList.add('hidden');
        });
    }

    const venueModal = document.getElementById('venueModal');
    const closeVenueModal = document.getElementById('closeVenueModal');
    const venueBackdrop = document.getElementById('venueBackdrop');

    document.querySelectorAll('.venue-card').forEach(card => {
        card.addEventListener('click', () => {
            document.getElementById('venueModalName').textContent = card.dataset.name;
            document.getElementById('venueModalLocation').textContent = card.dataset.location;
            document.getElementById('venueModalCapacity').textContent = "Capacity: " + card.dataset.capacity;

            document.getElementById('reviewVenueId').value = card.dataset.venueId;

            const reviewsBox = document.getElementById('otherReviews');

            reviewsBox.innerHTML = '<p class="text-sm text-slate-500">Loading reviews...</p>';

            fetch(`/venue-reviews/${card.dataset.venueId}`)
                .then(response => response.text())
                .then(text => {
                    console.log(text);

                    const reviews = JSON.parse(text);

                    reviewsBox.innerHTML = '';

                    if (reviews.length === 0) {
                        reviewsBox.innerHTML = '<p class="text-sm text-slate-500">No reviews yet.</p>';
                        return;
                    }

                    reviews.forEach(review => {
                        reviewsBox.innerHTML += `
                            <div class="bg-slate-50 border border-slate-100 rounded-xl p-4">
                                <p class="font-bold text-primary mb-1">
                                    ${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}
                                </p>

                                <p class="text-sm font-semibold text-slate-700 mb-1">
                                    ${review.user_name}
                                </p>

                                <p class="text-sm text-slate-600">
                                    ${review.comment}
                                </p>
                            </div>
                        `;
                    });
                })
                .catch(error => {
                    console.log(error);
                    reviewsBox.innerHTML = '<p class="text-sm text-red-500">Reviews could not be loaded.</p>';
                });
            venueModal.classList.remove('hidden');
        });
    });

    function closeModal() {
        venueModal.classList.add('hidden');
    }

    closeVenueModal.addEventListener('click', closeModal);
    venueBackdrop.addEventListener('click', closeModal);
});
</script>

</body>
</html>