@extends('AuthLayout.layout')
@section('title','Login')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('contents')
    <section class="login-content">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
                <div class="sign-user_card">   
                    <div class="logo-detail">            
                        <div class="d-flex align-items-center"><img src="{{ asset('assets/images/Shopping_Logos/shopping_logo.avif') }}" class="img-fluid rounded-normal light-logo logo" alt="logo"> <h4 class="logo-title ml-3">Zay Sa Yinn</h4></div>
                    </div>      
                    <h3 class="mb-2">Sign In</h3>
                    <p>Login to stay connected.</p>
                    <form id="loginForm" >
                        @csrf
                        <div class="row">
                        <div class="col-lg-12">
                                <div class="floating-label form-group">
                                    <input class="floating-input form-control" name="email" type="email" placeholder=" ">
                                    <label>Email</label>
                                </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="floating-label form-group">
                                <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                <label>Password</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox mb-3 text-left">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        <p class="mt-3 mb-0">
                        Create an Account <a href="{{route('register')}}" class="text-primary"><b>Sign Up</b></a>
                        </p>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
     $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#loginForm").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                // console.log(formData.get('email'),formData.get('password'));
                $.ajax({
                    url: "{{ route('auth.login') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            window.location.href = "{{ route('home')}}";
                        } else {

                            // if response has message, show the message , if not empty the message, clear the error messages
                            $('#message').html(response.message ?? '');

                            var errors = response.errors ?? {};

                            var fields = [
                                'email',
                                'password'
                            ];

                            fields.forEach(function(field) {
                                if (errors[field]) {
                                    $('#' + field)
                                        .closest('.input-box')
                                        .find('span.invalid-feedback')
                                        .addClass('d-block')
                                        .html(errors[field]);
                                } else {
                                    $('#' + field)
                                        .closest('.input-box')
                                        .find('span.invalid-feedback')
                                        .removeClass('d-block')
                                        .html('');
                                }
                            });

                        }
                    }
                });
            });

        });
</script>
@endsection