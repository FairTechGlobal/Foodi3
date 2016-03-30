	<body>

		<h3> Registration Form </h3>

		<br>

		<form role = "form" action = "" method = "POST">

			<div class = "form-group">

				<label for = "fname"> First Name: </label>
				<input type = "text" class = "form-control" id = "fname" name = "fname" required>  </input>

			</div>

			<br>

			<div class = "form-group">

				<label for = "mname"> Middle Name: </label>
				<input type = "text" class = "form-control" id = "mname" name = "mname" required>  </input>

			</div>

			<br>

			<div class = "form-group">

				<label for = "lname"> Last Name: </label>
				<input type = "text" class = "form-control" id = "lname" name = "lname" required>  </input>

			</div>

			<br>

			<div class = "form-group">

				<label for = "email"> Email Address: </label>
				<input type = "email" class = "form-control" id = "email" name = "email" required>  </input>

			</div>

			<br>

			<div class = "form-group">

				<label for = "pass"> Password: </label>
				<input type = "password" class = "form-control" id = "pass" name = "pass" required>  </input>

			</div>

			<br>

			<div class = "form-group">

				<label for = "conf"> Confirm Password: </label>
				<input type = "password" class = "form-control" id = "conf" name = "conf" required>  </input>

			</div>

			<br>

			<button type = "submit" class = "btn btn-primary"> Register </button>

			<br>

		</form>

		<br>  </br>

		<h3> Work Details </h3>

		<br>

		<ul class = "nav nav-tabs">

			<li class = "active"> <a data-toggle = "tab" href = "#background"> Background </a> </li>
			<li> <a data-toggle = "tab" href = "#education"> Education </a> </li>
			<li> <a data-toggle = "tab" href = "#experience"> Work Experience </a> </li>

		</ul>

		<div class = "tab-content">

			<div id = "background" class = "tab-pane fade in active">

				<div class = "form-group inline">

					<label for = "dob"> Date of Birth: </label>
					<input type = "text" class = "form-control" id = "dob" name = "dob" required>  </input>

				</div>

				<br>

				<div class = "form-group inline">

					<label for = "nat"> Nationality: </label>
					<input type = "text" class = "form-control" id = "nat" name = "nat" required>  </input>

				</div>

				<br>

				<button class = "btn btn-primary"> Next </button>

				<br> </br>

			</div>

			<div id = "education" class = "tab-pane fade">

				<h5> Education </h5>

				<h6> Primary </h6>

					<div class = "form-group inline">

						<label for = "psch"> School: </label>
						<input type = "text" class = "form-control" id = "psch" name = "psch" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "pperiod"> Period: </label>
						<input type = "text" class = "form-control" id = "pperiod" name = "pperiod" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "pqual"> Qualification: </label>
						<input type = "text" class = "form-control" id = "pqual" name = "pqual" required>  </input>

					</div>

					<br>

					<button class = "btn btn-primary"> Add </button>

					<br> </br>

				<h6> Secondary </h6>

					<div class = "form-group inline">

						<label for = "ssch"> School: </label>
						<input type = "text" class = "form-control" id = "ssch" name = "ssch" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "speriod"> Period: </label>
						<input type = "text" class = "form-control" id = "speriod" name = "speriod" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "squal"> Qualification: </label>
						<input type = "text" class = "form-control" id = "squal" name = "squal" required>  </input>

					</div>

					<br>

					<button class = "btn btn-primary"> Add </button>

					<br> </br>

				<h6> Tertiary </h6>

					<div class = "form-group inline">

						<label for = "tsch"> School: </label>
						<input type = "text" class = "form-control" id = "tsch" name = "tsch" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "tperiod"> Period: </label>
						<input type = "text" class = "form-control" id = "tperiod" name = "tperiod" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "tqual"> Qualification: </label>
						<input type = "text" class = "form-control" id = "tqual" name = "tqual" required>  </input>

					</div>

					<br>

					<button class = "btn btn-primary"> Add </button>

					<br> </br>

				<h6> Certifications </h6>

					<div class = "form-group inline">

						<label for = "csch"> Body/School: </label>
						<input type = "text" class = "form-control" id = "csch" name = "csch" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "cname"> Name: </label>
						<input type = "text" class = "form-control" id = "cname" name = "cname" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "cperiod"> Period: </label>
						<input type = "text" class = "form-control" id = "cperiod" name = "cperiod" required>  </input>

					</div>

					<br>

					<div class = "form-group inline">

						<label for = "cqual"> Qualification: </label>
						<input type = "text" class = "form-control" id = "cqual" name = "cqual" required>  </input>

					</div>

					<br>

					<button class = "btn btn-primary"> Add </button>

					<br> </br>

			</div>

			<div id = "experience" class = "tab-pane fade">

				<div class = "form-group inline">

					<label for = "comp"> Restaurant/Company: </label>
					<input type = "text" class = "form-control" id = "comp" name = "comp" required>  </input>

				</div>

				<br>

				<div class = "form-group inline">

					<label for = "eperiod"> Period: </label>
					<input type = "text" class = "form-control" id = "eperiod" name = "eperiod" required>  </input>

				</div>

				<br>

				<div class = "form-group inline">

					<label for = "job"> Job Type: </label>
					<input type = "text" class = "form-control" id = "job" name = "job" required>  </input>

				</div>

				<br>

				<div class = "form-group inline">

					<label for = "desc"> Description: </label>
					<input type = "text" class = "form-control" id = "desc" name = "desc" required>  </input>

				</div>

				<br>

				<button class = "btn btn-primary"> Add </button>

				<br> </br>

			</div>

		</div>

	</body>