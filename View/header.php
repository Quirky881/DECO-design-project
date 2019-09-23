<?php include("../Control/activePage.php"); ?>
<?php include("../Model/databaseConnect.php"); ?>

<head>
  <title><?php echo ucfirst($activePage); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="../View/styles.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="../../Control/extras/jquery.min.1.7.js"></script>
  <script type="text/javascript" src="../../Control/extras/modernizr.2.5.3.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div class="row">
      <header class="container-fluid">
        <div class="row navbar">
          <a class="col-1 blank  <?php if($activePage == "home") echo ' active'; ?>" href="../View/home.php">
            <div id="navicon" class="col-12" >
              <img class="navImg" src="../View/Images/homePageIcon.svg" alt="Home">
            </div>
          </a>
          <a class="col-2 blank <?php if($activePage == "storyEntry") echo ' active'; ?>" href="../View/storyEntry.php">
            <div id="navicon" class="col-12 blank">
                <img class="navImgText" src="../View/Images/storyBookIcon.svg" alt="Dream Time Story">
                <span>Dream Time Story</span>
            </div>
          </a>
          <a class="col-2 blank" href="../View/game.php">
            <div id="navicon" class="col-12<?php if($activePage == "game") echo ' active'; ?>">
              <img class="navImgText" src="../View/Images/gameIcon.svg" alt="Home">
              <span>Game</span>
            </div>
          </a>
          <a class="col-2 blank" href="../View/dictionary.php">
            <div id="navicon" class="col-12<?php if($activePage == "dictionary") echo ' active'; ?>">
              <img class="navImgText" src="../View/Images/dictionaryIcon.svg" alt="Home">
              <span>Dictionary</span>
            </div>
          </a>
          <a class="col-2 blank" href="../View/profile.php">
            <div id="navicon" class="col-12<?php if($activePage == "profile") echo ' active'; ?>">
              <img class="navImgText" src="../View/Images/acform.jpg" alt="profile">
              <span>
                <?php
                  session_start();
                  if($_SESSION['Username'] == "") {
                    echo "Guest";
                  } else {
                    echo $_SESSION['Username'];
                  }
                ?>
              </span>
            </div>
          </a>
          <div class="col-1 blank">
            <form>
              <select>
                <option value="English">English</option>
                <option value="中文">中文</option>
                <option value="日本語">日本語</option>
                <option value="French">French</option>
              </select>
            </form>
          </div>
          <a class="col-1 blank" href="../View/help.php">
            <div id="navicon" class="col-12 <?php if($activePage == "help") echo ' active'; ?>" >
              <img class="navImg" src="../View/Images/help.jpg" alt="Help">
            </div>
          </a>
        </div>
      </header>
    </div>
