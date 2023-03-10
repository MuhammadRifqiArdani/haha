<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body {
            font-family : Urbanist, sans-serif;
            @apply bg-white dark:bg-gray-900
        }

        .navbar-active .hamburger div:first-child {
            @apply rotate-45 translate-y-1.5;
        }
        .navbar-active .hamburger div:last-child {
            @apply -rotate-45 -translate-y-1;
        }
        .navbar-active div:first-child div:first-child div:last-child{
            @apply block lg:flex
        }
    </style>
     @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="bg-white dark:bg-gray-900">
    <header>
        <div class="bg-white relative pt-40 pb-20 lg:pt-44 dark:bg-gray-900">
            <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
                <h1 data-aos="fade-up" data-aos-duration="1500" class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-2xl text-center sm:text-3xl md:text-4xl lg:w-auto lg:text-left xl:text-5xl dark:text-white ">About me</h1>
                <div class="lg:flex">
                    <div class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                        <p class="sm:text-lg text-gray-700 dark:text-gray-300 lg:w-11/12">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus id sequi repellat maxime tenetur. Fugiat tempore hic animi ab ratione ut vero beatae itaque molestias!
                        </p>
                    </div>
                </div>
        </div>
    </header>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>