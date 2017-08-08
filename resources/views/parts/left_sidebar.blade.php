<!-- Left Sidebar -->

<div class="col-xl-3 pull-xl-6 col-lg-6 pull-lg-0 col-md-6 col-sm-12 col-xs-12">
	<div class="ui-block">
		<div class="ui-block-title">
			<h6 class="title">Profile Intro</h6>
		</div>
		<div class="ui-block-content">
			<ul class="widget w-personal-info item-block">
				@if($user->profile->about)
					<li>
						<span class="title">About Me:</span>
						<span class="text">{{  $user->profile->about }}</span>
					</li>
				@endif
				@if($user->profile->tv_shows)
					<li>
						<span class="title">Favourite TV Shows:</span>
						<span class="text">{{ $user->profile->tv_shows }}</span>
					</li>
				@endif
				@if($user->profile->music)
					<li>
						<span class="title">Favourite Music Bands / Artists:</span>
						<span class="text">{{ $user->profile->music }}</span>
					</li>
				@endif
			</ul>

			<div class="widget w-socials">
				<h6 class="title">Other Social Networks:</h6>
				@if($user->profile->fb)
					<a href="{{ $user->profile->fb }}" target="_blank" class="social-item bg-facebook">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						Facebook
					</a>
				@endif
				@if($user->profile->tw)
					<a href="{{ $user->profile->tw }}" target="_blank" class="social-item bg-twitter">
						<i class="fa fa-twitter" aria-hidden="true"></i>
						Twitter
					</a>
				@endif
				@if($user->profile->inst)
					<a href="{{ $user->profile->inst }}" target="_blank" class="social-item bg-instagram">
						<i class="fa fa-instagram" aria-hidden="true"></i>
						Instagram
					</a>
				@endif
			</div>
		</div>
	</div>

	<div class="ui-block">
		<div class="ui-block-title">
			<h6 class="title">My Spotify Playlist</h6>
		</div>

		<ol class="widget w-playlist">
			<li>
				<div class="playlist-thumb">
					<img src="img/playlist6.jpg" alt="thumb-composition">
					<div class="overlay"></div>
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big"><use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
					</a>
				</div>

				<div class="composition">
					<a href="#" class="composition-name">The Past Starts Slow...</a>
					<a href="#" class="composition-author">System of a Revenge</a>
				</div>

				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">3:22</time>
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Add Song to Player</a>
							</li>
							<li>
								<a href="#">Add Playlist to Player</a>
							</li>
						</ul>
					</div>
				</div>

			</li>

			<li>
				<div class="playlist-thumb">
					<img src="img/playlist7.jpg" alt="thumb-composition">
					<div class="overlay"></div>
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big"><use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
					</a>
				</div>

				<div class="composition">
					<a href="#" class="composition-name">The Pretender</a>
					<a href="#" class="composition-author">Kung Fighters</a>
				</div>

				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">5:48</time>
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Add Song to Player</a>
							</li>
							<li>
								<a href="#">Add Playlist to Player</a>
							</li>
						</ul>
					</div>
				</div>

			</li>
			<li>
				<div class="playlist-thumb">
					<img src="img/playlist8.jpg" alt="thumb-composition">
					<div class="overlay"></div>
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big"><use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
					</a>
				</div>

				<div class="composition">
					<a href="#" class="composition-name">Blood Brothers</a>
					<a href="#" class="composition-author">Iron Maid</a>
				</div>

				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">3:06</time>
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Add Song to Player</a>
							</li>
							<li>
								<a href="#">Add Playlist to Player</a>
							</li>
						</ul>
					</div>
				</div>

			</li>
			<li>
				<div class="playlist-thumb">
					<img src="img/playlist9.jpg" alt="thumb-composition">
					<div class="overlay"></div>
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big"><use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
					</a>
				</div>

				<div class="composition">
					<a href="#" class="composition-name">Seven Nation Army</a>
					<a href="#" class="composition-author">The Black Stripes</a>
				</div>

				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Add Song to Player</a>
							</li>
							<li>
								<a href="#">Add Playlist to Player</a>
							</li>
						</ul>
					</div>
				</div>

			</li>
			<li>
				<div class="playlist-thumb">
					<img src="img/playlist10.jpg" alt="thumb-composition">
					<div class="overlay"></div>
					<a href="#" class="play-icon">
						<svg class="olymp-music-play-icon-big"><use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use></svg>
					</a>
				</div>

				<div class="composition">
					<a href="#" class="composition-name">Killer Queen</a>
					<a href="#" class="composition-author">Archiduke</a>
				</div>

				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">5:40</time>
					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Add Song to Player</a>
							</li>
							<li>
								<a href="#">Add Playlist to Player</a>
							</li>
						</ul>
					</div>
				</div>

			</li>
		</ol>
	</div>

	<div class="ui-block">
		<div class="ui-block-title">
			<h6 class="title">Last Videos</h6>
		</div>
		<div class="ui-block-content">
			<ul class="widget w-last-video">
				<li>
					<a href="https://vimeo.com/ondemand/viewfromabluemoon4k/147865858" class="play-video play-video--small">
						<svg class="olymp-play-icon"><use xlink:href="/icons/icons.svg#olymp-play-icon"></use></svg>
					</a>
					<img src="img/video8.jpg" alt="video">
					<div class="video-content">
						<div class="title">System of a Revenge - Hypnotize...</div>
						<time class="published" datetime="2017-03-24T18:18">3:25</time>
					</div>
					<div class="overlay"></div>
				</li>
				<li>
					<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
						<svg class="olymp-play-icon"><use xlink:href="/icons/icons.svg#olymp-play-icon"></use></svg>
					</a>
					<img src="img/video7.jpg" alt="video">
					<div class="video-content">
						<div class="title">Green Goo - Live at Dan’s Arena</div>
						<time class="published" datetime="2017-03-24T18:18">5:48</time>
					</div>
					<div class="overlay"></div>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- ... end Left Sidebar -->