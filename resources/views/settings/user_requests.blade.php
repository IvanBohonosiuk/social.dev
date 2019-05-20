@extends('layouts.settings')

{{--@section('title') Запити в друзі @endsection--}}

@section('content')
    <div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Запити в друзі</h6>
                {{--<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/public/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>--}}
            </div>

            <ul class="notification-list friend-requests">
                @if(count($user->pending_friend_requests()) > 0)
                    @foreach($user->pending_friend_requests() as $request)
                        <li>
                            <div class="author-thumb">
                                <a href="{{ route('profile', $request->id) }}">
                                    <img src="{{ $request->avatar }}" alt="author" width="42px">
                                </a>
                            </div>
                            <div class="notification-event">
                                <a href="{{ route('profile', $request->id) }}" class="h6 notification-friend">{{ $request->first_name }} {{ $request->last_name }}</a>
                                <span class="chat-message-item">Друзів: {{ count($request->friends()) }}</span>
                            </div>
                            <accept_friend_nots :id="{{$request->id}}"></accept_friend_nots>

                            {{--<div class="more">--}}
                                {{--<svg class="olymp-three-dots-icon"><use xlink:href="/public/icons/icons.svg#olymp-three-dots-icon"></use></svg>--}}
                                {{--<svg class="olymp-little-delete"><use xlink:href="/public/icons/icons.svg#olymp-little-delete"></use></svg>--}}
                            {{--</div>--}}
                        </li>
                    @endforeach
                @else
                    <li>
                        <div class="notification-event">
                            Запитів немає
                        </div>
                    </li>
                @endif

            </ul>

        </div>

    </div>
@endsection