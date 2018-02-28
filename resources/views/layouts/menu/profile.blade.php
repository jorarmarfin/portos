<ul class="m-nav m-nav--skin-light">
@foreach ($items as $profile)
	<li id="menu_{{ $profile['id'] }}" {!! Html::classes('m-nav__item', $profile['class']) !!}>
		<a  href="{{ $profile['url'] }}" class="m-nav__link">
			@if (isset($profile['icon']))
				<i class="m-nav__link-icon {{ $profile['icon'] }}"></i>
			@else
				<i class="m-nav__link-icon flaticon-layers"></i>
			@endif
			<span class="m-nav__link-title">
				<span class="m-nav__link-wrap">
					<span class="m-nav__link-text">
					{{ $profile['title'] }}
					</span>
					<span class="m-nav__link-badge">
					</span>
				</span>
			</span>
		</a>
	</li>
@endforeach
	<li class="m-nav__item">
		<a href="{{ route('logout') }}" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"
		 	onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
			Logout
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
	</li>
</ul>