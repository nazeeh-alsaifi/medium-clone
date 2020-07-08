@extends('layouts.app')

@section('content')

    <div id="articles_table">
        <div class="row justify-content-center">
            <div class="py-4 col-md-10 ">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                        <span class="card_header_text pt-2">Articles</span>
                        <a href="{{route('article.create')}}" class="btn btn-dark ml-auto" role="button">add</a>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-2">
                            <div class="my-custom-scrollbar">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>

                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $Articles as $article)
                                        <tr>
                                            <th scope="row">
                                                {{$loop->iteration}}
                                            </th>
                                            <td>
                                                <a href="{{route('article.show',$article->id)}}">{{$article->title}}</a>
                                            </td>
                                            <td>{{$article->description}}</td>
                                            <td>{{$article->created_at}}</td>
                                            <td>{{$article->updated_at}}</td>

                                            <td class="text-center" data-toggle="collapse"
                                                href="#article{{$loop->iteration}}">
                                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr class="hide-table-padding">
                                            <td colspan="4">
                                                <div id="article{{$loop->iteration}}"
                                                     class="collapse in p-3 text-center">
                                                    <a class="btn btn-success"
                                                       href="{{route('article.edit',$article->id)}}">Edit</a>
                                                    <a class="btn btn-danger"
                                                       href="{{route('article.delete',$article->id)}}">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="solid container">

    <div id="Tags_table">
        <div class="row justify-content-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                        <span class="card_header_text pt-2">Tags</span>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-2">
                            <div class="my-custom-scrollbar">
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-light ">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $Tags as $tag)
                                        <tr data-toggle="collapse" href="#">
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$tag->name}}</td>
                                            <td>{{$tag->created_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">

                <div class="card">
                    <div class="card-header font-weight-bolder">Create New Tag</div>
                    <div class="card-body">
                        <form method="post" action="{{route('tag.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">

                                <label for="name"
                                       class="col-md-12 col-form-label">Name</label>

                                <div class="col-md-12">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{old('name')}}" autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="row mt-md-3 justify-content-center">
                                    <div class="col-md-5 p-0">
                                        <button type="submit" class="btn btn-dark btn-block">
                                            {{ __('Add New Tag') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
