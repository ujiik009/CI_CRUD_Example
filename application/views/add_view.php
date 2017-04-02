<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>User_Controller/add_user">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Full Name</label>  
  <div class="col-md-4">
  <input  name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">User_Name</label>  
  <div class="col-md-4">
  <input  name="user_name" type="text" placeholder="User_Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Phone</label>  
  <div class="col-md-4">
  <input id="contact" name="phone" type="text" placeholder="Phone number" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" name="signup" class="btn btn-success">create user</button>
  </div>
</div>

</fieldset>
</form>
