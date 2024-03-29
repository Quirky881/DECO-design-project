<!doctype html>
<html>
  <?php include("../View/header.php"); ?>

      <div class="row main">
        <div class="col-3"></div>
        <div class="col-6">
          <div class="row blank">
            <div class="col-3"></div>
            <div class="col-6 text-center" id="signinForm">
              <form action="../Control/signup.php" method="post">
                <h1>Sign Up!</h1>
                <hr>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="form-group col-10">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                  </div>
                  <div class="col-1"></div>
                </div>
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
                <div class="row">
                  <div class="col-1"></div>
                  <div class="form-group col-10">
                    <label for="conPwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="conPwd" name="confirmPassword">
                  </div>
                  <div class="col-1"></div>
                </div>
                <div class="row" style="margin-bottom: 3%;">
                  <div class="col-3"></div>
                  <div class="col-6 text-center" id="error">
                    <?php
                      if(isset($_GET['error'])) {
                        echo "<p><b>" . $_GET['error'] . "<b></p>";
                      }
                    ?>
                  </div>
                  <div class="col-3"></div>
                </div>
                <div class="row" style="min-height:10px; padding-bottom: 20px;">
                  <div class="col-3"></div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary" style="width: 100%">Sign Up</button>
                  </div>
                  <div class="col-3"></div>
                </div>
                <div class="row" style="min-height:10px; padding-bottom: 10px;">
                  <div class="col-3"></div>
                  <div class="col-6">
                    <button type="submit" formaction="../Control/guestRedirect.php" class="btn btn-primary" style="width: 100%">Login as guest</button>
                  </div>
                  <div class="col-3"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>

  <?php include("../View/footer.php"); ?>
</html>
