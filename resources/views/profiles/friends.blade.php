@extends('layouts.app')

@section('title') {{ $user->first_name }} {{ $user->last_name }} - Друзі @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <div class="h6 title">{{ $user->first_name }}’s Друзі ({{ count($user->friends_ids()) }})</div>
                        <form class="w-search">
                            <div class="form-group with-button">
                                <input class="form-control" type="text" placeholder="Search Friends...">
                                <button>
                                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                                </button>
                            </div>
                        </form>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Friends -->

    <div class="container">
        <div class="row">

            @foreach($friends as $friend)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="ui-block">
                        <div class="friend-item">
                            <div class="friend-header-thumb">
                                <a href="{{ route('profile', $friend->id) }}">
                                    <img src="{{ $friend->cover }}" alt="friend">
                                </a>
                            </div>

                            <div class="friend-item-content">

                                <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Report Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Block Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Turn Off Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <a href="{{ route('profile', $friend->id) }}">
                                            <img src="{{ $friend->avatar }}" alt="author" style="width: 100%">
                                        </a>
                                    </div>
                                    <div class="author-content">
                                        <a href="{{ route('profile', $friend->id) }}" class="h5 author-name">{{ $friend->first_name }} {{ $friend->last_name }}</a>
                                        <div class="country">
                                            @if($friend->profile->location)
                                                {{ $friend->profile->location }}
                                            @else
                                                &nbsp;
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-container" data-slide="fade">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="friend-count" data-swiper-parallax="-500">
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">{{ count($friend->friends_ids()) }}</div>
                                                    @if(count($friend->friends_ids()) == 1)
                                                        <div class="title">Друг</div>
                                                    @elseif(count($friend->friends_ids()) > 1 && count($friend->friends_ids()) < 5)
                                                        <div class="title">Друга</div>
                                                    @else
                                                        <div class="title">Друзів</div>
                                                    @endif
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">240</div>
                                                    <div class="title">Photos</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">16</div>
                                                    <div class="title">Videos</div>
                                                </a>
                                            </div>
                                            <div class="control-block-button" data-swiper-parallax="-100">
                                                <a href="#" class="btn btn-control bg-blue">
                                                    <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                                </a>

                                                <a href="#" class="btn btn-control bg-purple">
                                                    <svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            {{--<p class="friend-about" data-swiper-parallax="-500">--}}
                                                {{--Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.--}}
                                            {{--</p>--}}

                                            <div class="friend-since" data-swiper-parallax="-100">
                                                <span>Друзі з:</span>
                                                @foreach($friendships as $friendship)
                                                    @if(($friendship->requester == $friend->id && $friendship->user_requested == $user->id) || ($friendship->requester == $user->id && $friendship->user_requested == $friend->id))
                                                        <div class="h6">{{ $friendship->updated_at->format('d.m.Y') }}</div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ... end Friends -->
@endsection