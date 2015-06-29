<?php
  class PagesController {
	  
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
	  require_once('views/pages/home.php');
    }
	
	  
    public function index() {
    
			  
	  require_once('views/pages/index.php');
    }
	
	/*public function analytics()
	{
		$date_range = $this->getDatesFromRange('2015-01-01', '2015-01-03');
		
		$grpah_data = array();
		$xaxis_data = array();
		
		$xaxis_data['name'] = 'Dates';
		$xaxis_data['data'] = $date_range;
		
		
		$xaxis_data = json_encode($date_range);
		
		
	  


$result_array = array();
 $r=0;
while($row =  $result->fetch_assoc()) {
   
	$result_array[$r]['name'] = $row["name"];
	$result_array_id[$r]['id'] = $row["proj_id"];
	$r++;

}

for($rs=0; $rs<count($result_array); $rs++)
{
	foreach($date_range as $dt)
	{
	$sql2 = 'SELECT SUM(bugs) as bugs FROM `quality_data` where project_id = '.$result_array_id[$rs]['id'].' and date="'.$dt.'"';
//	echo $sql2;  exit;
	$result2=mysqli_query($con,$sql2);

	$result2_array = array();

	while($row2 =  $result2->fetch_assoc()) {
		
		if($row2['bugs']==null)
			$row2['bugs']=0;
		$result_array[$rs]['data'][] = intval($row2["bugs"]);
	}
	}
  }
$result_array = json_encode($result_array);
		
		 require_once('views/pages/analytics.php');
	}*/

    public function error() {
      require_once('views/pages/error.php');
    }
	
	
	

	
  }
?>