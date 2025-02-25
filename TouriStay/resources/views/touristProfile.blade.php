<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Tripster</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .module {
            display: none;
        }
        .module-active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-relaxed min-h-screen">
<!-- Sidebar Navigation -->
<div id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg p-6 flex flex-col justify-between z-50 sidebar md:translate-x-0 sidebar-hidden">
    <div>
        <div class="text-2xl font-bold text-blue-600 mb-10">Tripster</div>
        <nav class="space-y-4">
            <a href="#" data-module="profile" class="flex items-center px-4 py-2 text-gray-700 bg-blue-50 text-blue-600 rounded-lg transition-all sidebar-link">
                <i class="fas fa-user mr-3 text-blue-600"></i> Profile
            </a>
            <a href="#" data-module="bookings" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all sidebar-link">
                <i class="fas fa-ticket-alt mr-3 text-blue-600"></i> Bookings
            </a>
            <a href="#" data-module="preferences" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all sidebar-link">
                <i class="fas fa-heart mr-3 text-blue-600"></i> Preferences
            </a>
            <a href="#" data-module="settings" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all sidebar-link">
                <i class="fas fa-cog mr-3 text-blue-600"></i> Settings
            </a>
        </nav>
    </div>
    <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition-all">
        <i class="fas fa-sign-out-alt mr-3 text-red-600"></i> Logout
    </a>
</div>

<!-- Main Content -->
<div class="flex-1 md:ml-64 p-4 md:p-8">
    <!-- Hamburger Menu (Visible on Mobile) -->
    <div class="md:hidden flex justify-between items-center mb-4">
        <button id="toggleSidebar" class="text-2xl text-blue-600 focus:outline-none">
            <i class="fas fa-bars"></i>
        </button>
        <div class="text-2xl font-bold text-blue-600">Tripster</div>
    </div>

    <!-- Profile Module -->
    <div id="profile" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl p-6 module module-active">
        <div class="flex flex-col items-center md:flex-row md:items-start space-y-6 md:space-y-0 md:space-x-8">
            <!-- Profile Picture -->
            <div class="flex-shrink-0 text-center">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="w-24 h-24 sm:w-32 sm:h-32 rounded-full border-4 border-blue-600 object-cover mx-auto">
                <button class="mt-4 w-full max-w-xs py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
                    Edit Photo
                </button>
            </div>
            <!-- Profile Info -->
            <div class="flex-1">
                <h2 class="text-2xl sm:text-3xl font-semibold text-gray-800 mb-2 text-center md:text-left">John Doe</h2>
                <p class="text-gray-600 mb-4 text-center md:text-left">john.doe@example.com</p>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <h3 class="text-base sm:text-lg font-medium text-gray-700 flex items-center justify-center md:justify-start">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Location
                        </h3>
                        <p class="text-gray-600 text-center md:text-left">New York, USA</p>
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg font-medium text-gray-700 flex items-center justify-center md:justify-start">
                            <i class="fas fa-phone mr-2 text-blue-600"></i> Phone
                        </h3>
                        <p class="text-gray-600 text-center md:text-left">+1 555-123-4567</p>
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg font-medium text-gray-700 flex items-center justify-center md:justify-start">
                            <i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Joined
                        </h3>
                        <p class="text-gray-600 text-center md:text-left">February 25, 2023</p>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <button class="mt-6 py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bookings Module -->
    <div id="bookings" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl p-6 module">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-6 text-center sm:text-left">Your Bookings</h2>
        <div class="space-y-6">
            <div class="flex flex-col items-center sm:flex-row sm:items-start justify-between p-4 bg-gray-50 rounded-lg">
                <div class="mb-4 sm:mb-0 text-center sm:text-left">
                    <h3 class="text-base sm:text-lg font-medium text-gray-700">Villa Sunshine</h3>
                    <p class="text-sm text-gray-600">Barcelona, Spain</p>
                    <p class="text-xs sm:text-sm text-gray-500">Check-in: March 10, 2025 - Check-out: March 15, 2025</p>
                </div>
                <button class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105">View Details</button>
            </div>
            <div class="flex flex-col items-center sm:flex-row sm:items-start justify-between p-4 bg-gray-50 rounded-lg">
                <div class="mb-4 sm:mb-0 text-center sm:text-left">
                    <h3 class="text-base sm:text-lg font-medium text-gray-700">City Loft</h3>
                    <p class="text-sm text-gray-600">London, UK</p>
                    <p class="text-xs sm:text-sm text-gray-500">Check-in: April 5, 2025 - Check-out: April 8, 2025</p>
                </div>
                <button class="py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105">View Details</button>
            </div>
        </div>
    </div>

    <!-- Preferences Module -->
    <div id="preferences" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl p-6 module">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-6 text-center sm:text-left">Travel Preferences</h2>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <h3 class="text-base sm:text-lg font-medium text-gray-700 flex items-center justify-center sm:justify-start">
                    <i class="fas fa-plane mr-2 text-blue-600"></i> Preferred Destinations
                </h3>
                <p class="text-gray-600 text-center sm:text-left">Europe, Beach Resorts</p>
            </div>
            <div>
                <h3 class="text-base sm:text-lg font-medium text-gray-700 flex items-center justify-center sm:justify-start">
                    <i class="fas fa-bed mr-2 text-blue-600"></i> Accommodation Type
                </h3>
                <p class="text-gray-600 text-center sm:text-left">Hotels, Villas</p>
            </div>
            <div>
                <h3 class="text-base sm:text-lg font-medium text-gray-700 flex items-center justify-center sm:justify-start">
                    <i class="fas fa-clock mr-2 text-blue-600"></i> Travel Season
                </h3>
                <p class="text-gray-600 text-center sm:text-left">Summer, Spring</p>
            </div>
        </div>
        <div class="text-center sm:text-left">
            <button class="mt-6 py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105">
                Update Preferences
            </button>
        </div>
    </div>

    <!-- Settings Module (Placeholder) -->
    <div id="settings" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl p-6 module">
        <h2 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-6 text-center sm:text-left">Settings</h2>
        <p class="text-gray-600 text-center sm:text-left">Settings content goes here.</p>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white px-4 py-8 sm:px-20 sm:py-12 mt-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-8 mb-8">
        <div>
            <h4 class="text-lg font-semibold mb-4 text-center sm:text-left">About Tripster</h4>
            <ul class="space-y-2 text-center sm:text-left">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Story</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-4 text-center sm:text-left">Help</h4>
            <ul class="space-y-2 text-center sm:text-left">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Policies</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-4 text-center sm:text-left">Discover</h4>
            <ul class="space-y-2 text-center sm:text-left">
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Destinations</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Travel Guides</a></li>
                <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center">
        <div class="space-x-4 mb-4">
            <a href="#" class="text-xl text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-xl text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-xl text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
        </div>
        <p>© 2025 Tripster. All rights reserved.</p>
    </div>
</footer>

<!-- JavaScript for Sidebar and Module Toggling -->
<script>
    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const toggleSidebar = document.getElementById('toggleSidebar');
    toggleSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-hidden');
    });
    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !toggleSidebar.contains(e.target) && !sidebar.classList.contains('sidebar-hidden') && window.innerWidth < 768) {
            sidebar.classList.add('sidebar-hidden');
        }
    });

    // Module Toggling
    const links = document.querySelectorAll('.sidebar-link');
    const modules = document.querySelectorAll('.module');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const moduleId = link.getAttribute('data-module');

            // Hide all modules and reset link styles
            modules.forEach(module => module.classList.remove('module-active'));
            links.forEach(l => {
                l.classList.remove('bg-blue-50', 'text-blue-600');
                l.classList.add('text-gray-700');
            });

            // Show selected module and highlight link
            document.getElementById(moduleId).classList.add('module-active');
            link.classList.add('bg-blue-50', 'text-blue-600');
            link.classList.remove('text-gray-700');
        });
    });
</script>
</body>
</html>
