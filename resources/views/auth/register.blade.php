@extends('app')

@section('content')
<header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-0">                        
                        <ul class="bulletPoints mt300 txtShadow1">
                            <li>
                                Welcome to the community of party animals.
                            </li>
                            <li>
                                Share crazy stories from last night hangover.
                            </li>
                            <li>
                                Make new friends to hangout with.
                            </li>
                            <li>
                                Plan events, get discounts, make history.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pull-right">
                    	@if (count($errors) > 0)
                    		<script> 
        						$(".error-box").text(errMessage).fadeIn(400).delay(3000).fadeOut(400);
                    		</script>
						@endif
						<form class="form-horizontal sign-up" role="form" method="POST" action="{{ url('/auth/register') }}">
						    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h1 class="formHeading">Welcome to drunkenYard</h1>
                            <p>Choose one of the following methods</p>
                            <div class="socialSignUpButtons">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <a class="tw" href="#"> <i class="fa fa-twitter"> </i>   Twitter</a>
                                    </div>  
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <a class="fb" href="#"> <i class="fa fa-facebook"> </i>   Facebook</a>
                                    </div>  
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <a class="go" href="#"><i class="fa fa-google-plus"> </i>   Google+</a>
                                    </div>  
                                </div>
                            </div>
                            <p>Or sign up using your Email address</p>
                            <input type="text" class="form-Control formInput" placeholder="How friends call you?" autofocus="" required="true"  name="name" value="{{ old('name') }}">
                            <input type="email" class="form-Control formInput" placeholder="Where can we mail?" required="true" name="email" value="{{ old('email') }}">
                            <input type="password" class="form-Control formInput" placeholder="How can we identify?" required="true" name="password">
                            <input type="password" class="form-control formInput" placeholder="Please confirm" required="true" name="password_confirmation">
                            <input type="submit" value="Sign me up!" class="formButton">
                            <p style="text-align:center">Already have an account ?<a class="btn btn-link" href="/auth/login">Sign in</a>    </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
