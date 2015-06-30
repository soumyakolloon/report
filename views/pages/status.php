<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1>Bugs entry</h1>

<form method="post" action="?controller=pages&action=savestatus">
    <div class="formElement" class="formElement">
        <label>Select Project</label>
        <select id="project_list" name="project_list">
         <?php foreach($projects as $prj) { ?>
            
            <option value="<?php echo $prj['id']; ?>"><?php echo $prj['name']; ?></option>
            
         <?php } ?>           
            
        </select>
               
    </div>
    
       
    <div class="formElement">
        <label>Select Date</label>
        <input type="text" id="datepicker" value="" name="datepicker">
        
    </div>
    
    <div class="formElement"> 
        <label>No. of Bugs </label>
        <input type="text" id="bugs" value="" name="bugs">
    </div>
    
    <div class="formElement">
        <input type="submit" value="Submit" class="buttonClass">
    </div>
        
    
</form>