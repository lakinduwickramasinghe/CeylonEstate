<section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold custom-dark-green">Customer Reviews</h2>
                <a href="/ceylonestatefinal/public/review">
                    <button class="green-button">Add Review</button>
                </a>
            </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php 


            foreach($reviews as $review) {
                    require_once __DIR__ . '/../models/userModel.php';
                    $userModel = new UserModel();

                    $user = $userModel->getUserProfile($review['UserId']);

                    $firstName = $user['FirstName'];
                    $lastName = $user['LastName'];

                echo '<div class="bg-white rounded-lg shadow-lg p-4 mb-4">';
                echo '<div class="mb-2">';
                echo '<h3 class="font-bold text-sm">' . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) .   '</h3>';
                echo '<div class="flex text-yellow-400">';
                for ($i = 0; $i < $review['StarRating']; $i++) {
                    echo '<span>★</span>';
                }
                for ($i = $review['StarRating']; $i < 5; $i++) {
                    echo '<span>☆</span>';
                }
                echo '</div>';
                echo '</div>';
                echo '<p class="text-gray-600 text-sm mb-2">' . htmlspecialchars($review['Description']) . '</p>';
                echo '<p class="text-xs text-gray-500">Reviewed on ' . htmlspecialchars($review['CreatedDate']) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>