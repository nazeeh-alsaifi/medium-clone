@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">Popular</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">MOMENTUM</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">ELMENTAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">ZORA</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">FORGE</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">MARKER</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">CORONAVIRUS</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-md-2 ">
                            <div class="carousel-card ">
                                <a href="https://laravel.com/docs">GEN</a>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark  rounded-circle"></span>
                    </a>
                </div>
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
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
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
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row mx-auto my-auto">
            <div class="col-lg-10 mx-auto">
                <div class="mb-4">
                    <hr class="solid">
                </div>
            </div>
        </div>
    </div>
    <div class="container  d-flex">
    <div class="col-lg-8">
            @foreach( $Articles as $article)
                <div class="card mt-lg-5">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="px-2">
                                <div class="card-subheading">
                                    Based on your interests
                                </div>
                                <div class="heading">
                                    {{$article->title}}
                                </div>
                                <div class="article-info">
                                    <div class="article-info-left">
                                        <div class="">
                                            <a class="profile-avatar">
                                                <img
                                                    src="https://cdn-images-1.medium.com/fit/c/40/40/1*tl0Vk1GWLRkaRwsBXKTnFg.jpeg"
                                                    class="avatar-image" alt="Go to the profile of Jeff Goins">
                                            </a>
                                        </div>
                                        <div class="article-info-center">
                                            <div class="username">Eric Simons</div>
                                            <div><span class="date">Aug 3 ·  </span><span
                                                    class="read-time"> 4 min read</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="article-info-right">
                                        <i class="fa fa-bookmark-o bookmark-link fa-2x" aria-hidden="true"></i>
                                        <i class="fa fa-ellipsis-h more-options-link fa-2x"
                                           aria-hidden="true"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <img src="/images/{{$article->image}}" width="100%" height="100%" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-lg-4">
            @foreach( $Articles as $article)
                <div class="card mt-lg-2">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="px-2">
                                <div class="heading">
                                    {{$article->title}}
                                </div>
                                <div class="article-info">
                                    <div class="article-info-left">
                                        <div class="">
                                            <a class="profile-avatar">
                                                <img
                                                    src="https://cdn-images-1.medium.com/fit/c/40/40/1*tl0Vk1GWLRkaRwsBXKTnFg.jpeg"
                                                    class="avatar-image" alt="Go to the profile of Jeff Goins">
                                            </a>
                                        </div>
                                        <div class="article-info-center">
                                            <div class="username">Eric Simons</div>
                                            <div><span class="date">Aug 3 ·  </span><span
                                                    class="read-time"> 4 min read</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>


@endsection

@push('script')

@endpush
