<?php
		
						
		//ACCESS CONTROLLED NAVIGATION
		//---------------------------------------		
		//---------------------------------------
		
		
		if (isset($_COOKIE['user'])){
			//PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'unauthorizedprovider'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info',
								//'requests'  => 'Requests',
								//'provideradmin'  => 'Account Profile'
								);
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'authorizedprovider'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info',
								//'requests'  => 'Requests',
								//'provideradmin'  => 'Provider Admin'
								);		
			}
			//MS STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info',
								//'msadmin'  => 'Account Profile'
								);
			}
			//MAC STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'macstaff') {
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info',
								//'msadmin'  => 'Account Profile'
								);
			}
			//DOM STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'domstaff') {
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info',
								//'submissions'  => 'Submissions',
								//'domadmin'  => 'Account Profile'
								);
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'carerecord'  => 'My Care Record',
								//'info' => 'Help & Info',
								);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info'
								);		
			}
		}
		//PUBLIC VISITOR ACCESS
		//---------------------------------------
		else {
			
		//Top Level Navigation
		$mainlinks = array(
								'home' => 'Home',
								//'providers' => 'Find Services',
								//'info' => 'Help & Info'
								);
		}
		
?>

<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation" id="main-header">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url()."index.php/home/index";?>">LTSS Maryland | <b>MyCare</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<?php 
			
			foreach ($mainlinks as $link => $linkname) {
			
				$isactive =($link == $area) ? 'class="active"' : "";
				$badge =($link == "submissions") ? '<span class="badge" style="background-color: #3276b1">3</span> ' : "";	
				echo "<li {$isactive}><a href=\"".base_url()."index.php/{$link}\">{$badge}{$linkname}</a></li>";
			
			}
			
			?>
          </ul>
			<ul class="nav navbar-nav navbar-right">
			<?php /*?><?php 
			
				$mainlinks = array(
						'signup' => 'Sign Up',
						'login' => 'Log In'
						);
				foreach ($mainlinks as $link => $linkname) {
					$isactive =($link == $page) ? 'class="active"' : "";
					echo "<li {$isactive}><a href=\"".base_url()."index.php/{$link}\">{$linkname}</a></li>";
				}
			?><?php */?>
            <?php if (isset($_COOKIE['user'])){
			
						if ( $_COOKIE['user'] == 'provider'){													
							$loginname = $_COOKIE['username'];
							echo 
								'<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, '.$loginname.' <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<!--<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>-->
										<li><a href="'.base_url().'index.php/site/logout'.'"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
									</ul>
								</li>'
							  ;
						} 
						else if ( $_COOKIE['user'] == 'publicmember' || 
								$_COOKIE['user'] == 'unauthorizedprovider' || 
								$_COOKIE['user'] == 'authorizedprovider' || 
								$_COOKIE['user'] == 'domstaff'){							
							$loginname = $_COOKIE['username'];
							echo 
								'<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, '.$loginname.' <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<!--<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>-->
										<li><a href="'.base_url().'index.php/carerecord'.'"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
										<li><a href="'.base_url().'index.php/site/logout'.'"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
									</ul>
								</li>'
							  ;
						}
						else if ( $_COOKIE['user'] == 'publicvisitor'){
							
							echo '<li><a href="#" data-toggle="modal" data-target="#createaccount">Register</a></li>';
							echo '<li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>';
						}
					} else {
						echo '<li><a href="#" data-toggle="modal" data-target="#createaccount">Register</a></li>';
						echo '<li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>';
					}
			?>
			</ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

<!-- Modal - Log In -->
<?php require 'application/views/pages/shared/_login_modal.php'; ?>