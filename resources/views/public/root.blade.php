@extends('layouts.app')

@section('content')
<main class="w-full bg-white">
	<section class="flex flex-col">
	  	<div class="flex flex-col pt-20 z-10">
			<div class="items-center text-center">
		  		<h1 class="text-indigo-600 text-5xl font-bold">Be the Voice. Not the Echo.</h1>
		  		<p class="text-2xl"><span class="border-b-8 border-green-200 pb-1">Web-Superiority Platform</span> for Modern Content Creators, Influencers & Businesses</p>
			</div>
	  	</div>

		<div class="relative z-0 py-10">
			<img src="images/main-group.svg" alt="" class="relative w-full z-10 object-contain" />
			<img src="images/ballon-stars.svg" alt="" class="absolute left-0 bottom-0 z-10 object-contain" />
			<div class="absolute inset-0 flex flex-col">
				<div class="bg-white" style="height: 55%;"></div>
				<div class="bg-gray-900" style="height: 45%;"></div>
			</div>
		</div>

	  	<div class="bg-gray-900 md:-mt-64 xl:-mt-64">
			<div class="relative z-10 container pt-32 lg:pt-16 pb-16 flex items-end">
				<img src="images/ballons.svg" alt="" class="object-contain hidden lg:block" />
				<div class="flex flex-col items-center lg:items-start text-center lg:text-left lg:justify-end text-gray-400 lg:pl-10 lg:pb-1">
					<h2 class="text-3xl font-serif font-bold text-yellow-500">Sign Up for Private Beta Today!</h2>
					<p class="text-xl py-5">WebTheory is in private beta. But if you are Interested to try out WebTheory now, do let us know below. We will allocate you as soon as new private beta slots are available.</p>
					<form action="" class="flex justify-center lg:justify-start text-2xl font-serif mt-3 self-stretch">
						<input type="text" class="bg-white rounded-lg shadow-inner text-gray-200 p-3 w-2/3" placeholder="Enter your email ID" />
						<button type="button" class="px-10 bg-indigo-600 text-white rounded-lg shadow-lg flex-shrink-0 ml-6">Sign Up</button>
					</form>
				</div>
			</div>
	  	</div>
	</section>
	
	<section class="flex flex-col items-center py-8 lg:py-16">
		<div class="flex flex-col items-center container text-center lg:text-left">
			<h2 class="text-indigo-600 text-5xl">Go Viral, Break the Internet!</h2>
			<p class="text-xl lg:text-3xl">WebTheory is like no other CMS. It is opinionated, radical and foxy.</p>
		</div>
		<div class="bg-gray-100 py-8 mt-8 w-full">
			<div class="grid grid-cols-4 md:grid-cols-12 gap-10 container">
			<div class="col-span-4 flex flex-col">
				<h3 class="text-2xl lg:text-3xl font-serif text-indigo-700 font-bold mb-5">No Plugin Mess</h3>
				<p class="text-base lg:text-lg">WebTheory comes prepacked with all the essential features you will realistically ever need. So, no more installing of low-grade third party plugins and modules.</p>
			</div>
			<div class="col-span-4 flex flex-col">
				<h3 class="text-2xl lg:text-3xl font-serif text-indigo-600 font-bold mb-5">Tools for Business</h3>
				<p class="text-base lg:text-lg">Run your business from home with the ability to sell contents directly from your site, publish Ads from various networks and manage users and subscriptions.</p>
			</div>
			<div class="col-span-4 flex flex-col">
				<h3 class="text-2xl lg:text-3xl font-serif text-indigo-600 font-bold mb-5">Blazing Fast Performance</h3>
				<p class="text-base lg:text-lg">Each WebTheory site is hosted on highly optimised and specifically configured dedicated SSD servers, with in-built global CDN, automated backups and full SSL support.</p>
			</div>
			</div>
		</div>
	</section>

	<section class="container grid grid-cols-12 gap-10 py-8 lg:py-16 items-center">
		<div class="flex flex-col col-span-6">
			<h3 class="text-2xl lg:text-3xl font-serif text-indigo-600 font-bold mb-5">Create Engaging Blog Posts using Content Compositions</h3>
			<p class="text-base lg:text-xl">Content Compositions allow you to embed rich media and flexible design elements in your blog posts making them standout in the world of boring medium-like blog posts.</p>
		</div>
		<div class="col-span-6 h-full">
			<img src="images/story 3 image.svg" alt="" class="h-full" />
		</div>
	</section>

	<section class="relative">
	  	<div class="container grid grid-cols-12 gap-10 py-8 lg:py-16 items-center">
			<div class="col-span-6 h-full">
			<img src="images/story 2 image.svg" alt="" class="h-full" />
			</div>
			<div class="flex flex-col col-span-6">
			<h3 class="text-2xl lg:text-3xl font-serif text-indigo-600 font-bold mb-5">Run Online Business from Home</h3>
			<p class="text-base lg:text-xl">WebTheory comes with all the tools to help you run your online business from the comfort of your home. Run multiple Ad services, accept payments, create subscription plan, sell your contents - all from a single platform without additional fee.</p>
			</div>
	  	</div>
	  	<div class="absolute bottom-0 left-0 right-0">
			<svg viewBox="0 0 1438 285" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
				<path d="M0 38.5288C0 38.5288 285.405 125.219 719 38.5288C1152.6 -48.1611 1438 38.5288 1438 38.5288V285H0V38.5288Z" fill="#F7DF18" fill-opacity="0.1" />
			</svg>
	  	</div>
	</section>

	<section class="container grid grid-cols-12 gap-10 py-8 lg:py-16 items-center">
		<div class="flex flex-col col-span-6">
			<h3 class="text-2xl lg:text-3xl font-serif text-indigo-600 font-bold mb-5">Create Engaging Blog Posts using Content Compositions</h3>
			<p class="text-base lg:text-xl">Content Compositions allow you to embed rich media and flexible design elements in your blog posts making them standout in the world of boring medium-like blog posts.</p>
		</div>
		<div class="col-span-6 h-full flex justify-center">
			<img src="images/undraw_tweetstorm_49e8 1.svg" alt="" class="h-full" />
		</div>
	</section>

	<section>
		<div class="bg-white flex flex-col relative">
			<div class="flex flex-col absolute inset-0 z-0">
				<div class="bg-white" style="height: 30%;"></div>
				<div class="bg-gray-700" style="height: 70%;"></div>
			</div>
			<svg viewBox="0 0 1439 152" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative z-10">
				<path d="M0 72.4024C0 72.4024 480.666 163.668 662.54 139.461C844.413 115.254 1439 152 1439 152V17.8332C1439 17.8332 1009.3 -22.2915 719.5 17.8332C429.701 57.9578 0 17.8332 0 17.8332V72.4024Z" fill="#F7DF18" />
			</svg>
		</div>
	  	<div class="bg-gray-700 text-white">
			<div class="container grid grid-cols-12 gap-10 pb-16 items-center md:-mt-10">
				<div class="flex flex-col col-span-12 lg:col-span-5">
					<h3 class="text-2xl md:text-3xl font-serif text-indigo-secondary font-bold mb-5">Run Online Business from Home</h3>
					<p class="text-base md:text-xl">WebTheory comes with all the tools to help you run your online business from the comfort of your home. Run multiple Ad services, accept payments, create subscription plan, sell your contents - all from a single platform without additional fee.</p>
				</div>
				<div class="col-span-12 lg:col-span-7 h-full z-10 order-first lg:order-none">
					<img src="images/Dashboard Image.png" alt="" class="lg:h-full w-full object-contain md:-m-6 lg:-mt-10" />
				</div>
			</div>
	  	</div>
	</section>

	<section>
		<div class="bg-gray-800 text-white py-8 lg:py-16">
			<div class="container flex flex-col items-center">
			<div class="w-10/12 text-center">
				<h2 class="font-serif text-3xl font-bold text-yellow-secondary">One Plan to Rule them All</h2>
				<p class="text-2xl lg:text-3xl">Unlimited User accounts, Unlimited Admin accounts, Unlimited Pages, Unlimited Bandwidth. No barriers. No breaks.</p>
			</div>
			</div>
		</div>
		<div class="relative">
			<img src="images/Group 31.png" alt="" class="w-full relative z-10" />
			<div class="bg-gray-800 absolute top-0 left-0 right-0" style="height: 50%;"></div>
		</div>
		<div class="bg-gray-800 py-8 lg:py-16">
			<div class="flex flex-col container">
			<h2 class="text-3xl text-yellow-400">Help us build WebTheory together. Sign up for our private beta.</h2>
			<p class="text-2xl text-gray-500">WebTheory is in private beta. But if you are Interested to try out WebTheory now, do let us know below. We will allocate you as soon as new private beta slots are available.</p>
			<form action="" class="flex justify-center lg:justify-start text-2xl font-serif mt-3 self-stretch mt-10">
				<input type="text" class="bg-white rounded-lg shadow-inner text-gray-200 p-3 w-full" placeholder="Enter your email ID" />
				<button type="button" class="px-10 bg-indigo-700 text-white rounded-lg shadow-lg flex-shrink-0 ml-6">Sign Up</button>
			</form>
			</div>
		</div>
	</section>
</main>

<footer class="bg-gray-900 py-8 lg:py-16">
	<div class="container grid grid-cols-12 gap-16">
		<div class="flex flex-col justify-center md:col-span-12 xl:col-span-6">
			<div class="flex items-center">
				<svg width="88" height="50" viewBox="0 0 88 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-10">
					<g clip-path="url(#clip0)">
					<path d="M34.9104 24.936L8.72759 0H61.0932L87.276 24.936L61.0932 49.872L34.9104 24.936Z" fill="#6C63FF" />
					<path d="M61.0932 49.8725L34.9104 24.9365L8.72759 49.8725H61.0932Z" fill="#5851CC" />
					</g>
					<defs>
					<clipPath id="clip0">
						<rect width="87.276" height="49.872" fill="white" />
					</clipPath>
					</defs>
				</svg>
				<h1 class="text-5xl text-indigo-700">WebTheory</h1>
			</div>
			<p class="text-xl text-white mt-5">The web superiority platform for content creators, influencers and businesses</p>
		</div>
		<div class="flex flex-col md:col-span-4 xl:col-span-2">
			<h2 class="text-yellow-400 uppercase text-2xl font-bold">Features</h2>
			<ul class="flex flex-col text-white text-xl mt-5">
				<li><a href="">Feature 1</a></li>
				<li><a href="">Feature 1</a></li>
				<li><a href="">Feature 1</a></li>
				<li><a href="">More...</a></li>
			</ul>
		</div>
		<div class="flex flex-col md:col-span-4 xl:col-span-2">
			<h2 class="text-yellow-400 uppercase text-2xl font-bold">Contact</h2>
			<ul class="flex flex-col text-white text-xl mt-5">
				<li><a href="">Facebook</a></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Youtube</a></li>
				<li><a href="">LinkedIn</a></li>
			</ul>
		</div>
		<div class="flex flex-col md:col-span-4 xl:col-span-2">
			<h2 class="text-yellow-400 uppercase text-2xl font-bold">Documentation</h2>
			<ul class="flex flex-col text-white text-xl mt-5">
				<li><a href="">Page 1</a></li>
				<li><a href="">Page 1</a></li>
				<li><a href="">Page 1</a></li>
				<li><a href="">More...</a></li>
			</ul>
		</div>
	</div>
</footer>
@endsection
