@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p class="font-weight-bolder">test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-2">
                            <div class="card card-body border-0">
                                <p>test</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                          aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                          aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-group py-4">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset("svg/medium-vector-logo.svg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card border-0">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Title </h4>
                                            <p class="card-text">Description</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="//placehold.it/100" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Title </h4>
                                            <p class="card-text">Description</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="//placehold.it/100" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Title </h4>
                                            <p class="card-text">Description</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="//placehold.it/100" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card border-0">
                        <img src="{{asset("svg/medium-vector-logo.svg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-2">
                <div class="col-lg-10 mx-auto">
                    <div class="mb-4">

                        <hr class="solid">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 py-4">
                @for ($i = 1; $i < 10; $i++)
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col">
                                <div class="card-block px-2">
                                    <h4 class="card-title">Title {{$i}}</h4>
                                    <p class="card-text">Description</p>
                                    <a href="#" class="btn btn-primary">BUTTON</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <img src="//placehold.it/200" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

        </div>


        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection

@push('script')

@endpush
