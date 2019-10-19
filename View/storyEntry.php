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

        <div id="entry1">
            <img  src="../View/Images/bookEntry1.png" alt="bookEntry1" onclick="bookEntry()">
        </div>

        <div id="entry2" class="hide">
            <img  src="../View/Images/RainbowSerpent.png" alt="bookEntry2" onclick="bookEntry2()">
        </div>

        <div id="entry3" class="hide">
                <img  src="../View/Images/storyEntry3.png" alt="bookEntry3" onclick="bookEntry3()">
            </div>
    </div>
    </div>
    <div class="col-0"></div>
  <script>
    $(function () {
      arr= window.location.href.split("#");
      console.log("the arguement is " + arr);
      if(arr[1]==2){
        $("#entry2").removeClass('hide');
      }if(arr[1]==3){
        $("#entry2").removeClass('hide');
        $("#entry3").removeClass('hide');
      }
    });


    function bookEntry(){
    	location.href = "story.php"
    }

    function bookEntry2() {
    	location.href = "story2.php"
    }

  </script>

  <?php include("footer.php"); ?>
