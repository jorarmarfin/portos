<div
	id="m_ver_menu"
	class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
	data-menu-vertical="true"
	 data-menu-scrollable="false" data-menu-dropdown-timeout="500"
	>
	<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
		<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
			<a  href="{{ route('admin.index') }}" class="m-menu__link ">
				<i class="m-menu__link-icon flaticon-line-graph"></i>
				<span class="m-menu__link-title">
					<span class="m-menu__link-wrap">
						<span class="m-menu__link-text">
							Escritorio
						</span>
						<span class="m-menu__link-badge">
						</span>
					</span>
				</span>
			</a>
		</li>
		<li class="m-menu__section">
			<h4 class="m-menu__section-text">
				Components
			</h4>
			<i class="m-menu__section-icon flaticon-more-v3"></i>
		</li>
@foreach ($items as $item)
	@if (empty($item['submenu']))
		<li id="menu_{{ $item['id'] }}" {!! Html::classes('m-menu__item  m-menu__item--submenu', $item['class']) !!} aria-haspopup="true"  data-menu-submenu-toggle="hover">
			<a  href="{{ $item['url'] }}" class="m-menu__link m-menu__toggle">
				@if (isset($item['icon']))
					<i class="m-menu__link-icon {{ $item['icon'] }}"></i>
				@else
					<i class="m-menu__link-icon flaticon-layers"></i>
				@endif
				<span class="m-menu__link-text">
					{{ $item['title'] }}
				</span>
			</a>
		</li>
	@else
		<li id="menu_{{ $item['id'] }}" {!! Html::classes('m-menu__item  m-menu__item--submenu', $item['class']) !!} aria-haspopup="true"  data-menu-submenu-toggle="hover">
			<a  href="{{ $item['url'] }}" class="m-menu__link m-menu__toggle">
				@if (isset($item['icon']))
					<i class="m-menu__link-icon {{ $item['icon'] }}"></i>
				@else
					<i class="m-menu__link-icon flaticon-layers"></i>
				@endif
				<span class="m-menu__link-text">
					{{ $item['title'] }}
				</span>
				<i class="m-menu__ver-arrow la la-angle-right"></i>
			</a>
			<div class="m-menu__submenu ">
				<span class="m-menu__arrow"></span>
				<ul class="m-menu__subnav">
					@foreach ($item['submenu'] as $subitem)
					<li class="m-menu__item " aria-haspopup="true" >
						<a  href="{{ $subitem['url'] }}" class="m-menu__link ">
							<i class="m-menu__link-bullet m-menu__link-bullet--dot">
								<span></span>
							</i>
							<span class="m-menu__link-text">
								{{ $subitem['title'] }}
							</span>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</li>
	@endif
@endforeach
	</ul>

</div>