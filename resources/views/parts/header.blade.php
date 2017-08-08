<!-- Header -->

<header class="header" id="site-header">

    <div class="page-title">
        <h6>@yield('title')</h6>
    </div>

    <div class="header-content-wrapper">
        @if(Auth::check())
            <form class="search-bar w-search notification-list friend-requests">
                <div class="form-group with-button">
                    <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                    <button>
                        <svg class="olymp-magnifying-glass-icon"><use xlink:href="/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                    </button>
                </div>
            </form>

            <a href="#" class="link-find-friend">Пошук друзів</a>
        @endif

        <div class="control-block">

            @if(Auth::check())

                <notification_friend :id="{{ Auth::id() }}"></notification_friend>

                <audio id="noty_friend_audio">
                    <source src="{{ asset('audio/tiny-bell.mp3') }}">
                    <source src="{{ asset('audio/tiny-bell.ogg') }}">
                    <source src="{{ asset('audio/tiny-bell.m4r') }}">
                </audio>

                <audio id="noty_message_audio">
                    <source src="{{ asset('audio/this-is-it.mp3') }}">
                    <source src="{{ asset('audio/this-is-it.ogg') }}">
                    <source src="{{ asset('audio/this-is-it.m4r') }}">
                </audio>

                <audio id="noty_nots_audio">
                    <source src="{{ asset('audio/this-guitar.mp3') }}">
                    <source src="{{ asset('audio/this-guitar.ogg') }}">
                    <source src="{{ asset('audio/this-guitar.m4r') }}">
                </audio>

                <div class="control-icon more has-items">
                    <svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                    <div class="label-avatar bg-purple">2</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Повідомлення</h6>
                            <a href="#">Відмітити всі як прочитані</a>
                            <a href="#">Налаштування</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list chat-message">
                                <li class="message-unread">
                                    <div class="author-thumb">
                                        <img src="/img/avatar59-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                        <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="/img/avatar60-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Jake Parker</a>
                                        <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                        <img src="/img/avatar61-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                        <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="/img/avatar11-sm.jpg" alt="author">
                                        <img src="/img/avatar12-sm.jpg" alt="author">
                                        <img src="/img/avatar13-sm.jpg" alt="author">
                                        <img src="/img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                        <span class="last-message-author">Ed:</span>
                                        <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="view-all bg-purple">Показати всі повідомлення</a>
                    </div>
                </div>

                <div class="control-icon more has-items">
                    <svg class="olymp-thunder-icon"><use xlink:href="/icons/icons.svg#olymp-thunder-icon"></use></svg>

                    <div class="label-avatar bg-primary">8</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Сповіщення</h6>
                            <a href="#">Відмітити всі як прочитані</a>
                            <a href="#">Налаштування</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list">
                                <li>
                                    <div class="author-thumb">
                                        <img src="/img/avatar62-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                        </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li class="un-read">
                                    <div class="author-thumb">
                                        <img src="/img/avatar63-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li class="with-comment-photo">
                                    <div class="author-thumb">
                                        <img src="/img/avatar64-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
                                        </span>

                                    <div class="comment-photo">
                                        <img src="/img/comment-photo1.jpg" alt="photo">
                                        <span>“She looks incredible in that outfit! We should see each...”</span>
                                    </div>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="/img/avatar65-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                        </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="/img/avatar66-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                            <svg class="olymp-heart-icon"><use xlink:href="/icons/icons.svg#olymp-heart-icon"></use></svg>
                                        </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="view-all bg-primary">Переглянути всі сповіщення</a>
                    </div>
                </div>

            @endif

            <div class="author-page author vcard inline-items more">
                @if(Auth::check())
                    <div class="author-thumb">
                        <a href="{{ route('profile', Auth::id()) }}">
                            <img alt="author" src="{{ Auth::user()->avatar }}" width="36px" class="avatar">
{{--                            @if($user->isOnline())--}}
                                {{--<span class="icon-status online"></span>--}}
                            {{--@endif--}}
                            {{--<online :auth_user="{{ Auth::user() }}"></online>--}}
                        </a>
                        <div class="more-dropdown more-with-triangle">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Ваш аккаунт</h6>
                            </div>

                            <ul class="account-settings">
                                <li>
                                    <a href="{{ route('settings.personal') }}">

                                        <svg class="olymp-menu-icon"><use xlink:href="/icons/icons.svg#olymp-menu-icon"></use></svg>

                                        <span>Налаштування профілю</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="36-FavPage-SettingsAndCreatePopup.html">
                                        <svg class="olymp-star-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>

                                        <span>Create Fav Page</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <svg class="olymp-logout-icon"><use xlink:href="/icons/icons.svg#olymp-logout-icon"></use></svg>

                                        <span>Вихід</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>

                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Chat Settings</h6>
                            </div>

                            <ul class="chat-settings">
                                <li>
                                    <a href="#">
                                        <span class="icon-status online"></span>
                                        <span>Online</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon-status away"></span>
                                        <span>Away</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon-status disconected"></span>
                                        <span>Disconnected</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="icon-status status-invisible"></span>
                                        <span>Invisible</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Custom Status</h6>
                            </div>

                            <form class="form-group with-button custom-status">
                                <input class="form-control" placeholder="" type="text" value="Hello">

                                <button class="bg-purple">
                                    <svg class="olymp-check-icon"><use xlink:href="/icons/icons.svg#olymp-check-icon"></use></svg>
                                </button>
                            </form>

                        </div>
                    </div>
                    <a href="{{ route('profile', Auth::id()) }}" class="author-name fn">
                        <div class="author-title">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                        </div>
                        <span class="author-subtitle">Hello</span>
                    </a>
                @else
                    <a href="{{ route('welcome') }}" class="author-name fn">
                        <div class="author-title">
                            Вхід / Реєстрація
                        </div>
                    </a>
                @endif
            </div>

        </div>
    </div>

</header>

<!-- ... end Header -->