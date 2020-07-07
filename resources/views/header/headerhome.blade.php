<div class="header" id="home">
	<div class="container">
		<ul>
	@unless (Auth::check())
    <li>{{-- data-toggle="modal" data-target="#myModal" --}}<a href="{{url('/login')}}" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> تسجيل الدخول </a></li>
	<li> <a href="{{url('/register')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> التسجيل </a></li>
	@endunless
	@auth
	<li> <a href="{{url('/profile')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> بياناتي </a></li>
	@endauth
	@can('access_to_controll_panel')
		<li> <a href="{{route('Dashboard.index')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> لوحة التحكم </a></li>
	@endcan
			<li><i class="fa fa-phone" aria-hidden="true"></i>للاتصال :  01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>