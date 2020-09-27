<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebTheory</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.min.css">

</head>
<body>
    <!-- Header -->
    <header class="h-24">
        <div class="h-full m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 flex items-center justify-between relative">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/">
                    <img class="inline-block" src="img/logo.svg" alt=">">
                    <span class="font-eczar text-indigo-primary text-2xl sm:text-t175 font-bold ml-2 sm:ml-6">WebTheory</span>
                </a>
            </div>

            <!-- Menu -->
            <nav>
                <ul class="flex text-indigo-primary text-lg">
                    <li class="hidden sm:block"><a href="features" class="font-montserat font-bold mr-8">Features</a></li>
                    <li class="hidden sm:block"><a href="#" class="font-montserat font-bold mr-8">Docs</a></li>
                    <li class="hidden sm:block"><a href="#" class="font-montserat font-bold">Blog</a></li>
                    <li class="block sm:hidden">
                        <button class="burger-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                </ul>
            </nav>

            <!-- Hidden menu -->
            <nav class="bg-white fixed mt-24 hidden-menu right-0 z-50 border-2 ">
                <ul class="flex flex-col text-indigo-primary text-lg">
                    <li><a href="features" class="block pl-4 py-3 font-montserat font-bold mr-8">Features</a></li>
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold mr-8">Docs</a></li>
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hidden header -->
    <header class="w-full fixed hidden-header left-0 h-24 bg-white z-40 opacity-0">
        <div class="h-full m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 flex items-center justify-between relative">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/">
                    <img class="inline-block" src="img/logo.svg" alt=">">
                    <span class="font-eczar text-indigo-primary text-2xl sm:text-t175 font-bold ml-2 sm:ml-6">WebTheory</span>
                </a>
            </div>

            <!-- Menu -->
            <nav>
                <ul class="flex text-indigo-primary text-lg">
                    <li class="hidden sm:block"><a href="features" class="font-montserat font-bold mr-8">Features</a></li>
                    <li class="hidden sm:block"><a href="#" class="font-montserat font-bold mr-8">Docs</a></li>
                    <li class="hidden sm:block"><a href="#" class="font-montserat font-bold">Blog</a></li>
                    <li class="block sm:hidden">
                        <button class="burger-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                </ul>
            </nav>

            <!-- Hidden menu -->
            <nav class="bg-white fixed mt-24 hidden-menu right-0 z-50 border-2 ">
                <ul class="flex flex-col text-indigo-primary text-lg">
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold mr-8">Features</a></li>
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold mr-8">Docs</a></li>
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- First section -->
    <section class="first-section">

        <!-- Home part -->
        <div class="first-section-bg relative">
            <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 pt-12">
                <h1 class="text-indigo-primary font-eczar font-bold text-h1 text-center">
                    Be the Voice. Not the Echo.
                </h1>
                <p class="font-eczar text-xl sm:text-2xl text-center mt-4 leading-8 sm:mb-6 text-darkest-blue">
                    <span class="inline-block border-b-14 border-green-yellow border-opacity-29 h-10">Web-Superiority Platform</span> for Modern Content Creators, Influencers & Businesses
                </p>
                <img class="main-hero-img m-auto left-0 right-0" src="img/Landing page/first-section/main_photo.svg" alt="Main hero">
            </div>
        </div>

        <!-- CTA part -->
        <div class="cta-part bg-dark-blue pt-12 md:pt-40 xl:pt-10 pb-16 flex">
            <img class="hidden xl:block" src="img/Landing page/cta-section/gift.svg" alt="Present gift">
            <div class="mt-auto px-6 sm:px-4_5xl md:px-18 xl:pr-18 xl:pl-0 xl:-ml-8">
                <h3 class="text-yellow-secondary font-eczar text-h3 text-center xl:text-left">Sign Up for Private Beta Today!</h3>
                <p class="text-xl md:text-2xl text-indigo-faded mt-4 text-center xl:text-left">
                    WebTheory is in private beta. But if you are Interested to try out WebTheory now, do let us know below. We will allocate you as soon as new private beta slots are available.
                </p>
                <form class="mt-8 flex justify-center xl:justify-start">
                    <input class="py-2 sm:py-1 px-2 shadow-inner-top rounded-lg text-base sm:text-2xl xl:text-h3 w-full max-w-xl" type="text" placeholder="Enter your email ID" required>
                    <button class="py-2 sm:py-1 w-4/12 md:w-auto px-2 md:px-10 ml-6 sm:ml-8 rounded-lg bg-indigo-primary font-eczar text-white text-base sm:text-2xl xL:text-h3 shadow-button-bottom">Sign Up</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Second section -->
    <section class="pt-24">

        <!-- Title and subtitle -->
        <div class="px-6 sm:px-4_5xl md:px-16 font-eczar text-center mb-12">
            <h2 class="text-4xl md:text-h1 text-indigo-primary font-bold">Go Viral, Break the Internet!</h2>
            <p class="text-darkest-blue text-2xl md:text-h3 mt-3">
                WebTheory is like no other CMS. It is opinionated, radical and foxy.
            </p>
        </div>

        <!-- Features -->
        <div class="bg-light-gray bg-opacity-25  pt-10 pb-12 mb-20">
            <div class="max-w-1920 px-6 sm:px-4_5xl md:px-18 flex flex-wrap justify-center mx-auto">
                <div class="w-full mb-8 sm:mb-0 sm:w-1/3 sm:pl-10">
                    <h3 class="text-indigo-primary font-eczar text-t175 font-bold mb-5">
                        No Plugin Mess
                    </h3>
                    <p class="font-open-sans font-light text-lg">
                        WebTheory comes prepacked with all the essential features you will realistically ever need. So, no more installing of low-grade third party plugins and modules.
                    </p>
                </div>
                <div class="w-full mb-8 sm:mb-0 sm:w-1/3 sm:pl-10">
                    <h3 class="text-indigo-primary font-eczar text-t175 font-bold mb-5">
                        Tools for Business
                    </h3>
                    <p class="font-open-sans font-light text-lg">
                        Run your business from home with the ability to sell contents directly from your site, publish Ads from various networks and  manage users and subscriptions. 
                    </p>
                </div>
                <div class="w-full mb-8 sm:mb-0 sm:w-1/3 sm:pl-10">
                    <h3 class="text-indigo-primary font-eczar text-t175 font-bold mb-5">
                        Blazing Fast Performance
                    </h3>
                    <p class="font-open-sans font-light text-lg">
                        Each WebTheory site is hosted on highly optimised and specifically configured dedicated SSD servers, with in-built global CDN, automated backups and full SSL support.
                    </p>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="mb-32">
            <div class="pt-12 sm:pt-28">
                <div class="max-w-1920 flex justify-center mx-auto">
                    <div class="w-10/12 sm:w-5/12 mt-auto pb-8">
                        <h3 class="text-2xl md:text-h3 font-eczar font-bold text-blue-second">
                            Create Engaging Blog Posts using Content Compositions
                        </h3>
                        <p class="font-open-sans text-base md:text-2xl mt-4">
                            Content Compositions allow you to embed rich media and flexible design elements in your blog posts making them standout in the world of boring medium-like blog posts.
                        </p>
                    </div>
                    <div class="hidden sm:block sm:w-5/12">
                        <img class="ml-auto" src="img/Landing page/second-section/img1.svg" alt="Img1">
                    </div>
                </div>
            </div>
            <div class="bg-auto sm:bg-item pt-28">
                <div class="max-w-1920 flex justify-center mx-auto">
                    <div class="hidden sm:block sm:w-5/12">
                        <img class="mr-auto" src="img/Landing page/second-section/img2.svg" alt="Img2">
                    </div>
                    <div class="w-10/12 sm:w-5/12 mt-auto pb-8">
                        <h3 class="text-2xl md:text-h3 font-eczar font-bold text-blue-second">
                            Run Online Business from Home
                        </h3>
                        <p class="font-open-sans text-base md:text-2xl mt-15">
                            WebTheory comes with all the tools to help you run your online business from the comfort of your home. Run multiple Ad services, accept payments, create subscription plan, sell your contents - all from a single platform without additional fee.
                        </p>
                    </div>
                </div>
            </div>
            <div class="pt-28">
                <div class="max-w-1920 flex justify-center mx-auto">
                    <div class="w-10/12 sm:w-5/12 mt-auto pb-8">
                        <h3 class="text-2xl md:text-h3 font-eczar font-bold text-blue-second">
                            Use Social Media to your Advantage
                        </h3>
                        <p class="font-open-sans text-base md:text-2xl mt-8">
                            WebTheory lets you easily onboard users via Social Login and provides ways for you to interact with them from within the system
                        </p>
                    </div>
                    <div class="hidden sm:block sm:w-5/12">
                        <img class="ml-auto" src="img/Landing page/second-section/img3.svg" alt="Img3">
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics -->
        <div class="pt-28 analytics-bg py-24">
            <div class="max-w-1920 mx-auto px-6 sm:px-4_5xl md:px-18 flex flex-col lg:flex-row">
                <div class="w-full lg:w-1/2 mt-auto">
                    <h3 class="mt-12 md:mt-0 text-blue-second font-eczar text-4xl leading-10 w-5/6">
                        Inbuilt Analytics and Advanced Dashboard Capability
                    </h3>
                    <p class="font-open-sans text-xl sm:text-t175 text-blue-faded mt-12 pb-12">
                        WebTheory is equipped with advanced Analytics and Dashboarding Capability without depending on any third-party tool. This ensures a seamless and integrated experience for the site owners.
                    </p>
                </div>
                <img class="w-full lg:w-1/2 order-first lg:order-last" src="img/Landing page/analytics/dashboard.svg" alt="Dashboard">
            </div>
        </div>
    </section>

    <!-- One plan section -->
    <section>

        <!-- Title & description -->
        <div class="bg-dark-blue pt-20 pb-24 sm:pb-64">
            <div class="max-w-1920 mx-auto px-6 sm:px-4_5xl md:px-18">
                <h2 class="font-eczar font-bold text-t175 md:text-4xl text-yellow-secondary text-center mb-8">
                    One Plan to Rule them All
                </h2>
                <p class="font-eczar text-2xl md:text-t175 text-blue-faded text-center mb-20">
                    Unlimited User accounts, Unlimited Admin accounts, Unlimited Pages, Unlimited Bandwidth.  No barriers. No breaks. 
                </p>
                
            </div>
        </div>

        <!-- CTA Form -->
        <div class="one-plan-cta-bg bg-auto xl:bg-contain -mt-24 sm:-mt-64">
            <div class="max-w-1920 mx-auto px-6 sm:px-4_5xl md:px-18">
                <div class="w-full sm:w-10/12 m-auto">
                    <img class="mx-auto relative" src="img/Landing page/one-plan-section/one-plan-graphics.svg" alt="One plan hero">
                    <h4 class="font-eczar text-yellow-secondary text-2xl sm:text-h3 mb-6 mt-16">
                        Help us build WebTheory together. Sign up for our private beta.
                    </h4>
                    <p class="text-indigo-faded font-open-sans text-lg sm:text-t175 md:text-2xl">
                        WebTheory is in private beta. But if you are Interested to try out WebTheory now, do let us know below. We will allocate you as soon as new private beta slots are available.
                    </p>
                    <form class="mt-10 pb-20 flex">
                        <input class="py-1 px-2 shadow-inner-top rounded-lg text-base md:text-2xl w-full max-w-xl" type="text" required>
                        <button class="py-1 sm:py-1 w-4/12 md:w-auto px-2 md:px-16 ml-6 sm:ml-8 rounded-lg bg-indigo-primary font-eczar text-white text-base md:text-2xl shadow-button-bottom">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark-blue pt-24 pb-20">
        <div class="max-w-1920 mx-auto px-6 sm:px-4_5xl md:px-18 flex flex-wrap">

            <!-- Logo container -->
            <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
                <div class="flex items-center mb-6">
                    <a href="#">
                        <img class="inline-block" src="img/logo.svg" alt=">">
                        <span class="font-eczar text-indigo-primary text-4xl font-bold ml-6">WebTheory</span>
                    </a>
                </div>
                <p class="font-eczar text-lighten-gray text-xl">
                    The web superiority platform for content creators, influencers and  businesses
                </p>
            </div>

            <!-- Features container -->
            <div class="w-full mb-8 sm:mb-0 sm:w-1/3 lg:w-1/6">
                <h5 class="text-center sm:text-left font-open-sans text-yellow-secondary text-xl font-bold uppercase mb-8">Features</h5>
                <div class="font-open-sans text-xl text-lighten-gray flex flex-col">
                    <a href="#">Feature 1</a>
                    <a href="#">Feature 1</a>
                    <a href="#">Feature 1</a>
                    <a href="#">More...</a>
                </div>
            </div>

            <!-- Contacts container -->
            <div class="w-full mb-8 sm:mb-0 sm:w-1/3 lg:w-1/6">
                <h5 class="text-center sm:text-left font-open-sans text-yellow-secondary text-xl font-bold uppercase mb-8">Contact</h5>
                <div class="font-open-sans text-xl text-lighten-gray flex flex-col">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Youtube</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>

            <!-- Docs container -->
            <div class="w-full mb-8 sm:mb-0 sm:w-1/3 lg:w-1/6">
                <h5 class="text-center sm:text-left font-open-sans text-yellow-secondary text-xl font-bold uppercase mb-8">Documentation</h5>
                <div class="font-open-sans text-xl text-lighten-gray flex flex-col">
                    <a href="#">Page 1</a>
                    <a href="#">Page 2</a>
                    <a href="#">Page 3</a>
                    <a href="#">More...</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/main.js"></script>
</body>
</html>