@extends('layouts.patient')

@section('title', $page->title)

@section('page_styles')
@endsection

@section('content')

    <section>
        <div class="container-fluid">
            <div id="update-profile" class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="card-title">Update Profile Form</div>
                </div>
                <div class="card-body">
                    <form class="" action="{{ url('/profile/update') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            {{ csrf_field() }}
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">First Name: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Your First Name" type="text" name="first_name" value="{{ old('first_name', Auth::user()->first_name) }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">Last Name: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Your Last Name" type="text" name="last_name" value="{{ old('last_name', Auth::user()->last_name) }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Your Email" type="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">Phone Number: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Your Phone Number" type="tel" name="phone" value="{{ old('phone', Auth::user()->phone) }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Gender: <span class="text-danger">*</span></label>
                            <select name="gender" class="form-control" required>
                                <option value="MALE" {{ old('gender', Auth::user()->gender) == 'MALE' ? 'selected' : '' }}>MALE</option>
                                <option value="FEMALE" {{ old('gender', Auth::user()->gender) == 'FEMALE' ? 'selected' : '' }}>FEMALE</option>
                            </select>
                        </div>

                        {{-- <div class="form-group">
                            <label class="form-control-label">Address: </label>
                            <textarea class="form-control" name="address" placeholder="Address" rows="2">{{ old('address', Auth::user()->address) }}</textarea>
                        </div> --}}

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="clearfix"></div>
            <br>

            <div id="change-password" class="card" style="width: 100%;">
                <div class="card-header">
                    <div class="card-title">Change Password Form</div>
                </div>
                <div class="card-body">
                    <form class="" action="{{ url('/password/change') }}" method="POST">
                        <div class="form-group">
                            {{ csrf_field() }}
                        </div>

                        <div class="form-group">
                            <label for="current_password" class="form-control-label">Current Password: <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Your Current Password" type="password" name="current_password" required>
                            <span class="help-block small">Try your Phone Number</span>
                        </div>

                        <div class="form-group" class="form-control-label">
                            <label for="new_password" class="form-control-label">New Password: <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Your New Password" type="password" name="new_password" required>
                        </div>

                        <div class="form-group" class="form-control-label">
                            <label for="new_password_confirmation" class="form-control-label">Confirm New Password: <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Confirm New Password" type="password" name="new_password_confirmation" required>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page_scripts')
@endsection
