@extends('layouts.app')
@push('script_link')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/tinymce.min.js') }}"></script>

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div id="articles-create" class="container">
        <div class="row justify-content-center">
            <div class="py-4 col-md-12">
                <div class="card">
                    <div class="card-header">Create New Article</div>

                    <div class="card-body">
                        <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row" style="">
                                <label for="title"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Image') }}</label>

                                <div class="col-md-9">
                                    <input id="image" type="file"
                                           class="form-control-file @error('image') is-invalid @enderror" name="image"
                                           value="{{old('image')}}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-9">
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" name="title"
                                           value="{{old('title')}}" autocomplete="title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-9">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description"
                                           autocomplete="description" value="{{old('description')}}">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tag"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Tag') }}</label>

                                <div class="col-md-9">
                                    <select id="tag"
                                            class="js-example-basic-multiple form-control @error('tag') is-invalid @enderror"
                                            name="tag[]" multiple="multiple">
                                        @foreach($Tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>

                                    {{--
                                    <input id="tag" type="text"
                                           class="form-control @error('tag') is-invalid @enderror"
                                           name="tag"
                                           autocomplete="tag" value="{{old('tag')}}">
                                    --}}
                                    @error('tag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="article-content"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Content') }}</label>

                                <div class="pl-3">
                                    <textarea id="content"
                                              class="form-control my-editor @error('content') is-invalid @enderror"
                                              name="content">{{old('content')}}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-lg-5">
                                <div class="col-md-12 p-0">
                                    <button type="submit" class="btn btn-dark btn-block">
                                        {{ __('Add New Article') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
