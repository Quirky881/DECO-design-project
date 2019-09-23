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

                      <div class="row">
                        <div class="col-12 text-center" >
                          <input type='file' id="actual" hidden="hidden"/>
                          <img id="myImg" src="../View/Images/profile.png" alt="profile image" style="width: 40%; height: 80%; border-radius: 10%">
                        </div>
                      </div>
                      <div class="row d-flex justify-content-center">
                          <div class="col-6" >
                            <img id="upload-icon"src="../View/Images/upload-icon.svg" alt="upload icon" style="width: 40%; height: 40%; border-radius: 10%">
                          </div>

                          <div class="col-6" >
                            <img class="camera-icon"src="../View/Images/camera-icon.svg" alt="camera-icon" style="width: 40%; height: 40%; border-radius: 10%">
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
