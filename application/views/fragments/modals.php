<style>
	.modal-body .fa {
		margin-right: 10px;
		font-size: 1.5rem;
	}
	.modal-body .fa-google {
		color: red;
	}
	.modal-body .form-group {
		width: 100%;
	}
	.modal-body .form-group input:not([type=submit]) {
		height: 44px;
		padding: 10px 12px;
		width: 100%;
		font-size: 16px;
		color: #29303b;
		background-color: #fff;
		background-image: none;
		border-radius: 2px;
		box-shadow: none;
		border: 1px solid #317036;
	}

	.modal-footer {
		display: block;
	}
	.modal-footer p {
		width: 100%;
		text-align: center;
	}
</style>



<!-- jquery function for signup -->
<script type="text/javascript">

function signup() {

	// loading starts
	let submit_button = document.getElementById('submit_button');
	let buttonText = document.getElementById('buttonText');
	let loader = document.getElementById('loader');

	buttonText.textContent = 'Loading...Please Wait';
	submit_button.disabled = true;
	loader.style.display = 'inline';

	let fullname = jQuery('#fullname').val();
	let email = jQuery('#email').val();
	let password = jQuery('#password').val();
	let subscription = jQuery('#subscription').val();

	jQuery.post('<?php echo base_url(); ?>app/signup_action', {
		fullname: fullname,
		email: email,
		password: password,
		subscription: subscription
	},
	function(data){
			// list.innerHTML = data;
			// loading ends
			buttonText.textContent = 'Sign up';
			submit_button.disabled = false;
			loader.style.display = 'none';
			jQuery('#result').html(data);
	});

}

function toggleSubscription() {

	let subscription = document.getElementById("subscription");

	if(subscription.checked == true) {
		subscription.value = "yes";
	} else {
		subscription.value = "no";
	}

}

</script>

<style type="text/css">
.error{
	color: red;
}
.success{
	color: green;
}
</style>

<!-- LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Log in to Your Codec Account</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <div class="modal-body">
      <button class="btn btn-lg btn-block btn-primary text-left"><i class="fa fa-facebook"></i>
       <strong>Continue with Facebook</strong>
      </button>
      <button class="btn btn-lg btn-block btn-light text-left">
       <i class="fa fa-google"></i>
       <strong>Continue with Google</strong>
      </button>
      <form action="" method="post" id="modalloginform" class="mt-1">
       <div class="form-group">
        <input type="email" name="modalemail" id="modalemail" placeholder="Email">
       </div>
       <div class="form-group">
        <input type="password" name="modalpassword" id="modalpassword" placeholder="Password">
       </div>
       <input type="submit" type="button" class="mt-2 btn btn-lg btn-block btn-danger" name="modalsubmit"
        id="modalsubmit" value="Log In">
      </form>
     </div>
     <div class="modal-footer">
      <p>or <a href="#" data-target="#forgotModal" data-toggle="modal" data-dismiss="modal"> Forgot Password</a></p>
      <p class="mt-5">Don't have an account? <a href="#" data-target="#signupModal" data-toggle="modal"
        data-dismiss="modal"> Sign up</a></p>
     </div>
    </div>
   </div>
  </div>
  <!-- SIGNUP Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
	 aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Become a Codec Instructor!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <div class="modal-body">

      <form method="post" id="signupform" class="mt-1"> 

       <div class="form-group">
        <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quod amet sint odio
         voluptates deleniti!
        </p>
			 </div>

			 <ul id="result"></ul>
			 
			

       <div class="form-group">
        <input type="text" name="fullname" id="fullname" placeholder="Full Name">
			 </div>
			 
       <div class="form-group">
        <input type="email" name="email" id="email" placeholder="Email">
			 </div>
			 
       <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Password">
			 </div>
			 
       <div class="form-check">

				<input type="checkbox" name="subscription" class="form-check-input" id="subscription" onclick="toggleSubscription()">

        <label for="signup-check" class="text-left form-check-label">
         I want to get the most out of my experience, by receiving emails with insider tips, motivation, special
         updates and promotions reserved for instructors.
        </label>
			 </div>
			 
       <div class="form-group">
				<!-- <input type="button" class="mt-2 btn btn-lg btn-block btn-danger" name="submit_button" id="submit_button" value="Sign Up" onclick="signup()"> -->
				
				<button type="button" class="mt-2 btn btn-lg btn-block btn-danger" name="submit_button" id="submit_button" onclick="signup()">

					<span id="loader" style="display:none;">
						<img src="<?php echo base_url(); ?>assets/loader.gif" style="width: 30px; height: 30px;" />
					</span>

					<span id="buttonText">Sign Up</span>
				</button>

			 </div>
			 
			</form>
			
      </form>
      <div class="modal-footer text-center">
       <small>By signing up, you agree to our
        <a href="#"> Terms of Use</a> and
        <a href="#"> Privacy Policy.</a>
       </small>
       <p class="mt-2">Already have a account? <a href="#" class="nav-link" data-target="#loginModal"
         data-toggle="modal" data-dismiss="modal">Login</a></p>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- FORGOT Modal -->
  <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <div class="modal-body">
      <form action="" method="post" id="modalforgot" class="mt-1">

       <div class="form-group">
        <input type="email" name="modalforgot-email" id="modalforgot-email" placeholder="Email">
       </div>

       <div class="form-group forgot-footer">
        <input type="submit" type="button" class="mt-2 btn btn-lg btn-danger" name="modalforgot-submit"
         id="modalforgot-submit" value="Reset Password">
        <span>or <a href="#" data-target="#loginModal" data-toggle="modal" data-dismiss="modal">Log In</a></span>
       </div>

      </form>

     </div>

    </div>
   </div>
  </div>
