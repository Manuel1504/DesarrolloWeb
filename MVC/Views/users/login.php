
<div class="col-md-12" style="margin-top:2cm;">
<div class="col-md-2"></div>
<div class="col-md-8">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">
      Inicio de sesion
    </div>
    <div class="panel-body">
      <form action="<?php echo APP_URL."/users/login";?>" method="post">
        <P>
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username">
        </p>
        <P>
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password">
        </p>
        <P>
          <input type="submit" class="btn btn-success" value="Login">
        </p>
      </form>
    </div>
  </div>
</div>
<div class="col-md-2"></div>

</div>
