<form method="post" action="?controller=pages&action=createform" onsubmit="return validateCRPForm();" id="create_projct_form" >
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
    
    <table>
        <tr>
            <td><label>Project Name: </label>
            <td> <input type="text" value="" id="proj_name"  name="proj_name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" class="buttonClass" \></td>
        </tr>
       
      
    
   </table>
</form>

