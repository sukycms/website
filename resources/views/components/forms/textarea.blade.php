<div class="form-group mt-6">
    <x-forms.label class="label" :for="$id">
        {{ $label }}
    </x-forms.label>
    <textarea name="{{ $name }}" {{ $attributes->merge(['class' => 'w-full shadow appearance-none border rounded py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) }}>{{ $slot }}</textarea>
    @if ($errors->has($name))
        <div class="bg-red-500 p-4 mt-6 text-white text-center font-semibold">
            {!! $errors->first($name) !!}
        </div>
    @endif
</div>


