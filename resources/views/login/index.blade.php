@extends('layouts.simple.master')

@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Default</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
<div class="container-fluid p-0">
	<div class="row m-0">
		<div class="col-12 p-0">
			<div class="login-card">
				<div>
					<div><a class="logo" href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
					<div class="login-main">
						<form class="theme-form">
							<h4>Sign in to account</h4>
							<p>Enter your email & password to login</p>
							<div class="form-group">
								<label class="col-form-label">Email Address</label>
								<input class="form-control" type="email" required="" placeholder="Test@gmail.com">
							</div>
							<div class="form-group">
								<label class="col-form-label">Password</label>
								<div class="form-input position-relative">
									<input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
									<div class="show-hide"><span class="show"> </span></div>
								</div>
							</div>
							<div class="form-group mb-0">
								<div class="checkbox p-0">
									<input id="checkbox1" type="checkbox">
									<label class="text-muted" for="checkbox1">Remember password</label>
								</div><a class="link" href="forget-password.html">Forgot password?</a>
								<div class="text-end mt-3">
									<button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
								</div>
							</div>
							<h6 class="text-muted mt-4 or">Or Sign in with</h6>
							<div class="social mt-4">
								<div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
							</div>
							<p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- latest jquery-->
	<script src="../assets/js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap js-->
	<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- feather icon js-->
	<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
	<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
	<!-- scrollbar js-->
	<!-- Sidebar jquery-->
	<script src="../assets/js/config.js"></script>
	<!-- Plugins JS start-->
	<!-- Plugins JS Ends-->
	<!-- Theme js-->
	<script src="../assets/js/script.js"></script>
	<!-- login js-->
	<!-- Plugin used-->
</div>
<script type="text/javascript">
	var session_layout = '{{ session()->get('
	layout ') }}';
</script>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection