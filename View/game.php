<!doctype html>
<html>
  <?php include("header.php"); ?>

  <?php

  //database stuff
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "deco7180_project";
  $output = "";
  $languages = "('Yugara')";
  $subjects = array('Koala','Kangaroo','Shark','Emu','Sugar Glider','Crow');

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully"."<br>";


  $sql = "SELECT word, english_meaning FROM Words WHERE language IN " . $languages . "AND english_meaning IN ('" . $subjects[0] . "','" . $subjects[1] . "','" .$subjects[2] . "','" .$subjects[3] . "','" .$subjects[4] . "','" .$subjects[5] . "') ORDER BY word ASC";

  //echo $sql."<br>";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $output.= "<li data-value='". $row["english_meaning"] ."'>" . $row["word"]. "</li>";
      //$output.= "<li data-value='Koala'>" . $row["word"]. "</li>";
    }
  } else {
      echo "eooro 0 results";
    }
  //echo $output;
  $conn->close();

  //variables needed later
  $divOne = '#div'.$subjects[0];
  $divTwo = '#div'.$subjects[1];
  $divThree = '#div'.$subjects[2];
  $divFour = '#div'.$subjects[3];
  $divFive = '#div'.$subjects[4];
  $divSix = '#div'.$subjects[5];
  $liOne = '#'.$subjects[0];
  $liTwo = '#'.$subjects[1];
  $liThree = '#'.$subjects[2];
  $liFour = '#'.$subjects[3];
  $liFive = '#'.$subjects[4];
  $liSix = '#'.$subjects[5];
  ?>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
        var animalOne = '<?php echo $subjects[0];?>'
        var animalTwo = '<?php echo $subjects[1];?>'
        var animalThree = '<?php echo $subjects[2];?>'
        var animalFour = '<?php echo $subjects[3];?>'
        var animalFive = '<?php echo $subjects[4];?>'
        var animalSix = '<?php echo $subjects[5];?>'
        var divOne = '<?php echo $divOne;?>'
        var divTwo = '<?php echo $divTwo;?>'
        var divThree = '<?php echo $divThree;?>'
        var divFour = '<?php echo $divFour;?>'
        var divFive = '<?php echo $divFive;?>'
        var divSix = '<?php echo $divSix;?>'
        var liOne = '<?php echo $liOne;?>'
        var liTwo = '<?php echo $liTwo;?>'
        var liThree = '<?php echo $liThree;?>'
        var liFour = '<?php echo $liFour;?>'
        var liFive = '<?php echo $liFive;?>'
        var liSix = '<?php echo $liSix;?>'

        $(document).ready(function () {
            $('#source li').draggable({
                helper: 'clone',
                revert: 'invalid'
            });

            $(divOne).droppable({
                accept: "li[data-value='<?php echo $subjects[0];?>']",
                drop: function (event, ui) {
                    $(liOne).append(ui.draggable);
                }
            });

            $(divTwo).droppable({
                accept: "li[data-value='<?php echo $subjects[1];?>']",
                drop: function (event, ui) {
                    $(liTwo).append(ui.draggable);
                }
            });

            $(divThree).droppable({
                accept: "li[data-value='<?php echo $subjects[2];?>']",
                drop: function (event, ui) {
                    $(liThree).append(ui.draggable);
                }
            });
            $(divFour).droppable({
                accept: "li[data-value='<?php echo $subjects[3];?>']",
                drop: function (event, ui) {
                    $(liFour).append(ui.draggable);
                }
            });
            $(divFive).droppable({
                accept: "li[data-value='<?php echo $subjects[4];?>']",
                drop: function (event, ui) {
                    $(liFive).append(ui.draggable);
                }
            });
            $(divSix).droppable({
                accept: "li[data-value='<?php echo $subjects[5];?>']",
                drop: function (event, ui) {
                    $(liSix).append(ui.draggable);
                }
            });
        });
    </script>
    <style>
        .divClass {
          border: 3px solid black;
          font-size: 40px;
          background-color: lightgray;
          width: 20%;
          padding: 5px;
          display: inline-table;
        }
        .divClass ul {
          list-style-type: none;
          color:green;
        }

        li {
            font-size: 25px;
        }
        figcaption{
          font-size: 5px;
          padding:1px;
        }
        img{
          padding:1px;
          border-radius:1em;
        }
        .instructions{
          background:white;
          text-align:center;
          font-size:18px;
        }
        #mystery{
			margin-bottom:2%;
		}
        #mystery li{
          display:inline;
          padding: 9px;
          color:black;
        }
        .instructions form{
          padding-left:2%;
        }
        div form{
          float:left;
        }
        lable {
          padding:5px;
        }

    </style>
    <div class = "instructions"><em>Drag the Mystery words to the correct image</em>
    <form>
      <label for="Language">Language:</label>
      <select name= "Language">
        <option value="Yugara">Yugara</option>
        <option value="Yugarabul">Yugarabul</option>
      </select>
    </form>
    <form>
      <label for="Topic">Topic:</label>
      <select name= "Topic">
        <option value="Animals">Animals</option>
        <option value="Greetings">Greetings</option>
      </select>
    </form>
    </div>      

      <form id="form1">
		<br>
          <div>
            <div class="divClass" id = "mystery">
              <label>
              Mystery Words
              </label>
              <ul id="source">
                <?php echo  $output;?>
              </ul>
            </div>
          </div>
          <div>
            <div class="divClass" id='div<?php echo $subjects[0];?>'>
              <?php echo $subjects[0]?><br>
              <figure>
                <img src="../View/Images/Koala.jpg" alt = "Koala"><br>
                <figcaption>https://www.flickr.com/photos/98119192@N05/9212325177</figcaption>
              </figure>
              <ul id='<?php echo $subjects[0];?>'></ul>
            </div>

            <div class="divClass" id='div<?php echo $subjects[1];?>'>
              <?php echo $subjects[1]?><br>
              <figure>
                <img src="../View/Images/Kangaroo.jpg" alt = "Kangaroo"><br>
                <figcaption>https://www.flickr.com/photos/ysc/2179798100/</figcaption>
              </figure>
              <ul id='<?php echo $subjects[1];?>'></ul>
            </div>

            <div class="divClass" id='div<?php echo $subjects[2];?>'>
              <?php echo $subjects[2]?><br>
              <figure>
                <img src="../View/Images/Shark.jpg" alt = "Shark"><br>
                <figcaption>https://www.flickr.com/photos/skymind25/79609238</figcaption>
              </figure>
              <ul id='<?php echo $subjects[2];?>'></ul>
            </div>
          </div>
          <div>
            <div class="divClass"  id='div<?php echo $subjects[3];?>'>
              <?php echo $subjects[3]?><br>
              <figure>
                <img src="../View/Images/Emu.jpg" alt = "Emu"><br>
                <figcaption>https://www.flickr.com/photos/iansand/27404702110</figcaption>
              </figure>
              <ul id='<?php echo $subjects[3];?>'></ul>
            </div>

            <div class="divClass"  id='div<?php echo $subjects[4];?>'>
              <?php echo $subjects[4]?><br>
              <figure>
                <img src="../View/Images/Sugar_Glider.jpg" alt = "Sugar Glider"><br>
                <figcaption>https://www.flickr.com/photos/27229185@N05/2541416661</figcaption>
              </figure>
              <ul id='<?php echo $subjects[4];?>'></ul>
            </div>

            <div class="divClass"  id='div<?php echo $subjects[5];?>'>
              <?php echo $subjects[5]?><br>
              <figure>
                <img src="../View/Images/Crow.jpg" alt = "Crow"><br>
                <figcaption>https://www.flickr.com/photos/dulvariprestige/4631643994</figcaption>
              </figure>
              <ul id='<?php echo $subjects[5];?>'></ul>
            </div>
          </div>
        </div>
      </form>
  <?php include("footer.php"); ?>
