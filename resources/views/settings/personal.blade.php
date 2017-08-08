@extends('layouts.settings')

@section('content')
    <div class="col-xl-9 push-xl-3 col-lg-9 push-lg-3 col-md-12 col-sm-12 col-xs-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Personal Information</h6>
            </div>
            <div class="ui-block-content">
                <form role="form" method="POST" action="{{ route('settings.personal.save') }}">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="first_name">First Name</label>
                                <input class="form-control" name="first_name" id="first_name" type="text" value="{{ $user->first_name }}">
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label" for="email">Your Email</label>
                                <input class="form-control" name="email" id="email" type="email" value="{{ $user->email }}">
                            </div>

                            <div class="form-group date-time-picker label-floating">
                                <label class="control-label" for="birthday">Your Birthday</label>
                                <input name="birthday" id="birthday" value="{{ $user->birthday }}" />
                                <span class="input-group-addon">
										<svg class="olymp-month-calendar-icon icon"><use xlink:href="/icons/icons.svg#olymp-month-calendar-icon"></use></svg>
									</span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="last_name">Last Name</label>
                                <input class="form-control" name="last_name" id="last_name" type="text" value="{{ $user->last_name }}">
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label" for="site">Your Website</label>
                                <input class="form-control" type="text" name="site" id="site" value="{{ $user->profile->site }}">
                            </div>


                            <div class="form-group label-floating">
                                <label class="control-label" for="phone">Your Phone Number</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="{{ $user->profile->phone }}">
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="about">Write a little description about you</label>
                                <textarea class="form-control" name="about" id="about">{{ $user->profile->about }}</textarea>
                            </div>

                            <div class="form-group label-floating is-select">
                                <label class="control-label" for="gender">Your Gender</label>
                                <select class="selectpicker form-control" name="gender" id="gender">
                                    <option value="male" @if($user->profile->status === 'male') selected @endif>Male</option>
                                    <option value="female" @if($user->profile->status === 'female') selected @endif>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group label-floating">
                                <label class="control-label" for="location">Location</label>
                                <input class="form-control" name="location" id="location" type="text" value="{{ $user->profile->location }}">
                            </div>

                            <div class="form-group label-floating is-select">
                                <label class="control-label" for="status">Status</label>
                                <select class="selectpicker form-control" name="status" id="status">
                                    <option value="married" @if($user->profile->status === 'married') selected @endif>Married</option>
                                    <option value="single" @if($user->profile->status === 'single') selected @endif>Not Married</option>
                                </select>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label" for="political">Political Incline</label>
                                <input class="form-control" type="text" name="political" id="political" value="{{ $user->profile->political }}">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group with-icon label-floating">
                                <label class="control-label" for="fb">Your Facebook Account</label>
                                <input class="form-control" name="fb" id="fb" type="text" value="{{ $user->profile->fb }}">
                                <i class="fa fa-facebook c-facebook" aria-hidden="true"></i>
                            </div>
                            <div class="form-group with-icon label-floating">
                                <label class="control-label" for="tw">Your Twitter Account</label>
                                <input class="form-control" type="text" name="tw" id="tw" value="{{ $user->profile->tw }}">
                                <i class="fa fa-twitter c-twitter" aria-hidden="true"></i>
                            </div>
                            <div class="form-group with-icon label-floating">
                                <label class="control-label" for="inst">Your Instagram Account</label>
                                <input class="form-control" type="text" name="inst" id="inst" value="{{ $user->profile->inst }}">
                                <i class="fa fa-instagram c-instagram" aria-hidden="true"></i>
                            </div>
                        </div>
                        {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
                            {{--<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>--}}
                        {{--</div>--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-3 offset-md-3">
                            <button class="btn btn-primary btn-lg full-width" type="submit">Save all Changes</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection