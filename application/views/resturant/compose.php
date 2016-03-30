<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php include './basics/head.php';?>
   <div class="page-container">
   <!--/content-inner-->
		<div class="left-content">
		   <div class="inner-content">
		  	 <?php include 'base/header.php';?>
		  	 <div class="outter-wp">
		  	 		<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Compose Mail</li>
														</ol>
											</div>	
										<!--/sub-heard-part-->		
									<!--/inbox-->
									 <div class="inbox-mail">
									<div class="col-md-4 compose">
										<form action="#" method="GET">
												<div class="input-group input-group-in">
													<input type="text" name="search" class="form-control2 input-search" placeholder="Search...">
													<span class="input-group-btn">
														<button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
													</span>
												</div><!-- Input Group -->
											</form>
											<h2>Compose</h2>
														<nav class="nav-sidebar">
														<ul class="nav tabs">
														  <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>Inbox <span>9</span><div class="clearfix"></div></a></li>
														  <li class=""><a href="#tab2" data-toggle="tab"><i class="fa fa-share-square-o"></i> Sent</a></li>
														  <li class=""><a href="#tab3" data-toggle="tab"><i class="fa fa-star-o"></i>Important</a></li> 
														  <li class=""><a href="#tab4" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Draft <span>6</span><div class="clearfix"></div></a></li>  
														  <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-trash-o"></i>Delete</a></li>                              
														</ul>
													</nav>
																<div class="content-box">
																	<ul>
																	<li><span>Folder</span></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Tasks</a></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Jobs</a></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Client</a></li>
																	</ul>
																</div>
															
														</div>
														<!-- tab content -->
														<div class="col-md-8 tab-content tab-content-in">
														  <div class="inbox-right">
																	
															<div class="mailbox-content">
																		<!--Compose New Message -->
																<div class="compose-mail-box">
																		<div class="compose-bg">
																			Compose New Message 
																		</div>
																		<div class="panel-body">
																				<div class="alert alert-info">
																					Please fill details to send a new message
																				</div>
																				<form class="com-mail">
																					<input type="text" class="form-control1 control3" placeholder="To :">
																					<input type="text" class="form-control1 control3" placeholder="Subject :">
																					
																					<textarea rows="6" class="form-control1 control2" placeholder="Message :"></textarea>

																					<input type="submit" value="Send Message"> 
																				</form>
																		</div>
																	</div>
																<!--//Compose New Message -->
														   </div>
														</div>
													</div>

													<div class="clearfix"> </div>
										   </div>
		  	 </div><!--End of outter-wp-->
		  	 <!--footer section start-->
			<footer>
				<p>&copy 2016 Foodi3 . All Rights Reserved | Design by <a href="https://fairtechglobal.com/" target="_blank">FluidTech Global</a></p>
			</footer>
										<!--footer section end-->
			<?php include 'base/sidebar.php';?>
			
			</div>
		</div>
	</div>

<?php include './basics/scripts.php';?>