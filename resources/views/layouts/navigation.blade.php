
<div class="hidden sm:flex sm:items-center sm:ml-6">
@guest

    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline mr-4">Login</a>
    <a href="{{ route('register') }}" class="text-sm text-gray-700 bg-blue-500 text-white px-4 py-2 rounded">Registrieren</a>
@endguest

@auth

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-sm text-red-600 underline">Logout</button>
    </form>
    @endauth
    </div>
