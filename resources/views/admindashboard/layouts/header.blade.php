<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/admindashboard/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/admindashboard/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/admindashboard/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/src/plugins/cropperjs/dist/cropper.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
    <div class="dashboard-setting user-notification">
        <div class="dropdown">
            <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                <i class="dw dw-settings2"></i>
            </a>
        </div>
    </div>

    <!-- Existing notifications section -->
    <div class="user-notification">
        <div class="dropdown">
            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                <i class="icon-copy dw dw-notification"></i>
                <span class="badge notification-active"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- Notification content -->
            </div>
        </div>
    </div>

    <!-- Adding Upload Card Data Button -->
    <div class="upload-card-data">
        <a href="/path-to-upload-page" class="btn btn-primary" style="margin-right: 20px; margin-top:20px;">Upload Card Data</a>
    </div>

    <!-- Existing User Info Dropdown -->
    <div class="user-info-dropdown">
        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <span class="user-icon">
                    <img src="/admindashboard/vendors/images/photo1.jpg" alt="">
                </span>
                <span class="user-name">{{Auth::guard('admin')->user()->admin_name}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="../admin/profile"><i class="dw dw-user1"></i> Profile</a>
                <a class="dropdown-item" href="../admin/setting"><i class="dw dw-settings2"></i> Setting</a>
                <a class="dropdown-item" href="../admin/faq"><i class="dw dw-help"></i> Help</a>
                <a class="dropdown-item" href="../admin/login"><i class="dw dw-logout"></i> Log Out</a>
            </div>
        </div>
    </div>

    <div class="github-link">
        <a href="https://github.com/dropways/deskapp" target="_blank"><img src="/admindashboard/vendors/images/github.svg" alt=""></a>
    </div>
</div>

	</div>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/admindashboard/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/admindashboard/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/admindashboard/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/src/plugins/cropperjs/dist/cropper.css">
	<link rel="stylesheet" type="text/css" href="/admindashboard/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>