<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-2 py-2 bg-blue-800 border border-transparent rounded font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
