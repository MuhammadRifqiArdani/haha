<!-- component -->
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hero section">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <style>
        body {
            font-family: Urbanist, sans-serif;
            @apply bg-white dark:bg-gray-900
        }

        .navbar-active .hamburger div:first-child {
            @apply rotate-45 translate-y-1.5;
        }

        .navbar-active .hamburger div:last-child {
            @apply -rotate-45 -translate-y-1;
        }

        .navbar-active div:first-child div:first-child div:last-child {
            @apply block lg:flex
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-gray-900">
    <header>
        <input type="checkbox" name="hbr" id="hbr" class="hbr peer" hidden aria-hidden="true">
        <nav
            class="fixed z-20 w-full bg-white/90 dark:bg-gray-900/80 backdrop-blur navbar shadow-2xl shadow-gray-600/5 border-b border-gray-100 dark:border-gray-800 peer-checked:navbar-active dark:shadow-none">
            <div class="xl:container m-auto px-6 md:px-12 lg:px-6">
                <div class="flex flex-wrap items-center justify-between gap-6 md:py-3 md:gap-0 lg:py-5">
                    <div class="w-full items-center flex justify-between lg:w-auto">
                        <a class="relative z-20" href="#" aria-label="logo">
                            <img style="max-height: 70px" src="image/nusa.png" alt="removebg">
                        </a>
                        <label for="hbr"
                            class="peer-checked:hamburger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden">
                            <div aria-hidden="true"
                                class="m-auto h-0.5 w-5 rounded bg-gray-900 dark:bg-gray-300 transition duration-300">
                            </div>
                            <div aria-hidden="true"
                                class="m-auto mt-2 h-0.5 w-5 rounded bg-gray-900 dark:bg-gray-300 transition duration-300">
                            </div>
                        </label>
                    </div>
                    <div
                        class="navmenu hidden w-full flex-wrap justify-end items-center mb-16 space-y-8 p-6 border border-gray-100 rounded-3xl shadow-2xl shadow-gray-300/20 bg-white dark:bg-gray-800 lg:space-y-0 lg:p-0 lg:m-0 lg:flex md:flex-nowrap lg:bg-transparent lg:w-7/12 lg:shadow-none dark:shadow-none dark:border-gray-700 lg:border-0">
                        <div class="text-gray-600 dark:text-gray-300 lg:pr-4">
                            <ul class="space-y-6 tracking-wide font-medium text-base lg:text-sm lg:flex lg:space-y-0">
                                <li>
                                    <a href="#"
                                        class="block md:px-4 transition hover:text-primary dark:hover:text-primaryLight">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contact"
                                        class="block md:px-4 transition hover:text-primary dark:hover:text-primaryLight">
                                        <span>Contact Us </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block md:px-4 transition hover:text-primary dark:hover:text-primaryLight">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="aboutme"
                                        class="block md:px-4 transition hover:text-primary dark:hover:text-primaryLight">
                                        <span>About Me</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="w-full space-y-2 border-primary/10 dark:border-gray-700 flex flex-col -ml-1 sm:flex-row lg:space-y-0 md:w-max lg:border-l">
                            <a href="#"
                                class="relative flex h-9 ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full focus:before:bg-sky-600/10 dark:focus:before:bg-sky-400/10 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                                <span
                                    class="relative text-sm font-semibold text-primary text-white dark:text-primaryLight">Sign
                                    Up</span>
                            </a>
                            <a href="#"
                                class="relative flex h-9 ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full before:bg-sky-600 dark:before:bg-sky-400 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 bg-blue-500 shadow-lg shadow-blue-500/60 rounded-3xl">
                                <span class="relative text-sm font-semibold text-white">Login</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="bg-white relative pt-40 pb-20 lg:pt-44 dark:bg-gray-900">
        <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
            <h1 id="contact" data-aos="fade-right" data-aos-duration="2000"
                class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-3xl md:text-4xl lg:w-auto lg:text-left xl:text-5xl dark:text-white">
                Hallo, Perkenalkan Saya <br class="lg:block hidden"> <span
                    class="relative text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-300 text-4xl">Rifqi
                    Ardani</span>.</h1>
            <div class="lg:flex">
                <div data-aos="fade-up" data-aos-duration="2000"
                    class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                    <p class="sm:text-lg text-gray-700 dark:text-gray-300 lg:w-11/12">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus id sequi repellat maxime
                        tenetur. Fugiat tempore hic animi ab ratione ut vero beatae itaque molestias!
                    </p>
                    <span class="block font-semibold text-gray-500 dark:text-gray-400">Hubungi Saya Dibawah ini.</span>
                    <div class="grid grid-cols-3 space-x-4 md:space-x-6 md:flex md:justify-center lg:justify-start">
                        <a aria-label="add to slack" href="#"
                            class="p-4 border border-gray-200 dark:bg-gray-800 dark:border-gray-700 rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20 dark:hover:border-cyan-300/30">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6 h-6"
                                    src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Twitter-logo.svg"
                                    alt="slack logo" loading="lazy" width="140" height="140">
                                <span class="hidden font-medium md:block dark:text-white">Twitter</span>
                            </div>
                        </a>
                        <a aria-label="add to chat" href="#"
                            class="p-4 border border-gray-200 dark:bg-gray-800  dark:border-gray-700 rounded-full duration-300 hover:border-green-600 hover:shadow-lg hover:shadow-lime-600/20 dark:hover:border-green-500/50">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6 h-6" src="https://www.logo.wine/a/logo/WhatsApp/WhatsApp-Logo.wine.svg"
                                    alt="chat logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block dark:text-white">WhatsApp</span>
                            </div>
                        </a>
                        <a aria-label="add to zoom" href="#"
                            class="p-4 border border-gray-200 dark:bg-gray-800  dark:border-gray-700 rounded-full duration-300 hover:border-blue-400 hover:shadow-lg hover:shadow-blue-600/20 dark:hover:border-blue-300/30">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6 h-6"
                                    src="https://tailus.io/sources/blocks/tech-startup/preview/images/zoom.png"
                                    alt="chat logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block dark:text-white">Zoom</span>
                            </div>
                        </a>
                    </div>

                    <div class="dark:text-gray-300">
                        🔥🌟
                        <span>Other integrations :</span>
                        <a href="#" class="font-semibold text-gray-700 dark:text-gray-200">Discord,</a>
                        <a href="#" class="font-semibold text-gray-700 dark:text-gray-200">Telegram</a>
                    </div>

                    <div class="pt-12 flex gap-6 lg:gap-12 justify-between lg:w-2/3">
                        <img src="https://www.logo.wine/a/logo/Google/Google-Logo.wine.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/ge.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Disney%2B_Hotstar_logo.svg/1200px-Disney%2B_Hotstar_logo.svg.png"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                        <img src="https://static.cdnlogo.com/logos/c/43/cartoon-network.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                    </div>
                </div>
                <div class="mt-12 md:mt-0 lg:absolute -right-10 lg:w-7/12">
                    <div class="relative w-full">
                        <div aria-hidden="true"
                            class="absolute scale-75 md:scale-110 inset-0 m-auto w-full h-full md:w-96 md:h-96 rounded-full rotate-45 bg-gradient-to-r from-sky-500 to-cyan-300 blur-2xl">
                        </div>
                        <img src="image/tom.png" class="relative w-auto" alt="" loading="lazy"
                            width="320" height="280">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-32">
        <div data-aos="fade-up" class="antialiased mt-24">
            <div class="text-center text-white text-4xl font-semibold">
                <h2>Coba masuk aja</h2>
            </div>
        </div>

    </div>
    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class=" font-semibold text-2xl text-cyan-500">Tentang Saya</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed libero quos, minima earum maiores
                        modi magni iure, veniam exercitationem, autem reprehenderit ipsam mollitia. Consectetur,
                        voluptatibus!</p>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-semibold text-2xl text-cyan-500">Tentang Saya</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed libero quos, minima earum maiores
                        modi magni iure, veniam exercitationem, autem reprehenderit ipsam mollitia. Consectetur,
                        voluptatibus!</p>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-semibold text-2xl text-cyan-500">Tentang Saya</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed libero quos, minima earum maiores
                        modi magni iure, veniam exercitationem, autem reprehenderit ipsam mollitia. Consectetur,
                        voluptatibus!</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
