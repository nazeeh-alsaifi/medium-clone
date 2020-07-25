@extends('layouts.app')
@push('script_link')
    <script src="{{ secure_asset('js/select2.min.js') }}"></script>
    <script src="{{ secure_asset('js/tinymce.min.js') }}"></script>

    <link href="{{ secure_asset('css/select2.min.css') }}" rel="stylesheet">

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            width:794,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endpush
@section('content')
    <div id="articles-create" class="container">
        <div class="row justify-content-center">
            <div class="py-4 col-md-12">
                <div class="card">
                    <div class="card-header">Edit Article</div>

                    <div class="card-body">
                        <form method="post" action="{{route('article.update',$articleInfo->id)}}" enctype="multipart/form-data">
                            @method('PATCH')

                            @csrf

                            <div class="form-group row" style="">
                                <label for="title"
                                       class="col-md-2 col-form-label text-md-right">{{ __('Image') }}</label>
                                <div class="col-md-9">
                                    <label>Previous Image: {{$articleInfo->image}}</label>
                                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"   >
{{--                                    <span class="btn btn-dark mr-2" for="image">New Image</span>--}}

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
                                           value="{{$articleInfo->title ?? old('description')}}"  autocomplete="title">

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
                                           autocomplete="description" value="{{$articleInfo->description ?? old('description')}}">

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
                                            name="tag[]"  multiple="multiple">
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
                                    <textarea id="content"  class="form-control my-editor @error('content') is-invalid @enderror" name="content" >{{$articleInfo->content ?? old('content')}}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-lg-5 justify-content-center">
                                <div class="col-md-3 p-0">
                                    <button type="submit" class="btn btn-dark btn-block">
                                        {{ __('Update Article') }}
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
            $('.js-example-basic-multiple').val({{$leads}}).trigger('change');

        });



    </script>
@endpush
