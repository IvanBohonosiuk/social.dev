@extends('layouts.app')

@section('title') {{ $user->first_name }} {{ $user->last_name }} @endsection

@section('content')
    <!-- Main Content -->

    <div class="col-xl-6 push-xl-3 col-lg-12 push-lg-0 col-sm-12 col-xs-12">
        @if(Auth::check())
            <post :profile_user_id="{{ $user->id }}" :auth_user="{{ Auth::user() }}"></post>
        @endif
        <profile-feed
            :profile_user_id="{{ $user->id }}"
{{--            @if($user->isOnline())--}}
                {{--:is_online="1"--}}
            {{--@else--}}
                :is_online="0"
            {{--@endif--}}
        ></profile-feed>
    </div>

    <!-- ... end Main Content -->

    @include('parts.left_sidebar')

    @include('parts.right_sidebar')

@endsection