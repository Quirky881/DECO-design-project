<!doctype html>
<html>
  <?php include("header.php"); ?>
  <body>
    <div class="row main" style="margin-top: 0;">
      <div class="col-0"></div>
      <div class="col-12">
        
        <div id="entry">
            <img src="../View/Images/title-page.svg" alt="title-page">
        </div>

        <div id="entry1" onclick="bookEntry()">
            <img  src="../View/Images/bookEntry1.png" alt="bookEntry1">
        </div>

        <div id="entry2" onclick="bookEntry2()" class="hide">
            <img  src="../View/RainbowSerpent.png" alt="bookEntry2">
        </div>
    </div>
    </div>
    <div class="col-0"></div>
  <script>
  
function bookEntry(){
	location.href = "story.php"
}

function bookEntry2() {
	location.href = "story2.php"
}
  
  </script>

  <?php include("footer.php"); ?>
