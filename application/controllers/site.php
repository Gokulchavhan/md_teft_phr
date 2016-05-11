<?php 

	class Site extends CI_Controller {
		
	public function index() {
		$this->login();
	}
		
	public function loadview($area="public", $page="login", $subpage="", $partial=""){
	
		
		$data['area'] = $area;
		$data['page'] = $page;
		$data['subpage'] = $subpage;
		$data['partial'] = $partial;
		$this->load->helper('url');
		$this->load->view("templates/master-layout.php", $data);
	}
		
	public function login($area="public", $page="login"){
		if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}
		$data['area'] = $area;
		$data['page'] = $page;
		$this->load->helper('url');
		$this->load->view("templates/publicLayouts/public-layout.php", $data);
	}
	
	
	public function attemptLogin(){
		
		if(isset($_POST['submit']))	{
			
			$username = $_POST['username'];
			
			if ($username == 'rosiered') {		
				setcookie('user', 'publicmember', time()+3600, '/');
				setcookie('username', 'Rosie Red', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98416818', time()+3600, '/');
			}
			else if ($username == 'gabrielgreen') {							
				setcookie('user', 'publicmember', time()+3600, '/');
				setcookie('username', 'Gabriel Green', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Male', time()+3600, '/');
				setcookie('suffix', 'Jr.', time()+3600, '/');
				setcookie('userid', '84918569', time()+3600, '/');
			} 
			else if ($username == 'burtonbrown') {		
				setcookie('user', 'domstaff', time()+3600, '/');
				setcookie('username', 'Burton Brown', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Male', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98547156', time()+3600, '/');
			}
			else if ($username == 'penelopepurple') {		
				setcookie('user', 'unauthorizedprovider', time()+3600, '/');
				setcookie('username', 'Penelope Purple', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '25847523', time()+3600, '/');
			}
			else if ($username == 'susanasilver') {		
				setcookie('user', 'authorizedprovider', time()+3600, '/');
				setcookie('username', 'Susana Silver', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '98547152', time()+3600, '/');
			}
			else if ($username == 'victoriaviolet') {		
				setcookie('user', 'authorizedprovider', time()+3600, '/');
				setcookie('username', 'Victoria Violet', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '36587415', time()+3600, '/');
			}
			else if ($username == 'tinateal') {		
				setcookie('user', 'msadmin', time()+3600, '/');
				setcookie('username', 'Tina Teal', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '99871547', time()+3600, '/');
			}
			else if ($username == 'benburgundy') {		
				setcookie('user', 'macadmin', time()+3600, '/');
				setcookie('username', 'Ben Burgundy', time()+3600, '/');
				setcookie('loginname', $username, time()+3600, '/');
				setcookie('gender', 'Female', time()+3600, '/');
				setcookie('suffix', ' ', time()+3600, '/');
				setcookie('userid', '58471589', time()+3600, '/');
			}
		} else {
				setcookie('user', 'publicvisitor', time()+36000000, '/');
				setcookie('username', 'unknown', time()+36000000, '/');
				setcookie('loginname', ' ', time()+3600, '/');
				setcookie('gender', ' ', time()+36000000, '/');
				setcookie('suffix', ' ', time()+36000000, '/');
				setcookie('userid', ' ', time()+36000000, '/');
		}
		
		$this->load->helper('url');
		$url = base_url().'index.php/home';
		header( "Location: $url" );
	}
	
	public function logout(){
		setcookie('user', 'publicvisitor', time()+36000000, '/');
		setcookie('username', 'unknown', time()+36000000, '/');
		setcookie('loginname', ' ', time()+3600, '/');
		setcookie('gender', ' ', time()+36000000, '/');
		setcookie('suffix', ' ', time()+36000000, '/');
		setcookie('userid', ' ', time()+36000000, '/');
						
		$this->load->helper('url');
		$url = base_url().'index.php';
		header( "Location: $url" );
	}


	public function registration($area="public", $page="registration"){
		if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
		{
			show_404();
		}

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

		$data['area'] = $area;
		$data['page'] = $page;
		$data['races'] = $races;
		$data['counties'] = $counties;
		$data['genders'] = $genders;
		$this->load->helper('url');
		$this->load->view("templates/publicLayouts/public-layout.php", $data);
	}


		public function repregistration($area="public", $page="representativeregistration"){
			if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
			{
				show_404();
			}

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

			$data['area'] = $area;
			$data['page'] = $page;
			$data['races'] = $races;
			$data['counties'] = $counties;
			$data['genders'] = $genders;
			$this->load->helper('url');
			$this->load->view("templates/publicLayouts/public-layout.php", $data);
		}


		public function usernamerecovery ($area="public", $page="usernamerecovery"){
			if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
			{
				show_404();
			}

			$data['area'] = $area;
			$data['page'] = $page;
			$this->load->helper('url');
			$this->load->view("templates/publicLayouts/public-layout.php", $data);
		}
		public function usernamerecoveryconfirmation ($area="public", $page="usernamerecoveryconfirmation"){
			if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
			{
				show_404();
			}

			$data['area'] = $area;
			$data['page'] = $page;
			$this->load->helper('url');
			$this->load->view("templates/publicLayouts/public-layout.php", $data);
		}

		public function passwordrecovery ($area="public", $page="passwordrecovery"){
			if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
			{
				show_404();
			}

			$data['area'] = $area;
			$data['page'] = $page;
			$this->load->helper('url');
			$this->load->view("templates/publicLayouts/public-layout.php", $data);
		}

		public function passwordrecoveryconfirmation ($area="public", $page="passwordrecoveryconfirmation"){
			if ( ! file_exists('application/areas/'.$area.'/'.$page.'.php'))
			{
				show_404();
			}

			$data['area'] = $area;
			$data['page'] = $page;
			$this->load->helper('url');
			$this->load->view("templates/publicLayouts/public-layout.php", $data);
		}


	}
