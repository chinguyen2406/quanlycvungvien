<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<link rel="icon" href="{{ asset('assets/img/icon.ico')}}" type="image/x-icon"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	
	{{-- <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/> --}}
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{asset('assets/css/fonts.min.css')}}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/select2/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/top_page.css')}}">


	{{-- css button datatables --}}
	<link rel="stylesheet" href="{{ asset('css/dataTables.min.css')}}">

	{{-- css select2 --}}
	<link rel="stylesheet" href="{{ asset('assets/select2/select2-bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css')}}">

	{{-- common-select2 --}}
	
	

</head>
<body>
	<style>
		.scroll-left {
		 height: 50px;	
		 overflow: hidden;
		 position: relative;
		 background: #007bff;
		 color: yellow;
		 border: 1px solid #007bff;
		}
		.scroll-left h4 {
		 position: absolute;
		 width: 500px;
		 height: 100%;
		 margin: 0;
		 line-height: 50px;
		 text-align: center;
		 /* Starting position */
		 transform:translateX(100%);
		 /* Apply animation to this element */
		 animation: scroll-left 15s linear infinite;
		}
		/* Move it (define the animation) */
		@keyframes scroll-left {
		 0%   {
		 transform: translateX(100%); 		
		 }
		 100% {
		 transform: translateX(-100%); 
		 }
		}
		</style>
	<div class="wrapper">
		<div class="main-header">
			@yield('header')
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			@yield('sidebar')
		</div>
		<!-- End Sidebar -->
		<script src="{{ asset('assets/select2/jquery.min.js')}}"></script>
		<script src="{{ asset('assets/select2/select2.min.js')}}"></script>

		<div class="main-panel">
			<div class="content">
				@yield('content')
				<div class="modal fade" id="btn_logout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-body">
						  B???n s??? logout ch????
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Kh??ng</button>
						  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form1').submit();" class="btn btn-success">C??</a>
						  <form id="logout-form1" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<footer class="footer">
				@yield('footer')
			</footer>
		</div>
		
		<script src="{{ asset('assets/js/common-select2.js')}}"></script>

		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			@yield('custom-template')
		</div>
		<!-- End Custom template -->
	</div>
	
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
	<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
	

	<!-- jQuery UI -->
	<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


	<!-- Chart JS -->
	<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js')}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>

	<!-- Datatables -->
	<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{ asset('js/datatables.js')}}"></script>
	{{-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script> --}}
	<script src="{{ asset('js/dataTables.button.min.js')}}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> --}}
	<script src="{{ asset('js/jszip.min.js')}}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> --}}
	<script src="{{ asset('js/pdfmake.min.js')}}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
	<script src="{{ asset('js/vfs_fonts.js')}}"></script>
	{{-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script> --}}
	<script src="{{ asset('js/buttons.html5.min.js')}}"></script>
	{{-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script> --}}
	<script src="{{ asset('js/buttons.print.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

	<!-- Atlantis JS -->
	<script src="{{ asset('assets/js/atlantis.min.js')}}"></script>

	{{-- select2 js --}}

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	{{-- <script src="{{ asset('assets/js/setting-demo.js')}}"></script>
	<script src="{{ asset('assets/js/demo.js')}}"></script> --}}
	{{-- <script src="{{ asset('assets/select2/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/select2/select2.min.js')}}"></script> --}}
	

</body>
</html>