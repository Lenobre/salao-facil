<nav class="@container/sidebar transition-all duration-700 bg-gray-50 dark:bg-zinc-900 border-r border-gray-300 dark:border-zinc-700 top-0 h-screen fixed py-4 px-2 w-64 flex flex-col gap-2 overflow-hidden"
    id="sidebar">
    <h1 class="font-bold text-4xl text-center text-rose-400 mb-4">Salão Fácil</h1>

    <x-sidebar.link class="hover:text-rose-500" href="{{ route('dashboard.index') }}">
        <x-icons.home-fill class="mr-2 transition-colors duration-150 w-5" />

        <span class="@max-[100px]/sidebar:hidden">
            Home
        </span>
    </x-sidebar.link>
</nav>
