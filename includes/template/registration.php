<div class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Registration Form</h2>
				<div class="form-row">
        <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Re-password</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Password">
  </div>
					<label for="full-name">First Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="First Name" required>
					<i class="fas fa-user"></i>
        </div>
        <div class="form-row">
					<label for="full-name">Middle Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Middle Name" required>
          <i class="fas fa-user"></i>
        </div>
        <div class="form-row">
					<label for="full-name">Last Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Last Name" required>
					<i class="fas fa-user"></i>
				</div>
				
        <div class="form-row">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
    <i class="fas fa-user"></i>
  </div>
  <div class="form-row">
  <label for="example-date-input" class="col-2 col-form-label">Date of Birth</label>
  <i class="fas fa-user"></i>
  <div class="col-10">
    <input class="form-control" type="date" value="1998-07-22" id="example-date-input">
  </div>
  <div class="form-row" >
      <label for="form-control" class="col-sm-12 col-form-label">Place of Birth</label>
      <i class="fas fa-user"></i>
      <div class="form-row">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Place of Birth">
      </div>
      <div>
  <label for="form-row">Gender</label>
    <input class="form-row" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> M
  </label>
</div>
<div class="form-row">
  <label class="form-check-label">
    <input class="form-row" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> F
  </label>
</div>
<div class="form-row">
    <label for="formGroupExampleInput">Parent/Guardian</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Parent/Guardian">
  </div>
  <div class="form-row">
    <label for="formGroupExampleInput">Contact Number</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Contact Number">
  </div>
  <div class="form-row">
    <label for="formGroupExampleInput">Civil Status</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Civil Status">
  </div>
  <select class="custom-select">
  <option selected>Year Level</option>
  <option value="1">1st year</option>
  <option value="2">2nd year</option>
  <option value="3">3rd year</option>
  <option value="4">4th year</option>
  
</select>
<select class="custom-select">
  <option selected>Course</option>
  <option value="1">Information Technology</option>
  <option value="2">Technology of Communication Management</option>
  <option value="3">Computer Engineering</option>
</select>
<div class="form-row">
    <label for="formGroupExampleInput">School Year</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="School Year">
  </div>
  <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>


<script>
    function validate(e){
        let el = document.getElementById('msg');
        if(e.value.length <= 5){
            el.innerHTML = "Username is too short";
        }else{
            el.innerHTML = "";
        }
    }
</script>


				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
                </div>
                <div class="form-row-last">
                
                        <a href="content.php" class="btn btn-primary form-control">
                            Go Back
                        </a>
                    </div>
                </div>
                
			</form>
		</div>
	</div>
</div>