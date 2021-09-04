@extends('layouts.app')

@section('content')
<div class="container">
    <div class="grid grid-cols-3">
        <div class="col-span-1 p-5" style="max-width: 75%;">
            <img class="rounded-full w-full" src="{{ $user->profile->profileImage()}}" alt="">
        </div>
        <div class="col-span-2 pt-5">
            <div class="flex justify-between items-baseline">

                <div class="flex items-center pb-3">
                    <div class="text-2xl font-semibold">
                        {{ $user->username }}
                    </div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="text-blue-600">Add New Post</a>
                @endcan
            </div>

            {{-- controlled by the ProfilesController@Update --}}
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="text-blue-600">Edit Profile</a>
            @endcan

            <div class="flex pt-2">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="font-semibold pt-4">{{ $user->profile->title  }}</div>
            <div class="">{{ $user->profile->description }}</div>
            <div class=""><a href="#" class="text-blue-600">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="grid grid-cols-3 pt-5 gap-2">
        @foreach ($user->posts as $post)
        <div class="col-span-1 pb-5">
            <a href="/p/{{ $post->id }}">
                <img class="w-full" src="/storage/{{ $post->image }}" alt="">
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection
