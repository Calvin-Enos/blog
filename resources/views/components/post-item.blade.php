@props(['post'])

{{-- Card / bloc du post --}}
<article class="group bg-white border border-gray-200 rounded-xl
                                       overflow-hidden shadow-sm hover:shadow-md
                                       hover:-translate-y-1 transition-all duration-200">

    {{-- Image --}}
    <a href="#">
        <div class="overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1452784444945-3f422708fe5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=512&q=80"
                alt="" class="w-full h-48 object-cover
                                                   group-hover:scale-105 transition-transform duration-300">
        </div>
    </a>

    {{-- Contenu --}}
    <div class="p-5">

        {{-- Catégorie --}}
        @if(isset($post->category))
            <span class="inline-block mb-3 px-3 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-full">
                {{ $post->category->name }}
            </span>
        @endif

        {{-- Titre --}}
        <a href="#">
            <h2 class="mb-2 text-xl font-semibold text-gray-900
                                                   leading-tight hover:text-blue-600
                                                   transition-colors">
                {{ $post->title ?? 'Titre de la publication' }}
            </h2>
        </a>

        {{-- Description --}}
        <p class="mb-5 text-sm text-gray-600 leading-6">
            {{ $post->description ?? 'Découvrez cette publication et son contenu.' }}
        </p>

        {{-- Footer du bloc --}}
        <div class="flex items-center justify-between">

            <span class="text-xs text-gray-400">
                {{ $post->created_at?->format('d M Y') }}
            </span>

            <a href="#" class="inline-flex items-center gap-1.5 px-4 py-2
                                                  text-sm font-medium text-blue-600
                                                  bg-blue-50 rounded-lg
                                                  hover:bg-blue-600 hover:text-white
                                                  transition duration-200">

                Lire plus

                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </a>
        </div>
    </div>
</article>