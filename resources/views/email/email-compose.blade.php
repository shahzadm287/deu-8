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
    <link href="{{ asset('assets/custom/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom/css/style.css') }}" rel="stylesheet">

</head>

			@include('header');

<!---//Header --->
		

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Email</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Compose</a></li>
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
                                                class="fa fa-star-o font-18 align-middle me-2"></i>Important <span
                                                class="badge badge-danger text-white badge-sm float-end">47</span>
                                        </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
                                    </div>
                                    <div class="mail-list rounded overflow-hidden mt-4">
										<div class="intro-title d-flex justify-content-between my-0">
											<h5>Categories</h5>
											<i class="fa fa-chevron-down"></i>
										</div>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i
                                                    class="fa fa-circle"></i></span>
                                            Work </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i
                                                    class="fa fa-circle"></i></span>
                                            Private </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i
                                                    class="fa fa-circle"></i></span>
                                            Support </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i
                                                    class="fa fa-circle"></i></span>
                                            Social </a>
                                    </div>
                                </div>
                                <div class="email-right-box ms-0 ms-sm-4 ms-sm-0">
                                    <div class="toolbar mb-4" role="toolbar">
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-archive"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle px-3" data-bs-toggle="dropdown">
												<i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
                                            </button>
                                            <div class="dropdown-menu"> 
												<a class="dropdown-item" href="javascript: void(0);">Social</a> 
												<a class="dropdown-item" href="javascript: void(0);">Promotions</a> 
												<a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle px-3" data-bs-toggle="dropdown">
												<i class="fa fa-tag"></i> <b class="caret m-l-5"></b>
                                            </button>
                                            <div class="dropdown-menu"> 
												<a class="dropdown-item" href="javascript: void(0);">Updates</a> 
												<a class="dropdown-item" href="javascript: void(0);">Social</a> 
												<a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light dropdown-toggle v" data-bs-toggle="dropdown">More <span class="caret m-l-5"></span>
                                            </button>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a> <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a> <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="compose-content">
                                        <form action="#">
                                            <div class="mb-3">
                                                <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                            </div>
                                            <div class="mb-3">
                                                <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Enter text ..."></textarea>
                                            </div>
                                        </form>
                                        <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchment</h5>
										<form action="#" class="dropzone">
											<div class="fallback">
												<input name="file" type="file" multiple />
											</div>
										</form>
                                    </div>
                                    <div class="text-start mt-4 mb-3">
                                        <button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
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