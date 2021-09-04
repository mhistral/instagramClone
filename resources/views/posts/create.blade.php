@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="grid grid-cols-12">
            <div class="form-group col-start-3 col-span-8">
                <div class="col-span-8  pb-2">
                    <span class="text-2xl">Add new Post</span>
                </div>
                <label for="name" class="col-span-8  text-md-right">{{ __('Post Caption') }}</label>
                    <input id="caption"
                        type="text"
                        class="form-control @error('caption') is-invalid @enderror"
                        name="caption" value="{{ old('caption') }}"
                        autocomplete="caption"
                        autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group col-start-3  col-span-8">
                <label for="image" class="col-span-8  text-md-right">{{ __('Post Image') }}</label>
                <input type="file" class="form-control-file" id="image" name="image">

                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>


            <div class="form-group col-start-3 col-end-8 col-span-8">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create
                </button>
            </div>
        </div>
    </form>


</div>
@endsection
