@vite('resources/css/app.css')

<!-- component -->
<section class="min-h-screen flex flex-col bg-gray-900">
            <nav>
                <div class="flex justify-center items-center px-4 py-4">
                    <img src="https://seeklogo.com/images/G/garuda-pancasila-logo-271A8C88B7-seeklogo.com.png" style="max-height: 100px" alt="">
                </div>
                <div class="px-2 bg-light text-green-600 font-semibold"><marquee class="py-10" direction="left">Selamat datang di website saya, Ini adalah web Login Dan Register✅</marquee></div>
            </nav>
            <div class="flex flex-1 items-center justify-center">
                <div class="rounded-lg sm:border-2 px-4 lg:px-24 py-16 lg:max-w-xl sm:max-w-md w-full text-center">
                    <form class="text-center">
                        <h1 class="font-bold -tracking-normal text-3xl mb-8 w-full text-slate-100">
                            Sign Up
                        </h1>
                        <div class="py-2 text-left">
                            <input type="email" class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Email" />
                        </div>
                        <div class="py-2 text-left">
                            <input type="password" class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Password" />
                        </div>
                        <div class="py-2">
                            <button type="submit" class="border-2 border-gray-100 focus:outline-none bg-cyan-600 text-white font-bold tracking-wider block w-full p-2 rounded-lg focus:border-gray-700 hover:bg-cyan-700">
                                Sign In
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="#" class="hover:underline text-white">Forgot password?</a>
                    </div>
                    <div class="text-center mt-12">
                        <span class="text-slate-100">
                            Don't have an account?
                        </span>
                        <a href="#" class="font-light text-md text-sky-400 underline font-semibold hover:text-sky-600">Create Now</a>
                    </div>
                </div>
            </div>
        </section>
