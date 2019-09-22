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
  $languages = "('Yugara', 'Yugarabul')";
  $subjects = array('Koala','Kangaroo','Shark');

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully"."<br>";

  
  $sql = "SELECT word, english_meaning FROM Words WHERE language IN " . $languages . "AND english_meaning IN ('" . $subjects[0] . "','" . $subjects[1] . "','" .$subjects[2] . "') ORDER BY word ASC";
 
  echo $sql."<br>";
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
  echo $output;
  $conn->close();

  //variables needed later
  $divOne = '#div'.$subjects[0];
  $divTwo = '#div'.$subjects[1];
  $divThree = '#div'.$subjects[2];
  $liOne = '#'.$subjects[0];
  $liTwo = '#'.$subjects[1];
  $liThree = '#'.$subjects[2];
  ?>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
        var animalOne = '<?php echo $subjects[0];?>'
        var animalTwo = '<?php echo $subjects[1];?>'
        var animalThree = '<?php echo $subjects[2];?>'
        var divOne = '<?php echo $divOne;?>'
        var divTwo = '<?php echo $divTwo;?>'
        var divThree = '<?php echo $divThree;?>'
        var liOne = '<?php echo $liOne;?>'
        var liTwo = '<?php echo $liTwo;?>'
        var liThree = '<?php echo $liThree;?>'

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
        });
    </script>
    <style>
        .divClass {
            border: 3px solid black;
            font-size: 25px;
            background-color: lightgray;
            width: 250px;
            padding: 5px;
            display: inline-table;
        }

        li {
            font-size: 20px;
        }
    </style>
  <body style="font-family: Arial">
    <form id="form1" runat="server">
        <div class="divClass">
            Words for Anmimals
                <ul id="source">
                  <?php echo  $output;?>
                </ul>
        </div>

        <div class="divClass" id='div<?php echo $subjects[0];?>'>
          <?php echo $subjects[0]?>
          <ul id='<?php echo $subjects[0];?>'></ul>
        </div>

        <div class="divClass" id='div<?php echo $subjects[1];?>'>
          <?php echo $subjects[1]?>
          <ul id='<?php echo $subjects[1];?>'></ul>
        </div>

        <div class="divClass" id='div<?php echo $subjects[2];?>'>
          <?php echo $subjects[2]?>
          <ul id='<?php echo $subjects[2];?>'></ul>
        </div>
    </form>
  <?php echo $output; ?>
  <?php include("footer.php"); ?>
</html>
