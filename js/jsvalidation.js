/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
   
//    $( "#datepicker" ).datepicker();
//    
//    $("#datepicker").on("change",function(){
//       
//        var selected = $(this).val();
//        alert(selected);
//    });
var curdate = new Date().toJSON().slice(0,10);
var date = $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy',

maxDate:curdate
}).val(curdate);
  
var datefrom = $('#datepickerfrom').datepicker({ dateFormat: 'dd-mm-yy'}).val();

var dateto = $('#datepickerto').datepicker({ dateFormat: 'dd-mm-yy',

maxDate: curdate
}).val();



});



function requireValidation(id)
{
    
    if(id=='')
        return false;
    else
        return true;
}

function checkNumber(num)
{
    if(isNaN(num)==true)
    {
        return false;
    }
    else
    {
        
        if(isInt(num))
        return true;
        else
         return false;
    }
}

function isInt(n){
        if(n%1===0 && n!=0)
         return true;
         else
         return false;
}

 function validateCRPForm() {
      
      var proj_name = $('#proj_name').val();
           
       if(requireValidation(proj_name)==false)
       {
          alert("Please enter a valid project name");
           return false;
       }
       else
       {
           return true;
       }
   }
   
   
    function validateStatusPForm()
    {
        var bugs = $('#bugs').val();
      
        var datepicker = $('#datepicker').val();
        var proj = $('#project_list option:selected').val();
        if(requireValidation(proj)==false)
       {
           alert("Please select a project");
           return false;
       }
       else if(requireValidation(datepicker)==false)
       {
           alert("Please enter a valid date");
           return false;
       }
        else if(requireValidation(bugs)==false)
       {
          alert("Bugs field cannot be empty");
           return false;
       } else if(checkNumber(bugs)==false)
       {
          alert("Please enter a valid number on bugs field");
           return false;
       }
       
             
       else 
       {
           return true;
       }
    }
    
    function validateReportForm()
    {
         var datepickerfrom = $('#datepickerfrom').val();
         var datepickerto = $('#datepickerto').val();
        if(requireValidation(datepickerfrom)==false)
       {
           alert("Please select a From Date");
           return false;
       }
         else if(requireValidation(datepickerto)==false)
       {
           alert("Please select a To Date");
           return false;
       }
       else if(datepickerto<=datepickerfrom)
         {
             alert("The To Date should be a date after from date");
             return false;
         }
         else
         {
             return true;
         }
        
    }