<x-layouts.public-app>
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-32 pb-20">
        <div class="magazine-container">
            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                <div class="animate-fade-in">
                    <div class="mb-5">
                        <span class="bg-primary/5 text-primary inline-block rounded-full px-3 py-1 text-xs tracking-widest uppercase"> Featured Story </span>
                    </div>
                    <h1 class="mb-6 font-serif text-4xl leading-tight font-medium md:text-5xl lg:text-6xl">The Evolution of Sustainable Fashion</h1>
                    <p class="text-muted-foreground mb-8 max-w-lg text-lg text-balance">How innovative designers are redefining luxury through environmental consciousness and ethical practices.</p>
                    <a href="#" class="group inline-flex items-center text-sm font-medium tracking-wider uppercase">
                        Read Article
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 transition-transform group-hover:translate-x-1">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>

                <div class="animate-scale-in relative">
                    <div class="overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80" alt="Sustainable Fashion" class="h-[500px] w-full object-cover transition-transform duration-700 ease-in-out hover:scale-105" />
                    </div>
                    <div class="glass-effect absolute right-4 bottom-4 rounded-md p-3 text-xs">Photography by <span class="font-medium">Sarah Williams</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Grid Section -->
    <section class="bg-secondary/30 py-20">
        <div class="magazine-container">
            <div class="mb-12 flex items-end justify-between">
                <div>
                    <h2 class="mb-2 font-serif text-3xl font-medium">Latest Articles</h2>
                    <p class="text-muted-foreground max-w-xl">Insights and stories that capture the essence of contemporary culture.</p>
                </div>
                <a href="#" class="group hidden items-center text-sm font-medium tracking-wider uppercase md:inline-flex">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 transition-transform group-hover:translate-x-1">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
                <!-- Article Card 1 -->
                <article class="article-card overflow-hidden rounded-lg">
                    <a href="#" class="block">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1493809842364-b78817add7ffb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Slow Living" class="h-64 w-full object-cover" />
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <span class="text-primary text-xs font-medium tracking-wider uppercase"> Lifestyle </span>
                            </div>
                            <h3 class="mb-3 font-serif text-xl font-medium">The Art of Slow Living in Modern Cities</h3>
                            <p class="text-muted-foreground mb-4 text-sm">Exploring how urban dwellers are embracing mindfulness and intentional living amidst the chaos.</p>
                            <div class="text-muted-foreground flex items-center justify-between text-xs">
                                <span>Emma Chen</span>
                                <span>May 23, 2023</span>
                            </div>
                        </div>
                    </a>
                </article>

                <!-- Article Card 2 -->
                <article class="article-card overflow-hidden rounded-lg">
                    <a href="#" class="block">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1495195134817-aeb325a55b65?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" alt="Culinary Traditions" class="h-64 w-full object-cover" />
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <span class="text-primary text-xs font-medium tracking-wider uppercase"> Food </span>
                            </div>
                            <h3 class="mb-3 font-serif text-xl font-medium">Culinary Traditions Reimagined</h3>
                            <p class="text-muted-foreground mb-4 text-sm">How chefs are preserving cultural heritage while innovating with modern techniques.</p>
                            <div class="text-muted-foreground flex items-center justify-between text-xs">
                                <span>Marcus Johnson</span>
                                <span>April 15, 2023</span>
                            </div>
                        </div>
                    </a>
                </article>

                <!-- Article Card 3 -->
                <article class="article-card overflow-hidden rounded-lg">
                    <a href="#" class="block">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517142089942-ba376ce32a2e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Digital Craftsmanship" class="h-64 w-full object-cover" />
                        </div>
                        <div class="p-6">
                            <div class="mb-3">
                                <span class="text-primary text-xs font-medium tracking-wider uppercase"> Design </span>
                            </div>
                            <h3 class="mb-3 font-serif text-xl font-medium">The New Era of Digital Craftsmanship</h3>
                            <p class="text-muted-foreground mb-4 text-sm">Artisans embracing technology to create unique pieces that blur the line between traditional and digital.</p>
                            <div class="text-muted-foreground flex items-center justify-between text-xs">
                                <span>Nicole Patel</span>
                                <span>June 7, 2023</span>
                            </div>
                        </div>
                    </a>
                </article>
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="#" class="group inline-flex items-center text-sm font-medium tracking-wider uppercase">
                    View All Articles
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 transition-transform group-hover:translate-x-1">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Carousel Section -->
    <section class="py-20">
        <div class="magazine-container">
            <div class="mb-8 flex flex-col items-start justify-between md:flex-row md:items-end">
                <div>
                    <h2 class="mb-2 font-serif text-3xl font-medium">Editor's Picks</h2>
                    <p class="text-muted-foreground max-w-xl">Carefully selected stories that showcase exceptional creativity and insight.</p>
                </div>
                <div class="mt-4 flex space-x-2 md:mt-0">
                    <button class="hover:bg-secondary rounded-full border p-2 transition-colors duration-200" aria-label="Previous slide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                    </button>
                    <button class="hover:bg-secondary rounded-full border p-2 transition-colors duration-200" aria-label="Next slide">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="relative overflow-hidden">
                <div class="flex">
                    <div class="min-w-full">
                        <div class="grid grid-cols-1 items-center gap-8 md:grid-cols-2">
                            <div class="overflow-hidden rounded-lg">
                                <img src="https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="The Architecture of Light" class="h-[400px] w-full object-cover md:h-[500px]" />
                            </div>
                            <div class="md:pl-8">
                                <div class="mb-4">
                                    <span class="bg-primary/5 text-primary inline-block rounded-full px-3 py-1 text-xs tracking-widest uppercase"> Design </span>
                                </div>
                                <h3 class="mb-6 font-serif text-3xl leading-tight font-medium md:text-4xl">The Architecture of Light</h3>
                                <p class="text-muted-foreground mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel risus sed metus faucibus auctor. Nulla facilisi. Vestibulum vel tortor at quam elementum consequat.</p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="bg-secondary mr-3 h-10 w-10 rounded-full"></div>
                                        <span class="text-sm">Alex Honnold</span>
                                    </div>
                                    <a href="#" class="group inline-flex items-center text-sm font-medium tracking-wider uppercase">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 transition-transform group-hover:translate-x-1">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute right-0 bottom-0 left-0 flex justify-center space-x-2 pb-4">
                    <button class="bg-primary h-2 w-6 rounded-full" aria-label="Go to slide 1"></button>
                    <button class="h-2 w-2 rounded-full bg-gray-300" aria-label="Go to slide 2"></button>
                    <button class="h-2 w-2 rounded-full bg-gray-300" aria-label="Go to slide 3"></button>
                    <button class="h-2 w-2 rounded-full bg-gray-300" aria-label="Go to slide 4"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-primary text-primary-foreground py-20">
        <div class="magazine-container text-center">
            <div class="mx-auto max-w-2xl">
                <span class="mb-3 inline-block text-xs tracking-widest uppercase opacity-80"> Stay Updated </span>
                <h2 class="mb-6 font-serif text-3xl font-medium md:text-4xl">Subscribe to Our Newsletter</h2>
                <p class="text-primary-foreground/80 mx-auto mb-8 max-w-lg">Join our community of readers and receive the latest stories, interviews, and insights delivered directly to your inbox.</p>

                <form class="mx-auto flex max-w-md flex-col gap-3 sm:flex-row">
                    <input type="email" placeholder="Your email address" class="bg-primary-foreground/10 text-primary-foreground border-primary-foreground/20 focus:ring-primary-foreground/30 placeholder:text-primary-foreground/50 flex-grow rounded-md border px-4 py-3 focus:ring-2 focus:outline-none" required />
                    <button type="submit" class="group bg-primary-foreground text-primary hover:bg-primary-foreground/90 inline-flex items-center justify-center rounded-md px-5 py-3 font-medium transition-all">
                        Subscribe
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 transition-transform group-hover:translate-x-1">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </form>

                <p class="text-primary-foreground/60 mt-6 text-xs">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </section>
</x-layouts.public-app>
