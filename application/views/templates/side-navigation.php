  <div class="col-md-3" id="sidebar" role="navigation">
          <div class="list-group">
		  <?php
			  foreach ($sidenavlinks as $link => $linkname) {
					$isactive =($link == $page) ? 'active' : "";
					
					echo "<a class=\"list-group-item {$isactive}\" href=\"".base_url()."index.php/{$area}/{$link}\">{$addstaricon} {$linkname}<span class='fa fa-chevron-right'></span></a>";
				
				}
			?>
          </div>
        </div><!--/span-->