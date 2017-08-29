<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="caption-subject bold font-yellow-casablanca uppercase ">
                    <i class="{{ $icon or 'icon-paper-plane font-yellow-casablanca' }}"></i>
                    {{ $title or '' }}
                    </h3>
                </div><!--span-->
                <div class="col-md-6">
                    <div class="text-right ">
                        {{ $slot }}
                    </div>
                </div><!--span-->
            </div><!--row-->

        </div>
    </div><!--span-->
</div><!--row-->