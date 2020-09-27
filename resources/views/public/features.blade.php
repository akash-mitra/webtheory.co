<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebTheory | Features</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@700&family=Montserrat:wght@700&family=Open+Sans:wght@300;400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

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
                    <li><a href="features" class="block pl-4 py-3 font-montserat font-bold mr-8">Features</a></li>
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold mr-8">Docs</a></li>
                    <li><a href="#" class="block pl-4 py-3 font-montserat font-bold">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- First section -->
    <section class="bg-feat-dark-blue border-feat-yellow border-b-14">
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 flex relative pt-20 pb-32">
            <div class="w-full lg:w-7/12">
                <h1 class="font-roboto text-white text-4xl mb-8">
                    Create <b>Contents</b>, Build <b>Audiences</b> and run <b>Business</b>.
                    <br>
                    All from a single platform.
                </h1>
                <p class="text-feat-blue-faded font-roboto text-2xl">
                    WebTheory helps you to become a successful content-creator by streamlining the entire process of content creation, publication, distribution, audience building and even, content selling.
                </p>
            </div>
            <div class="hidden lg:block w-5/12 absolute top-0 right-0 mt-2 mr-8">
                <img class="w-full" src="img/Feature/first-section/podcast.svg" alt="Podcast">
            </div>
        </div>
    </section>

    <!-- Second section -->
    <section class="pb-18">
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 flex flex-wrap justify-center pt-32">
            <div class="w-full xl:w-5/12">
                <h2 class="text-center xl:text-left font-roboto font-light text-4xl mb-2">
                    Build Audiences. 
                    <br>
                    Increase Followers.
                </h2>
                <p class="text-center xl:text-left font-roboto font-light text-xl mb-18">
                    Your users are your assets. Give them some love.
                </p>
                <img  class="mb-10 xl:mb-0 mx-auto" src="img/Feature/second-section/audiences-image.svg" alt="Audiences">
            </div>
            <div class="w-full xl:w-5/12">

                <!-- Item -->
                <div class="flex mb-12">
                    <div class="w-1/4 mr-12">
                        <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                            1
                        </div>
                    </div>
                    <div>
                        <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                            Seamless user on-boarding
                        </h3>
                        <p class="font-open-sans text-base text-feat-black">
                            Seamless user onboarding via both Native and Social Media login (Facebook, Google, Twitter and more). Both native and social login systems can co-exist in parallel and work in tandem so that users can use them interchangeably.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex mb-12">
                    <div class="w-1/4 mr-12">
                        <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                            2
                        </div>
                    </div>
                    <div>
                        <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                            User Profile Management
                        </h3>
                        <p class="font-open-sans text-base text-feat-black">
                            Give users the ability to manage and custmize their profiles. Define custom user data fields. Stay compliant with GDPR regulations by providing the users rights to delete their personal profile data.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex mb-12">
                    <div class="w-1/4 mr-12">
                        <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                            3
                        </div>
                    </div>
                    <div>
                        <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                            Guard against Spammers and Bots
                        </h3>
                        <p class="font-open-sans text-base text-feat-black">
                            Advanced Machine Learning technology that prevents spammers and bots to abuse your system. Manual and automatic Account verification process and automatic validation checks on user produced contents.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="flex mb-12">
                    <div class="w-1/4 mr-12">
                        <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                            4
                        </div>
                    </div>
                    <div>
                        <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                            Engage with your Audiences
                        </h3>
                        <p class="font-open-sans text-base text-feat-black">
                            An elegant commenting system and the ability to accept user inputs via Custom Forms enable you to receive users feedback whenever needed. Fully customise Email templates and send event-driven notifications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Third section -->
    <section class="bg-feat-light-blue pb-18">
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 pt-16">
            <div class="w-full md:w-10/12 m-auto">

                <!-- Title -->
                <h2 class="text-center xl:text-left font-roboto font-light text-4xl mb-2">
                    Automatically Ensure SEO Best Practices
                </h2>
                <p class="text-center xl:text-left font-roboto font-light text-xl mb-20">
                    Imagine a platform that takes care of SEO and automatically detects SEO issues.
                </p>

                <!-- Content -->
                <div class="w-full flex flex-wrap justify-center">
                    <div class="w-full xl:w-1/2">
                        <!-- Item -->
                        <div class="flex mb-12">
                            <div class="w-1/4 mr-12">
                                <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                    1
                                </div>
                            </div>
                            <div>
                                <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                    Mobile Friendly
                                </h3>
                                <p class="font-open-sans text-base text-feat-black">
                                    All WebTheory built in templates are mobile friendly and follow the best practice guidelines for accessibility, usability and inclusion. 
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex mb-12">
                            <div class="w-1/4 mr-12">
                                <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                    2
                                </div>
                            </div>
                            <div>
                                <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                    SEO Heuristics
                                </h3>
                                <p class="font-open-sans text-base text-feat-black">
                                    Heuristical mechanisms to detect violations of SEO best practices. Automatically nudge or alert the author when such discrepancies are detected.
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex mb-12">
                            <div class="w-1/4 mr-12">
                                <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                    3
                                </div>
                            </div>
                            <div>
                                <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                    Hierarchical Content Structure
                                </h3>
                                <p class="font-open-sans text-base text-feat-black">
                                    Contents are organised in a hierarchical manner that helps Search engines to understand your structures better and help get better SERP ranking.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 flex items-center">
                        <img class="mx-auto" src="img/Feature/third-section/search_engines.svg" alt="Search Engines">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fourth section -->
    <section>
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 pt-16">
            <div class="w-full md:w-10/12 m-auto">

                <!-- Title -->
                <h2 class="text-center xl:text-left font-roboto font-light text-4xl mb-2">
                    Experience an Unparallel Site Performance
                </h2>
                <p class="text-center xl:text-left font-roboto font-light text-xl mb-20">
                    Never let your users suffer slowness in your website again. Rest assured with best-in-class performance.
                </p>

                <!-- Graph -->
                <img class="w-full mb-20" src="img/Feature/fourt-section/graph.svg" alt="Graph">

                <!-- Items -->
                <div class="flex flex-wrap pb-20">
                    <!-- Item -->
                    <div class="flex mb-12 w-full md:w-1/2">
                        <div class="w-1/4 mr-12">
                            <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                1
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                Mobile Friendly
                            </h3>
                            <p class="font-open-sans text-base text-feat-black">
                                All WebTheory built in templates are mobile friendly and follow the best practice guidelines for accessibility, usability and inclusion. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-12 w-full md:w-1/2">
                        <div class="w-1/4 mr-12">
                            <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                2
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                SEO Heuristics
                            </h3>
                            <p class="font-open-sans text-base text-feat-black">
                                Heuristical mechanisms to detect violations of SEO best practices. Automatically nudge or alert the author when such discrepancies are detected.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-12 w-full md:w-1/2">
                        <div class="w-1/4 mr-12">
                            <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                3
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                Hierarchical Content Structure
                            </h3>
                            <p class="font-open-sans text-base text-feat-black">
                                Contents are organised in a hierarchical manner that helps Search engines to understand your structures better and help get better SERP ranking.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-12 w-full md:w-1/2">
                        <div class="w-1/4 mr-12">
                            <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                4
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                Hierarchical Content Structure
                            </h3>
                            <p class="font-open-sans text-base text-feat-black">
                                Contents are organised in a hierarchical manner that helps Search engines to understand your structures better and help get better SERP ranking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fifth section -->
    <section class="bg-feat-light-blue pt-20 pb-8">
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18">
            <div class="w-full md:w-10/12 m-auto">

                <!-- Title -->
                <h2 class="text-center xl:text-left font-roboto font-light text-4xl mb-2">
                    Not Needing to worry about underlying server infra. Ever.
                </h2>
                <p class="text-center xl:text-left font-roboto font-light text-xl mb-20">
                    Letting you worry less about server management and allowing you to focus on what truly matters: creating contents.
                </p>

                <!-- Content -->
                <div class="w-full flex flex-wrap justify-center">
                    <div class="w-full xl:w-1/2 flex items-center">
                        <img class="mx-auto mb-10 xl:mb-0" src="img/Feature/fifth-section/maintenance.svg" alt="Maintenance">
                    </div>
                    <div class="w-full xl:w-1/2">
                        <!-- Item -->
                        <div class="flex mb-12">
                            <div class="mr-12">
                                <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                    1
                                </div>
                            </div>
                            <div>
                                <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                    SSL Enabled Secured Site
                                </h3>
                                <p class="font-open-sans text-base text-feat-black">
                                    Always serve HTTPS pages and do not worry about the certificate issuance and renewals as the same are fully taken care of FREE of cost. 
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex mb-12">
                            <div class="mr-12">
                                <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                    2
                                </div>
                            </div>
                            <div>
                                <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                    Automated Full Site Backup
                                </h3>
                                <p class="font-open-sans text-base text-feat-black">
                                    Your site is backed up on a weekly basis automatically. Moreover you can also take backup and restore your site on demand whenever needed. The space utilised for backup is not counted against your quota.
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="flex mb-12">
                            <div class="mr-12">
                                <div class="w-16 h-16 rounded-full font-roboto font-bold text-xl bg-feat-indigo-secondary text-feat-light-gray flex justify-center items-center">
                                    3
                                </div>
                            </div>
                            <div>
                                <h3 class="text-feat-blue-secondary font-roboto font-bold text-2xl mb-2">
                                    Advanced Security
                                </h3>
                                <p class="font-open-sans text-base text-feat-black">
                                    Each site is continuously monitored for any security breaches, DDoS attacks, invalid login attempts, etc. Such attempts are actively countered and blocked via various mechanisms, such as throttling, IP banning, etc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sixth section -->
    <section class="pt-32 pb-40">
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18">
            <div class="w-full md:w-10/12 m-auto">
                <h2 class="text-center md:text-left font-eczar font-bold text-h1 text-indigo-primary mb-10">
                    Untangle yourself!
                </h2>
                <div class="flex justify-between w-full">
                    <div class="w-full xl:w-2/5">
                        <h4 class="font-eczar font-bold text-t175 text-feat-blue-secondary mb-8">
                            Enjoy the Freedom from the mess of costly templates, pricey plugins and low quality hosting services
                        </h4>
                        <p class="font-open-sans font-light text-2xl">
                            Instead of relying on a myriad of other 3rd party developers for plugins and templates, WebTheory comes with inbuilt high quality plugins and they work natively and integrates seamlessly with your site at no extra cost.
                        </p>
                    </div>
                    <div class="hidden xl:block w-1/2">
                        <img class="ml-auto" src="img/Feature/sixth-section/plugin_mess.svg" alt="Plugin Mess">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seventh section -->
    <section class="pb-32">
        <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18">
            <!-- Title -->
            <h2 class="font-eczar font-bold text-4xl md:text-h1 text-indigo-primary text-center">
                <img class="inline-block mb-8" src="img/Feature/seventh-section/users.svg" alt="Users">
                And Get Native Support for Essential Features
            </h2>
            <p class="font-open-sans text-2xl md:text-t175 text-center mb-24">
                Without needing to pay extra for third-party plugins and tools
            </p>

            <!-- Items -->
            <div class="flex flex-wrap">

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item1.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            Advanced Site Analytics
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item2.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            Automatic In-built Global CDN
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item3.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            User Membership Support
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item4.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            Email Newsletters
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item5.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            Native REST API & Headless CMS
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item6.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            In-built Form Builder
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item7.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            In-built Commenting System
                        </h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="w-full sm:w-1/2 xl:w-1/4 px-2 mb-4">
                    <div class="bg-gradient-to-t from-indigo-primary via-indigo-primary to-feat-indigo-secondary pt-8 pb-16 px-6 h-56">
                        <img class="mx-auto mb-4" src="img/Feature/seventh-section/items/img_item8.svg" alt="Item1">
                        <h4 class="text-center font-open-sans text-xl text-feat-items-font">
                            Native Support for Content Monetization
                        </h4>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Eighth section -->
    <section>
        <!-- Title -->
        <h2 class="font-eczar font-bold text-4xl text-indigo-primary text-center mb-2">
            WebTheory Feature List
        </h2>
        <p class="font-open-sans text-t175 text-center mb-12">
            Do what you do the best. Leave the rest to WebTheory
        </p>

        <!-- Item container -->
        <div class="bg-gradient-to-t from-white to-feat-grad-blue bg-opacity-25">
            <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 py-16">
                
                <!-- Title -->
                <div class="font-open-sans font-bold text-feat-dark-blue uppercase mb-16">
                    CONTENT CREATION FEATURES
                </div>

                <!-- Items-->
                <div class="flex flex-wrap">
                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Markdown Editor
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Write rich formatted contents extremely quickly without using even an iota of HTML 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                WYSIWYG Editor
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Create contents using an easy to use WYSIWYG editor similar to Medium Editor 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Raw HTML Editor
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Comfortable creating contents in HTML? No problem. Feel free to use HTML Editor if you need one. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Composition Block
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Use content composition blocks to quickly add interesting visual elements to your pages, such as Image Gallery, Code Editor, Banner, Multi-column Layout etc. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-2 mr-10">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔ 
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Add Embedded Contents
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Easily embed third-party contents such as Youtube Video, Twitter Post, Amazon Affiliation Link, Podcasting Episode etc. in your pages. 
                            </p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

        <!-- Item container -->
        <div class="bg-gradient-to-t from-white to-feat-grad-blue bg-opacity-25">
            <div class="m-auto max-w-1920 px-6 sm:px-4_5xl md:px-18 py-16">
                
                <!-- Title -->
                <div class="font-open-sans font-bold text-feat-dark-blue uppercase mb-16">
                    IN-BUILT SEO  FEATURES
                </div>

                <!-- Items-->
                <div class="flex flex-wrap">
                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Auto-Detect SEO Problems
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                WebTheory automatically detects and warns you against common SEO mistakes such as missing meta tags, too small or too big titles, missing keywords etc., so that you can alsways rest assured. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Schema.org Integration
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Tell Google, Facebook, Twitter, Pinterest and other platforms exactly what your page is about by automatically adding schema.org data 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                SERP Preview 
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                Checkout how your page is going to look like in the search engine results page for Google. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-4 mr-8">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Automatically Generate Permalink and Sitemap
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                WebTheory automatically generates clean permalink URL for all the pages you create. It also generates XML sitemap automatically that can be submitted to the search engines for better indexing. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-2 mr-10">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔ 
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                RSS Feed Support
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                WebTheory automatically generates and enables RSS feed for all your public pages so that you can easily share your contents for syndication. 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-2 mr-10">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔ 
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Content Insight
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                WebTheory automatically detects top keywords or phrases from your contents so that you can ensure that the contents you created are targetting your intended keywords 
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="flex mb-18 w-full md:w-1/2">
                        <div class="ml-2 mr-10">
                            <div class="w-16 h-16 mx-auto rounded-full font-roboto font-bold text-4xl bg-green-400 text-feat-light-gray flex justify-center items-center">
                                ✔ 
                            </div>
                        </div>
                        <div>
                            <h3 class="text-feat-dark-blue font-open-sans text-xl mb-2">
                                Automatic Readability Check
                            </h3>
                            <p class="font-open-sans text-sm text-feat-black">
                                WebTheory automatically analyses the readability of your copy using Flesch Reading Ease Score and warns you when the readability drops below a threshold level. 
                            </p>
                        </div>
                    </div>

                </div>
            
            </div>
        </div>
        
    </section>

    <!-- Scripts -->
    <script src="/js/main.js"></script>
</body>
</html>