@extends('layouts.frontendapp')
@section('title', 'Login/Register')
@section('content')
<div class="breadcrumb_section">
    <div class="container">
        <ul class="breadcrumb_nav ul_li">
            <li><a href="index.html">Home</a></li>
            <li>Login/Register</li>
        </ul>
    </div>
</div>
<section class="register_section section_space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <ul class="nav register_tabnav ul_li_center" role="tablist">
                    <li role="presentation">
                        <button data-bs-toggle="tab" data-bs-target="#signin_tab" type="button" role="tab" aria-controls="signin_tab" aria-selected="true">Sign In</button>
                    </li>
                    <li role="presentation">
                        <button class="active" data-bs-toggle="tab" data-bs-target="#signup_tab" type="button" role="tab" aria-controls="signup_tab" aria-selected="false" class="">Register</button>
                    </li>
                </ul>

                <div class="register_wrap tab-content">
                    <div class="tab-pane fade " id="signin_tab" role="tabpanel">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form_item_wrap">
                                <h3 class="input_title">User Name*</h3>
                                <div class="form_item">
                                    <label for="username_input"><i class="fas fa-user"></i></label>
                                    {{-- <input id="username_input" type="email" name="email" placeholder="User Email" value="{{ old('email') }}"> --}}
                                    <input id="username_input" type="email" placeholder="User Email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_item_wrap">
                                <h3 class="input_title">Password*</h3>
                                <div class="form_item">
                                    <label for="password_input"><i class="fas fa-lock"></i></label>
                                    {{-- <input id="password_input" type="password" name="password" placeholder="Password"> --}}
                                    <input id="password_input" type="password" placeholder="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="checkbox_item">
                                    {{-- <input id="remember_checkbox" type="checkbox"> --}}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember_checkbox">Remember Me</label>
                                </div>
                            </div>

                            <div class="form_item_wrap">
                                <button type="submit" class="btn btn_primary">Sign In</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade active show" id="signup_tab" role="tabpanel">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form_item_wrap">
                                <h3 class="input_title">User Name*</h3>
                                <div class="form_item">
                                    <label for="username_input2"><i class="fas fa-user"></i></label>
                                    {{-- <input id="username_input2" type="text" name="username" placeholder="User Name"> --}}
                                    <input id="username_input2" placeholder="User name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_item_wrap">
                                <h3 class="input_title">User Email*</h3>
                                <div class="form_item">
                                    <label for="email_input"><i class="fas fa-envelope"></i></label>
                                    {{-- <input id="email_input" type="email" name="email" placeholder="Email"> --}}
                                    <input id="email_input" type="email" placeholder="User Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_item_wrap">
                                <h3 class="input_title">Password*</h3>
                                <div class="form_item">
                                    <label for="password_input2"><i class="fas fa-lock"></i></label>
                                    {{-- <input id="password_input2" type="password" name="password" placeholder="Password"> --}}
                                    <input id="password_input2" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_item_wrap">
                                <h3 class="input_title">Confirm Password*</h3>
                                <div class="form_item">
                                    <label for="password_input3"><i class="fas fa-lock"></i></label>
                                    {{-- <input id="password_input3" type="password" name="password" placeholder="Password"> --}}
                                    <input id="password_input3" type="password" placeholder="confirm password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>



                            <div class="form_item_wrap">
                                <button type="submit" class="btn btn_secondary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
