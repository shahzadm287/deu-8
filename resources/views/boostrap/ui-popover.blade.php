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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Popover</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bootstrap popover</h4>
                            </div>
                            <div class="card-body">

                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam laborum dolorum culpa a maiores officia ab. Cumque necessitatibus voluptates soluta, ullam numquam nulla. Et a architecto veritatis sint, autem cupiditate
                                    iure illo pariatur eum, praesentium numquam ea quaerat ipsam? Corrupti nobis illo itaque quae, qui numquam vero ipsa, reiciendis sit repudiandae molestiae natus vel voluptatibus exercitationem ducimus neque harum ad,
                                    commodi excepturi repellat eos fugiat minus eius. Doloremque itaque repudiandae saepe quia temporibus? Vitae, reprehenderit aliquam facilis qui at quis provident in maiores illo laborum, voluptatem recusandae cupiditate
                                    nemo. Nulla iusto ad consequatur reprehenderit quod accusamus, vitae, blanditiis quae ut tenetur nobis animi dolorum consectetur dignissimos amet illo provident nam obcaecati eligendi molestias tempora? Ad nam nobis
                                    eaque consequatur tempore tenetur eius ipsum reprehenderit dignissimos inventore. Id recusandae nemo dicta rerum. Distinctio itaque, veniam dolore inventore aliquid assumenda neque. Deserunt!
                                </p>
								<div class="bootstrap-popover-wrapper">
									<div class="bootstrap-popover d-inline-block">
                                        <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Left">Left</button>
                                    </div>
									<div class="bootstrap-popover d-inline-block">
                                        <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Right">Top</button>
                                    </div>
									<div class="bootstrap-popover d-inline-block">
                                        <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Bottom">Bottom</button>
                                    </div>
                                    <div class="bootstrap-popover d-inline-block">
                                        <button type="button" class="btn btn-primary btn-sm px-4 " data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor." title="Popover in Right">Right</button>
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