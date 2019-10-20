<!doctype html>
<html>
  <?php include("header.php"); ?>
  <?php include("../Control/getUser.php"); ?>
  <div class="row main">
    <div class="col-3"></div>
    <div class="col-6">
      <div class="d-flex justify-content-center">
          <section id="user-profile" style="width: 60%">
              <form method="get" action="#">
                  <fieldset>
                      <div id="profileHeader">
                          <h4>Profile</h4>
                      </div>

                      <div class="form-item">
                          <label for="form-full-name">Name</label>
                          <div class="form-element">
                              <input type="text" name="full_name" id="form-full-name"
                              <?php
                                if ($row != "") {
                                  echo 'value="' . $row["Username"] .'"';
                                } else {
                                  echo 'placeholder="Amy Flower"';
                                }
                              ?>/>
                          </div>
                      </div>


                      <div class="form-item" style="margin-bottom: 6%;">
                          <label for="form-email">Email</label>
                          <div class="form-element">
                              <input type="text" name="email" id="form-email"
                              <?php
                                if ($row != "") {
                                  echo 'value="' . $row["Email"] .'"';
                                } else {
                                  echo 'placeholder="amy.flower@gmail.com"';
                                }
                              ?>/>
                          </div>
                      </div>

                      <br>

                      <div class="form-item">
                          <label for="form-email">Password</label>
                          <div class="form-element">
                           <input type="password" name="pwd"
                           <?php
                             if ($row != "") {
                               echo 'value="' . $row["password"] .'"';
                             } else {
                               echo 'placeholder="********"';
                             }
                           ?>/><br>
                          </div>
                      </div>


                      <div class="col-12">
                      <div class="avatar-upload">
                            <div class="avatar-edit">
                              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                              <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                              <div id="imagePreview" style="background-image: url(Images/profile.png);">
                              </div>
                            </div>
                      </div>


                      <div class="row" style="margin: 2%">
                        <div class="col-6 d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                          <button type="submit" formaction="../Control/logout.php" class="btn btn-primary">logout</button>
                        </div>
                      </div>

                  </fieldset>
                  <br>
              </form>
          </section>
        </div>
    </div>
    <div class="col-3"></div>
  </div>

<script>
 // https://codepen.io/siremilomir/pen/jBbQGo
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
// end
    </script>

  <?php include("footer.php"); ?>
</html>
