<nav class="bg-white border-b border-gray-200 px-4 py-3">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">Home</a>
            <a href="{{ route('tasks.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">Tasks</a>
        </div>

        <div>
            @auth
                <span class="text-gray-600 mr-4">Welcome, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:underline">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline mr-4">Login</a>
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
            @endguest
        </div>
    </div>
</nav>
