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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Carousel</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
							<div class="card-body p-4">
                            <h4 class="card-intro-title">Slides only</h4>
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
									</div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img1.jpg') }}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img2.jpg') }}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img3.jpg') }}" alt="Third slide">
                                        </div>
                                    </div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									  </button>
									  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body p-4">
                            <h4 class="card-intro-title">With Captions</h4>
                                <div class="bootstrap-carousel">
                                    <div class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img2.jpg') }}" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img3.jpg') }}" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Second slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img4.jpg') }}" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Third slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body p-4">
								<h4 class="card-intro-title">Slides only</h4>
                                <div class="bootstrap-carousel">
                                    <div class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img3.jpg') }}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img4.jpg') }}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img5.jpg') }}" alt="Third slide">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <h4 class="card-intro-title mb-4">Slides With indicators</h4>
                                <div class="bootstrap-carousel">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img4.jpg') }}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img5.jpg') }}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img6.jpg') }}" alt="Third slide">
                                            </div>
                                        </div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										  </button>
										  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										  </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body p-4">
                                <h4 class="card-intro-title mb-4">Slides With captions</h4>
                                <div class="bootstrap-carousel">
                                    <div data-bs-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
											<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
											<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('assets/custom/images/big/img5.jpg') }}" alt="">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="" class="d-block w-100" src="{{ asset('assets/custom/images/big/img6.jpg') }}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Second slide label</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="" class="d-block w-100" src="{{ asset('assets/custom/images/big/img7.jpg') }}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Third slide label</h5>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										  </button>
										  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										  </button>
                                    </div>
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
                <p>Copyright ?? Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
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