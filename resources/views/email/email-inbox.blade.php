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
@include('header');
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Email</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Inbox</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box px-0 mb-3">
                                    <div class="p-0">
                                        <a href="email-compose.html" class="btn btn-primary btn-block">Compose</a>
                                    </div>
                                    <div class="mail-list rounded mt-4">
                                        <a href="email-inbox.html" class="list-group-item active"><i
                                                class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
                                                class="badge badge-primary badge-sm float-end">198</span> </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-paper-plane font-18 align-middle me-2"></i>Sent</a> <a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-star font-18 align-middle me-2"></i>Important <span
                                                class="badge badge-danger text-white badge-sm float-end">47</span>
                                        </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
                                    </div>
                                    <div class="mail-list rounded overflow-hidden mt-4">
										<div class="intro-title d-flex justify-content-between my-0">
											<h5>Categories</h5>
											<i class="icon-arrow-down" aria-hidden="true"></i>
										</div>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Work </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Private </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Support </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Social </a>
                                    </div>
                                </div>
                                <div class="email-right-box ms-0 ms-sm-4 ms-sm-0">
                                    <div role="toolbar" class="toolbar ms-1 ms-sm-0">
                                        <div class="btn-group mb-1">
											<div class="form-check custom-checkbox">
												<input type="checkbox" class="form-check-input" id="checkAll">
												<label class="form-check-label" for="checkAll"></label>
											</div>
										</div>
                                        <div class="btn-group mb-1">
                                            <button class="btn btn-primary light px-3" type="button"><i class="ti-reload"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button aria-expanded="false" data-bs-toggle="dropdown" class="btn btn-primary px-3 light dropdown-toggle" type="button">More <span
                                                    class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>
                                                <a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="email-list mt-3">
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox2">
															<label class="form-check-label" for="checkbox2"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox3">
															<label class="form-check-label" for="checkbox3"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox4">
															<label class="form-check-label" for="checkbox4"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox5">
															<label class="form-check-label" for="checkbox5"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox6">
															<label class="form-check-label" for="checkbox6"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox7">
															<label class="form-check-label" for="checkbox7"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox8">
															<label class="form-check-label" for="checkbox8"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox9">
															<label class="form-check-label" for="checkbox9"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox10">
															<label class="form-check-label" for="checkbox10"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox11">
															<label class="form-check-label" for="checkbox11"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox12">
															<label class="form-check-label" for="checkbox12"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox13">
															<label class="form-check-label" for="checkbox13"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox14">
															<label class="form-check-label" for="checkbox14"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox15">
															<label class="form-check-label" for="checkbox15"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox16">
															<label class="form-check-label" for="checkbox16"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox17">
															<label class="form-check-label" for="checkbox17"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox18">
															<label class="form-check-label" for="checkbox18"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox19">
															<label class="form-check-label" for="checkbox19"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox20">
															<label class="form-check-label" for="checkbox20"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="ps-1 align-self-center">
														<div class="form-check custom-checkbox">
															<input type="checkbox" class="form-check-input" id="checkbox21">
															<label class="form-check-label" for="checkbox21"></label>
														</div>
													</div>
                                                    <div class="ms-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- panel -->
                                    <div class="row mt-4">
                                        <div class="col-12 ps-3">
                                            <nav>
												<ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
													<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
													<li class="page-item "><a class="page-link" href="javascript:void()">1</a></li>
													<li class="page-item active"><a class="page-link" href="javascript:void()">2</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
													<li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
													<li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
												</ul>
											</nav>
                                        </div>
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