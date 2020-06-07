<button {{ $attributes->merge(['class' => 'bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-600 rounded focus:outline-none focus:shadow-outline']) }}>
    {{ $slot }}
</button>
