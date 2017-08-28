			<script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/global/plugins/select2/js/i18n/es.js') }}" type="text/javascript"></script>
        	{!! Html::script('assets/global/scripts/datatable.js') !!}
			{!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
			{!! Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
			{!! Html::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
        	@yield('plugins-js')
