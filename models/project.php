<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  class Project {
    
    public static function all() {
		
      $db = Db::getInstance();
      $sql = 'SELECT name, proj_id FROM `project`';
		$result=mysqli_query($db,$sql);


		$result_array = array();
		 $r=0;
		while($row =  $result->fetch_assoc()) {
		   
			$result_array[$r]['name'] = $row["name"];
			$result_array[$r]['id'] = $row["proj_id"];
			$r++;

		}
		
		return $result_array;

    }

    
    public static function insert($name)
    {
        
        $db = Db::getInstance();
        $sql = "INSERT INTO `test`.`project` (`proj_id`, `name`) VALUES (NULL, '$name')";
        $result=mysqli_query($db,$sql);
        
        if($result)
            return true;
        else
            return false;
        
    }
    public static function findByattr($name){
        $db = Db::getInstance();
        $sql = "select * from `test`.`project` where name='".$name."'";
        $result=mysqli_query($db,$sql);
      
        $result_count = mysqli_num_rows($result);
       
        if($result_count!=0)
            return true;
        else
            return false;
        
        
    }
    
    
     public static function insertBugs($pr_id, $dateofbug, $bugs)
    {
       //  echo $dateofbug; exit;
        
        $db = Db::getInstance();
        $sql = "INSERT INTO `test`.`quality_data` (`id`, `project_id`, `date`, `bugs`) VALUES (NULL, '$pr_id', '$dateofbug', '$bugs')";
        //echo $sql; exit;
        $result=mysqli_query($db,$sql);
        
        if($result)
            return true;
        else
            return false;
        
    }
    
    
  }
?>
