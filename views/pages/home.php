<form method="post" action="?controller=pages&action=createform" onsubmit="return validateCRPForm();" id="create_projct_form" class="form_class">
    <div class="confirm">
    <?php if(isset($_SESSION['success']) && $_SESSION['success'] == 1)  { ?>
    <label>Project Saved Successfully</label>
    <?php } else if(isset($_SESSION['success']) && $_SESSION['success']==0){ ?>
    <label>Error occured while saving the project</label>
    <?php } else if(isset($_SESSION['success']) && $_SESSION['success']=='Nodata'){ ?>
    <label>Please enter valid data</label>
    
    <?php } else if(isset($_SESSION['success']) && $_SESSION['success']==2){ ?>
    <label>Project already exist</label>
    <?php } ?>
    </div>
    <div id="formElement" class="formElement">
    <label>Enter Project Name</label>
    <input type="text" value="" id="proj_name"  name="proj_name">
   
    </div>
       
        
    <div id="formElement" class="formElement">
    <input type="submit" value="Submit" class="buttonClass" \>
    </div>
    
</form>

<script>
    
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
  
    
   
   
         
      
       
           
    
    
    
</script>