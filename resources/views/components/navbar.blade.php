<nav class="bg-gradient-to-r from-emerald-400 to-green-400 text-white px-6 py-4 shadow-md flex justify-between items-center">
    <div class="flex items-center space-x-6 font-semibold">
        <a href="{{ route('dashboard') }}" class="text-lg hover:text-white">Dashboard</a>
        <a href="{{ route('pengelolaan') }}" class="text-lg hover:text-white">Pengelolaan</a>
        <a href="{{ route('profile') }}" class="text-lg hover:text-white">Profile</a>
    </div>
    
    <div class="flex items-center space-x-3">
        @if(session('username'))
            <span class="text-sm font-medium">Halo, {{ session('username') }}!</span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                Login
            </a>
        @endif
    </div>
</nav>
