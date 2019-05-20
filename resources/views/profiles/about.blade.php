@extends('layouts.app')

@section('title') {{ $user->first_name }} {{ $user->last_name }} - Інформація @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-8 push-xl-4 col-lg-8 push-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Хоббі та інтереси</h6>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/public/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Хоббі:</span>
                                        <span class="text">@if($user->profile->hobbies != null) {{ $user->profile->hobbies }} @else &#8211; @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Улюблені ТВ-шоу:</span>
                                        <span class="text">@if($user->profile->tv_shows != null) {{ $user->profile->tv_shows }} @else &#8211; @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Улюблені фільми:</span>
                                        <span class="text">@if($user->profile->movies != null) {{ $user->profile->movies }} @else &#8211; @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Улюблені ігри:</span>
                                        <span class="text">@if($user->profile->games != null) {{ $user->profile->games }} @else &#8211; @endif</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Улюблена музика:</span>
                                        <span class="text">@if($user->profile->music != null) {{ $user->profile->music }} @else &#8211; @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Улюблені книги:</span>
                                        <span class="text">@if($user->profile->books != null) {{ $user->profile->books }} @else &#8211; @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Улюблені письменники:</span>
                                        <span class="text">@if($user->profile->writers != null) {{ $user->profile->writers }} @else &#8211; @endif</span>
                                    </li>
                                    <li>
                                        <span class="title">Інша інформація:</span>
                                        <span class="text">@if($user->profile->hobbies != null) {{ $user->profile->hobbies }} @else &#8211; @endif</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Робота та освіта</h6>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/public/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                    <div class="ui-block-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">The New College of Design</span>
                                        <span class="date">2001 - 2006</span>
                                        <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
                                    </li>
                                    <li>
                                        <span class="title">Rembrandt Institute</span>
                                        <span class="date">2008</span>
                                        <span class="text">Five months Digital Illustration course. Professor: Leonardo Stagg.</span>
                                    </li>
                                    <li>
                                        <span class="title">The Digital College </span>
                                        <span class="date">2010</span>
                                        <span class="text">6 months intensive Motion Graphics course. After Effects and Premire. Professor: Donatello Urtle. </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="widget w-personal-info item-block">
                                    <li>
                                        <span class="title">Digital Design Intern</span>
                                        <span class="date">2006-2008</span>
                                        <span class="text">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</span>
                                    </li>
                                    <li>
                                        <span class="title">UI/UX Designer</span>
                                        <span class="date">2008-2013</span>
                                        <span class="text">UI/UX Designer for the “Daydreams” agency. </span>
                                    </li>
                                    <li>
                                        <span class="title">Senior UI/UX Designer</span>
                                        <span class="date">2013-Now</span>
                                        <span class="text">Senior UI/UX Designer for the “Daydreams” agency. I’m in charge of a ten person group, overseeing all the proyects and talking to potential clients.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 pull-xl-8 col-lg-4 pull-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Персональна інформація</h6>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/public/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                    <div class="ui-block-content">
                        <ul class="widget w-personal-info">
                            <li>
                                <span class="title">Про мене:</span>
                                <span class="text">@if($user->profile->about != null) {{ $user->profile->about }} @else &#8211; @endif</span>
                            </li>
                            <li>
                                <span class="title">Дата народження:</span>
                                <span class="text">{{ $user->birthday }}</span>
                            </li>
                            <li>
                                <span class="title">Рідне місто:</span>
                                <span class="text">Austin, Texas, USA</span>
                            </li>
                            <li>
                                <span class="title">Місто:</span>
                                <span class="text">@if($user->profile->location != null) {{ $user->profile->location }} @else &#8211; @endif</span>
                            </li>
                            <li>
                                <span class="title">Вміння:</span>
                                <span class="text">UI/UX Designer</span>
                            </li>
                            <li>
                                <span class="title">Зареєестрований:</span>
                                <span class="text">{{ $user->created_at->format('d.m.Y') }}</span>
                            </li>
                            <li>
                                <span class="title">Стать:</span>
                                <span class="text">{{ $user->gender }}</span>
                            </li>
                            <li>
                                <span class="title">Статус:</span>
                                <span class="text">{{ $user->profile->status }}</span>
                            </li>
                            <li>
                                <span class="title">E-mail:</span>
                                <a href="mailto:{{ $user->email }}" class="text">{{ $user->email }}</a>
                            </li>
                            <li>
                                <span class="title">Web-сайт:</span>
                                @if($user->profile->site != null) <a href="{{ $user->profile->site }}" target="_blank" class="text">{{ $user->profile->site }}</a> @else &#8211; @endif
                            </li>
                            <li>
                                <span class="title">Телефон:</span>
                                <span class="text">@if($user->profile->phone != null) {{ $user->profile->phone }} @else &#8211; @endif</span>
                            </li>
                            <li>
                                <span class="title">Religious Belifs:</span>
                                <span class="text">&#8211;</span>
                            </li>
                            <li>
                                <span class="title">Політичні погляди:</span>
                                <span class="text">@if($user->profile->political != null) {{ $user->profile->political }} @else &#8211; @endif</span>
                            </li>
                        </ul>

                        <div class="widget w-socials">
                            <h6 class="title">Інші соціальні мережі:</h6>
                            <a href="#" class="social-item bg-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                Facebook
                            </a>
                            <a href="#" class="social-item bg-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                Twitter
                            </a>
                            <a href="#" class="social-item bg-dribbble">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                Dribbble
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection