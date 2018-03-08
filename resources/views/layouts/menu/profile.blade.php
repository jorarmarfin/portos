<ul class="list-unstyled mb-2">
	<li class="divider"></li>
	@foreach ($items as $profile)
	<li id="menu_{{ $profile['id'] }}">
		<a role="menuitem" tabindex="-1" href="{{ $profile['url'] }}">
			@if (isset($profile['icon']))
				<i class="{{ $profile['icon'] }}"></i>
			@else
				<i class="fa fa-user"></i>
			@endif
			{{ $profile['title'] }}
		</a>
	</li>
	@endforeach
	<li>
		<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock" ></i> Bloquear</a>
	</li>
	<li>
		<a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            @csrf
		        </form>
	</li>
</ul>
