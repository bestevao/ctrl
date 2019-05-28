<!DOCTYPE html>
<html class="csstransforms no-csstransforms3d csstransitions"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Onsystem</title>
	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/breadcrumb.css')}}">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/tabs.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

</head>
<body>


<div class="d-flex align-items-start flex-column" style="height: 55px;">
  <div class="mb-auto p-2"><a href="/"><img src="images/logo.png" alt="fresh design web"></a></div>
</div>

<div id="wrap">
	<header>


		<div class="inner relative" style="height: 50px;">
			
			<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li class="current-menu-item"><a href="/">Dashboard</a></li>
					<li><a href="/clients">Clientes</a></li>
					<li><a href="/suppliers">Fornecedores</a></li>
					<li><a href="/devices">Equipamentos</a></li>
					<li class="parent">
						<a href="/">aaaaa</a>
						<ul class="sub-menu">
							<li><a href="/devices"></i> Equipamentos</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-credit-card"></i>  Pricing Tables</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-gift"></i> Icons</a></li>
							<li>
								<a class="parent" href="#"><i class="icon-file-alt"></i> Pages</a>
								<ul class="sub-menu">
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Full Width</a></li>
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Left Sidebar</a></li>
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Right Sidebar</a></li>
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="parent">
						<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Blog</a>
						<ul class="sub-menu">
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Large Image</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Medium Image</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Masonry</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Single Post</a></li>
						</ul>
					</li>
					<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Contact</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>	
</div>  


	


<div class="row">
	<div class="container">
		@yield('content')
	</div>
</div>


	<script type="text/javascript" src="{{ URL::asset('/js/function.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/js/jquery.min.js') }}"></script>

</body>
</html>