  	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?>
	<?php include './basics/head.php';?>						

  <div class="error_page">
		<!--/login-top-->										
		<div class="error-top up">
			<h2 class="inner-tittle page">Foodi3</h2>
				<div class="login">
					<h3 class="inner-tittle t-inner">Sign Up</h3>
						<form>
							<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
							<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
							<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
							<div class="submit"><input type="submit" onclick="myFunction()" value="Sign up" ></div>
							<div class="clearfix"></div>
							<div class="buttons">
								<ul>
									<li><a href="#" class="hvr-sweep-to-right">Sign up</a></li>
									<li class="or"><h6>OR</h6></li>
									<li class="lost"><a href="#" class="hvr-sweep-to-left">Sign up</a> </li>
									<div class="clearfix"></div>
								</ul>
							</div>
							<div class="new">
								<p class="sign up">Do you have an account yet ? <a href="<?php echo base_url('index.php/Resturant/index');?>"> Login here.</a></p>
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