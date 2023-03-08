<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?<?php time() ?>"></script>
    <link rel="stylesheet" href="public/isset/header.css?<?php time() ?>">
    <link rel="stylesheet" href="public/isset/style.css?<?php time() ?>">
    <title>electro Maroc</title>
</head>

<body class="relative">
    <header>
        <nav class="flex h-14 z-10 text-gray-200 justify-between top-0 bg-sky-900  w-full font-medium">
            <div class="logo w-40 my-auto ml-4">
                <img src="public/img/logo/Logo.png" alt="Logo">
            </div>
            <div class="flex mx-10  justify-between">
                <div class="my-auto text-sm  hover:border-b-2 rounded-sm border-solid border-gray-200  transition ease-linear max-lg:w-fit flex px-5 max-lg:px-2 py-1">
                    <a href="?p=home" class="flex">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg> -->
                        <span class="max-sm:hidden">Home</span>
                    </a>
                </div>
                <div class="my-auto text-sm  hover:border-b-2 rounded-sm border-solid border-gray-200  transition ease-linear max-lg:w-fit flex px-5 max-lg:px-2 py-1">
                    <a href="?p=Products" class="flex">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg> -->
                        <span class="max-sm:hidden">Products</span>
                    </a>
                </div>
                <?php if (isset($_SESSION['user'])) {
                    if ($_SESSION['user'] == 'client') { ?>
                <div class="my-auto text-sm  hover:border-b-2 rounded-sm border-solid border-gray-200  transition ease-linear max-lg:w-fit flex px-5 max-lg:px-2 py-1">
                    <a href="?p=Carte" class="flex">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg> -->
                        <span class="max-sm:hidden">Cart</span>
                    </a>
                </div>
                <?php }
                } ?>
                <?php if (isset($_SESSION['user'])) {
                    if ($_SESSION['user'] == 'admin') { ?>
                        <div class="my-auto text-sm  hover:border-b-2 rounded-sm border-solid border-gray-200  transition ease-linear max-lg:w-fit flex px-5 max-lg:px-2 py-1">
                            <a href="?p=Dashboard" class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                                </svg>
                                <span class="max-sm:hidden">Dashbard</span>
                            </a>
                        </div>
                <?php }
                } ?>
            </div>

            <div class="flex mx-10  justify-between">
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="?p=home&a=Logout" class="my-auto hover:bg-gray-200 hover:text-sky-900 text-sm  border rounded-sm border-solid border-gray-200  transition ease-linear max-lg:w-fit flex  px-5 max-lg:px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        <span class="max-lg:hidden">Logout</span>
                    </a>

                <?php } else { ?>
                    <a href="?p=Login" class="my-auto hover:bg-gray-200 hover:text-sky-900 text-sm   rounded-sm border-solid border-gray-200  transition ease-linear max-lg:w-fit flex  px-5 max-lg:px-2 py-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>

                        <span class="max-lg:hidden">Login</span>
                    </a>
                    <a href="?p=inscription" class="my-auto w-fit hover:bg-amber-300 text-amber-300 hover:text-sky-900 text-sm  rounded-sm max-lg:px-2 border-solid border-amber-300 transition ease-linear  px-5 py-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 max-lg:pr-0 pr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                        <span class="max-lg:hidden">Register</span>

                    </a>
                <?php } ?>
            </div>

        </nav>