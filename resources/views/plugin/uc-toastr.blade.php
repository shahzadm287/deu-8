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

    <link rel="stylesheet" href="{{ asset('assets/custom/vendor/toastr/css/toastr.min.css') }}">
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Advanced</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Toastr</a></li>
					</ol>
                </div>
                <!-- row -->

                <!-- Toastr -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Toastr</h4>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-dark mb-2 me-2" id="toastr-success-top-right">Top
                                    Right</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-right">Bottom Right</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-left">Bottom Left</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-top-left">Top
                                    Left</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-top-full-width">Top Full Width</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-full-width">Bottom Full Width</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-top-center">Top
                                    Center</button>
                                <button type="button" class="btn btn-dark mb-2  me-2" id="toastr-success-bottom-center">Bottom Center</button>
                                <button type="button" class="btn btn-info mb-2  me-2" id="toastr-info-top-right">Info</button>
                                <button type="button" class="btn btn-warning mb-2  me-2" id="toastr-warning-top-right">Warning</button>
                                <button type="button" class="btn btn-danger mb-2  me-2" id="toastr-danger-top-right">Error</button>
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

    <!-- Toastr -->
    <script src="{{ asset('assets/custom/vendor/toastr/js/toastr.min.js') }}"></script>

    <!-- All init script -->
    <script src="{{ asset('assets/custom/js/plugins-init/toastr-init.js') }}"></script>
	@include('vend');
    
</body>
</html>