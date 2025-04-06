<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'appearence-none text-white py-2 px-4 rounded bg-rose-500 hover:bg-rose-600 h-9 transition-colors duration-300']) }}>
    {{ $slot }}
</button>
