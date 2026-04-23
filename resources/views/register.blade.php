<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
            "tertiary-container": "#9ca4bd",
            "surface-container-low": "#f2f4f6",
            "outline-variant": "#bbcac6",
            "surface-bright": "#f7f9fb",
            "inverse-primary": "#4fdbc8",
            "surface-dim": "#d8dadc",
            "on-background": "#191c1e",
            "on-tertiary-fixed-variant": "#3f465c",
            "surface-container-highest": "#e0e3e5",
            "surface-container-high": "#e6e8ea",
            "secondary-fixed-dim": "#bcc9c6",
            "surface-tint": "#006b5f",
            "secondary": "#55615f",
            "tertiary-fixed-dim": "#bec6e0",
            "surface-variant": "#e0e3e5",
            "on-error": "#ffffff",
            "on-secondary-fixed-variant": "#3d4947",
            "on-primary-fixed-variant": "#005048",
            "surface": "#f7f9fb",
            "tertiary": "#565e74",
            "surface-container-lowest": "#ffffff",
            "on-tertiary-container": "#323a4f",
            "primary-fixed": "#71f8e4",
            "on-primary-fixed": "#00201c",
            "on-primary": "#ffffff",
            "background": "#f7f9fb",
            "outline": "#6c7a77",
            "on-secondary-fixed": "#121e1c",
            "on-secondary-container": "#5b6765",
            "inverse-on-surface": "#eff1f3",
            "on-primary-container": "#00423b",
            "inverse-surface": "#2d3133",
            "primary-fixed-dim": "#4fdbc8",
            "on-tertiary-fixed": "#131b2e",
            "primary": "#006b5f",
            "secondary-fixed": "#d8e5e2",
            "on-tertiary": "#ffffff",
            "error": "#ba1a1a",
            "on-secondary": "#ffffff",
            "on-surface-variant": "#3c4947",
            "on-surface": "#191c1e",
            "surface-container": "#eceef0",
            "error-container": "#ffdad6",
            "primary-container": "#14b8a6",
            "tertiary-fixed": "#dae2fd",
            "secondary-container": "#d8e5e2",
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
            "base": "8px",
            "container-max": "1280px",
            "stack-md": "32px",
            "gutter": "24px",
            "stack-lg": "64px",
            "margin": "32px"
          },
          "fontFamily": {
            "label-sm": ["Inter"],
            "h3": ["Manrope"],
            "body-md": ["Inter"],
            "h2": ["Manrope"],
            "body-lg": ["Inter"],
            "label-xs": ["Inter"],
            "h1": ["Manrope"]
          },
          "fontSize": {
            "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "500"}],
            "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
            "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
            "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
            "label-xs": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
            "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}]
          }
        },
      },
    }
  </script>
<style>
    .grid-bg {
      background-image: linear-gradient(to right, #E2E8F0 1px, transparent 1px),
                        linear-gradient(to bottom, #E2E8F0 1px, transparent 1px);
      background-size: 40px 40px;
    }
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen flex flex-col relative overflow-x-hidden">
<!-- Minimal Header as per JSON/Instruction -->
<header class="fixed top-0 w-full z-50 bg-white border-b border-slate-100 h-20 px-8 flex items-center justify-center">
<div class="max-w-[1280px] w-full flex items-center justify-between">
<a href="{{ route('home') }}" class="text-2xl font-black tracking-tighter text-teal-500">TIX</a>
<!-- Empty space to maintain center-logo logic if needed, but here we just keep it clean -->
<div class="hidden md:block"></div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-grow pt-20 flex items-center justify-center relative">
<!-- Grid Background -->
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
<section class="relative z-10 w-full max-w-[480px] px-margin py-stack-lg">
<div class="bg-white border border-slate-200 rounded-xl p-stack-md shadow-[0_20px_40px_rgba(0,0,0,0.04)]">
<!-- Header Text -->
<div class="text-center mb-stack-md">
<h1 class="font-h2 text-h2 mb-2">Create your account</h1>
<p class="font-body-md text-on-surface-variant">Join the community for premium event access.</p>
</div>
<!-- Registration Form -->
<form method="POST" action="{{ route('register') }}" class="space-y-gutter">
@csrf
<!-- Full Name -->
<div>
<label class="block font-label-xs text-label-xs text-on-surface-variant mb-2" for="fullname">Full Name</label>
<input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-1 focus:ring-primary-container focus:border-primary-container outline-none transition-all placeholder:text-slate-400" id="fullname" placeholder="John Doe" type="text" name="user_name"/>
</div>
<!-- Phone Number -->
<div>
<label class="block font-label-xs text-label-xs text-on-surface-variant mb-2" for="phone">Phone Number</label>
<input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-1 focus:ring-primary-container focus:border-primary-container outline-none transition-all placeholder:text-slate-400" id="phone" placeholder="+1 (555) 000-0000" type="tel" name="phone"/>
</div>
<!-- Email -->
<div>
<label class="block font-label-xs text-label-xs text-on-surface-variant mb-2" for="email">Email Address</label>
<input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-1 focus:ring-primary-container focus:border-primary-container outline-none transition-all placeholder:text-slate-400" id="email" placeholder="name@example.com" type="email" name="email"/>
</div>
<!-- Password Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block font-label-xs text-label-xs text-on-surface-variant mb-2" for="password">Password</label>
<div class="relative">
<input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-1 focus:ring-primary-container focus:border-primary-container outline-none transition-all placeholder:text-slate-400" id="password" placeholder="••••••••" type="password" name="password"/>
</div>
</div>
<div>
<label class="block font-label-xs text-label-xs text-on-surface-variant mb-2" for="confirm-password">Confirm Password</label>
<div class="relative">
<input class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:ring-1 focus:ring-primary-container focus:border-primary-container outline-none transition-all placeholder:text-slate-400" id="confirm-password" placeholder="••••••••" type="password" name="password_confirmation"/>
</div>
</div>
</div>
<!-- Primary Action -->
<div class="pt-2">
<button class="w-full bg-primary-container text-white font-label-sm text-label-sm py-4 rounded-lg hover:opacity-90 active:scale-[0.98] transition-all shadow-sm" type="submit">
              Register
            </button>
</div>
</form>
<!-- Footer Link -->
<div class="mt-stack-md text-center">
<p class="font-body-md text-on-surface-variant">
    Already have an account? 
    <a class="text-primary-container font-semibold hover:underline" href="{{ route('login') }}">Log in</a>
</p>
</div>
</div>
<!-- Legal Footnote -->
<p class="mt-gutter text-center font-label-xs text-label-xs text-slate-400 px-6">
        By registering, you agree to our <a class="underline hover:text-primary" href="#">Terms of Service</a> and <a class="underline hover:text-primary" href="#">Privacy Policy</a>.
      </p>
</section>
</main>
<!-- Footer as per JSON -->
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
</body></html>