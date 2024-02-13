<div class="notice_section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="my-3 p-3 bg-white rounded box-shadow">
					<h6 class="border-bottom border-gray pb-2 mb-0">Public Notices</h6>
					<div class="media text-muted pt-3">
						<?php
						foreach ($result as $row) {

							?>

							<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
								<strong class="d-block text-gray-dark">
									<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""
										class="mr-2 rounded" width="32" height="32">
									<?= $row->NoticeTitle ?>
								</strong>
								<?= $row->NoticeMessage ?>
							</p>
							<?php
						}

						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- schedules-area sectin  -->
	<div class="schedules-area pd-top-110 pd-bottom-120">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 col-lg-8">
					<div class="section-title text-center">
						<h2>School Events</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
							consectetur ut et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="evt-tab-inner text-center">
				<ul class="nav nav-tabs" id="ex1" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="ex1-tab-1" data-toggle="pill" href="#ex1-tabs-1" role="tab"
							aria-selected="true"><span>Day 1</span>23 Jun 2020</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="ex1-tab-2" data-toggle="pill" href="#ex1-tabs-2" role="tab"
							aria-selected="false"><span>Day 2</span>23 Jun 2020</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="ex1-tab-3" data-toggle="pill" href="#ex1-tabs-3" role="tab"
							aria-selected="false"><span>Day 3</span>23 Jun 2020</a>
					</li>
				</ul>
			</div>
			<div class="tab-content" id="ex1-content">
				<div class="tab-pane fade active show" id="ex1-tabs-1" role="tabpanel">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner lunch-schedules text-center">
								<div class="lunch-schedules-inner align-self-center">
									<div class="icons">
										<img src="https://www.bootdey.com/image/200x200/00FFFF/000000" alt="img">
									</div>
									<h5>Lunch Break</h5>
									<div class="date">
										<i class="fa fa-clock-o"></i>
										5:00pm -6:30pm
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner lunch-schedules text-center">
								<div class="lunch-schedules-inner align-self-center">
									<div class="icons">
										<img src="https://www.bootdey.com/image/200x200/00FFFF/000000" alt="img">
									</div>
									<h5>Lunch Break</h5>
									<div class="date">
										<i class="fa fa-clock-o"></i>
										5:00pm -6:30pm
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner lunch-schedules text-center">
								<div class="lunch-schedules-inner align-self-center">
									<div class="icons">
										<img src="https://www.bootdey.com/image/200x200/FF1493/000000" alt="img">
									</div>
									<h5>Lunch Break</h5>
									<div class="date">
										<i class="fa fa-clock-o"></i>
										5:00pm -6:30pm
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-schedules-inner">
								<div class="date">
									<i class="fa fa-clock-o"></i>
									5:00pm -6:30pm
								</div>
								<h5>Improving the quality of the management.</h5>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
									tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
								<div class="media">
									<div class="media-left">
										<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="img">
									</div>
									<div class="media-body align-self-center">
										<h6>Dr. Ariful Islam Abid</h6>
										<p>Ceo of AIA software agency, USA.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>