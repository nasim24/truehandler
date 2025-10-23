<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TrueHandler</title>
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
                    <a href="/about" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                    <a href="/services" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="/contact" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
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
                    Get In <span class="text-blue-600">Touch</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Ready to transform your business? Contact us today for a free consultation and discover how we can help optimize your operations.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                            <input type="text" id="company" name="company"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                            <select id="service" name="service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select a service</option>
                                <option value="process_optimization">Process Optimization</option>
                                <option value="team_management">Team Management Solutions</option>
                                <option value="performance_analytics">Performance Analytics</option>
                                <option value="security_compliance">Security & Compliance</option>
                                <option value="consultation">General Consultation</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Project Budget</label>
                            <select id="budget" name="budget"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select budget range</option>
                                <option value="under_5k">Under $5,000</option>
                                <option value="5k_10k">$5,000 - $10,000</option>
                                <option value="10k_25k">$10,000 - $25,000</option>
                                <option value="25k_50k">$25,000 - $50,000</option>
                                <option value="over_50k">Over $50,000</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Tell us about your project and how we can help..."></textarea>
                        </div>
                        
                        <div class="flex items-center">
                            <input id="newsletter" name="newsletter" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                                Subscribe to our newsletter for industry insights and updates
                            </label>
                        </div>
                        
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Details -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600">info@truehandler.com</p>
                                    <p class="text-gray-600">support@truehandler.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900">Phone</h4>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                    <p class="text-gray-600">+1 (555) 987-6543</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900">Address</h4>
                                    <p class="text-gray-600">123 Business Avenue</p>
                                    <p class="text-gray-600">Suite 100, New York, NY 10001</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900">Business Hours</h4>
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                    <p class="text-gray-600">Saturday: 10:00 AM - 4:00 PM</p>
                                    <p class="text-gray-600">Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Response -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Quick Response Guarantee</h3>
                        <p class="text-gray-700 mb-4">
                            We understand that time is valuable. That's why we guarantee a response to all inquiries within 24 hours during business days.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                24-hour response guarantee
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Free initial consultation
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Customized solution proposals
                            </li>
                        </ul>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Emergency Support</h3>
                        <p class="text-gray-700 mb-4">
                            For urgent matters requiring immediate attention, our emergency support line is available 24/7 for existing clients.
                        </p>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-900">Emergency Hotline</p>
                                <p class="text-red-600 font-bold">+1 (555) 911-HELP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Find answers to common questions about our services and process.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">How long does a typical project take?</h3>
                    <p class="text-gray-600">Project timelines vary based on scope and complexity. Most optimization projects take 4-12 weeks, while comprehensive transformations may take 3-6 months.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you work with small businesses?</h3>
                    <p class="text-gray-600">Absolutely! We offer scalable solutions for businesses of all sizes, from startups to enterprise organizations. Our Starter package is designed specifically for small businesses.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">What industries do you serve?</h3>
                    <p class="text-gray-600">We work across various industries including technology, healthcare, finance, manufacturing, retail, and professional services. Our solutions are adaptable to any business model.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Is there ongoing support after project completion?</h3>
                    <p class="text-gray-600">Yes, we provide ongoing support and maintenance packages to ensure your optimized processes continue to deliver results. Support levels vary by package.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Don't wait to transform your business. Contact us today and take the first step towards optimized operations and improved performance.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact-form" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg text-lg font-semibold transition duration-300">
                    Send Message Now
                </a>
                <a href="tel:+15551234567" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg text-lg font-semibold transition duration-300">
                    Call Us Today
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