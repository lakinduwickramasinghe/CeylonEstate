<div class="flex-1 bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-left text-[#1A5C38]">Reviews</h2>
                
                <?php
                require_once __DIR__ . '/../../../app/controllers/reviewController.php'; 
                $reviewController = new ReviewController();
                $allReviews = $reviewController->getAllReviews();

                if (empty($allReviews)) {
                    echo '<p class="text-gray-600 text-center">You have not posted any reviews yet. Share your experience with Ceylon Estate!</p>';
                } else {
                    foreach ($allReviews as $review) {
                        $stars = str_repeat('★', $review['StarRating']) . str_repeat('☆', 5 - $review['StarRating']);
                        echo <<<HTML
                        <div class="border-b border-gray-200 pb-4 mb-4 last:border-b-0">
                            <div class="flex justify-between items-center mb-2">
                                <div>
                                    <p class="text-sm text-gray-600">Posted on {$review['CreatedDate']}</p>
                                    <p class="text-yellow-500">{$stars} ({$review['StarRating']}/5)</p>
                                </div>
                                <div class="space-x-2">
                                    <a href="index.php?page=delete-review&id={$review['ReviewId']}" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition-all duration-300">Delete</a>
                                </div>
                            </div>
                            <p class="text-gray-700">{$review['Description']}</p>
                        </div>
                        HTML;
                    }
                }
                ?>
                
            </div>
