<?php include "include/session.php";?>
<?php include"header.php"?>
<?php 
include "include/config.php";
?>
        	<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Forms</a>
					</li>
				</ul>
			</div>
			
			<!--/row-->

		  <!--/row-->
          
<form class="form-horizontal" action=""> 
	
				
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Billing</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              <th width="1%">Sr No.</th>
								  <th width="5%">Job No.</th>
								
								  <th width="10%">invoice No.</th>
                                  <th width="10%">Bill Type.</th>
                                  <th width="10%">B/E or S/B No./IP/PSC</th>
                                  <th width="19%">MHWB No.HAWB No.</th>
								 
								  <th width="25%">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
 
  <tr height="25" >
  <?php
  
	$s="SELECT * FROM bill where billto='".$_GET['id']."' ORDER BY id ASC"; 
	$myquery=mysql_query($s); 
	$count=mysql_num_rows($myquery);
	?>
<?php
$i=1; 
while($new_fetch=mysql_fetch_array($myquery)){ ?>
       
      <td align="center" width="12"> <?php echo $i; ?></td>
    <td align="center" width="100"><a href="examples/p.php?id=<?php echo $new_fetch['job_no']; ?>"><?php echo $new_fetch['job_no']; ?></a></td>
    <td align="center" width="100"><?php echo $new_fetch['invoiceno']; ?></td>
    <td align="center" width="92"> <?php echo $new_fetch['bill_type']; ?></td>
    <td align="center" width="157"><?php echo $new_fetch['bill_no']; ?></td>
     <td align="center" width="157"><?php echo $new_fetch['masterawb']; ?></td>
      <td align="center" width="157">  <a href="billing_edit.php?id=<?php echo $new_fetch['id']; ?>"
                                 class="btn " style="margin:5px;">Edit</a>
								<a href="download.php?id=<?php echo $new_fetch['id']; ?>"  class="btn btn-primary" style="margin:5px;">Save</a>
                                <a 
                                
                                <?php 
								if($new_fetch['bill_type']=='Forwarding')
								{
								?>
                                
                                href="download2.php?id=<?php echo $new_fetch['id']; ?>"
                                
                                <?php } else { ?>  href="download3.php?id=<?php echo $new_fetch['id']; ?>" <?php } ?>  target="_blank" class="btn btn-warning" style="margin:5px;">View</a>
                                <a href="downloadr.php?id=<?php echo $new_fetch['id']; ?>"  class="btn btn-primary" style="margin:5px; background:#930;">Rsave</a>
                                <a href="downloadr2.php?id=<?php echo $new_fetch['id']; ?>"  class="btn btn-primary" style="margin:5px; background:#930;">NRsave</a>  <a href="delete.php?id=<?php echo $new_fetch['id']; ?>&page=p"  onClick=" return confirm('Are You sure want to delete');" class="btn btn-primary" style="margin:5px; background:#930;">Delete</a></td>
  </tr>

    <?php $i++;} ?>
</table>
</form>
        
         
         </div>
    
			  <!-- content ends --><!--/#content.span10--><!--/fluid-row-->
				
	<hr><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	
		
</body>
</html>
