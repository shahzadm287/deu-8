@include("header");
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex mb-3">
					<div class="mb-3 align-items-center me-auto">
						<h4 class="card-title">Payment History</h4>
						<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
					</div>
					<a href="javascript:void(0);" class="btn btn-outline-primary mb-3"><i class="fa fa-calendar me-3 scale3"></i>Filter Date</a>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive fs-14">
							<table class="table card-table display mb-4 dataTablesCard " id="example5">
								<thead>
									<tr>
										<th>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="checkAll">
											  <label class="form-check-label" for="checkAll">
											  </label>
											</div>
										</th>
										<th>ID Invoice</th>
										<th>Date</th>
										<th>Recipient</th>
										<th>Email</th>
										<th>Service Type</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
											  <label class="form-check-label" for="flexCheckDefault2">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/1.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
													<span class="fs-14">Online Shop</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">xyzstore@mail.com</span></td>
										<td><span class="text-black">Server Maintenance </span></td>
										<td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
											  <label class="form-check-label" for="flexCheckDefault3">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/2.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Hawkins Jr.</h6>
													<span class="fs-14">@hawkins</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">hawkins@mail.com</span></td>
										<td><span class="text-black">Clean Up </span></td>
										<td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
											  <label class="form-check-label" for="flexCheckDefault4">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/3.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Kevin Samuel</h6>
													<span class="fs-14">@kevin</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">kevin@mail.com</span></td>
										<td><span class="text-black">Upgrade Component </span></td>
										<td><a href="javascript:void(0)" class="btn btn-danger light">Pending</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
											  <label class="form-check-label" for="flexCheckDefault5">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/4.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Jons Sitepu</h6>
													<span class="fs-14">@jonsitepu</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">jons@mail.com</span></td>
										<td><span class="text-black">Server Maintenance  </span></td>
										<td><a href="javascript:void(0)" class="btn btn-dark light">Canceled</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
											  <label class="form-check-label" for="flexCheckDefault6">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/5.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Brian Harefa</h6>
													<span class="fs-14">@brianharefa</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">brian@mail.com</span></td>
										<td><span class="text-black">Clean Up</span></td>
										<td><a href="javascript:void(0)" class="btn btn-danger light">Pending</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
											  <label class="form-check-label" for="flexCheckDefault7">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/6.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">David Here</h6>
													<span class="fs-14">@davidhere</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">davidhere@mail.com</span></td>
										<td><span class="text-black">Upgrade Component </span></td>
										<td><a href="javascript:void(0)" class="btn btn-dark light">Canceled</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
											  <label class="form-check-label" for="flexCheckDefault8">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/7.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">Fanny Stefanus</h6>
													<span class="fs-14">@fannystefan</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">fannystevan@mail.com</span></td>
										<td><span class="text-black">Clean Up</span></td>
										<td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
											  <label class="form-check-label" for="flexCheckDefault9">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/8.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
													<span class="fs-14">Online Shop</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">xyzstore@mail.com</span></td>
										<td><span class="text-black">Server Maintenance </span></td>
										<td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
											  <label class="form-check-label" for="flexCheckDefault10">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/5.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
													<span class="fs-14">Online Shop</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">xyzstore@mail.com</span></td>
										<td><span class="text-black">Server Maintenance </span></td>
										<td><a href="javascript:void(0)" class="btn btn-danger light">Pending</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
											  <label class="form-check-label" for="flexCheckDefault11">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/1.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
													<span class="fs-14">Online Shop</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">xyzstore@mail.com</span></td>
										<td><span class="text-black">Server Maintenance </span></td>
										<td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
											  <label class="form-check-label" for="flexCheckDefault12">
											  </label>
											</div>
										</td>
										<td><span class="text-black font-w500">#123412451</span></td>
										<td><span class="text-black text-nowrap">#June 1, 2020, 08:22 AM</span></td>
										<td>
											<div class="d-flex align-items-center">
												<img src="images/avatar/1.jpg" alt="" class="rounded me-3" width="50">
												<div>
													<h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">XYZ Store ID</h6>
													<span class="fs-14">Online Shop</span>
												</div>
											</div>
										</td>
										<td><span class="text-black">xyzstore@mail.com</span></td>
										<td><span class="text-black">Server Maintenance </span></td>
										<td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
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
	<script src="{{ asset('assets/custom/vendor/chart.js/Chart.bundle.min.js') }}"></script>	
	<!-- Datatable -->
	<script src="{{ asset('assets/custom/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/custom/js/plugins-init/datatables.init.js') }}"></script>
    @include('vend');
	
</body>
</html>