<div class="bg-white w-full py-3 text-indigo-600 text-lg font-bold font-serif">
    <nav class="container mx-auto px-6 flex justify-between items-center">
        <div>
            <a href="/" class="flex items-center text-lg font-bold">
                <img src="/webtheory-logo.svg" class="w-12 h-12 mr-4"/>
                WebTheory
            </a>
        </div>
        <div>
            @auth
                <div class="flex items-center">
                    <a href="/home" class="hover:text-indigo-800 mr-6">Dashboard</a>
                    <form method="post" action="/logout">
                        @csrf
                        
                        <button type="submit" class="hover:text-indigo-800 text-lg font-bold">Logout</button>
                    </form>
                </div>
            @else
                <a href="/features" class="hover:text-indigo-800 mr-6">Features</a>
                <a href="#" class="hover:text-indigo-800 mr-6">Docs</a>
                <a href="#" class="hover:text-indigo-800 mr-6">Blog</a>

                <a href="/register" class="hover:text-indigo-800 mr-6">Register</a>
                <a href="/login" class="hover:text-indigo-800">Login</a>
            @endauth
        </div>
    </nav>
</div>