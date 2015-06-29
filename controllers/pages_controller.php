<?php
  class PagesController {
	  
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
	  require_once('views/pages/home.php');
    }
	
	  
    public function index() {
    
		echo 'Project Created successfully';	  
	 //  require_once('views/pages/index.php');
    }
	
	

    public function error() {
      require_once('views/pages/error.php');
    }
	
	
	

	
  }
?>