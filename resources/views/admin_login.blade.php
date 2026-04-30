<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Login | TIX</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#131b2e",
                        "on-surface-variant": "#3c4947",
                        "error-container": "#ffdad6",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-highest": "#e0e3e5",
                        "tertiary": "#565e74",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed-variant": "#005048",
                        "on-error": "#ffffff",
                        "secondary-fixed-dim": "#bcc9c6",
                        "error": "#ba1a1a",
                        "surface": "#f7f9fb",
                        "on-primary": "#ffffff",
                        "on-surface": "#191c1e",
                        "on-primary-fixed": "#00201c",
                        "secondary": "#55615f",
                        "primary-container": "#14b8a6",
                        "background": "#f7f9fb",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "on-secondary-fixed": "#121e1c",
                        "secondary-fixed": "#d8e5e2",
                        "surface-variant": "#e0e3e5",
                        "primary-fixed-dim": "#4fdbc8",
                        "secondary-container": "#d8e5e2",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#5b6765",
                        "inverse-primary": "#4fdbc8",
                        "surface-bright": "#f7f9fb",
                        "tertiary-fixed": "#dae2fd",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#006b5f",
                        "on-background": "#191c1e",
                        "tertiary-container": "#9ca4bd",
                        "outline-variant": "#bbcac6",
                        "surface-container": "#eceef0",
                        "outline": "#6c7a77",
                        "on-secondary-fixed-variant": "#3d4947",
                        "inverse-on-surface": "#eff1f3",
                        "surface-container-high": "#e6e8ea",
                        "surface-dim": "#d8dadc",
                        "on-tertiary-container": "#323a4f",
                        "tertiary-fixed-dim": "#bec6e0",
                        "inverse-surface": "#2d3133",
                        "primary-fixed": "#71f8e4",
                        "primary": "#006b5f",
                        "on-primary-container": "#00423b",
                        "on-error-container": "#93000a"
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
                        "stack-lg": "64px",
                        "margin": "32px",
                        "container-max": "1280px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "h1": ["Manrope"],
                        "label-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "h2": ["Manrope"],
                        "label-xs": ["Inter"],
                        "h3": ["Manrope"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .grid-pattern {
            background-image: radial-gradient(circle, #cbd5e1 1px, transparent 1px);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-background selection:bg-primary-container selection:text-on-primary-container">
<!-- TopAppBar Shell (Transactional/Focused State: Navigation Suppressed) -->
<header class="bg-white/80 dark:bg-slate-950/80 backdrop-blur-md font-manrope antialiased tracking-tight docked full-width top-0 sticky z-50 border-b border-slate-200 dark:border-slate-800 shadow-sm shadow-slate-100/50 dark:shadow-none">
<div class="flex items-center justify-center h-16 w-full max-w-7xl mx-auto px-8">
<div class="text-xl font-bold tracking-widest text-slate-900 dark:text-white"><span class="text-2xl font-black tracking-tighter text-teal-500">TIX</span></div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="min-h-[calc(100vh-64px-136px)] flex items-center justify-center py-stack-lg px-margin relative overflow-hidden grid-pattern">
<!-- Background Aesthetic Ornament (Decorative Only) -->
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
<!-- Login Card -->
<div class="relative w-full max-w-md bg-surface-container-lowest border border-slate-200 rounded-xl shadow-2xl shadow-slate-200/50 p-stack-md transition-all duration-300">
<div class="flex flex-col gap-stack-sm text-center mb-stack-md">
<h1 class="font-h2 text-h2 text-on-surface">Admin Login</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Enter your credentials to access the management suite.</p>
</div>
@if ($errors->any())
    <div class="mb-4 text-red-600 text-sm">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-stack-sm">
    @csrf
<!-- Admin Email Field -->
<div class="space-y-base">
<label class="font-label-xs text-label-xs text-outline uppercase tracking-wider" for="admin-email">Admin Email</label>
<div class="relative group">
<input
    id="admin-email"
    name="email"
    placeholder="name@tix.com"
    type="email"
    required
    class="w-full h-12 px-4 rounded-lg border border-slate-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all text-body-md font-body-md placeholder:text-slate-400"
/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors" data-icon="mail">mail</span>
</div>
</div>
<!-- Password Field -->
<div class="space-y-base">
<label class="font-label-xs text-label-xs text-outline uppercase tracking-wider" for="admin-password">Password</label>
<div class="relative group">
<input
    id="admin-password"
    name="password"
    placeholder="••••••••"
    type="password"
    required
    class="w-full h-12 px-4 rounded-lg border border-slate-200 bg-white focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all text-body-md font-body-md placeholder:text-slate-400"
/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors" data-icon="lock">lock</span>
</div>
</div>
<!-- Action Button -->
<button class="w-full h-12 mt-stack-sm bg-primary-container text-white font-label-sm text-label-sm rounded-lg hover:bg-primary transition-all duration-200 flex items-center justify-center gap-2 group shadow-lg shadow-primary-container/20" type="submit">
                    Login to Dashboard
                    <span class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<div class="mt-stack-md pt-stack-sm border-t border-slate-100 text-center">
<a class="font-label-sm text-label-sm text-primary hover:text-on-primary-fixed-variant transition-colors" href="#">Forgot your password?</a>
</div>
</div>
</main>
<!-- Footer Shell -->
<footer class="bg-white dark:bg-slate-950 full-width py-12 border-t border-slate-200 dark:border-slate-800 transition-all duration-300">
<div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="font-manrope text-sm text-slate-500 dark:text-slate-400">
                © 2024 TIX International. All rights reserved.
            </div>
</div>
</footer>
</body></html>