<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 footer-sticky navbar-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 footer-sticky navbar-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 footer-sticky navbar-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie footer-sticky navbar-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="footer-sticky navbar-sticky"><!-- <![endif]-->
<head>
	<title>CORAL Template (v1.9.6)</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="<?= base_url() ?>assets/less/admin/module.admin.stylesheet-complete.layout_fixed.true.less" />
	-->

		<!--[if lt IE 9]><link rel="stylesheet" href="<?= base_url() ?>assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/admin/module.admin.stylesheet-complete.layout_fixed.true.min.css" />
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="<?= base_url() ?>assets/components/library/jquery/jquery.min.js?v=v1.9.6&sv=v0.0.1"></script>
<script src="<?= base_url() ?>assets/components/library/jquery/jquery-migrate.min.js?v=v1.9.6&sv=v0.0.1"></script>
<script src="<?= base_url() ?>assets/components/library/modernizr/modernizr.js?v=v1.9.6&sv=v0.0.1"></script>
<script src="<?= base_url() ?>assets/components/plugins/less-js/less.min.js?v=v1.9.6&sv=v0.0.1"></script>
<script src="<?= base_url() ?>assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.9.6&sv=v0.0.1"></script>
<script src="<?= base_url() ?>assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.9.6&sv=v0.0.1"></script>	<script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script>
	
</head>
<body class=" menu-right-hidden">
	
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden">

		
				
		<!-- Content -->
		<div id="content">

						
				<div class="navbar hidden-print main navbar-default" role="navigation">
	<div class="container">

		<div class="navbar-header">
          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>

          	<a id="logo" href="index.html?lang=en" class="animated fadeInDown pull-left"><img src="<?= base_url() ?>assets/images/logo/app-logo-style-default.png" alt="" class="img-clean" width="37"></a>
        </div>

		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-light active">
					<a href="" data-toggle="dropdown" class="dropdown-toggle">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="dashboard_analytics.html?lang=en" class="glyphicons dashboard"><i></i><span>Dashboard</span></a>
							<ul class="dropdown-menu">
								<li><a href="dashboard_analytics.html?lang=en"><i class="fa fa-bar-chart-o"></i><span>Analytics</span></a></li>
								<li><a href="dashboard_users.html?lang=en"><i class="fa fa-user"></i><span>Users</span></a></li>
								<li><a href="dashboard_overview.html?lang=en"><i class="fa fa-dashboard"></i><span>Overview</span></a></li>
							</ul>
						</li>
						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="index.html?lang=en" class="glyphicons globe"><i></i><span>Social</span></a>
							<ul class="dropdown-menu">
								<li><a href="index.html?lang=en" class="glyphicons cardio"><i></i><span>Activity</span></a></li>
								<li><a href="social_account.html?lang=en" class="glyphicons user"><i></i><span>Account</span></a></li>
								<li><a href="social_messages.html?lang=en"><i class="fa fa-comments-o"></i><span>Messages</span></a></li>
								<li><a href="social_friends.html?lang=en"><i class="fa fa-group"></i><span>Friends</span></a></li>
								<li><a href="email.html?lang=en"><span class="badge pull-right badge-inverse">30</span><i class="fa fa-envelope"></i><span>Inbox</span></a></li>
								<li><a href="social.html?lang=en"><i class="fa fa-folder"></i><span>Widgets</span></a></li>
								<li><a href="timeline.html?lang=en"><i class="fa fa-clock-o"></i><span>Timelines</span></a></li>
								<li><a href="contacts_2.html?lang=en" class="glyphicons iphone"><i></i><span>Contacts #2</span></a></li>
								<li><a href="contacts.html?lang=en" class="glyphicons iphone"><i></i><span>Contacts #1</span></a></li>
								<li><a href="ratings.html?lang=en" class="glyphicons star"><i></i><span>Ratings</span></a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu active">
							<a href="realestate_listing_map.html?lang=en"><i class="fa fa-home"></i><span>Real Estate</span></a>
							<ul class="dropdown-menu">
								<li><a href="realestate_listing_map.html?lang=en"><i class="fa fa-map-marker"></i><span>Property map</span> &nbsp; <span class="label label-primary">new</span></a></li>
								<li><a href="realestate_listing_grid.html?lang=en"><i class="fa fa-th"></i><span>Property grid</span></a></li>
								<li><a href="realestate_listing_list.html?lang=en"><i class="fa fa-list"></i><span>Property list</span></a></li>
								<li><a href="realestate_property.html?lang=en"><i class="fa fa-info"></i><span>Property details</span></a></li>
								<li><a href="realestate_compare.html?lang=en"><i class="fa icon-scale-2"></i><span>Property compare</span></a></li>
								<li class="active"><a href="realestate_property_edit.html?lang=en"><i class="fa fa-edit"></i><span>Property edit</span></a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="maps_vector.html?lang=en" class="glyphicons google_maps"><i></i><span>Maps</span></a>
							<ul class="dropdown-menu">
								<li><a href="maps_vector.html?lang=en" class="glyphicons google_maps"><i></i><span>Vector Maps</span></a></li>
								<li><a href="maps_google.html?lang=en" class="glyphicons google_maps"><i></i><span>Google Maps</span></a></li>
							</ul>
						</li>

						<li><a href="events.html?lang=en"><i class="fa fa-ticket"></i><span>Events</span></a></li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="news.html?lang=en" class="glyphicons notes"><i></i> Content</a>
							<ul class="dropdown-menu">
								<li><a href="news.html?lang=en"><i class="fa fa-file-text"></i><span>News</span></a></li>
								<li><a href="stories.html?lang=en"><i class="fa fa-file-text-o"></i><span>Stories</span></a></li>
								<li><a href="search.html?lang=en"><i class="fa fa-search"></i><span>Search</span></a></li>
								<li><a href="faq.html?lang=en"><i class="fa fa-question-circle"></i><span>FAQ</span></a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="gallery_video.html?lang=en" class="glyphicons picture"><i></i><span>Media</span></a>
							<ul class="dropdown-menu">
								<li><a href="gallery_video.html?lang=en"><i class="fa fa-video-camera"></i><span>Video Gallery</span></a></li>
								<li><a href="gallery_photo.html?lang=en"><i class="fa fa-camera"></i><span>Photo Gallery</span></a></li>
							</ul>
						</li>

						<li><a href="tasks.html?lang=en" class="glyphicons share_alt"><i></i><span>Tasks</span></a></li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="support_tickets.html?lang=en" class="glyphicons life_preserver"><i></i><span>Support</span></a>
							<ul class="dropdown-menu">
								<li><a href="support_tickets.html?lang=en"><i class="fa fa-ticket"></i><span>Tickets</span></a></li>
								<li><a href="support_forum_overview.html?lang=en"><i class="fa fa-folder-o"></i> Forums Home</a></li>
								<li><a href="support_forum_post.html?lang=en"><i class="fa fa-folder-o"></i> Forums Post</a></li>
								<li><a href="support_kb.html?lang=en"><i class="fa fa-file-text-o"></i><span>Knowledge Base</span></a></li>
								<li><a href="support_questions.html?lang=en"><i class="fa fa-question"></i><span>Questions</span></a></li>
								<li><a href="support_answers.html?lang=en"><i class="fa fa-info"></i><span>Answers</span></a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="medical_overview.html?lang=en" class="glyphicons circle_plus"><i></i><span>Medical</span></a>
							<ul class="dropdown-menu">
								<li class="">
									<a href="medical_overview.html?lang=en"><i class="fa fa-medkit"></i><span>Overview</span></a>
								</li>
								<li class="">
									<a href="medical_patients.html?lang=en"><span class="badge pull-right badge-primary">2</span><i class="fa fa-user-md"></i><span>Patients</span></a>
								</li>
								<li class="">
									<a href="medical_appointments.html?lang=en"><i class="fa fa-stethoscope"></i><span>Appointments</span></a>
								</li>
								<li class="">
									<a href="medical_memos.html?lang=en"><i class="fa fa-file-text-o"></i><span>Memos</span></a>
								</li>
								<li class="border-bottom-none">
									<a href="medical_metrics.html?lang=en"><i class="fa fa-bar-chart-o"></i><span>Metrics</span></a>
								</li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="courses_2.html?lang=en" class="glyphicons crown"><i></i> Learning</a>
							<ul class="dropdown-menu">
								<li class=""><a href="courses_2.html?lang=en"><i class="fa fa-book"></i><span>Courses Home #1</span></a></li>
								<li class=""><a href="courses.html?lang=en"><i class="fa fa-book"></i><span>Courses Home #2</span></a></li>
								<li class=""><a href="courses_listing.html?lang=en"><i class="fa fa-book"></i><span>Courses Listing</span></a></li>
								<li class=""><a href="course.html?lang=en"><i class="fa fa-book"></i><span>Course page</span></a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="finances.html?lang=en" class="glyphicons calculator"><i></i> Finance</a>
							<ul class="dropdown-menu">
								<li><a href="finances.html?lang=en"><i class="fa fa-legal"></i><span>Finances</span></a></li>
								<li><a href="invoice.html?lang=en"><i class="fa fa-file-text-o"></i><span>Invoice</span></a></li>
								<li><a href="bookings.html?lang=en"><i class="fa fa-ticket"></i><span>Bookings</span></a></li>
							</ul>
						</li>

						<li><a href="shop_products.html?lang=en" class="glyphicons shopping_cart"><i></i><span>Shop</span></a></li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="survey.html?lang=en" class="glyphicons turtle"><i></i><span>Surveys</span></a>
							<ul class="dropdown-menu">
								<li><a href="survey.html?lang=en"><i class="fa fa-check"></i><span>Single</span></a></li>
								<li><a href="survey_multiple.html?lang=en"><i class="fa fa-windows"></i><span>Multiple</span></a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-light dropdown-submenu">
							<a href="profile_resume.html?lang=en" class="glyphicons plus"><i></i><span>Other</span></a>
							<ul class="dropdown-menu dropdown-menu-bottom">
								<li><a href="profile_resume.html?lang=en"><i class="fa fa-download"></i>Profile / CV</a></li>
								<li><a href="login.html?lang=en"><i class="fa fa-lock"></i><span>Login</span></a></li>
								<li><a href="signup.html?lang=en"><i class="fa fa-pencil"></i>Signup</a></li>
								<li><a href="landing.html?lang=en"><i class="fa fa-share"></i><span>Landing</span></a></li>
								<li><a href="employees.html?lang=en" class="glyphicons group"><i></i><span>Employees</span></a></li>
								<li><a href="error.html?lang=en" class="glyphicons warning_sign"><i></i><span>Error</span></a></li>
								<li><a href="ui.html?lang=en" class="glyphicons adjust_alt"><i></i><span>Elements</span></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown dropdown-light">
					<a href="" data-toggle="dropdown" class="dropdown-toggle">Website <span class="caret"></span></a>
					<ul class="dropdown-menu pull-left">
						<li><a href="../front/index.html?lang=en" class="glyphicons show_big_thumbnails" target="_blank"><i></i><span>Multi Purpose</span></a></li>
						<li><a href="../shop/index.html?lang=en" class="glyphicons shopping_cart" target="_blank"><i></i><span>Online Shop</span></a></li>
						<li><a href="../realestate/index.html?lang=en" class="glyphicons home" target="_blank"><i></i><span>Real Estate</span></a></li>
					</ul>
				</li>
			</ul>

		  	<div class="user-action visible-xs user-action-btn-navbar pull-right">
				<button class="btn btn-sm btn-navbar-right btn-primary btn-stroke"><i class="fa fa-fw fa-arrow-right"></i><span class="menu-left-hidden-xs"> Modules</span></button>
			</div>

			<div class="col-md-3 visible-md visible-lg pull-right padding-none">
		    	<div class="input-group">
		      		<input type="text" class="form-control input-sm" placeholder="Search stories ...">
		      		<span class="input-group-btn">
		        		<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
		      		</span>
		    	</div><!-- /input-group -->
		  	</div>

		  	<div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs hidden-xs">
				<div class="dropdown dropdown-icons padding-none">
					<a data-toggle="dropdown" href="#" class="btn btn-primary btn-circle dropdown-toggle"><i class="fa fa-user"></i> </a>
					<ul class="dropdown-menu">
						<li data-toggle="tooltip" data-title="Photo Gallery" data-placement="left" data-container="body"><a href="gallery_photo.html?lang=en"><i class="fa fa-camera"></i></a></li>
						<li data-toggle="tooltip" data-title="Tasks" data-placement="left" data-container="body"><a href="tasks.html?lang=en"><i class="fa fa-code-fork"></i></a></li>
						<li data-toggle="tooltip" data-title="Employees" data-placement="left" data-container="body"><a href="employees.html?lang=en"><i class="fa fa-group"></i></a></li>
						<li data-toggle="tooltip" data-title="Contacts" data-placement="left" data-container="body"><a href="contacts_2.html?lang=en"><i class="fa fa-phone-square"></i></a></li>
					</ul>
				</div>
			</div>

			<ul class="notifications pull-right hidden-xs">
				<li class="dropdown notif">
					<a href="" class="dropdown-toggle"  data-toggle="dropdown"><i class="notif-block fa fa-comments-o"></i><span class="badge badge-primary">7</span></a>
					<ul class="dropdown-menu chat media-list">
						<li class="media">
					        <a class="pull-left" href="#"><img class="media-object thumb" src="<?= base_url() ?>assets/images/people/100/15.jpg" alt="50x50" width="50"/></a>
							<div class="media-body">
					        	<span class="label label-default pull-right">5 min</span>
					            <h5 class="media-heading">Adrian D.</h5>
					            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
						</li>
				      	<li class="media">
				          	<a class="pull-left" href="#"><img class="media-object thumb" src="<?= base_url() ?>assets/images/people/100/16.jpg" alt="50x50" width="50"/></a>
							<div class="media-body">
					          	<span class="label label-default pull-right">2 days</span>
					            <h5 class="media-heading">Jane B.</h5>
					            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
				        </li>
					    <li class="media">
				          	<a class="pull-left" href="#"><img class="media-object thumb" src="<?= base_url() ?>assets/images/people/100/17.jpg" alt="50x50" width="50"/></a>
					      	<div class="media-body">
								<span class="label label-default pull-right">3 days</span>
					            <h5 class="media-heading">Andrew M.</h5>
					            <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					        </div>
				        </li>
				        <li><a href="#" class="btn btn-primary"><i class="fa fa-list"></i> <span>View all messages</span></a></li>
			      	</ul>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- // END navbar -->

						
			<div id="menu-top" class="menu-top-inverse">
	<div class="container">	<ul class="main pull-left">
		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href=""><i class="fa fa-fw fa-cog"></i> Layout <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li class="active"><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true" class="no-ajaxify">Fixed Layout with Top menu</a></li>
				<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=false" class="no-ajaxify">Fluid Layout with Sidebars</a></li>
				<li><a href="layout/layout-fixed-menu-top.html?lang=en" class="no-ajaxify">Layout examples</a></li>
		    </ul>
		</li>
		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href=""><i class="fa fa-fw fa-suitcase"></i> UI KIT <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="ui.html?lang=en">UI Elements</a></li>
				<li><a href="icons.html?lang=en">Icons</a></li>
				<li><a href="typography.html?lang=en">Typography</a></li>
				<li><a href="widgets.html?lang=en">Widgets</a></li>
				<li><a href="calendar.html?lang=en">Calendar</a></li>
				<li><a href="tabs.html?lang=en">Tabs</a></li>
				<li><a href="sliders.html?lang=en">Sliders</a></li>
				<li><a href="charts.html?lang=en">Charts</a></li>
				<li><a href="grid.html?lang=en">Grid</a></li>
				<li><a href="notifications.html?lang=en">Notifications</a></li>
				<li><a href="modals.html?lang=en">Modals</a></li>
				<li><a href="thumbnails.html?lang=en">Thumbnails</a></li>
				<li><a href="carousels.html?lang=en">Carousels</a></li>
				<li><a href="image_crop.html?lang=en">Image Cropping</a></li>
				<li><a href="twitter.html?lang=en">Twitter API</a></li>
				<li><a href="infinite_scroll.html?lang=en">Infinite Scroll</a></li>
		    </ul>
		</li>
		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href=""><i class="fa fa-fw fa-check-square-o"></i> Forms <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="form_wizards.html?lang=en">Form Wizards</a></li>
				<li><a href="form_elements.html?lang=en">Form Elements</a></li>
				<li><a href="form_validator.html?lang=en">Form Validator</a></li>
				<li><a href="file_managers.html?lang=en">File Managers</a></li>
		    </ul>
		</li>
		<li class="dropdown hidden-xs">
			<a data-toggle="dropdown" class="dropdown-toggle" href=""><i class="fa fa-fw fa-table"></i> Tables <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="tables.html?lang=en">Tables</a></li>
				<li><a href="tables_responsive.html?lang=en">Responsive Tables</a></li>
				<li><a href="pricing_tables.html?lang=en">Pricing Tables</a></li>
		    </ul>
		</li>
	</ul>
	<ul class="main pull-right visible-lg">
		<li><a href="">Close <i class="fa fa-fw fa-times"></i></a></li>
	</ul>
	<ul class="colors pull-right hidden-xs">
		
				<li class="active"><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=style-default" style="background-color: #eb6a5a" class="no-ajaxify"><span class="hide">style-default</span></a></li>
				<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=green" style="background-color: #87c844" class="no-ajaxify"><span class="hide">green</span></a></li>
				<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=coral" style="background-color: #7eccc2" class="no-ajaxify"><span class="hide">coral</span></a></li>
		
		<li class="dropdown">
			<a href="" data-toggle="dropdown" class="dropdown-toggle">
				<span class="color inverse"></span>
				<span class="color danger"></span>
				<span class="color success"></span>
				<span class="color info"></span>
			</a>
			<ul class="dropdown-menu pull-right">
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=alizarin-crimson" class="no-ajaxify"><span class="color" style="background-color: #F06F6F"></span> alizarin-crimson</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=blue-gray" class="no-ajaxify"><span class="color" style="background-color: #7293CF"></span> blue-gray</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=brown" class="no-ajaxify"><span class="color" style="background-color: #d39174"></span> brown</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=purple-gray" class="no-ajaxify"><span class="color" style="background-color: #AF86B9"></span> purple-gray</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=purple-wine" class="no-ajaxify"><span class="color" style="background-color: #CC6788"></span> purple-wine</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=green-army" class="no-ajaxify"><span class="color" style="background-color: #9FB478"></span> green-army</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=black-and-white" class="no-ajaxify"><span class="color" style="background-color: #979797"></span> black-and-white</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=amazon" class="no-ajaxify"><span class="color" style="background-color: #8BC4B9"></span> amazon</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=amber" class="no-ajaxify"><span class="color" style="background-color: #CACA8A"></span> amber</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=android-green" class="no-ajaxify"><span class="color" style="background-color: #A9C784"></span> android-green</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=antique-brass" class="no-ajaxify"><span class="color" style="background-color: #B3998A"></span> antique-brass</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=antique-bronze" class="no-ajaxify"><span class="color" style="background-color: #8D8D6E"></span> antique-bronze</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=artichoke" class="no-ajaxify"><span class="color" style="background-color: #B0B69D"></span> artichoke</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=atomic-tangerine" class="no-ajaxify"><span class="color" style="background-color: #F19B69"></span> atomic-tangerine</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=bazaar" class="no-ajaxify"><span class="color" style="background-color: #98777B"></span> bazaar</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=bistre-brown" class="no-ajaxify"><span class="color" style="background-color: #C3A961"></span> bistre-brown</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=bittersweet" class="no-ajaxify"><span class="color" style="background-color: #d6725e"></span> bittersweet</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=blueberry" class="no-ajaxify"><span class="color" style="background-color: #7789D1"></span> blueberry</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=bud-green" class="no-ajaxify"><span class="color" style="background-color: #6fa362"></span> bud-green</a></li>
								<li><a href="?module=admin&page=realestate_property_edit&url_rewrite=&build=&v=v1.9.6&layout_fixed=true&skin=burnt-sienna" class="no-ajaxify"><span class="color" style="background-color: #E4968A"></span> burnt-sienna</a></li>
							</ul>
		</li>
	</ul>
	</div></div>

