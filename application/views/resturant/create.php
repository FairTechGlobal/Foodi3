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
															<li class="active">Create Profile</li>
														</ol>
											</div>	
					<div class="forms-main">
						<h2 class="inner-tittle">Create Profile</h2>
							<div class="graph-form">
								<div class="validation-form">
								<!---->
								<form>
									<div class="vali-form">
										<div class="col-md-6 form-group1">
											<label class="control-label">Company Name</label>
											<input type="text" placeholder="Company Name" required="">
										</div>
										<div class="col-md-6 form-group1 form-last">
											<label class="control-label">Begun</label>
											<input type="text" placeholder="Comapany Inception" required="">
										</div>
										<div class="clearfix"> </div>
										<div class="col-md-12 form-group1 group-mail">
											<label class="control-label">Email</label>
											<input type="text" placeholder="Email" required="">
										</div>
										<div class="clearfix"> </div>
										<div class="col-md-12 form-group1 group-mail">
											<label class="control-label">Url</label>
											<input type="text" placeholder="Current Website Url" required="">
										</div>
										<div class="clearfix"> </div>
											<div class="col-md-12 form-group2 group-mail">
												<label class="control-label">Resturant Menu Language</label>
													<select>
														<option value="">English</option>
														<option value="">Japanese</option>
														<option value="">Russian</option>
														<option value="">Arabic</option>
														<option value="">Spanish</option>
													</select>
											</div>
											<div class="clearfix"> </div>
											<div class="col-md-12 form-group1 ">
												<label class="control-label">Your Profile</label>
												<textarea placeholder="Your Comment..." required="">Your Profile.....</textarea>
											</div>
											<div class="clearfix"> </div>
											<div class="vali-form">
												<div class="col-md-6 form-group1">
													<label class="control-label">Phone Number</label>
														<input type="text" placeholder="Phone Number" required="">
												</div>
												<div class="col-md-6 form-group1 form-last">
													<label class="control-label">Mobile Number</label>
														<input type="text" placeholder="Mobile Number" required="">
												</div>
											<div class="clearfix"> </div>

																					  
											<div class="col-md-12 form-group button-2">
												<button type="submit" class="btn btn-primary btn-block">Submit</button>
											</div>
											<div class="clearfix"> </div>
									</div>
								</form>
								</div>
							</div>
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