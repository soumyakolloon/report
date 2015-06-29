<?php
/**

controller to get analtics of test reports

Created by @Soumya

Date: 29/06/2015

*/
  class ReportsController {
	  
	  
	  
	/**
	** Function to plot graphs
	***/
	
    public function index() {
     
	 /**Get all projects from databse */
      $result_array =Report::all();
	 
	 foreach($result_array as $key=>$res)
	 {
		 $project[$key]['name'] = $res['name'];
		 $projects[$key]['id'] = $res['id'];
	 }
	
		
	$date_range = $this->getDatesFromRange('2015-01-01', '2015-01-03');
	
	  $xaxis_data = json_encode($date_range);
	  
	for($rs=0; $rs<count($project); $rs++)
	{
	foreach($date_range as $dt)
	{
		
		$bugs[$rs] = Report::find($projects[$rs]['id'],$dt);
		$project[$rs]['data'][] = intval($bugs[$rs][$projects[$rs]['id']]['bugs']);
	}
		
	
	
	}
	
  	
	$result_array = json_encode($project);
	
	
	
	  
      require_once('views/reports/index.php');
    }

    /* public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/reports/show.php');
    } */
	
	
	
		
	function getDatesFromRange($start, $end){
    $dates = array($start);
    while(end($dates) < $end){
        $dates[] = date('Y-m-d', strtotime(end($dates).' +1 day'));
    }
    return $dates;
	}
	
	
	
	
  }
?>