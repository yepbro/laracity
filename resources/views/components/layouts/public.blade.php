<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ strtoupper(app()->getLocale()) }} {{ config()->string('app.name') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet" />
</head>
<body class="bg-background text-foreground antialiased">
<header class="fixed top-0 right-0 left-0 z-50 bg-transparent py-8 px-8 transition-all duration-300 ease-in-out">
    <div class="magazine-container">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="font-serif text-xl font-medium tracking-tight md:text-2xl"> ESSENCE </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden items-center space-x-8 md:flex">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Features</a>
                <a href="#" class="nav-link">Culture</a>
                <a href="#" class="nav-link">Style</a>
                <a href="#" class="nav-link">About</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="p-2 md:hidden" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</header>

<main class="px-8">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="border-t bg-white px-8">
    <div class="magazine-container py-16">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
            <div class="md:col-span-2">
                <a href="/" class="mb-4 inline-block font-serif text-2xl font-medium tracking-tight"> ESSENCE </a>
                <p class="text-muted-foreground mb-6 max-w-md">A curated magazine exploring design, culture, and thoughtful living. We showcase stories that inspire and connect.</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-primary text-gray-600 transition-colors" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-primary text-gray-600 transition-colors" aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" /></svg>
                    </a>
                    <a href="#" class="hover:text-primary text-gray-600 transition-colors" aria-label="Pinterest">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" x2="12" y1="8" y2="16" />
                            <line x1="18" x2="18" y1="12" y2="16" />
                            <line x1="6" x2="6" y1="12" y2="16" />
                            <line x1="6" x2="6" y1="12" y2="12" />
                            <path d="M6 12a6 6 0 0 0 12 0c0-5-6-8-6-8-6 3-6 8-6 8Z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="mb-4 text-sm font-medium tracking-wider uppercase">Explore</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Home</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Features</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Culture</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Style</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Photography</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Travel</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Archive</a></li>
                </ul>
            </div>

            <div>
                <h3 class="mb-4 text-sm font-medium tracking-wider uppercase">Information</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">About</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Contact</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Advertise</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Careers</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Terms of Use</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary text-sm transition-colors">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="border-t">
        <div class="magazine-container flex flex-col items-center justify-between py-6 md:flex-row">
            <p class="text-muted-foreground mb-4 text-sm md:mb-0">&copy; 2023 ESSENCE Magazine. All rights reserved.</p>
            <button class="group inline-flex items-center text-sm font-medium">
                Back to top
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 transition-transform group-hover:-translate-y-1">
                    <line x1="12" y1="19" x2="12" y2="5"></line>
                    <polyline points="5 12 12 5 19 12"></polyline>
                </svg>
            </button>
        </div>
    </div>
</footer>

<!-- Mobile Navigation Overlay -->
<div class="fixed inset-0 z-40 translate-x-full transform bg-white transition-transform duration-300 ease-in-out">
    <div class="flex h-full flex-col items-center justify-center space-y-8 p-8">
        <button class="absolute top-8 right-8" aria-label="Close menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <a href="#" class="text-2xl font-medium">Home</a>
        <a href="#" class="text-2xl font-medium">Features</a>
        <a href="#" class="text-2xl font-medium">Culture</a>
        <a href="#" class="text-2xl font-medium">Style</a>
        <a href="#" class="text-2xl font-medium">About</a>
    </div>
</div>

<!-- JavaScript for interactive elements -->
<script>
    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (header) {
            if (window.scrollY > 50) {
                header.classList.add('bg-white', 'shadow-sm');
                header.classList.remove('bg-transparent');
            } else {
                header.classList.add('bg-transparent');
                header.classList.remove('bg-white', 'shadow-sm');
            }
        }
    });

    // Mobile menu toggle
    const menuButton = document.querySelector('button[aria-label="Toggle menu"]');
    const closeButton = document.querySelector('button[aria-label="Close menu"]');
    const mobileNav = document.querySelector('.fixed.inset-0.z-40');

    if (menuButton && closeButton && mobileNav) {
        menuButton.addEventListener('click', function() {
            mobileNav.classList.remove('translate-x-full');
        });

        closeButton.addEventListener('click', function() {
            mobileNav.classList.add('translate-x-full');
        });
    }

    // Back to top button
    const backToTopButton = document.querySelector('button.group');
    if (backToTopButton) {
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
</script>
</body>
</html>
