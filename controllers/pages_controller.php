<?php
  class PagesController {
	  
    
    public function index() {
    
	//echo 'Project Created successfully';	  
	 //  require_once('views/pages/index.php');
    }
	
   public function home() {
          
           session_unset();
	  require_once('views/pages/home.php');
    }
	
	

    public function error() {
      require_once('views/pages/error.php');
    }

    
    public function createform()
    {
         
        if(isset($_POST) && !empty($_POST))
        {
            $proj_name = $_POST['proj_name'];
            
            if(!empty($_POST['proj_name']))
            {
              $project_exist = Project::findByattr($proj_name);
              
              if($project_exist)
              {
                  $_SESSION['success']=2;
                   require_once('views/pages/home.php');
              }
              else
              {
              $project = Project::insert($proj_name);
                              
                if($project==true)
                {    $_SESSION['success']=1;
                 require_once('views/pages/home.php');
                }
                else{
                     $_SESSION['success']=0;
                 require_once('views/pages/home.php');
                }
              }     
            }
        }
        else
        {
             $_SESSION['success'] = "Nodata";
              require_once('views/pages/home.php');
        }
        
       
    }
    
    public function createstatus()
    {
        
        $projects = Project::all();
       
        require_once('views/pages/status.php');
    }
    
    
    public function savestatus()
    {
        $projects = Project::all();
        $pr_id = $_POST['project_list'];
        $dateofbug = $_POST['datepicker'];
        $bugs = $_POST['bugs'];
      
        $bugsave = Project::insertBugs($pr_id, $dateofbug, $bugs);
        
        if($bugsave)
            echo '<p style="color:green"><strong>Saved successfully</strong></p>';
        
        require_once('views/pages/status.php');
    }
    
    public function reportdata()
    {
        
        require_once('views/pages/reportinput.php');
    }
	

	
  }
?>