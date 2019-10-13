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
                      <div id="profileHeader">
                          <h4>Profile</h4>
                      </div>

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
                            <label for="switch">Microphone</label>
                          </div>
                          <div class="col-2"></div>
                          <div class="col-4">
                              <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                              </label>
                          </div>
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


                      <div class="row">
                        <div class="col-12 text-center" >
                          <input type='file' id="actual" hidden="hidden"/>
                          <img id="myImg" src="../View/Images/profile.png" alt="profile image" style="width: 40%; height: 80%; border-radius: 10%">
                        </div>
                      </div>

                      <div class="row" style="margin: 2%">
                        <div class="col-12 d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary">Save</button>
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
        const uploadBtn = document.getElementById("upload-icon");
        const actualBtn = document.getElementById("actual")

    window.addEventListener('load', function() {
    uploadBtn.addEventListener("click",function(){
        actualBtn.click();
    })

        document.querySelector('input[type="file"]').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                var img = document.querySelector('img');  // $('img')[0]
                img.src = URL.createObjectURL(this.files[0]); // set src to file url
                img.onload = imageIsLoaded; // optional onload event listener
            }
        });
    });
    </script>

  <?php include("footer.php"); ?>
</html>
