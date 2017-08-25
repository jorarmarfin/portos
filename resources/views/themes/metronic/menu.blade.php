<div class="page-sidebar-wrapper">
<!-- END SIDEBAR -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu {{ $class }}" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        @foreach ($items as $item)
            <li @if ($item['class']) class="nav-item {{ $item['class'] }}" @endif id="menu_{{ $item['id'] }}">
                @if (empty($item['submenu']))
                    <a href="{{ $item['url'] }}">
                        @if (!empty($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        <span class="title">{{ $item['title'] }}</span>
                        <span class="arrow"></span>
                    </a>
                @else
                    <a href="{{ $item['url'] }}" class="nav-link nav-toggle" >
                        @if (!empty($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        <span class="title">{{ $item['title'] }}</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        @foreach ($item['submenu'] as $subitem)
                            <li class="nav-item">
                                <a href="{{ $subitem['url'] }}">
                                    @if (!empty($subitem['icon']))
                                        <i class="{{ $subitem['icon'] }}"></i>
                                    @endif
                                    <span class="title">{{ $subitem['title'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
</div>