<?php include("header.php"); ?>
  <div class="HomeContent">
    <style>
          .manselect {
            display: flex;
            justify-content: space-around;
          }

          .manfig {
            height: 10%;
            margin: 2% 2%;
          }

          .manfig-2 {
            height: 10%;
            margin: 2% 2%;
          }

          .selection {
            position: absolute;
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
          }

          button {
            background: #b8e994;
            width: 100%;
            height: 150%;
            border-radius: 10px;
            text-align: center;
            color: white;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            margin: 10px;
          }

          button:hover {
            background: green;
            transition: all 0.8s ease;
          }
        </style>
      <div class="row main" style="position: absolute; top: 10%; width: 100%;">
        <div class="col-3">
          <div id="man">
            <img class="manfig" src="../View/Images/select.jpg" style="height: 200px;">
            <img class="manfig-2" onclick="changeImage()" src="../View/Images/aboriginals3.jpg" style="visibility: hidden; height: 100px;">
          </div>
        </div>
        <div class="col-3"></div>
        <div class="col-6">
          <div class="selection">
            <div class="row" style="margin: 2%;">
              <div class="wordlist" href="">
                <a href="dictionary.php">
                  <button>Butchulla word list</button>
                </a>
              </div>
            </div>
            <div class="row" style="margin: 2%;">
              <div class="wordlist">
                <button>Duungidjawu word list</button>
              </div>
            </div>
            <div class="row" style="margin: 2%;">
              <div class="wordlist">
                <button>Gooreng word list</button>
              </div>
            </div>
            <div class="row" style="margin: 2%;">
              <div class="wordlist">
                <button>Gunggari word list</button>
              </div>
            </div>
            <div class="row" style="margin: 2%;">
              <div class="wordlist">
                <button>Kala-kawaw-ya word list</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <script src="../../Control/home.js"></script>
<?php include("footer.php"); ?>
