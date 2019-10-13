<!doctype html>
<html>
  <?php include("header.php"); ?>
  <div class="row main">
    <div class="col-3"></div>
    <div class="col-6">
      <div class="d-flex justify-content-center">
          <section id="user-profile">

              <form method="get" action="#">

                  <fieldset>

                      <legend>
                          <h4>Profile</h4>
                      </legend>

                      <div class="form-item">
                          <label for="form-full-name">Name:</label>
                          <div class="form-element">
                              <input type="text" name="full_name" id="form-full-name" placeholder="Amy Flower" />
                          </div>
                      </div>
                      <br>

                      <div class="form-item">
                          <label for="form-email">Email:</label>
                          <div class="form-element">
                              <input type="text" name="email" id="form-email" placeholder="amy.flower@gmail.com" />
                          </div>
                      </div>

                      <br>

                      <div class="form-item">
                        <div class="row">
                          <div class="col-6">
                          <input type="password" name="psw">
                          </div>
                          <div class="col-2"></div>
                          <div class="col-4">
                              
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12 text-center" >
                        <div class="avatar">
    
                          <div class="avatar-upload">
                            <div class="avatar-edit">
                              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                              <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                              <div id="imagePreview" style="background-image: url(images/profile.png);">
                              </div>
                            </div>
                          </div>
                        </div>   

                        
                        </div>
                      </div>
                      

                      <div class="col-6">
                        <button type="submit" class="btn btn-primary">Save</button>
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
