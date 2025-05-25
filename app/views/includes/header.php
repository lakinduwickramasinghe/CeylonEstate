<?php
    if(isset($_SESSION['user_id']) || isset($_SESSION['user_role'])) {
        if($_SESSION['user_role'] == 'Admin'){
            $email = $_SESSION['user_email'];
        echo <<<HTML
        <header class="bg-[#1A5C38] text-white py-4">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="flex items-center space-x-2">
                    <a href="/ceylonestatefinal/public/" class="text-inherit no-underline hover:no-underline focus:outline-none inline-flex items-center space-x-2">
                        <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                        <span class="text-xl font-bold">CEYLON ESTATE</span>
                    </a>
                </div>
                <nav class="flex items-center space-x-6">
                    <a href="/ceylonestatefinal/public/" class="hover:underline">HOME</a>
                    <a href="/ceylonestatefinal/public/forsale" class="hover:underline">SELL</a>
                    <a href="/ceylonestatefinal/public/forrent" class="hover:underline">RENT</a>
                    <a href="/ceylonestatefinal/public/aboutus" class="hover:underline">ABOUT US</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="flex flex-col items-center">
                        <a href="/ceylonestatefinal/public/adminpanel/load/dashboard" class="flex flex-col items-center">
                            <div class="w-6 h-6">
                                <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="text-sm mt-1">{$email}</span>
                        </a>
                    </div>
                    <form action="/ceylonestatefinal/public/login/logout" method="POST">
                        <button class="bg-white text-[#1A5C38] px-3 py-1 rounded hover:bg-gray-200 text-sm">Logout</button>
                    </form>

                    <form action="/ceylonestatefinal/public/adminpanel/load/dashboard" method="POST">
                        <button class="bg-white text-[#1A5C38] px-3 py-1 rounded hover:bg-gray-200 text-sm">Admin Panel</button>
                    </form>
                </div>
            </div>
        </header>
        HTML;
        }
        else{
            $email = $_SESSION['user_email'];
        echo <<<HTML
        <header class="bg-[#1A5C38] text-white py-4">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="flex items-center space-x-2">
                    <a href="/ceylonestatefinal/public/" class="text-inherit no-underline hover:no-underline focus:outline-none inline-flex items-center space-x-2">
                        <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                        <span class="text-xl font-bold">CEYLON ESTATE</span>
                    </a>
                </div>
                <nav class="flex items-center space-x-6">
                    <a href="/ceylonestatefinal/public/" class="hover:underline">HOME</a>
                    <a href="/ceylonestatefinal/public/forsale" class="hover:underline">SELL</a>
                    <a href="/ceylonestatefinal/public/forrent" class="hover:underline">RENT</a>
                    <a href="/ceylonestatefinal/public/aboutus" class="hover:underline">ABOUT US</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="flex flex-col items-center">
                        <a href="/ceylonestatefinal/public/updateprofile" class="flex flex-col items-center">
                            <div class="w-6 h-6">
                                <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="text-sm mt-1">{$email}</span>
                        </a>
                    </div>
                    <form action="/ceylonestatefinal/public/login/logout" method="POST">
                        <button class="bg-white text-[#1A5C38] px-3 py-1 rounded hover:bg-gray-200 text-sm">Logout</button>
                    </form>
                </div>
            </div>
        </header>
        HTML;
            }
            
        }

        else {
            echo <<<HTML
                <header class="bg-[#1A5C38] text-white py-4">
                    <div class="container mx-auto flex justify-between items-center px-4">
                        <div class="flex items-center space-x-2">
                            <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                            <span class="text-xl font-bold">CEYLON ESTATE</span>
                        </div>
                        <nav class="flex items-center space-x-6">
                            <a href="/ceylonestatefinal/public/" class="hover:underline">HOME</a>
                            <a href="/ceylonestatefinal/public/forsale" class="hover:underline">SELL</a>
                            <a href="/ceylonestatefinal/public/forrent" class="hover:underline">RENT</a>
                            <a href="/ceylonestatefinal/public/aboutus" class="hover:underline">ABOUT US</a>
                        </nav>
                        <div class="flex items-center space-x-4">
                            <a href="/ceylonestatefinal/public/login">
                                <button class="bg-white text-[#1A5C38] px-4 py-2 rounded hover:bg-gray-200">Log In</button>
                            </a>
                            <a href="/ceylonestatefinal/public/signup">
                                <button class="bg-[#2E7D32] text-white px-4 py-2 rounded hover:bg-[#225C26]">Sign Up</button>
                            </a>
                        </div>
                    </div>
                </header>
                HTML;
                    }
                ?>