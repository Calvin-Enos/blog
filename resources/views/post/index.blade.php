<x-app-layout>
    <div class="py-4">
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
                            <x-post-item :post="$post" ></x-post-item>
                        @empty
                            <div class="text-center text-gray-400 py-16">
                                <p class="text-lg">No posts found.</p>
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