<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>


	<!-- Global stylesheets -->
	<link href="{{ asset('backend/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('backend/assets/demo/demo_configurator.js') }}"></script>
	<script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('backend/assets/js/vendor/visualization/d3/d3.min.js') }}"></script>
	<script src="{{ asset('backend/assets/js/vendor/visualization/d3/d3_tooltip.js') }}"></script>

	<script src="{{ asset('backend/assets/js/app.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/pages/dashboard.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/streamgraph.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/sparklines.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/lines.js') }}"></script>	
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/areas.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/donuts.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/bars.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/progress.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/heatmaps.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/pies.js') }}"></script>
	<script src="{{ asset('backend/assets/demo/charts/pages/dashboard/bullets.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	@include('backend.components.global.header._header')


	<!-- Page content -->
	<div class="page-content">

        @include('backend.components.global.sidebar._sidebar')

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				@include('backend.components.global._page-header')

				<!-- Content area -->
				<div class="content">

					<!-- Dashboard content -->
					<div class="row">

                          @yield('content')


					</div>
					<!-- /dashboard content -->

				</div>
				<!-- /content area -->

                @include('backend.components.global._footer')

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

    @include('backend.components.global.color-change')

</body>
</html>