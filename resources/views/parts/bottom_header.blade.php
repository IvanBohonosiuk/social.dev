<!-- Top Header -->

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="{{ $user->cover }}" alt="nature">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-lg-5 col-md-5 ">
								<ul class="profile-menu">
									<li>
										<a href="{{ route('profile', $user->id) }}">Життєпис</a>
									</li>
									<li>
										<a href="{{ route('about', $user->id) }}">Про мене</a>
									</li>
									<li>
										<a href="{{ route('friends.all', $user->id) }}">Друзі</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-5 offset-lg-2 col-md-5 offset-md-2">
								<ul class="profile-menu">
									<li>
										<a href="{{ route('profile.photos', $user->id) }}">Фото</a>
									</li>
									<li>
										<a href="{{ route('profile.videos', $user->id) }}">Відео</a>
									</li>
									<li>
										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							{{--<a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">--}}
								{{--<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>--}}
							{{--</a>--}}
							@if(Auth::check())
								@if(Auth::id() !== $user->id)
									<friend :profile_user_id="{{ $user->id }}"></friend>

									<a href="#" class="btn btn-control bg-purple js-open-popup" data-popup-target=".popup-chat-responsive">
										<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
									</a>
								@endif

								@if(Auth::user()->id === $user->id)
									<div class="btn btn-control bg-primary more">
										<svg class="olymp-settings-icon"><use xlink:href="/icons/icons.svg#olymp-settings-icon"></use></svg>

										<ul class="more-dropdown more-with-triangle triangle-bottom-right">
											<li>
												<a href="#" class="js-open-popup" data-popup-target=".update-header-photo">Оновити фото профілю</a>
											</li>
											<li>
												<a href="#" class="js-open-popup" data-popup-target=".update-header-photo">Update Header Photo</a>
											</li>
											<li>
												<a href="{{ route('settings.personal') }}">Налаштування профілю</a>
											</li>
										</ul>
									</div>
								@endif
							@endif
						</div>
					</div>
					<div class="top-header-author">
						<a href="{{ route('profile', $user->id) }}" class="author-thumb">
							<img src="{{ $user->avatar }}" width="100%" alt="author">
							<online :auth_user="{{ $user }}"></online>
						</a>
						<div class="author-content">
							<a href="{{ route('profile', $user->id) }}" class="h4 author-name">{{ $user->first_name }} {{ $user->last_name }}</a>
							@if($user->profile->location)
								<div class="country">{{ $user->profile->location }}</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header -->