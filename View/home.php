<!doctype html>
<html>
  <?php include("header.php"); ?>
    <div name="row main">
      <div class="col-3"></div>
      <div class="col-6">
        <div class="row content">
        <section class="manselect">
        <div id="man">
            <img class="manfig" src="../Images/select.jpg">
            <img onclick="changeImage()" src="../Images/aboriginals3.jpg" height="200">
        </div>
        <div class="selection">
            <div class="wordlist" href="">
                <a href="dictionary.php"><button>Butchulla word list</button></a>
            </div>
            <div class="wordlist">
                    <button>Duungidjawu word list</button>
            </div>
            <div class="wordlist">
                    <button>Gooreng word list</button>
            </div>
            <div class="wordlist">
                    <button>Gunggari word list</button>
            </div>
            <div class="wordlist">
                    <button>Kala-kawaw-ya word list</button>
            </div>
        </div>
          </section>
           
        </div>
      </div>
      <div class="col-3"></div>
    </div>
  <script src="../../Control/home.js"></script>
  <?php include("footer.php"); ?>
</html>
