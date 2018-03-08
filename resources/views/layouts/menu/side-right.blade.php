<ul class="nav nav-main">
    <li>
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Escritorio</span>
        </a>
    </li>
@foreach ($items as $item)
	@if (empty($item['submenu']))
	<li id="menu_{{ $item['id'] }}" {!! Html::classes('nav-parent', $item['class']) !!}>
        <a class="nav-link" href="{{ $item['url'] }}">
        	@if (isset($item['icon']))
				<i class="{{ $item['icon'] }}" aria-hidden="true"></i>
			@else
            	<i class="fa fa-align-left" aria-hidden="true"></i>
			@endif
            <span>{{ $item['title'] }}</span>
        </a>
    </li>
    @else
	<li id="menu_{{ $item['id'] }}" {!! Html::classes('nav-parent', $item['class']) !!}>
        <a class="nav-link" href="{{ $item['url'] }}">
        	@if (isset($item['icon']))
				<i class="{{ $item['icon'] }}" aria-hidden="true"></i>
			@else
            	<i class="fa fa-align-left" aria-hidden="true"></i>
			@endif
            <span>{{ $item['title'] }}</span>
        </a>
        <ul class="nav nav-children">
		@foreach ($item['submenu'] as $subitem)
            <li>
                <a href="{{ $subitem['url'] }}">{{ $subitem['title'] }}</a>
            </li>
		@endforeach
        </ul>
    </li>
    @endif
@endforeach
</ul>
