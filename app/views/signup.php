<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold text-center mb-6 text-[#1A5C38]">SIGN UP</h2>
            <form method="POST" action="/ceylonestatefinal/public/signup/signup">
            <div class="mb-4">
                    <label for="first-name" class="block text-sm font-medium mb-1">First Name :</label>
                    <input type="text" required name="firstname" id="first-name"  placeholder="John" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="last-name" class="block text-sm font-medium mb-1">Last Name :</label>
                    <input type="text" required name="lastname" id="last-name" placeholder="Smith" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email :</label>
                    <input type="email" name="email" required id="email" placeholder="abc@gmail.com" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-1">Password :</label>
                    <input type="password" required name="password" id="password" placeholder="***********" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                
                <div class="mb-4">
                    <label for="contact-number" class="block text-sm font-medium mb-1">Contact Number :</label>
                    <input type="tel" required name="contactnumber" id="contact-number" placeholder="0771812658" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="UserRole" class="block text-sm font-medium text-gray-700">User Role:</label>
                    <select type="text" id="UserRol" name="UserRole" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        <option value="Buyer">Buyer</option>
                        <option value="Seller">Seller</option>
                    </select>
                </div>
                <div class="mb-6 flex items-center">
                    <input type="checkbox" name="terms" id="terms" class="mr-2">
                    <label for="terms" class="text-sm">Agree to Terms and Conditions</label>
                </div>
                <div class="mb-4 text-sm text-blue-600">
                    <a href="/ceylonestatefinal/public/login" class="hover:underline">Already has an account? Log in</a>
                </div>
                <button type="submit" class="w-full bg-[#1A5C38] text-white py-2 rounded hover:bg-[#154c2f]">Sign Up</button>
            </form>
            
        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>