<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php include './basics/head.php';?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
	<?php include 'base/header.php';?>
						<div class="outter-wp">
								<!--custom-widgets-->
								<div class="custom-widgets">
									<div class="row-one">
										<div class="col-md-3 widget">
											<div class="stats-left ">
												<h5>Today</h5>
												<h4>Applicants</h4>
											</div>
										<div class="stats-right">
											<label>90</label>
										</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Visitors</h4>
															</div>
															<div class="stats-right">
																<label> 85</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Month</h5>
																<h4>Users</h4>
															</div>
															<div class="stats-right">
																<label>51</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
																<h5>Yearly</h5>
																<h4>Applicants</h4>
															</div>
															<div class="stats-right">
																<label>30</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<!--/candile-->
													<div class="candile"> 
															<div class="candile-inner">
																	<h3 class="sub-tittle">Number of Applications Chart </h3>
															    <div id="center"><div id="fig">
																<script type="text/javascript+protovis">

															/* Parse dates. */
															var dateFormat = pv.Format.date("%d-%b-%y");
															vix.forEach(function(d) d.date = dateFormat.parse(d.date));

															/* Scales. */
															var w =1220,
																h = 300,
																x = pv.Scale.linear(vix, function(d) d.date).range(0, w),
																y = pv.Scale.linear(vix, function(d) d.low, function(d) d.high).range(0, h).nice();

															var vis = new pv.Panel()
																.width(w)
																.height(h)
																.margin(10)
																.left(30);

															/* Dates. */
															vis.add(pv.Rule)
																 .data(x.ticks())
																 .left(x)
																 .strokeStyle("#eee")
															   .anchor("bottom").add(pv.Label)
																 .text(x.tickFormat);

															/* Prices. */
															vis.add(pv.Rule)
																 .data(y.ticks(7))
																 .bottom(y)
																 .left(-10)
																 .right(-10)
																 .strokeStyle(function(d) d % 10 ? "#ddd" : "#ddd")
															   .anchor("left").add(pv.Label)
																 .textStyle(function(d) d % 10 ? "#999" : "#ddd")
																 .text(y.tickFormat);

															/* Candlestick. */
															vis.add(pv.Rule)
																.data(vix)
																.left(function(d) x(d.date))
																.bottom(function(d) y(Math.min(d.high, d.low)))
																.height(function(d) Math.abs(y(d.high) - y(d.low)))
																.strokeStyle(function(d) d.open < d.close ? "#052963" : "#00C6D7")
															  .add(pv.Rule)
																.bottom(function(d) y(Math.min(d.open, d.close)))
																.height(function(d) Math.abs(y(d.open) - y(d.close)))
																.lineWidth(10);

															vis.render();

																</script>
																	<script type="text/javascript" src="<?php echo base_url('./assets/js/protovis-d3.2.js')?>"></script>
																	<script type="text/javascript" src="<?php echo base_url('./assets/js/vix.js')?>"></script>

															</div>
														</div>
																				
															</div>
															
														</div>
													<!--/candile-->
																	<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.html">Home</a></li>
											<li class="active">Tables</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
											<h2 class="inner-tittle">Applicants CV Summary</h2>
												<div class="graph">
														<div class="tables">
																
															
																<table class="table table-hover"> 
																	<thead> 
																		<tr> 
																			<th>#</th> 
																			<th>Location</th> 
																			<th>Expertise</th> 
																			<th>User Name</th> 
																			<th>Action</th>
																		</tr> 
																	</thead> 
																	<tbody> 
																			<tr> 
																				<th scope="row">1</th> 
																				<td>Nairobi</td> 
																				<td>Italian Chef</td> 
																				<td>@mdo</td>
																				<td class="btn btn-info" style="color: black">View More</td> 
																			</tr> 
																			<tr> 
																				<th scope="row">2</th> 
																				<td>Kisumu</td> 
																				<td>Sushi Chef</td> 
																				<td>@fat</td>
																				<td class="btn btn-info" style="color: black">View More</td> 
																			</tr> 
																			<tr> 
																				<th scope="row">3</th> 
																				<td>Mombasa</td> 
																				<td>BBQ Palatte</td> 
																				<td>@twitter</td> 
																				<td class="btn btn-info" style="color: black">View More</td>
																			</tr> 
																		</tbody> 
																	</table>
															</div>
												
										        </div>
													<h3 class="inner-tittle two">Pending Review</h3>
													<div class="graph">
															<div class="tables">
															
																<table class="table table-hover"> 
																	<thead> 
																		<tr> 
																			<th>#</th> 
																			<th>Location</th> 
																			<th>Expertise</th> 
																			<th>User Name</th> 
																			<th>Action</th>
																		</tr> 
																	</thead> 
																	<tbody> 
																			<tr> 
																				<th scope="row">1</th> 
																				<td>Nairobi</td> 
																				<td>Italian Chef</td> 
																				<td>@mdo</td>
																				<td class="btn btn-info" style="color: black">View More</td> 
																			</tr> 
																			<tr> 
																				<th scope="row">2</th> 
																				<td>Kisumu</td> 
																				<td>Sushi Chef</td> 
																				<td>@fat</td>
																				<td class="btn btn-info" style="color: black">View More</td> 
																			</tr> 
																			<tr> 
																				<th scope="row">3</th> 
																				<td>Mombasa</td> 
																				<td>BBQ Palatte</td> 
																				<td>@twitter</td> 
																				<td class="btn btn-info" style="color: black">View More</td>
																			</tr> 
																		</tbody> 
																	</table>
															</div>
												
													</div>

										</div>
										<!--//graph-visual-->
									</div>
										<!--//outer-wp-->
									</div>
									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Foodi3 . All Rights Reserved | Design by <a href="https://fairtechglobal.com/" target="_blank">FluidTech Global</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
	<?php include 'base/sidebar.php';?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>

<?php include './basics/scripts.php';?>