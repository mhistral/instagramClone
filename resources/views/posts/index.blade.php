@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="grid grid-cols-12">
            <div class="col-start-4 col-span-6">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-full">
                </a>
            </div>
        </div>


        <div class="grid grid-cols-12">
            <div class="form-group col-start-4 col-span-6 pt-2 pb-4">
                <p class="">
                    <span class="font-bold">
                        <a class="hover:text-black" href="/profile/{{ $post->user->id }}">
                            {{ $post->user->username }}
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    @endforeach
    <div class="grid">
       <div clas="grid-cols-12">
            {{ $posts->links() }}
       </div>
    </div>
</div>
@endsection
