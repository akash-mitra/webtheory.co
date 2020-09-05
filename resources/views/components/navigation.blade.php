<div class="bg-white border-b w-full">
    <nav class="container mx-auto px-6 flex justify-between items-center" style="height: 60px">
        <div>
            <a href="/" class="flex items-center text-indigo-800 font-bold">
                <img src="webtheory-logo.svg" class="w-12 h-12 mr-4"/>
                WebTheory
            </a>
        </div>
        <div>
            @auth
            <div class="flex items-center">
                <a href="/home" class="text-normal hover:text-blue-600 mr-6">Account</a>
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit" class="text-normal hover:text-blue-600">Logout</button>
                </form>
            </div>
            @else
            <a href="/login" class="text-normal hover:text-blue-600">Login</a>
            @endauth

        </div>
    </nav>
</div>