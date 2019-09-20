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
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php include("Control/signin.php"); ?>

  <?php include("View/footer.php"); ?>
</html>
