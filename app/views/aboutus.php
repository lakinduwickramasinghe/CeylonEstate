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
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

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
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>