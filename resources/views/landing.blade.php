<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrueHandler - Professional Service Solutions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-primary-600">TrueHandler</h1>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary-600 transition duration-300">Home</a>
                    <a href="#services" class="text-gray-700 hover:text-primary-600 transition duration-300">Services</a>
                    <a href="#about" class="text-gray-700 hover:text-primary-600 transition duration-300">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary-600 transition duration-300">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="text-gray-700 hover:text-primary-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-16 bg-gradient-to-br from-primary-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Professional <span class="text-primary-600">Service Solutions</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    TrueHandler delivers exceptional service solutions tailored to your business needs. 
                    We handle the complexity so you can focus on what matters most.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#services" class="bg-primary-600 text-white px-8 py-3 rounded-lg hover:bg-primary-700 transition duration-300 font-semibold">
                        Our Services
                    </a>
                    <a href="#contact" class="border-2 border-primary-600 text-primary-600 px-8 py-3 rounded-lg hover:bg-primary-600 hover:text-white transition duration-300 font-semibold">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We provide comprehensive service solutions designed to streamline your operations and drive growth.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-primary-600 text-4xl mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Process Optimization</h3>
                    <p class="text-gray-600">
                        Streamline your business processes with our expert optimization strategies and implementation support.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-primary-600 text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Team Management</h3>
                    <p class="text-gray-600">
                        Enhance team productivity and collaboration with our proven management methodologies and tools.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-primary-600 text-4xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Performance Analytics</h3>
                    <p class="text-gray-600">
                        Gain valuable insights into your business performance with our comprehensive analytics solutions.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-primary-600 text-4xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Security Solutions</h3>
                    <p class="text-gray-600">
                        Protect your business with our robust security frameworks and compliance management services.
                    </p>
                </div>

                <!-- Service 5 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-primary-600 text-4xl mb-4">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Cloud Integration</h3>
                    <p class="text-gray-600">
                        Seamlessly migrate and integrate your systems with modern cloud infrastructure solutions.
                    </p>
                </div>

                <!-- Service 6 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="text-primary-600 text-4xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">24/7 Support</h3>
                    <p class="text-gray-600">
                        Round-the-clock support and maintenance services to ensure your operations run smoothly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About TrueHandler</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        With over a decade of experience in service excellence, TrueHandler has been the trusted partner 
                        for businesses looking to optimize their operations and achieve sustainable growth.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Our team of experts combines industry knowledge with innovative solutions to deliver results 
                        that exceed expectations. We believe in building long-term partnerships based on trust, 
                        transparency, and measurable outcomes.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">500+</div>
                            <div class="text-gray-600">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">98%</div>
                            <div class="text-gray-600">Client Satisfaction</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">10+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                            <div class="text-gray-600">Support Available</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Why Choose Us?</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="text-primary-600 text-xl mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Expert Team</h4>
                                <p class="text-gray-600">Certified professionals with extensive industry experience</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-primary-600 text-xl mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Proven Results</h4>
                                <p class="text-gray-600">Track record of successful implementations and satisfied clients</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="text-primary-600 text-xl mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Custom Solutions</h4>
                                <p class="text-gray-600">Tailored approaches designed specifically for your business needs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Ready to transform your business? Contact us today for a free consultation.
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary-600 text-white py-3 rounded-lg hover:bg-primary-700 transition duration-300 font-semibold">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-primary-600 text-xl mr-4 mt-1">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Address</h4>
                                    <p class="text-gray-600">123 Business Street<br>Suite 100<br>City, State 12345</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="text-primary-600 text-xl mr-4 mt-1">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Phone</h4>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="text-primary-600 text-xl mr-4 mt-1">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600">info@truehandler.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="text-primary-600 text-xl mr-4 mt-1">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Business Hours</h4>
                                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-primary-50 p-6 rounded-xl">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-2xl">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-2xl">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-2xl">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-primary-600 hover:text-primary-700 text-2xl">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">TrueHandler</h3>
                    <p class="text-gray-400 mb-4">
                        Professional service solutions that drive business success. 
                        We handle the complexity so you can focus on growth.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300">Services</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Process Optimization</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Team Management</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Analytics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 TrueHandler. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Smooth Scrolling Script -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>