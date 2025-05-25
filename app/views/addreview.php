<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    define('BASE_URL', '/ceylonestatefinal');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Add Review</title>
    <link href="<?php echo BASE_URL . "/public/css/styles.css" ?>" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-green-50">
    <!-- Header -->
    <?php require '../app/views/includes/header.php'; ?>

    <main class="flex-1 py-12">
        <div class="container mx-auto px-4 max-w-2xl">
            <h1 class="text-3xl font-bold text-[#1A5C38] mb-8 text-center">Add a Review</h1>

            <!-- Review Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <form action="/ceylonestatefinal/public/review/addreview" method="POST" class="space-y-6">
                    <div>
                        <label for="rating" class="block text-gray-700 font-semibold mb-2">Rating (1-5 Stars)</label>
                        <select id="rating" name="rating" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>

                    <div>
                        <label for="review-description" class="block text-gray-700 font-semibold mb-2">Review Description</label>
                        <textarea id="review-description" name="description" placeholder="Write your review here..." rows="5" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="green-button">Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require '../app/views/includes/footer.php'; ?>
</body>
</html>