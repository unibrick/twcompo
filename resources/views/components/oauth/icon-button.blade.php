

<a href="{{$href}}" {{ $attributes->merge(['type' => 'submit', 'class' => 'h-10 relative flex items-center justify-center text-white rounded-md bg-gray-100 hover:bg-gray-200 py-1']) }}>

    <div class="">
        {{ $slot }}
    </div>
    <div class="text-center text-gray-600 font-medium">{{$label}}</div>
</a>
