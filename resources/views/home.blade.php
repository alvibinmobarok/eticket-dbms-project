<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TIX — Experience More</title>
<!-- Google Fonts: Manrope & Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "primary-fixed-dim": "#4fdbc8",
                      "surface-container-highest": "#e0e3e5",
                      "primary-fixed": "#71f8e4",
                      "tertiary-fixed": "#dae2fd",
                      "secondary": "#55615f",
                      "on-surface-variant": "#3c4947",
                      "surface-variant": "#e0e3e5",
                      "inverse-on-surface": "#eff1f3",
                      "surface-container-low": "#f2f4f6",
                      "surface-container": "#eceef0",
                      "on-tertiary-fixed-variant": "#3f465c",
                      "on-error": "#ffffff",
                      "primary": "#006b5f",
                      "secondary-container": "#d8e5e2",
                      "surface-container-lowest": "#ffffff",
                      "on-tertiary": "#ffffff",
                      "on-tertiary-container": "#323a4f",
                      "on-surface": "#191c1e",
                      "outline-variant": "#bbcac6",
                      "on-background": "#191c1e",
                      "tertiary-fixed-dim": "#bec6e0",
                      "secondary-fixed-dim": "#bcc9c6",
                      "on-secondary": "#ffffff",
                      "on-primary": "#ffffff",
                      "error-container": "#ffdad6",
                      "on-tertiary-fixed": "#131b2e",
                      "outline": "#6c7a77",
                      "inverse-primary": "#4fdbc8",
                      "error": "#ba1a1a",
                      "on-secondary-fixed": "#121e1c",
                      "surface-tint": "#006b5f",
                      "on-primary-fixed-variant": "#005048",
                      "primary-container": "#14b8a6",
                      "tertiary-container": "#9ca4bd",
                      "inverse-surface": "#2d3133",
                      "on-primary-container": "#00423b",
                      "surface": "#f7f9fb",
                      "secondary-fixed": "#d8e5e2",
                      "on-secondary-fixed-variant": "#3d4947",
                      "surface-bright": "#f7f9fb",
                      "background": "#f7f9fb",
                      "on-error-container": "#93000a",
                      "tertiary": "#565e74",
                      "on-primary-fixed": "#00201c",
                      "surface-dim": "#d8dadc",
                      "on-secondary-container": "#5b6765",
                      "surface-container-high": "#e6e8ea"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "margin": "32px",
                      "base": "8px",
                      "gutter": "24px",
                      "stack-sm": "16px",
                      "container-max": "1280px",
                      "stack-md": "32px",
                      "stack-lg": "64px"
              },
              "fontFamily": {
                      "label-sm": ["Inter"],
                      "label-xs": ["Inter"],
                      "h2": ["Manrope"],
                      "h3": ["Manrope"],
                      "body-lg": ["Inter"],
                      "h1": ["Manrope"],
                      "body-md": ["Inter"]
              },
              "fontSize": {
                      "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
                      "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}]
              }
            },
          },
        }
    </script>
<style>
    html {
        scroll-behavior: smooth;
    }
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        vertical-align: middle;
    }
    body {
        font-family: 'Inter', sans-serif;
        background-color: #ffffff;
    }
    /* Custom Slideshow Styles */
    .slideshow-container {
        position: relative;
        aspect-ratio: 16 / 9;
        width: 100%;
        overflow: hidden;
        background-color: #191c1e;
    }
    @media (min-width: 1440px) {
        .slideshow-container {
            height: 720px;
            aspect-ratio: auto;
        }
    }
    .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        background-size: cover;
        background-position: center;
    }
    .slide.active {
        opacity: 1;
    }
    .slide::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.2) 100%);
    }
        
    </style>
</head>
<body class="text-on-background bg-white selection:bg-primary-container/30">
<!-- Integrated & Airy Header -->
<header class="absolute top-0 w-full z-50">
<div class="max-w-[1440px] mx-auto px-12 h-24 flex items-center justify-between">
<div class="flex items-center gap-16">
<span class="text-2xl font-black tracking-tightest text-white font-h1">TIX</span>
<nav class="hidden md:flex items-center gap-10 font-['Manrope'] text-xs uppercase tracking-[0.15em] font-bold">
<a class="text-primary border-b-2 border-primary pb-0.5" href="#">Home</a>
<a class="text-white/60 hover:text-white transition-colors" href="#events">Events</a>
</nav>
</div>
<div class="flex items-center gap-2">
<a href="{{ route('login') }}" class="px-6 py-2.5 text-white bg-white/10 backdrop-blur-md rounded-full font-['Manrope'] text-xs uppercase tracking-widest font-bold hover:bg-white/20 transition-all border border-white/20">Login</a>
<a href="{{ route('register') }}" class="px-8 py-2.5 bg-primary-container text-on-primary-container font-['Manrope'] text-xs uppercase tracking-widest rounded-full transition-all hover:shadow-lg font-bold">Register</a>
</div>
</div>
</header>
<main>
<!-- Landscape Ratio Slideshow Hero -->
<section class="slideshow-container">
<!-- Slide 1 -->
<div class="slide active" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB76uEFYnfSARBBFUq1ZlT5kQRbuwa5lV8cQtR4ZTfBV71nXMNzrsyn229kYFl_-d8hiXdN8ww6hnbewsZZi-hI36PVRa-qnnymn5fxjBQ70qSh5YKxvFiA-e9-JGJINM0Hx9dycLiNikiM6RG2i59459PfN5YsyJ8-_s9JF_SASVhXzWg-JBUpDRlE7-R9weEMz2auwnKuTj3dW_0iJYj34DwvWgDweZzjM_QorfwRzTjhi44F8-qJbiK8rG-FZ5CF62idOE0Q3Ww2')">
<div class="relative z-20 h-full max-w-[1440px] mx-auto px-12 flex flex-col justify-center">
<div class="max-w-2xl space-y-6">
<div class="inline-block px-4 py-1.5 rounded-full bg-primary/20 backdrop-blur-md border border-primary/30 text-primary-fixed font-label-xs text-[10px] uppercase tracking-[0.2em]">
                            Featured Experience
                        </div>
<h1 class="font-h1 text-4xl md:text-6xl lg:text-[72px] leading-[1.05] text-white font-extrabold tracking-tight">
                            The Vernissage <br/><span class="text-primary-fixed">Series '24</span>
</h1>
<p class="font-body-lg text-gray-300 max-w-md leading-relaxed text-base md:text-lg">
                            An exclusive journey through contemporary masterpieces and avant-garde installations. Join the elite cultural circle.
                        </p>
<div class="pt-4">
<button class="px-8 py-4 md:px-10 md:py-5 bg-white text-on-surface rounded-full font-label-sm font-bold flex items-center gap-3 hover:bg-primary-container transition-all active:scale-95 group">
                                Explore Events
                                <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<!-- Slide 2 -->
<div class="slide" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBFOWmyisUe2PmDt4sBYncUIfS0pu8IU0la9ksCOKRhYoepW2sd8EOkpK13-3ZXcSYGG9Dya1qDJgapxaxm34Hm7ho2gRooISwPCKTnU8yw7WNi_C3alyk-4tq9nG1l50owD6AkjFOHhqGjgl210oSMwko52EQo8nC11lEnom7vuT6YYb-B_urYzo5QnCaacb-JF6S4qjtOVTgxLrNw9so5NTD--okRCYTdteMqRA4a1x7DlE-UO_aqtm4rb6b19Tar_rDlRTRfczpH')">
<div class="relative z-20 h-full max-w-[1440px] mx-auto px-12 flex flex-col justify-center">
<div class="max-w-2xl space-y-6">
<div class="inline-block px-4 py-1.5 rounded-full bg-primary/20 backdrop-blur-md border border-primary/30 text-primary-fixed font-label-xs text-[10px] uppercase tracking-[0.2em]">
                            Outdoor Festival
                        </div>
<h1 class="font-h1 text-4xl md:text-6xl lg:text-[72px] leading-[1.05] text-white font-extrabold tracking-tight">
                            Solstice <br/><span class="text-primary-fixed">Music Festival</span>
</h1>
<p class="font-body-lg text-gray-300 max-w-md leading-relaxed text-base md:text-lg">
                            Experience the rhythm of the city under the summer stars. A celebration of sound, light, and human connection.
                        </p>
<div class="pt-4">
<button class="px-8 py-4 md:px-10 md:py-5 bg-white text-on-surface rounded-full font-label-sm font-bold flex items-center gap-3 hover:bg-primary-container transition-all active:scale-95 group">
                                Explore Events
                                <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<!-- Slide 3 -->
<div class="slide" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBhwero7gdOFL5_-BKwkFsHkvmUpqODhp3cYwg6okpNwbo1GyX4ZT13XGHkV9apWWI_nSZmuLbCl_Ls2Z_d7crrOKovVOZFS8_L7ln9aw5Bk25KyPhSVJ3Yz1jhvJnCSDeOqzKVd9f2pd7Nod1_BWlWjy1N--piA1PLGmw3WNF29BjxQNu1oo7yhN1OE1XIJztNAonxDh_x-dOehLL9yZJR9tO1iNM4pYBZABF4eqeZnZOPL15sNtmw352wK8R9twgZR84XqY8jxrJa')">
<div class="relative z-20 h-full max-w-[1440px] mx-auto px-12 flex flex-col justify-center">
<div class="max-w-2xl space-y-6">
<div class="inline-block px-4 py-1.5 rounded-full bg-primary/20 backdrop-blur-md border border-primary/30 text-primary-fixed font-label-xs text-[10px] uppercase tracking-[0.2em]">
                            Global Conference
                        </div>
<h1 class="font-h1 text-4xl md:text-6xl lg:text-[72px] leading-[1.05] text-white font-extrabold tracking-tight">
                            Tech <br/><span class="text-primary-fixed">Innovation '24</span>
</h1>
<p class="font-body-lg text-gray-300 max-w-md leading-relaxed text-base md:text-lg">
                            Where the brightest minds converge to shape the future. Join the pioneers of the next technological frontier.
                        </p>
<div class="pt-4">
<button class="px-8 py-4 md:px-10 md:py-5 bg-white text-on-surface rounded-full font-label-sm font-bold flex items-center gap-3 hover:bg-primary-container transition-all active:scale-95 group">
                                Explore Events
                                <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<!-- Slideshow Controls -->
<div class="absolute bottom-12 left-12 z-30 flex items-center gap-6">
<div class="flex gap-3" id="slideshow-indicators">
<button class="w-12 h-1 bg-white rounded-full opacity-100 transition-all indicator" onclick="goToSlide(0)"></button>
<button class="w-12 h-1 bg-white rounded-full opacity-30 transition-all indicator" onclick="goToSlide(1)"></button>
<button class="w-12 h-1 bg-white rounded-full opacity-30 transition-all indicator" onclick="goToSlide(2)"></button>
</div>
<div class="flex gap-2">
<button class="p-3 rounded-full bg-white/10 border border-white/20 text-white hover:bg-white/20 transition-all backdrop-blur-sm" onclick="prevSlide()">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="p-3 rounded-full bg-white/10 border border-white/20 text-white hover:bg-white/20 transition-all backdrop-blur-sm" onclick="nextSlide()">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</section>
<!-- Events Section -->
<section id="events" class="bg-white py-stack-lg border-y border-gray-100">
<div class="max-w-[1280px] mx-auto px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-stack-lg">
<div class="space-y-3">
<h2 class="font-h2 text-[40px] text-on-surface font-bold tracking-tight">Upcoming Experiences</h2>
<p class="font-body-md text-secondary text-lg">Curated selections from the world's most vibrant cultural hubs.</p>
</div>
<div class="flex gap-3">
<button class="px-5 py-2.5 bg-gray-50 border border-gray-200 rounded-full text-label-xs font-bold uppercase tracking-wider flex items-center gap-2 hover:bg-gray-100 transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="filter_list">filter_list</span>
                            Filter
                        </button>
<button class="px-5 py-2.5 bg-gray-50 border border-gray-200 rounded-full text-label-xs font-bold uppercase tracking-wider flex items-center gap-2 hover:bg-gray-100 transition-colors">
<span class="material-symbols-outlined text-[18px]" data-icon="sort">sort</span>
                            Sort
                        </button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
<!-- Card 1 -->
<div class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.08)] transition-all duration-500">
<div class="relative h-72 overflow-hidden">
<img alt="Solstice Music Festival" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Energetic outdoor music festival at dusk with warm stage lights reflecting on a large crowd" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFOWmyisUe2PmDt4sBYncUIfS0pu8IU0la9ksCOKRhYoepW2sd8EOkpK13-3ZXcSYGG9Dya1qDJgapxaxm34Hm7ho2gRooISwPCKTnU8yw7WNi_C3alyk-4tq9nG1l50owD6AkjFOHhqGjgl210oSMwko52EQo8nC11lEnom7vuT6YYb-B_urYzo5QnCaacb-JF6S4qjtOVTgxLrNw9so5NTD--okRCYTdteMqRA4a1x7DlE-UO_aqtm4rb6b19Tar_rDlRTRfczpH"/>
<div class="absolute top-6 left-6 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full shadow-sm">
<span class="text-[10px] text-primary font-black uppercase tracking-widest">Music</span>
</div>
</div>
<div class="p-8 space-y-6">
<div class="space-y-2">
<h3 class="font-h3 text-2xl text-on-surface group-hover:text-primary transition-colors font-bold">Solstice Music Festival</h3>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 text-secondary font-label-sm">
<span class="material-symbols-outlined text-lg text-primary/60" data-icon="calendar_today">calendar_today</span>
                                        Aug 12, 2024
                                    </div>
<div class="flex items-center gap-2 text-secondary font-label-sm">
<span class="material-symbols-outlined text-lg text-primary/60" data-icon="location_on">location_on</span>
                                        Central Park, NY
                                    </div>
</div>
</div>
<button class="w-full py-4 bg-primary-container text-on-primary-container rounded-2xl font-bold uppercase tracking-widest text-xs active:scale-95 transition-all shadow-sm hover:shadow-md">
                                Buy Tickets
                            </button>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.08)] transition-all duration-500">
<div class="relative h-72 overflow-hidden">
<img alt="Tech Innovation Summit" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="High-tech conference stage with large blue LED screens and a speaker addressing a professional audience" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhwero7gdOFL5_-BKwkFsHkvmUpqODhp3cYwg6okpNwbo1GyX4ZT13XGHkV9apWWI_nSZmuLbCl_Ls2Z_d7crrOKovVOZFS8_L7ln9aw5Bk25KyPhSVJ3Yz1jhvJnCSDeOqzKVd9f2pd7Nod1_BWlWjy1N--piA1PLGmw3WNF29BjxQNu1oo7yhN1OE1XIJztNAonxDh_x-dOehLL9yZJR9tO1iNM4pYBZABF4eqeZnZOPL15sNtmw352wK8R9twgZR84XqY8jxrJa"/>
<div class="absolute top-6 left-6 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full shadow-sm">
<span class="text-[10px] text-primary font-black uppercase tracking-widest">Tech</span>
</div>
</div>
<div class="p-8 space-y-6">
<div class="space-y-2">
<h3 class="font-h3 text-2xl text-on-surface group-hover:text-primary transition-colors font-bold">Innovation Summit</h3>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 text-secondary font-label-sm">
<span class="material-symbols-outlined text-lg text-primary/60" data-icon="calendar_today">calendar_today</span>
                                        Sep 05, 2024
                                    </div>
<div class="flex items-center gap-2 text-secondary font-label-sm">
<span class="material-symbols-outlined text-lg text-primary/60" data-icon="location_on">location_on</span>
                                        Silicon Valley, CA
                                    </div>
</div>
</div>
<button class="w-full py-4 bg-primary-container text-on-primary-container rounded-2xl font-bold uppercase tracking-widest text-xs active:scale-95 transition-all shadow-sm hover:shadow-md">
                                Buy Tickets
                            </button>
</div>
</div>
<!-- Card 3 -->
<div class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-[0_30px_60px_rgba(0,0,0,0.08)] transition-all duration-500">
<div class="relative h-72 overflow-hidden">
<img alt="Mixology Masterclass" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Elegant close-up of a perfectly crafted cocktail on a dark wooden bar with moody lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBV0NmyYK5Y2V4NitISkn3vY6Ks57xKMWJzPTqazgcHqDEnpFAj9FpAPxoCWFJljMT3xUvOMXdCzUt60RwKkqfSWL-ujCJgfuzqRp1BRutCAm6IAxb9W92qs5Dpxe0F5JW8dcGntmZtuPfh-GAo43fIwPHPYCahzdVGvlqWbmbDzrSrkF0SSri_FowT3GpaEafNA-VTPyhe7Id4BM63ojzx9iYzPfGGf02vQT1U4BMpwmMFKNJPb9-NjPAwoggdX9_i_k9gAhqyWZMn"/>
<div class="absolute top-6 left-6 bg-white/90 backdrop-blur px-4 py-1.5 rounded-full shadow-sm">
<span class="text-[10px] text-primary font-black uppercase tracking-widest">Workshop</span>
</div>
</div>
<div class="p-8 space-y-6">
<div class="space-y-2">
<h3 class="font-h3 text-2xl text-on-surface group-hover:text-primary transition-colors font-bold">Mixology Masterclass</h3>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2 text-secondary font-label-sm">
<span class="material-symbols-outlined text-lg text-primary/60" data-icon="calendar_today">calendar_today</span>
                                        Oct 18, 2024
                                    </div>
<div class="flex items-center gap-2 text-secondary font-label-sm">
<span class="material-symbols-outlined text-lg text-primary/60" data-icon="location_on">location_on</span>
                                        London, UK
                                    </div>
</div>
</div>
<button class="w-full py-4 bg-primary-container text-on-primary-container rounded-2xl font-bold uppercase tracking-widest text-xs active:scale-95 transition-all shadow-sm hover:shadow-md">
                                Buy Tickets
                            </button>
</div>
</div>
</div>
<div class="mt-20 text-center">
<button class="px-12 py-5 border-2 border-primary-container text-primary font-black uppercase tracking-[0.2em] text-xs rounded-full hover:bg-primary-container/10 transition-all">
                        View All Events
                    </button>
</div>
</div>
</section>
<!-- Newsletter / CTA -->
<section class="max-w-[1280px] mx-auto px-8 py-stack-lg">
<div class="bg-on-surface rounded-[48px] p-16 md:p-24 relative overflow-hidden">
<div class="relative z-10 max-w-2xl">
<h2 class="text-white font-h1 text-5xl leading-tight font-black mb-8 tracking-tight">Stay ahead of <br/>the curve.</h2>
<p class="text-gray-400 font-body-lg text-xl mb-12">
                        Join our exclusive list to receive early access to tickets and invitations to member-only events.
                    </p>
<form class="flex flex-col md:flex-row gap-4">
<input class="flex-1 bg-white/5 border border-white/10 rounded-2xl px-8 py-5 text-white placeholder:text-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-container/30 transition-all" placeholder="Enter your email" type="email"/>
<button class="px-10 py-5 bg-primary-container text-on-primary-container font-black uppercase tracking-widest text-xs rounded-2xl hover:opacity-90 active:scale-95 transition-all">
                            Subscribe
                        </button>
</form>
</div>
<!-- Abstract decorative shape -->
<div class="absolute top-[-30%] right-[-10%] w-[700px] h-[700px] bg-primary/20 rounded-full blur-[140px]"></div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full border-t mt-20 bg-white border-gray-100">
<div class="max-w-[1440px] mx-auto px-12 py-20 flex flex-col md:flex-row justify-between items-center gap-12">
<div class="flex flex-col items-center md:items-start gap-6">
<span class="text-3xl font-black tracking-tighter text-gray-900 font-h1">TIX</span>
<p class="font-['Manrope'] text-[10px] uppercase tracking-[0.3em] font-bold text-gray-400">© 2024 TIX. Minimalist Ticketing for Culture.</p>
</div>
<div class="flex gap-12 font-['Manrope'] text-[10px] uppercase tracking-[0.2em] font-bold text-gray-400">
<a class="hover:text-primary transition-all" href="#">Terms</a>
<a class="hover:text-primary transition-all" href="#">Privacy</a>
<a class="hover:text-primary transition-all" href="#">Help</a>
<a class="hover:text-primary transition-all" href="#">Instagram</a>
</div>
</div>
</footer>
<script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');

        function updateSlides() {
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentSlide);
            });
            indicators.forEach((indicator, index) => {
                indicator.style.opacity = index === currentSlide ? '1' : '0.3';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlides();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateSlides();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlides();
        }

        // Auto-advance slides every 6 seconds
        setInterval(nextSlide, 6000);
    </script>
</body></html>