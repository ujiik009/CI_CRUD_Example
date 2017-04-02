
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>User_Controller/edit_user/<?=$data[0]['user_id']?>">
<fieldset>
 


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Full Name</label>  
  <div class="col-md-4">
  <input  name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="" value="<?=$data[0]['name_surname']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">User_Name</label>  
  <div class="col-md-4">
  <input  name="user_name" type="text" placeholder="User_Name" class="form-control input-md" required="" value="<?=$data[0]['user']?>">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="text" placeholder="Enter a password" class="form-control input-md" required="" value="<?=$data[0]['password']?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="" value="<?=$data[0]['Email']?>">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Phone</label>  
  <div class="col-md-4">
  <input id="contact" name="phone" type="text" placeholder="Phone number" class="form-control input-md" required="" value="<?=$data[0]['phone']?>">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" name="signup" class="btn btn-success">ตกลง</button>
  </div>
</div>

</fieldset>
</form>
