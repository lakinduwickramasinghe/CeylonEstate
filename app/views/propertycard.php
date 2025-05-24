<a href="/ceylonestatefinal/public/viewlisting/load/<?php echo $listing['ListingId']?>" class="block">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-80 transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
        <div class="relative w-full h-40">
            <img src="<?php
            $imageSrc = 'data:image/jpeg;base64,' . base64_encode($listing['ImageInfo']);
            echo $imageSrc; ?>" alt="Property" class="w-full h-full object-cover rounded-t-xl">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-t-xl"></div>
            <span class="absolute top-2 left-2 bg-[#1A5C38] text-white text-xs font-semibold px-2 py-1 rounded-full">
            <?php 
            if($listing['ListingType']=="Selling"){
                echo "For Sale";
            }
            else{
                echo "For Rent";
            }
            ?>
            </span>
        </div>
        <div class="p-4">
            <h4 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-1"><?php echo $listing['Title'] ?></h4>
            <p class="text-xl font-bold text-red-600 mb-2">Rs.<?php echo number_format($listing['Price']); if($listing["ListingType"]=="Renting"){echo '/month' ;} ?></p>
            <p class="text-gray-700 text-base line-clamp-1"><?php echo $listing['AddressLine01'] ?></p>
            <div class="flex flex-wrap gap-3 mt-3 text-sm text-gray-600">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h18M3 9l2-2h14l2 2M3 9v8a2 2 0 002 2h14a2 2 0 002-2V9m-6 4h-4v4h4v-4z"></path>
                    </svg>
                    <?php echo $listing['Bedrooms'] ?> Bedroom
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h-2v2h2V7zm0 4h-2v6h2v-6zm8-6v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2zm-6 0H9v2h6V5z"></path>
                    </svg>
                    <?php echo $listing['Bathrooms'] ?> Bathroom
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 6l2 2h12l2-2M4 6v12a2 2 0 002 2h12a2 2 0 002-2V6m-8 6h-4m4 0h4"></path>
                    </svg>
                    <?php echo $listing['AreaSize'] ?> m²
                </span>
            </div>
        </div>
    </div>
</a>

