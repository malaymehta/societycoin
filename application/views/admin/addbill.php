<?php $this->load->view('admin/header'); ?>
<script type="text/javascript">

function validateform()
{



	var bill_name=jQuery("#bill_name").val(); 
	
	
	
var error='';
if(bill_name=='')
  {
	error+="* Please select Socity Admin";
  	$("#bill_name").addClass('inp-form-error');
	 }else
	   {
   	$("#bill_name").removeClass('inp-form-error');
	   }
	  
	   
	   if(error!='')
	{
	//	alert(error);
		return false;
	}
	return true; 
}
</script>

<div class="clear"></div>
<div id="content-outer">
  <!-- start content -->
  <div id="content">
    <!--  start page-heading -->
    <div id="page-heading">
      <h1>Create Bill Head</h1>
    </div>
    <!-- end page-heading -->

    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
      <tr>
        <th rowspan="3" class="sized"><img src="<?php echo AdminThemeUrl; ?>images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
        <th class="topleft"></th>
        <td id="tbl-border-top">&nbsp;</td>
        <th class="topright"></th>
        <th rowspan="3" class="sized"><img src="<?php echo AdminThemeUrl; ?>images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
      </tr>
      <tr>
        <td id="tbl-border-left"></td>
        <td><!--  start content-table-inner ...................................................................... START -->
          <form method="post" id="addnewsocity" name="addnewsocity" onsubmit="return validateform()"  action="<?php echo base_url();?>admin/master/newbill" >
            <table id="id-form" class="table table-bordered">
              <thead>
               
                <tr>
                  <th>Bill Name</th>
                  <td>
                  <input type="text" id="bill_name" name="bill_name" />
                 <input type="hidden" id="societyid" name="societyid" value="<?php echo $_GET['said']; ?>" />
                 <input type="hidden" id="chargeid" name="chargeid" value="<?php echo $_GET['chargeid']?>" />
                    
                    </td>
                </tr>
                
                <tr>
                  <th> </th> <td><input type="submit" class="form-submit"  value="Add New User" /><input type="reset" value="Reset" class="form-reset" /></td>
                    <input type="hidden" id="status" name="status" value="1" />
                                     
                </tr>
              </thead>
            </table>
          </form>
          <!--  end content-table-inner ............................................END  --></td>
        <td id="tbl-border-right"></td>
      </tr>
      <tr>
        <th class="sized bottomleft"></th>
        <td id="tbl-border-bottom">&nbsp;</td>
        <th class="sized bottomright"></th>
      </tr>
    </table>
    <div class="clear">&nbsp;</div>
  </div>
  <!--  end content -->
  <div class="clear">&nbsp;</div>
</div>
<div class="clear">&nbsp;</div>
<?php $this->load->view('admin/footer'); ?>
