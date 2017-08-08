<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
    <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
        <a href="{{ route('profile', Auth::id()) }}" class="logo">
            <img src="/img/logo.png" alt="Social">
        </a>

        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="left-menu">
                <li>
                    <a href="#" class="js-sidebar-open">
                        <svg class="olymp-menu-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-menu-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('feed') }}" {{ (route('feed') == Request::url())?'class=active':'' }}>
                        <svg class="olymp-newsfeed-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="16-FavPagesFeed.html">
                        <svg class="olymp-star-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('friends.all', Auth::id()) }}" {{ (route('friends.all', Auth::id()) == Request::url())?'class=active':'' }}>
                        <svg class="olymp-happy-faces-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-happy-faces-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('music', Auth::id()) }}" {{ (route('music', Auth::id()) == Request::url())?'class=active':'' }}>
                        <svg class="olymp-headphones-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-headphones-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="19-WeatherWidget.html">
                        <svg class="olymp-weather-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-weather-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="20-CalendarAndEvents-MonthlyCalendar.html">
                        <svg class="olymp-calendar-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-calendar-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="24-CommunityBadges.html">
                        <svg class="olymp-badge-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-badge-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="25-FriendsBirthday.html">
                        <svg class="olymp-cupcake-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-cupcake-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="26-Statistics.html">
                        <svg class="olymp-stats-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-stats-icon"></use></svg>
                    </a>
                </li>
                <li>
                    <a href="27-ManageWidgets.html">
                        <svg class="olymp-manage-widgets-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-manage-widgets-icon"></use></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
        <a href="{{ route('profile', Auth::user()) }}" class="logo">
            <img src="/img/logo.png" alt="Olympus">
            <h6 class="logo-title">Social</h6>
        </a>

        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="left-menu">
                <li>
                    <a href="#" class="js-sidebar-open">
                        <svg class="olymp-close-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-close-icon"></use></svg>
                        <span class="left-menu-title">Collapse Menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('feed') }}" {{ (route('feed') == Request::url())?'class=active':'' }}>
                        <svg class="olymp-newsfeed-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
                        <span class="left-menu-title">Новини</span>
                    </a>
                </li>
                <li>
                    <a href="16-FavPagesFeed.html">
                        <svg class="olymp-star-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>
                        <span class="left-menu-title">Fav Pages Feed</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('friends.all', Auth::id()) }}" {{ (route('friends.all', Auth::id()) == Request::url())?'class=active':'' }}>
                        <svg class="olymp-happy-faces-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-happy-faces-icon"></use></svg>
                        <span class="left-menu-title">Друзі</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('music', Auth::id()) }}" {{ (route('music', Auth::id()) == Request::url())?'class=active':'' }}>
                        <svg class="olymp-headphones-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-headphones-icon"></use></svg>
                        <span class="left-menu-title">Музика</span>
                    </a>
                </li>
                <li>
                    <a href="19-WeatherWidget.html">
                        <svg class="olymp-weather-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-weather-icon"></use></svg>
                        <span class="left-menu-title">Weather App</span>
                    </a>
                </li>
                <li>
                    <a href="20-CalendarAndEvents-MonthlyCalendar.html">
                        <svg class="olymp-calendar-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-calendar-icon"></use></svg>
                        <span class="left-menu-title">Calendar and Events</span>
                    </a>
                </li>
                <li>
                    <a href="24-CommunityBadges.html">
                        <svg class="olymp-badge-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-badge-icon"></use></svg>
                        <span class="left-menu-title">Community Badges</span>
                    </a>
                </li>
                <li>
                    <a href="25-FriendsBirthday.html">
                        <svg class="olymp-cupcake-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-cupcake-icon"></use></svg>
                        <span class="left-menu-title">Friends Birthdays</span>
                    </a>
                </li>
                <li>
                    <a href="26-Statistics.html">
                        <svg class="olymp-stats-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-stats-icon"></use></svg>
                        <span class="left-menu-title">Account Stats</span>
                    </a>
                </li>
                <li>
                    <a href="27-ManageWidgets.html">
                        <svg class="olymp-manage-widgets-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-manage-widgets-icon"></use></svg>
                        <span class="left-menu-title">Manage Widgets</span>
                    </a>
                </li>
            </ul>

            <div class="profile-completion">

                <div class="skills-item">
                    <div class="skills-item-info">
                        <span class="skills-item-title">Profile Completion</span>
                        <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
                    </div>
                    <div class="skills-item-meter">
                        <span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
                    </div>
                </div>

                <span>Complete <a href="#">your profile</a> so people can know more about you!</span>

            </div>
        </div>
    </div>
</div>

<!-- ... end Fixed Sidebar Left -->