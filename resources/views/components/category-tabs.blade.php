{{-- @props(['categories']) --}}
<div class="flex flex-wrap items-center justify-center gap-2">
    {{-- Toutes les catégories --}}
    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium
                                  text-white bg-blue-600 rounded-lg
                                  hover:bg-blue-700 transition duration-200">
        Toutes
    </a>

    {{-- Catégories --}}
    {{-- @foreach ($categories as $category)
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium
                                                  text-gray-700 bg-gray-50 border border-gray-200
                                                  rounded-lg hover:bg-blue-50 hover:text-blue-600
                                                  hover:border-blue-200 transition duration-200">
            {{ $category->name }}
        </a>
    @endforeach --}}



    @forelse ($categories as $category)
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium
                                                  text-gray-700 bg-gray-50 border border-gray-200
                                                  rounded-lg hover:bg-blue-50 hover:text-blue-600
                                                  hover:border-blue-200 transition duration-200">
            {{ $category->name }}
        </a>
    @empty
       {{ $slot }}
    @endforelse
</div>