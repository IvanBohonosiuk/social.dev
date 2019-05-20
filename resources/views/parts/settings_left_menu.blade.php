<div class="col-xl-3 pull-xl-9 col-lg-3 pull-lg-9 col-md-12 col-sm-12 col-xs-12">
    <div class="ui-block">
        <div class="your-profile">
            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your PROFILE</h6>
            </div>

            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Profile Settings
                                <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/public/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <ul class="your-profile-menu">
                            <li>
                                <a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
                            </li>
                            <li>
                                <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                            </li>
                            <li>
                                <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                            </li>
                            <li>
                                <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
                            </li>
                            <li>
                                <a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ui-block-title">
                <a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
                <a href="#" class="items-round-little bg-primary">8</a>
            </div>
            <div class="ui-block-title">
                <a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
            </div>
            <div class="ui-block-title">
                <a href="{{ route('settings.friends.request') }}" class="h6 title">Запити в друзі</a>
                @if(count($user->pending_friend_requests()) > 0)
                    <a href="{{ route('settings.friends.request') }}" class="items-round-little bg-blue">{{ count($user->pending_friend_requests()) }}</a>
                @endif
            </div>
            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">FAVOURITE PAGE</h6>
            </div>
            <div class="ui-block-title">
                <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
            </div>
            <div class="ui-block-title">
                <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
            </div>
        </div>
    </div>
</div>