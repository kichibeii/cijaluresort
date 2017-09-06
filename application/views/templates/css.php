<!-- basic -->
<link href="<?=base_url('assets/css/')?>bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url('assets/css/')?>animate.css" rel="stylesheet">
<link href="<?=base_url('assets/css/')?>blueimp-gallery.min.css" rel="stylesheet">
<link href="<?=base_url('assets/css/')?>style.css" rel="stylesheet">
<link href="<?=base_url('assets/css/')?>uniform.default.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<style>
	#wrapper {
		padding-left: 250px;
		transition: all 0.4s ease 0s;
	}

	#sidebar-wrapper {
		margin-left: -250px;
		left: 250px;
		width: 250px;
		background: #000;
		position: fixed;
		height: 100%;
		overflow-y: auto;
		z-index: 1000;
		transition: all 0.4s ease 0s;
	}

	#wrapper.active {
		padding-left: 0;
	}

	#wrapper.active #sidebar-wrapper {
		left: 0;
	}

	#page-content-wrapper {
		width: 100%;
	}



	.sidebar-nav {
		position: absolute;
		top: 0;
		width: 250px;
		list-style: none;
		margin: 0;
		padding: 0;
	}

	.sidebar-nav li {
		line-height: 40px;
		text-indent: 20px;
	}

	.sidebar-nav li a {
		color: #999999;
		display: block;
		text-decoration: none;
		padding-left: 60px;
	}

	.sidebar-nav li a span:before {
		position: absolute;
		left: 0;
		color: #41484c;
		text-align: center;
		width: 20px;
		line-height: 18px;
	}

	.sidebar-nav li a:hover,
	.sidebar-nav li.active {
		color: #fff;
		background: rgba(255,255,255,0.2);
		text-decoration: none;
	}

	.sidebar-nav li a:active,
	.sidebar-nav li a:focus {
		text-decoration: none;
	}

	.sidebar-nav > .sidebar-brand {
		height: 65px;
		line-height: 60px;
		font-size: 18px;
	}

	.sidebar-nav > .sidebar-brand a {
		color: #999999;
	}

	.sidebar-nav > .sidebar-brand a:hover {
		color: #fff;
		background: none;
	}



	.content-header {
		height: 65px;
		line-height: 65px;
	}

	.content-header h1 {
		margin: 0;
		margin-left: 20px;
		line-height: 65px;
		display: inline-block;
	}

	#menu-toggle {
		text-decoration: none;
	}

	.btn-menu {
		color: #000;
	} 

	.inset {
		padding: 20px;
	}

	@media (max-width:767px) {

		#wrapper {
			padding-left: 0;
		}

		#sidebar-wrapper {
			left: 0;
		}

		#wrapper.active {
			position: relative;
			left: 250px;
		}

		#wrapper.active #sidebar-wrapper {
			left: 250px;
			width: 250px;
			transition: all 0.4s ease 0s;
		}

		#menu-toggle {
			display: inline-block;
		}

		.inset {
			padding: 15px;
		}

	}

</style>
<!-- /basic -->