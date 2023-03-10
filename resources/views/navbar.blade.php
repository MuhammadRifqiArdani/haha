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
                                    <a href="#project"
                                        class="block md:px-4 transition hover:text-primary dark:hover:text-primaryLight">
                                        <span>Project</span>
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
                            <a href="/login/"
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
            <h1 id="#" data-aos="fade-right" data-aos-duration="2000"
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
                                    src="https://www.logo.wine/a/logo/Facebook/Facebook-f_Logo-Blue-Logo.wine.svg"
                                    alt="chat logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block dark:text-white">Facebook</span>
                            </div>
                        </a>
                    </div>

                    <div class="dark:text-gray-300">
                        ????????
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
                        <img src="image/Earth.png" class="relative w-auto ml-28" alt="" loading="lazy"
                            width="320" height="280">
                    </div>
                </div>
            </div>

            <section id="#" class="pt-36 pb-32 dark:bg-gray-900">
                <div class="xl:container">
                    <div class="w-full px-4 py-48">
                        <div class="max-w-xl mx-auto text-center mt-40">
                            <h2 data-aos="fade-right" data-aos-duration="2000"
                                class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl text-neutral-50">List Project</h2>
                            <p data-aos="fade-left" data-aos-duration="2000"
                                class="font-medium text-md text-violet-200 md:text-lg">Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Cum incidunt ullam necessitatibus.</p>
                        </div>
                    </div>

                    <div id="project" class="flex flex-wrap">
                        <div class="w-full px-4 lg:w-1/3 xl:w-1/3">
                            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="https://www.codingem.com/wp-content/uploads/2021/10/juanjo-jaramillo-mZnx9429i94-unsplash-1536x1024.jpg"
                                    alt="programming" class="w-full" />
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-white hover:text-cyan-400 truncate">Project
                                            Beta</a>
                                    </h3>
                                    <p class="font-medium text-base text-gray-400 mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Soluta, consectetur quaerat dolorum quos quasi
                                        repellendus harum consequatur. Mollitia, cum. Minima?</p>
                                    <a class="text-sky-600 outline-1 hover:underline" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="https://www.codingem.com/wp-content/uploads/2021/10/juanjo-jaramillo-mZnx9429i94-unsplash-1536x1024.jpg"
                                    alt="programming" class="w-full" />
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-white hover:text-cyan-400 truncate">Project
                                            Beta</a>
                                    </h3>
                                    <p class="font-medium text-base text-gray-400 mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Soluta, consectetur quaerat dolorum quos quasi
                                        repellendus harum consequatur. Mollitia, cum. Minima?</p>
                                    <a class="text-sky-600 outline-1 hover:underline" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-10">
                                <img src="https://www.codingem.com/wp-content/uploads/2021/10/juanjo-jaramillo-mZnx9429i94-unsplash-1536x1024.jpg"
                                    alt="programming" class="w-full" />
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="#"
                                            class="block mb-3 font-semibold text-xl text-white hover:text-cyan-400 truncate">Project
                                            Beta</a>
                                    </h3>
                                    <p class="font-medium text-base text-gray-400 mb-6">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Soluta, consectetur quaerat dolorum quos quasi
                                        repellendus harum consequatur. Mollitia, cum. Minima?</p>
                                    <a class="text-sky-600 outline-1 hover:underline" href="#">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="py-2 w-full">
                <div class="text-center font-semibold text-cyan-300 py-5 text-2xl">view my location from the map</div>
                
                <iframe data-aos="fade-up" data-aos-duration="2000" class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.85553731595!2d111.49477219804889!3d-8.163569698459442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1678435058712!5m2!1sid!2sid" width="1225" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            <div id="contact" class="bg-gray-900 py-32">
                <div class="text-center text-white text-2">
                    <h1>Kritik & Saran</h1>
                </div>
                <div class="container mx-auto my-4 px-4 lg:px-20">
                    <div  class="w-full">
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                            <input
                                class="w-full bg-gray-600 text-white mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" placeholder="First Name*" />
                            <input
                                class="w-full bg-gray-600 text-white mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Last Name*" />
                            <input
                                class="w-full bg-gray-600 text-white mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="email" placeholder="Email*" />
                            <input
                                class="w-full bg-gray-600 text-white mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                type="number" placeholder="Phone*" />
                        </div>
                        <div class="my-4">
                            <textarea placeholder="Message*"
                                class="w-full h-32 bg-gray-600 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="my-2 w-1/2 lg:w-1/4">
                            <button
                                class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                                  focus:outline-none focus:shadow-outline">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <section class="border-t border-b border-gray-200 dark:border-gray-700 py-8">
                <div class="lg:mx-auto lg:container px-4 xl:px-12 2xl:px-4">
                    <div class="lg:flex">
                        <div class="w-full lg:w-1/2 mb-16 lg:mb-0 flex">
                            <div class="w-full lg:-1/2 px-6 lg:flex items-end justify-end">
                                <ul>
                                    <li id="#">
                                        <a class=" text-lg md:text-base leading-none text-white hover:text-red-600" href="#">Components</a>    
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a class=" text-lg md:text-base leading-none text-white hover:text-red-600" href="#">Templates</a>    
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a class=" text-lg md:text-base leading-none text-white hover:text-red-600" href="#">Pricing</a>    
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a class=" text-lg md:text-base leading-none text-white hover:text-red-600" href="#">FAQ</a>    
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a class=" text-lg md:text-base leading-none text-white hover:text-red-600" href="#">Document</a>    
                                    </li>
                                </ul>
                            </div>

                            <div class="w-full lg:w-1/2 px-6 lg:flex items-start justify-center">
                                <ul>
                                    <li id="#">
                                        <a class="text-sm md:text-base leading-none text-white hover:text-red-600" href="#">Contact us</a>
                                    </li>
                                    
                                    <li id="#" class="mt-6">
                                        <a class="text-sm md:text-base leading-none text-white hover:text-red-600" href="#">Blog</a>
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a class="text-sm md:text-base leading-none text-white hover:text-red-600" href="#">Change Log</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>


                        <div class="w-full lg:w-1/2 flex">
                            <div class="w-full lg:w-1/2 px-6 flex flex-col lg:items-center justify-between">
                                <ul>
                                    <li id="#">
                                        <a href="/terms-and-conditions#privacyPolicy" class="text-sm md:text-base leading-none text-white hover:text-red-600">Privacy policy</a>
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a href="/terms-and-conditions#privacyPolicy" class="text-sm md:text-base leading-none text-white hover:text-red-600">Terms of Service</a>
                                    </li>

                                    <li id="#" class="mt-6">
                                        <a href="/terms-and-conditions#privacyPolicy" class="text-sm md:text-base leading-none text-white hover:text-red-600">Become An affiliate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="py-12">
                <p class="text-white text-center font-semibold">?? 2023 web Ngawur. All rights reserved.</p>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
