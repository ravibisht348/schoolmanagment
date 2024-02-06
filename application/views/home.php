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
								<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="mr-2 rounded" width="32" height="32"> <?= $row->NoticeTitle ?>
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