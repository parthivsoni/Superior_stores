<?php 
require('top.php')
?>


<div class="container">
    <div class="col-xs-12">
        <div class="address__details">
            <div class="address__detail">
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        	<div class="col-xs-6">
								<div class="circle">
									<i class="fa fa-user" style="font-size:230px"></i>
								</div>
							</div>
							<div class="col-xs-6">
                                <div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
								<form id="login-form" method="post" action="login_submit_for_cart.php">
								<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="login_email" id="login_email" placeholder="E-mail" style="width:100%" required>
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="login_password" id="login_password" placeholder="Password" style="width:100%" required>
										</div>
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn">Login</button>
									</div>
								</form>
								<div class="form-output login_msg"><br>
									<label class="field_error">Please enter correct login details</label>
								</div>
                            </div><br><br>
                    </div>
                </div> 
            </div>
        </div>
    </div> 
</div><br><br>

<style>
    .address__details {
      background: #f5f5f5 none repeat scroll 0 0;
      flex-basis: calc(100% - 110px);
      padding: 32.5px 42px 32.5px 42px;
  }
  .address__detail {
      background: #ffffff none repeat scroll 0 0;
      flex-basis: calc(100% - 110px);
	  padding-left: 125px;
	  padding-right: 125px;
	  padding-top: 42px;
	  padding-bottom: 100px;
  }

  .circle {
  	  height: 325px;
  	  width: 325px;
  	  background-color: #ddd;
  	  border-radius: 325%;
	  padding-left: 80px;
	  padding-right: 80px;
	  padding-top: 40px;
	  padding-bottom: 40px;
  }
  .field_error {
	color : red;
  }
  
</style>

<?php require('footer.php')?>