@props(['user', 'size' => 'w-12 h-12'])

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full">
@else
    <img src="https://tamilnaducouncil.ac.in/wp-content/uploads/2020/04/dummy-avatar.jpg" alt="Default User Image"
        class="{{ $size }} rounded-full object-cover">
@endif