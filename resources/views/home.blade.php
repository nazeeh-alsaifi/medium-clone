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
                <div class="col-sm-12 col-md-4 col-lg-4 p-0">
                    <div class="card border-0">
                        <img src="/images/{{$First[0]->image}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title heading">
                                <a href="{{route('article.show',$First[0]->id)}}">{{$First[0]->title}}</a>
                            </h5>
                            <p class="card-text">{{$First[0]->description}}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-5 p-0">
                    <div class="card border-0">
                        @for($i=1;$i<4;$i++)
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                                <div class="card border-0">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="/images/{{$First[$i]->image}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="card-block px-2 heading-small">
                                                <a href="{{route('article.show',$First[$i]->id)}}">{{$First[$i]->title}}</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-0">
                    <div class="card border-0">
                        <img src="/images/{{$First[4]->image}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title heading">
                                <a href="{{route('article.show',$First[4]->id)}}">{{$First[4]->title}}</a>
                            </h5>
                            <p class="card-text">{{$First[4]->description}}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center ">
        <div class="row ">
            <div class="col-lg-10">
                <hr class="solid">
            </div>
        </div>
    </div>
    <div class="container  d-flex">
        <div class="col-lg-8">
            @foreach( $Articles as $article)
                <div class="card my-lg-5 border-0">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="px-2">
                                <div class="card-subheading">
                                    Based on your interests
                                </div>
                                <div class="heading">
                                    <a href="{{route('article.show',$article->id)}}">{{$article->title}}</a>
                                </div>
                                <div class="article-info">
                                    <div class="article-info-left">
                                        <div class="">
                                            <a class="profile-avatar">
                                                <img
                                                    src="https://cdn-images-1.medium.com/fit/c/40/40/1*tl0Vk1GWLRkaRwsBXKTnFg.jpeg"
                                                    class="avatar-image" alt="">
                                            </a>
                                        </div>
                                        <div class="article-info-center">
                                            <div class="username">Nazeeh Saifi</div>
                                            <div><span
                                                    class="date">{{$article->created_at->shortEnglishMonth }} {{$article->created_at->day }}  </span>
                                                <span>.</span>
                                                <span class="read-time"> {{$loop->iteration}} min read</span>
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
                <div class="card my-lg-4 border-0">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="px-4">
                                <div class="heading">
                                    {{$article->title}}
                                </div>
                                <div class="article-info">
                                    <div class="article-info-left">
                                        <div>
                                            <a class="profile-avatar">
                                                <img
                                                    src="https://cdn-images-1.medium.com/fit/c/40/40/1*tl0Vk1GWLRkaRwsBXKTnFg.jpeg"
                                                    class="avatar-image" alt="">
                                            </a>
                                        </div>
                                        <div class="article-info-center">
                                            <div class="username">Nazeeh Saifi</div>
                                            <div><span class="date">{{$article->created_at}}</span><span
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
<script>

    $('#recipeCarousel').carousel({
        interval: 10000
    });

    $('.carousel .carousel-item').each(function(){
        var minPerSlide = 20;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<minPerSlide;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
@endpush
