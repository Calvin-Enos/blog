<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Bloc catégories --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="p-5">
                    <div class="flex flex-wrap items-center justify-center gap-2">

                        {{-- Toutes les catégories --}}
                        <a href="#"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium
                                  text-white bg-blue-600 rounded-lg
                                  hover:bg-blue-700 transition duration-200">
                            Toutes
                        </a>

                        {{-- Catégories --}}
                        @foreach ($categories as $category)
                            <a href="#"
                               class="inline-flex items-center px-4 py-2 text-sm font-medium
                                      text-gray-700 bg-gray-50 border border-gray-200
                                      rounded-lg hover:bg-blue-50 hover:text-blue-600
                                      hover:border-blue-200 transition duration-200">
                                {{ $category->name }}
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>


            {{-- Bloc des publications --}}
            <div class="mt-6 bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="p-5">

                    {{-- Grille des posts --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                        @foreach ($posts as $post)

                            {{-- Card / bloc du post --}}
                            <article
                                class="group bg-white border border-gray-200 rounded-xl
                                       overflow-hidden shadow-sm hover:shadow-md
                                       hover:-translate-y-1 transition-all duration-200">

                                {{-- Image --}}
                                <a href="#">
                                    <div class="overflow-hidden bg-gray-100">
                                        <img
                                            src="https://images.unsplash.com/photo-1452784444945-3f422708fe5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=512&q=80"
                                            alt=""
                                            class="w-full h-48 object-cover
                                                   group-hover:scale-105 transition-transform duration-300"
                                        >
                                    </div>
                                </a>

                                {{-- Contenu --}}
                                <div class="p-5">

                                    {{-- Catégorie --}}
                                    @if(isset($post->category))
                                        <span class="inline-block mb-3 px-3 py-1 text-xs font-medium
                                                     text-blue-700 bg-blue-50 rounded-full">
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

                                        <a href="#"
                                           class="inline-flex items-center gap-1.5 px-4 py-2
                                                  text-sm font-medium text-blue-600
                                                  bg-blue-50 rounded-lg
                                                  hover:bg-blue-600 hover:text-white
                                                  transition duration-200">

                                            Lire plus

                                            <svg
                                                class="w-4 h-4"
                                                aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M19 12H5m14 0-4 4m4-4-4-4"
                                                />
                                            </svg>
                                        </a>

                                    </div>

                                </div>
                            </article>
                        @endforeach
                    </div>

                    {{-- Aucun post --}}
                    @if($posts->isEmpty())
                        <div class="py-12 text-center">
                            <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center
                                        rounded-full bg-gray-100">
                                <svg
                                    class="w-6 h-6 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6v6l4 2m6-2a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z"
                                    />
                                </svg>
                            </div>

                            <h3 class="text-lg font-semibold text-gray-900">
                                Aucun article
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Aucune publication n'est disponible pour le moment.
                            </p>
                        </div>
                    @endif

                </div>
            </div>
            
            {{-- Pagination --}}
            <div class="mt-6">
                {{-- {{ $posts->onEachSide(1)->links() }} --}}
                {{ $posts->onEachSide(1)->links('vendor.pagination.tailwind') }}
            </div>

        </div>
    </div>
</x-app-layout>
