<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template" />
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Dompet : Payment Admin Template</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/custom/images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/custom/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
	<link href="{{ asset('assets/custom/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
		
    <link href="{{ asset('assets/custom/css/style.css') }}" rel="stylesheet">	

</head>
@include("header");
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Sweet Alert</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Wrong</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-info btn sweet-message">Sweet Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Text</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Success</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-warning btn sweet-confirm">Sweet Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Confirm Or Cancel</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-warning btn sweet-success-cancel">Sweet Confirm Or
                                            Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Image Message</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-info btn sweet-image-message">Sweet Image
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet HTML</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-primary btn sweet-html">Sweet HTML</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Auto Close</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-danger btn sweet-auto">Sweet Auto btn-close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Prompt</h4>
                                <div class="card-content">
                                    <div class="sweetalert mt-5">
                                        <button class="btn btn-success btn sweet-prompt">Sweet Prompt</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sweet Ajax</h4>
                                <div class="card-content"></div>
                                <div class="sweetalert mt-4">
                                    <button class="btn btn-info btn sweet-ajax">Sweet Ajax</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->


    <script src="{{ asset('assets/custom/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/custom/js/plugins-init/sweetalert.init.js') }}"></script>
	@include('vend');

	
    
</body>
</html>