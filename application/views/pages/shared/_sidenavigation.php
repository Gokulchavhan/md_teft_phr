  <div class="col-md-3" id="sidebar" role="navigation">
		<div class=" affix affixed-side-nav">
<!--			<div class="row">-->
<!--				<div class="panel panel-default">-->
<!--					<div class="panel-body"">-->
<!--						<div class="col-xs-1 col-sm-2 no-padding text-center">-->
<!--                        <span class="h4 no-margin coolgray-color">-->
<!--                            <span class="fa fa-user"></span>-->
<!--                        </span>-->
<!--						</div>-->
<!--						<div class="col-xs-11 col-sm-10 no-padding">-->
<!--							<span class="h4 no-margin orange-color">Rosie Red</span><br>-->
<!--							<span class="h6 bluesteel-color no-margin" style="float: left;">MA# 12345679852</span>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
          <div class="list-group">
		  <?php
			  foreach ($sidenavlinks as $link => $linkname) {
					$isactive =($link == $page) ? 'active' : "";


					echo "<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$area}/{$link}\">{$linkname}<span class='fa fa-chevron-right'></span></a>";

				}
			?>
          </div>
  </div>
	</div><!--/span-->