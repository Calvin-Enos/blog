<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Bloc catégories --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="p-5">
                    <x-category-tabs>
                        No categories
                    </x-category-tabs>
                </div>
            </div>


            {{-- Bloc des publications --}}
            <div class="mt-6 bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="p-5">

                    {{-- Grille des posts --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                        @forelse ($posts as $post)

                            <x-post-item :post="$post" />

                        @empty
                            <div class="py-12 text-center col-span-full">
                                <div
                                    class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-gray-100">
                                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M12 6v6l4 2m6-2a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">
                                    Aucun article
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    Aucune publication n'est disponible pour le moment.
                                </p>
                            </div>
                        @endforelse

                    </div>
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