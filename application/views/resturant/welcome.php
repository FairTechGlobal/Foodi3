	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?>
	<?php include './basics/head.php';?>						
	<!--/login-->
									
<div class="error_page">
	<!--/login-top-->
													
		<div class="error-top">
			<h2 class="inner-tittle page">Foodi3</h2>
				<div class="login">
					<h3 class="inner-tittle t-inner">Login</h3>
						<div class="buttons login">
							<ul>
								<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
								<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
									<div class="clearfix"></div>
							</ul>
						</div>
							<form>
								<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
								<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="btn-lg"><a type="button" class="btn btn-block btn-success" href="<?php echo base_url('index.php/Resturant/dashboard');?>">Sign In</a></div>
								<div class="clearfix"></div>
									<div class="new">
										<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
										<p class="sign">Do not have an account ? <a href="<?php echo base_url('index.php/Resturant/signup');?>">Sign Up</a></p>
											<div class="clearfix"></div>
									</div>
							</form>
				</div>
		</div>	
<!--//login-top-->
</div>
<!--//login-->
<?php include './basics/footer.php';?>
<?php include './basics/scripts.php';?>