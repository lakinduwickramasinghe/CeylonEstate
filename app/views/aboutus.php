<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Who We Are?</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-image {
            background-image: url('https://via.placeholder.com/1200x400?text=Property+Image');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-[#1A5C38] text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">Ceylon Estate</span>
            </div>
            <nav class="flex items-center space-x-6">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                <a href="#" class="hover:underline">SELL</a>
                <a href="#" class="hover:underline">RENT</a>
                <a href="#" class="hover:underline">ABOUT US</a>
                <a href="#" class="hover:underline">POST AN ADD</a>
            </nav>
            <div class="flex items-center space-x-2">
                <span class="text-sm">lakindusudarako@gmail.com</span>
                <div class="w-6 h-6">
                    <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Who We Are Section -->
        <section class="bg-green-100 py-12 px-4">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Who We Are?</h1>
                <p class="text-lg text-gray-600 mb-6 max-w-2xl mx-auto">We're a team of forward-thinkers redefining how properties are sold—empowering sellers with control, simplicity, and speed.</p>
                <div class="bg-gray-200 p-6 rounded-lg shadow-md max-w-2xl mx-auto">
                    <p class="text-gray-700">At the heart of our platform is a simple idea: selling property shouldn't be complicated. We're here to streamline the process, giving property owners the tools to take charge of their listings without relying on middlemen. By blending user-friendly design with smart functionality, we aim to make property selling accessible, transparent, and efficient—just the way it should be.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section with Background Image -->
        <section class="bg-image py-16 relative">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4">
                <div class="text-white mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Have questions or feedback?</h2>
                    <p class="text-lg mb-4">We'd love to hear from you!</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Get in Touch With Us!</h3>
                    <form class="space-y-4">
                        <input type="email" placeholder="Enter your email here..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        <textarea placeholder="Your message..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" rows="4" required></textarea>
                        <button type="submit" class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300 w-full">Send</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">Ceylon Estate</span>
            </div>
            <nav class="flex space-x-6 mb-4 md:mb-0">
                <a href="#" class="hover:underline">Sell</a>
                <a href="#" class="hover:underline">Rent</a>
                <a href="#" class="hover:underline">About Us</a>
                <a href="#" class="hover:underline">Post An Add</a>
                <a href="#" class="hover:underline">My Profile</a>
            </nav>
            <p class="text-sm">Copyright © Ceylon Estate. All Right Reserved.</p>
        </div>
    </footer>
</body>
</html>