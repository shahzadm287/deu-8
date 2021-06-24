@include("header");
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">	
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body pb-3">
								<div class="row align-items-center">
									<div class="col-xl-4 mb-3">
										<p class="mb-2">ID Payment</p>
										<h2 class="mb-0">#00123521</h2>
									</div>
									<div class="col-xl-8 d-flex flex-wrap justify-content-between align-items-center">
										<div class="d-flex me-3 mb-3 ms-2 align-items-start">
											<i class="fa fa-phone scale-2 me-4 mt-2"></i>
											<div>
												<p class="mb-2">Telephone</p>
												<h4 class="mb-0">+12 345 5662 66</h4>
											</div>
										</div>
										<div class="d-flex me-3 mb-3 ms-2 align-items-start">
											<i class="fa fa-envelope scale-2 me-4 mt-2"></i>
											<div>
												<p class="mb-2">Email</p>
												<h4 class="mb-0">samuelbro@mail.com</h4>
											</div>
										</div>
										<div class="d-flex mb-3">
											<a class="btn btn-dark light me-3" href="javascript:void(0);"><i class="las la-print me-3 scale5"></i>Print</a>
											<a href="javascript:void(0);" class="btn btn-primary"><i class="las la-download scale5 me-3"></i>Download Report</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pb-3 transaction-details d-flex flex-wrap justify-content-between align-items-center">
								<div class="user-bx-2 me-3 mb-3">
									<img src="{{ asset('assets/custom/images/profile/1.png') }}" class="rounded" alt="">
									<div>
										<h3>Richard Michael</h3>
										<span>@richardmichael</span>
									</div>
								</div>
								<div class="me-3 mb-3">
									<p class="mb-2">Payment Method</p>
									<h4 class="mb-0">MasterCard 404</h4>
								</div>
								<div class="me-3 mb-3">
									<p class="mb-2">Invoice Date</p>
									<h4 class="mb-0">April 29, 2020</h4>
								</div>
								<div class="me-3 mb-3">
									<p class="mb-2">Due Date</p>
									<h4 class="mb-0">June 5, 2020</h4>
								</div>
								<div class="me-3 mb-3">
									<p class="mb-2">Date Paid</p>
									<h4 class="mb-0">June 4, 2020</h4>
								</div>
								<div class="amount-bx mb-3">
									<i class="fa fa-usd"></i>
									<div>
										<p class="mb-1">Amount</p>
										<h3 class="mb-0">$ 986.23</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">	
							<div class="card-body">
								<div class="d-xl-flex d-block align-items-start description-bx">
									<div>
										<h4 class="card-title">Description</h4>
										<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
										<p class="description mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
									</div>
									<div class="card-bx bg-dark-blue ms-xl-5 ms-0">
										<img class="pattern-img" src="{{ asset('assets/custom/images/pattern/pattern11.png') }}" alt="">
										<div class="card-info text-white">
											<img src="images/pattern/circle.png" class="mb-4" alt="">
											<h2 class="text-white card-balance">$24,567</h2>
											<p class="fs-16">Wallet Balance</p>
											<span>+0,8% than last week</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div>
									<h4 class="card-title mb-2">Chart Activity</h4>
									<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-right" style="margin: 0px;">
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
									</div>
								</div>
							</div>
							<div class="card-body py-0 px-2">
								<div id="activityChart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div>
									<h4 class="card-title mb-2">Specifics</h4>
									<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
								</div>
							</div>
							<div class="card-body pt-3">
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem</p>
								<ul class="specifics-list">
									<li>
										<span class="bg-blue"></span>
										<div>
											<h4>63,876</h4>
											<span>Property Sold</span>
										</div>
									</li>
									<li>
										<span class="bg-orange"></span>
										<div>
											<h4>97,125</h4>
											<span>Income</span>
										</div>
									</li>
									<li>
										<span class="bg-primary"></span>
										<div>
											<h4>872,235</h4>
											<span>Expense</span>
										</div>
									</li>
									<li>
										<span class="bg-danger"></span>
										<div>
											<h4>21,224</h4>
											<span>Property Ranted</span>
										</div>
									</li>
								</ul>
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
	<script src="{{ asset('assets/custom/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<!-- Apex Chart -->
	<script src="{{ asset('assets/custom/vendor/apexchart/apexchart.js') }}"></script>
	<script src="{ asset('assets/custom/js/dashboard/transaction-details.js') }}"></script>
	<!-- Datatable -->
    <script src="{{ asset('assets/custom/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/custom/js/plugins-init/datatables.init.js') }}"></script>

	
    
	
</body>
</html>