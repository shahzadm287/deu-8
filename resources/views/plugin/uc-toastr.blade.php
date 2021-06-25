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