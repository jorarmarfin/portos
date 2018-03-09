@extends('layouts.admin')

@section('content')
					<header class="page-header">
						<h2>User Profile</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>User Profile</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="img/!logged-user.jpg" class="rounded img-fluid" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">John Doe</span>
											<span class="thumb-info-type">CEO</span>
										</div>
									</div>
								</div>
							</section>




						</div>
						<div class="col-lg-8 col-xl-9">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#overview" data-toggle="tab">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#edit" data-toggle="tab">Edit</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">

										<div class="p-3">

											<h4 class="mb-3">Update Status</h4>

											<section class="simple-compose-box mb-3">
												<form method="get" action="/">
													<textarea name="message-text" data-plugin-textarea-autosize placeholder="What's on your mind?" rows="1"></textarea>
												</form>
												<div class="compose-box-footer">
													<ul class="compose-toolbar">
														<li>
															<a href="#"><i class="fa fa-camera"></i></a>
														</li>
														<li>
															<a href="#"><i class="fa fa-map-marker"></i></a>
														</li>
													</ul>
													<ul class="compose-btn">
														<li>
															<a href="#" class="btn btn-primary btn-xs">Post</a>
														</li>
													</ul>
												</div>
											</section>

											<h4 class="mb-3 pt-4">Timeline</h4>

											<div class="timeline timeline-simple mt-3 mb-3">
												<div class="tm-body">
													<div class="tm-title">
														<h5 class="m-0 pt-2 pb-2 text-uppercase">November 2017</h5>
													</div>
													<ol class="tm-items">
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
																</p>
															</div>
														</li>
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	What is your biggest developer pain point?
																</p>
															</div>
														</li>
														<li>
															<div class="tm-box">
																<p class="text-muted mb-0">7 months ago.</p>
																<p>
																	Checkout! How cool is that!
																</p>
																<div class="thumbnail-gallery">
																	<a class="img-thumbnail lightbox" href="img/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																		<img class="img-fluid" width="215" src="img/projects/project-4.jpg">
																		<span class="zoom">
																			<i class="fa fa-search"></i>
																		</span>
																	</a>
																</div>
															</div>
														</li>
													</ol>
												</div>
											</div>
										</div>

									</div>
									<div id="edit" class="tab-pane">

										<form class="p-3">
											<h4 class="mb-3">Personal Information</h4>
											<div class="form-group">
												<label for="inputAddress">Address</label>
												<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
											</div>
											<div class="form-group">
												<label for="inputAddress2">Address 2</label>
												<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputCity">City</label>
													<input type="text" class="form-control" id="inputCity">
												</div>
												<div class="form-group col-md-4">
													<label for="inputState">State</label>
													<select id="inputState" class="form-control">
														<option selected>Choose...</option>
														<option>...</option>
													</select>
												</div>
												<div class="form-group col-md-2">
													<label for="inputZip">Zip</label>
													<input type="text" class="form-control" id="inputZip">
												</div>
											</div>

											<hr class="dotted tall">

											<h4 class="mb-3">Change Password</h4>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputPassword4">New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
												</div>
												<div class="form-group col-md-6">
													<label for="inputPassword4">Re New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
												</div>
											</div>

											<div class="form-row">
												<div class="col-md-12 text-right mt-3">
													<button class="btn btn-primary modal-confirm">Save</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>

					</div>
@endsection