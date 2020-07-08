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
                                        <tr >
                                            <th scope="row" >
                                                {{$loop->iteration}}
                                            </th>
                                            <td>
                                                <a href="{{route('article.show',$article->id)}}">{{$article->title}}</a>
                                            </td>
                                            <td>{{$article->description}}</td>
                                            <td>{{$article->created_at}}</td>
                                            <td>{{$article->updated_at}}</td>

                                            <td class="text-center" data-toggle="collapse" href="#article{{$loop->iteration}}">
                                                <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                        <tr class="hide-table-padding">
                                            <td colspan="4">
                                                <div id="article{{$loop->iteration}}"
                                                     class="collapse in p-3 text-center">
                                                    <a class="btn btn-success" href="{{route('article.edit',$article->id)}}">Edit</a>
                                                    <a class="btn btn-danger" href="{{route('article.delete',$article->id)}}">Delete</a>
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
        <div class="row justify-content-center">
            <div class="py-4 col-md-10 ">
                <div class="card">
                    <div class="card-header font-weight-bolder d-flex">
                        <span class="card_header_text pt-2">Tags</span>
                        <a class="btn btn-dark ml-auto" role="button">add</a>
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
                                    <tr data-toggle="collapse" href="#collapse3">
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="5">
                                            <div id="collapse3" class="collapse in p-3 text-center">
                                                <button class="btn btn-success">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr data-toggle="collapse" href="#collapse4">
                                        <th scope="row">1</th>
                                        <td>Mark twatssdf</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="5">
                                            <div id="collapse4" class="collapse in p-3 text-center">
                                                <button class="btn btn-success">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
