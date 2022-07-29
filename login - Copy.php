
<div class="form-popup" id="myForm">
<center>
  <form action="login_action.php" method="post" class="form-container">
   <button type="button" class="btn-cancel" onclick="closeForm()">X</button>
    <h1>Login</h1>
	<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
        <div class="form-group">
         <span class="input-icon"><i class="fa fa-user"></i></span>
		   <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Enter email">
           </div>
           <div class="form-group">
       <span class="input-icon"><i class="fa fa-lock"></i></span>
      <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
      </div>
     <input type="checkbox">
        <label>Remamber me</label>


    <center> <button type="submit" name="submit" class="btn btn-success float-end"><span class="fa fa-check"></span> Login</button></center>
   
  </form>
  </center>
</div>	