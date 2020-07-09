@extends('layouts.app')
@section('content')
    <div id="home" class="p-5">
        <div id="article">
            <div class="row justify-content-center">
                <div class="py-4 col-md-6">
                    <div class="card border-0">
                        <div class="d-flex pl-md-3">
                            @foreach($Tags as $tag)
                                <h5 class="mr-2"><span class="badge badge-secondary">{{$tag->name}}</span></h5>
                            @endforeach

                        </div>
                        <div class="col-lg-12  justify-content-start pt-0 px-3 pb-3"
                             style="font-family: 'Merriweather', serif;">
                            <h1>
                                <b>{{$articleInfo->title}}</b>
                            </h1>
                            <div class="article-subheading">{{$articleInfo->description}}
                            </div>
                        </div>
                        <div class="show-article-info mb-4 col-lg-12">
                            <div class="show-article-info-left">
                                <div class="">
                                    <a class="show-profile-avatar">
                                        <img
                                            src="https://media-exp1.licdn.com/dms/image/C5603AQGaNl8fjmgRww/profile-displayphoto-shrink_400_400/0?e=1599696000&v=beta&t=wweDVpBWOHoKpBtoVSkmIPJWY8zoOvQNfNeWc4JeaRU"
                                            class="show-avatar-image" alt="">
                                    </a>
                                </div>
                                <div class="show-article-info-center">
                                    <div class="show-username">Nazeeh Saifi</div>
                                    <div><span class="show-date">Jul 9  </span>
                                        <span>.</span>
                                        <span class="show-read-time"> 1 min read</span>
                                    </div>
                                </div>
                            </div>

                            <div class="show-article-info-right ">
                                <i class="fa  fa-twitter show-link fa-2x" aria-hidden="true"></i>
                                <i class="fa  fa-linkedin show-link  fa-2x" aria-hidden="true"></i>
                                <i class="fa  fa-facebook  show-link fa-2x" aria-hidden="true"></i>

                                <i class="fa  fa-bookmark-o show-link  fa-2x" aria-hidden="true"></i>
                                <i class="fa  fa-ellipsis-h show-link fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>

                        @if(!($articleInfo->image == "noimage"))
                            <div class="p-3"><img src="/images/{{$articleInfo->image}}"
                                                  style="width: 100%; height:40vh;"/></div>
                        @endif
                        <div class="row ml-sm-0 mr-sm-0">
                            <div class="col-lg-12 col-sm-6 mb-2 mt-2 justify-content-start"
                                 style="font-family: 'Merriweather', serif;">
                                <div class="article-content">{!! $articleInfo->content !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
