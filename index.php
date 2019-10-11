<!doctype html>
<html>
  <?php include("View/header.php"); ?>

      <div class="row main">
        <div class="col-3"></div>
        <div class="col-6">
          <div class="row blank">
            <div class="col-3"></div>
            <div class="col-6 text-center" id="signinForm">
              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <h1>Sign In!</h1>
                <hr>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="form-group col-10">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="col-1"></div>
                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="form-group col-10">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password">
                  </div>
                  <div class="col-1"></div>
                </div>
                <div class="row" style="min-height:10px; padding-bottom: 20px;">
                  <div class="col-1"></div>
                    <div class="col-5 text-center">
                      <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
                    </div>
                  <div class="col-5 text-center">
                    <button type="submit" formaction="/Control/signupRedirect.php" class="btn btn-primary" style="width: 100%;">Sign Up</button>
                  </div>
                  <div class="col-1"></div>
                </div>
                <div class="row" style="min-height:10px; padding-bottom: 10px;">
                  <div class="col-1"></div>
                  <div class="col-10">
                    <button type="submit" formaction="../Control/guestRedirect.php" class="btn btn-primary" style="width: 100%;">Login as guest</button>
                  </div>
                  <div class="col-1"></div>
                </div>
                <div class="row">
                  <div class="col-3"></div>
                  <div class="col-6 text-center">
                    <?php include("Control/signin.php"); ?>
                  </div>
                  <div class="col-3"></div>
                  </div>
                </div>
                <div class="col-3"></div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>

  <?php include("View/footer.php"); ?>
</html>
