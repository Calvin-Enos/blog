<x-app-layout>
    <div class="py-4">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>

                {{-- User Avatar --}}
                <div class="flex items-center gap-4">
                    @if ($post->user->image)
                        <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}"
                            class="w-12 h-12 rounded-full object-cover">
                    @else
                        <img src="https://tamilnaducouncil.ac.in/wp-content/uploads/2020/04/dummy-avatar.jpg"
                            alt="Default User Image" class="w-12 h-12 rounded-full object-cover">
                    @endif

                    <div>
                        <div class="flex gap-2">
                            <h3>{{ $post->user->name }}</h3>
                            &middot;
                            <a href="#" class="text-emerald-600">Follow</a>
                        </div>
                        <div class="flex gap-2 text-sm text-gray-500">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at?->format('d M Y') }}
                        </div>
                    </div>
                </div>
                {{-- User Avatar --}}

                {{-- Clap section --}}
                <x-clap-button />
                {{-- Clap section --}}

                {{-- Image section --}}
                @if ($post->image)
                    <div class="mt-8 w-full aspect-video overflow-hidden rounded-lg bg-gray-100">
                        <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                @endif
                {{-- Image section --}}

                {{-- Content section --}}
                <div class="mt-8 text-lg leading-relaxed text-gray-800 whitespace-pre-line">
                    {{ $post->content }}
                </div>
                {{-- Content section --}}

                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-xl">
                        {{ $post->category->name }}
                    </span>
                </div>

                 {{-- Clap section --}}
                <x-clap-button />
                {{-- Clap section --}}




            </div>




        </div>
    </div>
</x-app-layout>