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
var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd',

minDate: curdate
}).val(curdate);
  
var datefrom = $('#datepickerfrom').datepicker({ dateFormat: 'yy-mm-dd'}).val();

var dateto = $('#datepickerto').datepicker({ dateFormat: 'yy-mm-dd',

maxDate: curdate
}).val();



});
function checkFirstVisit() {
  if(document.cookie.indexOf('mycookie')==-1) {
    // cookie doesn't exist, create it now
    document.cookie = 'mycookie=1';
  }
  else {
    // not first visit, so alert
  document.cookie = 'mycookie= -1';
  }
 }


function requireValidation(id)
{
    
    if(id=='')
        return false;
    else
        return true;
}

