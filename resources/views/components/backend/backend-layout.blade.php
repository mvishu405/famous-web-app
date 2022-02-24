<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> {{$title ?? env('APP_NAME')}}</title>
	<link rel="stylesheet" href="{{mix('backend/css/app.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed antialiased">
	<div class="wrapper">
        <x-backend.adminlte-sidebar />
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

            <!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-12">

                            @if (session()->has('message'))
                            <x-backend.message :message="session()->get('message')" :level="session()->get('level')" />
                            @endif

                            @if ($errors->any())
                            <x-backend.message :message="$errors->all()" :level="'danger'" />
                            @endif

                            @isset($contentHeader)
							<h1 class="m-0 text-dark">{{ $contentHeader }}</h1>
                            @endisset

                        </div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
                {{$slot}}
			</section>
			<!-- /.content -->

		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer"> <strong>Copyright &copy; {{\Carbon\Carbon::now()->format('Y') }} </strong>
            <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.0.5 </div>
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
    <script src="{{mix('backend/js/vendor.js')}}"></script>
    <script src="{{mix('backend/js/app.js')}}"></script>
    @stack('scripts')
</body>

</html>