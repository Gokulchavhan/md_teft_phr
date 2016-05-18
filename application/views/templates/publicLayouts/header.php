<?php
		$races =  array(
						"Select a Race",
						"African American",
						"Asian",
						"Caucasian",
						"Middle Eastern",
						"Native American/Alaskan",
						"Pacific Islander",
						"Other"
						);
		$counties =  array(
						"Select a County",
						"Adams",
						"Alcorn",
						"Amite",
						"Attala",
						"Benton",
						"Bolivar",
						"Calhoun"
						);
		$genders =  array(
						"Select a Gender",
						"Male",
						"Female",
						"Other"
						);
						
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
								'providers' => 'Find Services',
								'info' => 'Help & Info',
								'requests'  => 'Requests',
								'provideradmin'  => 'Account Profile'
								);
			}
			//AUTHORIZED PROVIDER ACCESS
			//---------------------------------------
			if ( $_COOKIE['user'] == 'authorizedprovider'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info',
								'requests'  => 'Requests',
								'provideradmin'  => 'Provider Admin'
								);		
			}
			//MS STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'msstaff') {
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info',
								'msadmin'  => 'Account Profile'
								);
			}
			//MAC STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'macstaff') {
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info',
								'msadmin'  => 'Account Profile'
								);
			}
			//DOM STAFF ACCESS
			//---------------------------------------
			else if ( $_COOKIE['user'] == 'domstaff') {
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info',
								'submissions'  => 'Submissions',
								'domadmin'  => 'Account Profile'
								);
			}
			//PUBLIC MEMBER ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicmember'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'carerecord'  => 'My Information',
								'info' => 'Help & Info',
								);		
			}
			//PUBLIC VISITOR ACCESS
			//---------------------------------------
			else  if ( $_COOKIE['user'] == 'publicvisitor'){
			
			//Top Level Navigation
			$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info'
								);		
			}
		}
		//PUBLIC VISITOR ACCESS
		//---------------------------------------
		else {
			
		//Top Level Navigation
		$mainlinks = array(
								'home' => 'Home',
								'providers' => 'Find Services',
								'info' => 'Help & Info'
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
          <a class="navbar-brand" href="<?php echo base_url()."index.php";?>">LTSS Maryland | <b>MyLTSS</b></a>
        </div>
      </div><!-- /.container -->
    </div><!-- /.navbar -->
