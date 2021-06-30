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
	<link rel="shortcut icon" type="image/png" href="{{ asset('assets/custom/js/images/favicon.png') }}" />
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Pagination</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Pagination</h4>
                                <p class="mb-0 subtitle">Default pagination style</p>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-xs">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Pagination Gutter</h4>
                                <p class="mb-0 subtitle">add <code>.pagination-gutter</code> to change the style</p>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <ul class="pagination pagination-gutter">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-sm pagination-gutter">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-xs pagination-gutter">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Pagination Color</h4>
                                <p class="mb-0 subtitle">add <code>.pagination-gutter</code> to change the style</p>
                            </div>
                            <div class="card-body">
								 <nav>
                                    <ul class="pagination pagination-gutter pagination-primary no-bg">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-gutter pagination-danger">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-sm pagination-gutter pagination-info">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-xs pagination-gutter  pagination-warning">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Pagination Circle</h4>
                                <p class="mb-0 subtitle">add <code>.pagination-circle</code> to change the style</p>
                            </div>
                            <div class="card-body">
                                <nav>
                                    <ul class="pagination pagination-circle">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-sm pagination-circle">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <nav>
                                    <ul class="pagination pagination-xs pagination-circle">
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item page-indicator">
                                            <a class="page-link" href="javascript:void(0)">
                                                <i class="la la-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
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
    @include('vend');
    
</body>
</html>