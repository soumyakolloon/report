<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<form method="post" action="?controller=reports&action=index">
 <div class="formElement">
        <label>Select From Date</label>
        <input type="text" id="datepickerfrom" value="" name="datepickerfrom">
        
    </div>
    
     <div class="formElement">
        <label>Select To Date</label>
        <input type="text" id="datepickerto" value="" name="datepickerto">
        
    </div>
    
     <div class="formElement">
        <input type="submit" value="Generate Report" class="buttonClass">
    </div>
    
</form>