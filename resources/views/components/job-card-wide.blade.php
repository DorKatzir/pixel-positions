
@props(['jobs'])

<x-panel class="flex gap-x-6">

    <div>

        <x-employer-logo />
    </div>
    
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">Laracast</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">Video Producer</h3>
        <p class="text-sm text-gray-500 mt-auto">Full Time - From $60,000</p>

    </div>

    <div>
        @foreach($jobs->tags as $tag)
            <x-tag :$tag/>Backend</x-tag>   
        @endforeach
    </div>

</x-panel>
