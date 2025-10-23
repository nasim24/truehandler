<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TrueHandler</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-blue-600">TrueHandler</h1>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/about" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                    <a href="/services" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <a href="/contact" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">Get Started</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-20 pb-16 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    About <span class="text-blue-600">TrueHandler</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    We are dedicated to transforming businesses through innovative service solutions and strategic optimization.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Founded in 2015, TrueHandler emerged from a simple yet powerful vision: to help businesses navigate complexity and achieve sustainable growth through intelligent service solutions.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        What started as a small consulting firm has evolved into a comprehensive service provider, trusted by organizations across various industries to optimize their operations, enhance team performance, and drive measurable results.
                    </p>
                    <p class="text-lg text-gray-600">
                        Today, we continue to innovate and adapt, ensuring our clients stay ahead in an ever-changing business landscape.
                    </p>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg">
                    <div class="grid grid-cols-2 gap-6 text-center">
                        <div>
                            <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                            <div class="text-gray-600">Projects Completed</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-blue-600 mb-2">200+</div>
                            <div class="text-gray-600">Happy Clients</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-blue-600 mb-2">9</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-blue-600 mb-2">25%</div>
                            <div class="text-gray-600">Average Cost Savings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mission & Vision</h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Our Mission</h3>
                    <p class="text-gray-600 text-center">
                        To empower businesses with innovative service solutions that streamline operations, enhance productivity, and drive sustainable growth while maintaining the highest standards of quality and integrity.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Our Vision</h3>
                    <p class="text-gray-600 text-center">
                        To be the leading provider of transformative service solutions, recognized globally for our ability to turn complex business challenges into opportunities for growth and success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    These principles guide everything we do and shape our relationships with clients and partners.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Excellence -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Excellence</h3>
                    <p class="text-gray-600">We strive for excellence in every project, delivering solutions that exceed expectations.</p>
                </div>

                <!-- Integrity -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Integrity</h3>
                    <p class="text-gray-600">Honesty and transparency form the foundation of all our client relationships.</p>
                </div>

                <!-- Innovation -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Innovation</h3>
                    <p class="text-gray-600">We embrace new technologies and methodologies to deliver cutting-edge solutions.</p>
                </div>

                <!-- Collaboration -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Collaboration</h3>
                    <p class="text-gray-600">We work closely with our clients as partners to achieve shared success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Leadership Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Our experienced leaders bring decades of expertise across various industries and disciplines.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CEO -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Sarah Johnson</h3>
                    <p class="text-blue-600 mb-3">Chief Executive Officer</p>
                    <p class="text-gray-600 text-sm">
                        With over 15 years in business optimization, Sarah leads TrueHandler's strategic vision and client relationships.
                    </p>
                </div>

                <!-- CTO -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Michael Chen</h3>
                    <p class="text-green-600 mb-3">Chief Technology Officer</p>
                    <p class="text-gray-600 text-sm">
                        Michael drives our technology initiatives and ensures we deliver cutting-edge solutions to our clients.
                    </p>
                </div>

                <!-- COO -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="w-24 h-24 bg-purple-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Emily Rodriguez</h3>
                    <p class="text-purple-600 mb-3">Chief Operations Officer</p>
                    <p class="text-gray-600 text-sm">
                        Emily oversees our operational excellence and ensures seamless project delivery across all client engagements.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Work with Us?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Let's discuss how TrueHandler can help transform your business operations and drive sustainable growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg text-lg font-semibold transition duration-300">
                    Get in Touch
                </a>
                <a href="/services" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg text-lg font-semibold transition duration-300">
                    View Our Services
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">TrueHandler</h3>
                    <p class="text-gray-300 mb-4">
                        Professional service solutions tailored to your business needs. We handle the complexity so you can focus on what matters most.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="/about" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="/services" class="text-gray-300 hover:text-white">Services</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>Email: info@truehandler.com</li>
                        <li>Phone: +1 (555) 123-4567</li>
                        <li>Address: 123 Business Ave, Suite 100</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 TrueHandler. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>