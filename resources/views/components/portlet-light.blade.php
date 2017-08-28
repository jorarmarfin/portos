<!-- BEGIN Portlet PORTLET-->
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption">
            <i class=" {{ $icon or 'icon-paper-plane font-yellow-casablanca'}}"></i>
            <span class="caption-subject bold font-yellow-casablanca uppercase"> {{ $title or 'Titulo' }} </span>
            <span class="caption-helper">{{ $subtitles or '' }}</span>
        </div>
    </div>
    <div class="portlet-body">
    	{{ $slot }}

    </div>
</div>
<!-- END Portlet PORTLET-->