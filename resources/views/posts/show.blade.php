@extends('layouts.app')

@section('content')
<div class="container">
    <div class="grid grid-cols-12">
        <div class="form-group col-span-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-full">
        </div>
        <div class="form-group col-span-4 pl-3">
            <div class="flex items-center pb-3">
                <div class="pr-2">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-full rounded-full" style="max-width: 50px">
                </div>
                <div class="">
                    <span class="font-bold">
                        <a class="hover:text-black" href="/profile/{{ $post->user->id }}">
                            {{ $post->user->username }}
                        </a>
                </span>
                </div>
            </div>

            <hr>

            <p class="pt-3">
                <span class="font-bold">
                    <a class="hover:text-black" href="/profile/{{ $post->user->id }}">
                        {{ $post->user->username }}
                    </a>
                </span>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
