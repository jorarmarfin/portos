<div class="row">
    <div class="col-md-12">
        <div id="field_{{ $id }}"{!! Html::classes(['form-group', 'has-error' => $hasErrors]) !!}>
            <label class="control-label col-md-3"> <span class="pull-right text-info">{{ $label }}</span></label>
            @if ($required)
                <span class="label label-info">Required</span>
            @endif
            <div class="col-md-3">
                {!! $input !!}
                @foreach ($errors as $error)
                    <p class="help-block">{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div><!--/span-->
</div>