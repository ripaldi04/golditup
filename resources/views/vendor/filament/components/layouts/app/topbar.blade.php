<form method="POST" action="{{ route('filament.admin.auth.logout') }}">
    @csrf
    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        {{ __('Logout') }}
    </button>
</form>
