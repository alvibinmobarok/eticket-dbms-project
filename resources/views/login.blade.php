<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login | TIX</title>
<!-- Google Fonts: Manrope & Inter -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "secondary-fixed": "#d8e5e2",
                      "on-background": "#191c1e",
                      "on-tertiary-fixed-variant": "#3f465c",
                      "error": "#ba1a1a",
                      "on-primary-fixed-variant": "#005048",
                      "secondary-container": "#d8e5e2",
                      "tertiary-fixed": "#dae2fd",
                      "surface-container-lowest": "#ffffff",
                      "background": "#f7f9fb",
                      "on-primary-fixed": "#00201c",
                      "primary-container": "#14b8a6",
                      "on-tertiary-fixed": "#131b2e",
                      "surface-container": "#eceef0",
                      "on-primary": "#ffffff",
                      "surface-bright": "#f7f9fb",
                      "surface-container-highest": "#e0e3e5",
                      "primary": "#006b5f",
                      "tertiary-container": "#9ca4bd",
                      "outline": "#6c7a77",
                      "on-secondary-container": "#5b6765",
                      "on-surface-variant": "#3c4947",
                      "on-error-container": "#93000a",
                      "error-container": "#ffdad6",
                      "tertiary-fixed-dim": "#bec6e0",
                      "surface-variant": "#e0e3e5",
                      "on-surface": "#191c1e",
                      "inverse-on-surface": "#eff1f3",
                      "inverse-primary": "#4fdbc8",
                      "on-tertiary": "#ffffff",
                      "on-error": "#ffffff",
                      "primary-fixed": "#71f8e4",
                      "on-secondary-fixed-variant": "#3d4947",
                      "surface-dim": "#d8dadc",
                      "tertiary": "#565e74",
                      "secondary": "#55615f",
                      "primary-fixed-dim": "#4fdbc8",
                      "on-tertiary-container": "#323a4f",
                      "surface-container-high": "#e6e8ea",
                      "on-secondary": "#ffffff",
                      "surface": "#f7f9fb",
                      "surface-container-low": "#f2f4f6",
                      "on-secondary-fixed": "#121e1c",
                      "secondary-fixed-dim": "#bcc9c6",
                      "surface-tint": "#006b5f",
                      "outline-variant": "#bbcac6",
                      "on-primary-container": "#00423b",
                      "inverse-surface": "#2d3133"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "gutter": "24px",
                      "margin": "32px",
                      "container-max": "1280px",
                      "base": "8px",
                      "stack-lg": "64px",
                      "stack-sm": "16px",
                      "stack-md": "32px"
              },
              "fontFamily": {
                      "label-sm": ["Inter"],
                      "body-lg": ["Inter"],
                      "body-md": ["Inter"],
                      "h3": ["Manrope"],
                      "label-xs": ["Inter"],
                      "h2": ["Manrope"],
                      "h1": ["Manrope"]
              },
              "fontSize": {
                      "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}]
              }
            },
          },
        }
    </script>
<style>
        body {
            background-color: #ffffff;
            color: #191c1e;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface-container-lowest font-body-md text-on-surface antialiased min-h-screen flex flex-col">
<!-- Global Header (TopAppBar Anchor) -->
<header class="w-full border-b border-slate-200 bg-white shadow-[0_20px_40px_rgba(0,0,0,0.04)] sticky top-0 z-50">
<div class="max-w-[1280px] mx-auto px-8 flex justify-between items-center h-20">
<div class="flex items-center gap-2">
<a href="{{ route('home') }}" class="text-2xl font-black tracking-tighter text-teal-500">TIX</a>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-grow flex items-center justify-center px-gutter py-stack-lg relative overflow-hidden">
<!-- Subtle background texture (Geometric Minimalist) -->
<div class="absolute inset-0 z-0 opacity-10 pointer-events-none">
<svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 100 100">
<defs>
<pattern height="10" id="grid" patternunits="userSpaceOnUse" width="10">
<path d="M 10 0 L 0 0 0 10" fill="none" stroke="#14B8A6" stroke-width="0.5"></path>
</pattern>
</defs>
<rect fill="url(#grid)" height="100%" width="100%"></rect>
</svg>
</div>
<!-- Login Card -->
<div class="relative z-10 w-full max-w-[440px] bg-white border border-slate-200 rounded-xl shadow-[0_20px_40px_rgba(0,0,0,0.04)] p-10 md:p-12">
<div class="text-center mb-10">
<h1 class="font-h2 text-h2 text-on-surface mb-2">Welcome back</h1>
<p class="font-body-md text-slate-500">Enter your credentials to access your tickets</p>
</div>
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
<form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
    @csrf
<!-- Email Field -->
<div class="flex flex-col gap-2">
<label class="font-label-xs text-label-xs text-slate-500 uppercase tracking-wider" for="email">Email Address</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-teal-500 transition-colors" data-icon="mail">mail</span>
<input class="w-full pl-12 pr-4 py-3 bg-white border border-slate-200 rounded-lg focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 font-body-md transition-all" id="email" name="email" placeholder="name@company.com" type="email"/>
</div>
</div>
<!-- Password Field -->
<div class="flex flex-col gap-2">
<div class="flex justify-between items-center">
<label class="font-label-xs text-label-xs text-slate-500 uppercase tracking-wider" for="password">Password</label>
<a class="font-label-xs text-label-xs text-teal-600 hover:underline" href="#">Forgot password?</a>
</div>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-teal-500 transition-colors" data-icon="lock">lock</span>
<input class="w-full pl-12 pr-4 py-3 bg-white border border-slate-200 rounded-lg focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 font-body-md transition-all" id="password" name="password" placeholder="••••••••" type="password"/>
</div>
</div>
<!-- Login Button -->
<button class="w-full bg-teal-500 text-white font-['Manrope'] font-bold py-4 rounded-lg shadow-sm hover:bg-teal-600 transition-all active:scale-[0.98] mt-4" type="submit">
Login
</button>
<!-- Divider -->
<div class="relative flex items-center justify-center my-8">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-slate-100"></div>
</div>
<span class="relative px-4 bg-white font-label-xs text-slate-400 uppercase tracking-widest">or</span>
</div>
<!-- Register Action -->
<div class="text-center">
<a href="{{ route('register') }}" class="w-full font-['Manrope'] font-semibold text-teal-500 py-3 border border-slate-200 rounded-lg hover:bg-teal-50 transition-all active:opacity-80" type="button">
Create an account
</a>
<p class="mt-6 font-label-sm text-slate-400">
                        By continuing, you agree to TIX's <a class="text-slate-900 underline underline-offset-4" href="#">Terms of Service</a>.
                    </p>
</div>
</form>
</div>
</main>
<!-- Footer Component -->
<footer class="w-full border-t border-slate-200 bg-white">
<div class="max-w-[1280px] mx-auto px-8 py-12 flex flex-col md:flex-row justify-between items-center gap-6">
<p class="font-['Manrope'] text-xs uppercase tracking-widest text-slate-400">© 2024 TIX International. Editorial Clarity.</p>
<div class="flex flex-wrap justify-center gap-8">
<a class="font-['Manrope'] text-xs uppercase tracking-widest text-slate-400 hover:text-teal-500 transition-colors" href="#">Privacy Policy</a>
<a class="font-['Manrope'] text-xs uppercase tracking-widest text-slate-400 hover:text-teal-500 transition-colors" href="#">Terms of Service</a>
<a class="font-['Manrope'] text-xs uppercase tracking-widest text-slate-400 hover:text-teal-500 transition-colors" href="#">Cookie Settings</a>
<a class="font-['Manrope'] text-xs uppercase tracking-widest text-slate-400 hover:text-teal-500 transition-colors" href="#">Press Kit</a>
</div>
</div>
</footer>
<!-- Image for decorative purposes - Hidden but descriptive as per requirements -->
<img alt="concert crowd with teal lights" class="hidden" data-alt="abstract view of a vibrant concert crowd illuminated by bright teal and turquoise stage lights in a dark venue" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTXBk-NIvTN2koSVFpECPg74BNUkZrhqe8kydu_Ud4EeUYqTWaP5usz2yZw1D_ZlmV71D8NmfWRQVSiJIfH6h9vzx5TpxZ1njrjOC18uI7I5SXYeQAKBO6aZ5zORc2RbcT2FPq5RypS5IJFWMOU7KzUCy5EDVcbKbciAKxOlRK2EcMQjR1gsDqniVAop6hBHJ39CF6q-5p_fA12oO0bjc7bj0VSQaBio9xMPmmFc8i8lWH-cNKvySkrVFjzzOrnsuQHV1moWooBPqC"/>
</body></html>