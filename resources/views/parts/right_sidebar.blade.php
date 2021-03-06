<!-- Right Sidebar -->

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Last Photos</h6>
        </div>
        <div class="ui-block-content">
            <ul class="widget w-last-photo js-zoom-gallery">
                <li>
                    <a href="/img/last-photo10-large.jpg">
                        <img src="/img/last-photo10-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot11-large.jpg">
                        <img src="/img/last-phot11-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot12-large.jpg">
                        <img src="/img/last-phot12-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot13-large.jpg">
                        <img src="/img/last-phot13-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot14-large.jpg">
                        <img src="/img/last-phot14-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot15-large.jpg">
                        <img src="/img/last-phot15-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot16-large.jpg">
                        <img src="/img/last-phot16-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot17-large.jpg">
                        <img src="/img/last-phot17-large.jpg" alt="photo">
                    </a>
                </li>
                <li>
                    <a href="/img/last-phot18-large.jpg">
                        <img src="/img/last-phot18-large.jpg" alt="photo">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Друзі ({{ count($user->friends_ids()) }})</h6>
        </div>
        <div class="ui-block-content">
            <ul class="widget w-faved-page js-zoom-gallery">
                @foreach($friends as $friend)
                    <li>
                        <a href="{{ route('profile', $friend->id) }}">
                            <img src="{{ $friend->avatar }}" alt="user" style="width: 100%">
                        </a>
                    </li>
                @endforeach
                @if(count($user->friends_ids()) > 14)
                    <li class="all-users">
                        <a href="#">+{{ count($user->friends_ids())-14 }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Favourite Pages</h6>
        </div>

        <ul class="widget w-friend-pages-added notification-list friend-requests">
            <li class="inline-items">
                <div class="author-thumb">
                    <img src="/img/avatar41-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">The Marina Bar</a>
                    <span class="chat-message-item">Restaurant / Bar</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="/public/icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="/img/avatar42-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Tapronus Rock</a>
                    <span class="chat-message-item">Rock Band</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="/public/icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="/img/avatar43-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Pixel Digital Design</a>
                    <span class="chat-message-item">Company</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="/public/icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="/img/avatar44-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
                    <span class="chat-message-item">Clothing Store</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="/public/icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>

            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="/img/avatar45-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Crimson Agency</a>
                    <span class="chat-message-item">Company</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="/public/icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
            </li>

            <li class="inline-items">
                <div class="author-thumb">
                    <img src="/img/avatar46-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                    <a href="#" class="h6 notification-friend">Mannequin Angel</a>
                    <span class="chat-message-item">Clothing Store</span>
                </div>
                <span class="notification-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="/public/icons/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
            </li>

        </ul>

    </div>

    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">James's Poll</h6>
        </div>
        <div class="ui-block-content">
            <ul class="widget w-pool">
                <li>
                    <p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
                </li>

                <li>
                    <div class="skills-item">
                        <div class="skills-item-info">
									<span class="skills-item-title">

										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
											Thomas Bale
											</label>
										</span>
									</span>
                            <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span><span class="units">62%</span></span>
                        </div>
                        <div class="skills-item-meter">
                            <span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
                        </div>

                        <div class="counter-friends">12 friends voted for this</div>

                        <ul class="friends-harmonic">
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic1.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic2.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic3.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic4.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic5.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic6.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic7.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic8.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic9.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="all-users">+3</a>
                            </li>
                        </ul>

                    </div>
                </li>

                <li>
                    <div class="skills-item">
                        <div class="skills-item-info">
									<span class="skills-item-title">

										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
											Ben Robertson
											</label>
										</span>
									</span>
                            <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span><span class="units">27%</span></span>
                        </div>
                        <div class="skills-item-meter">
                            <span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
                        </div>
                        <div class="counter-friends">7 friends voted for this</div>

                        <ul class="friends-harmonic">
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic7.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic8.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic9.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic10.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic11.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic12.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic13.jpg" alt="friend">
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <div class="skills-item">
                        <div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
											Michael Streiton
											</label>
										</span>
									</span>
                            <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span><span class="units">11%</span></span>
                        </div>
                        <div class="skills-item-meter">
                            <span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
                        </div>

                        <div class="counter-friends">2 people voted for this</div>

                        <ul class="friends-harmonic">
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic14.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic15.jpg" alt="friend">
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
        </div>
    </div>
</div>

<!-- ... end Right Sidebar -->