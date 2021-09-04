@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-12">
            <div class="form-group col-start-3 col-span-8">
                <div class="col-span-8  pb-2">
                    <span class="text-2xl">Edit Profile</span>
                </div>
                <label for="name" class="col-span-8  text-md-right">{{ __('Title') }}</label>
                    <input id="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') ?? $user->profile->title}}"
                        autocomplete="title"
                        autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group col-start-3 col-span-8">
                <label for="name" class="col-span-8  text-md-right">{{ __('Description') }}</label>
                    <input id="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        name="description" value="{{ old('description') ?? $user->profile->description}}"
                        autocomplete="description"
                        autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>


            <div class="form-group col-start-3 col-span-8">
                <label for="name" class="col-span-8  text-md-right">{{ __('URL') }}</label>
                    <input id="url"
                        type="text"
                        class="form-control @error('url') is-invalid @enderror"
                        name="url" value="{{ old('url') ?? $user->profile->url}}"
                        autocomplete="url"
                        autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group col-start-3  col-span-8">
                <label for="image" class="col-span-8  text-md-right">{{ __('Profile Image') }}</label>
                <input type="file" class="form-control-file" id="image" name="image">

                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>


            <div class="form-group col-start-3 col-end-8 col-span-8">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Save Profile
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
