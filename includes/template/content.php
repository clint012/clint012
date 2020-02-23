<div class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Student Information System</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">ID Number</label>
					<input type="tel" name="your-email" id="your-email" class="input-text" placeholder="Your ID Number" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Login">
                </div>
                <div class="form-row-last">
                
                        <a href="registration.php" class="btn btn-primary form-control">
                            Sign up
                        </a>
                    </div>
                </div>
                
			</form>
		</div>
	</div>
</div>