<?php include("header.php"); ?>
  <div class="HomeContent">
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


section {
    min-height: 100vh;
    position: relative;
    /*background-image: url(../View/Images/grass.svg);
    background-repeat: no-repeat;
    background-size: cover;*/
}

#alang {
    height: 80px;
    background-color: white;
    color: #4cd137;
    font-size: 28px;
    font-family: 'Lato', sans-serif;
    font-display: bold;
    margin-top: 20px;
}

#mainopt {
    position: absolute;
    right: 0;
    z-index: 1;
}

#langlist {
    list-style-type: none;
}

.option1 {
    top: 100px;
    margin: 10px;
    border-radius: 8px;
    display: block;
    width: 150px;
    height: 70px;
    text-align: center;
    box-shadow: 3px rgba(1, 245, 13, 1);
    background: #00b894;
    outline: none;
    color: white;
    font-size: 15px;
    transition: 0.5s;
}

.option2 {
    top: 100px;
    margin: 10px;
    border-radius: 8px;
    display: block;
    width: 150px;
    height: 70px;
    text-align: center;
    box-shadow: 3px rgba(1, 245, 13, 1);
    background: #00b894;
    outline: none;
    color: white;
    font-size: 15px;
    transition: 0.5s;
}

.option3 {
    top: 100px;
    margin: 10px;
    border-radius: 8px;
    display: block;
    width: 150px;
    height: 70px;
    text-align: center;
    box-shadow: 3px rgba(1, 245, 13, 1);
    background: #00b894;
    outline: none;
    color: white;
    font-size: 15px;
    transition: 0.5s;
}

.option4 {
    top: 100px;
    margin: 10px;
    border-radius: 8px;
    display: block;
    width: 150px;
    height: 70px;
    text-align: center;
    box-shadow: 3px rgba(1, 245, 13, 1);
    background: #00b894;
    outline: none;
    color: white;
    font-size: 15px;
    transition: 0.5s;
}

.option5 {
    top: 100px;
    margin: 10px;
    border-radius: 8px;
    display: block;
    width: 150px;
    height: 70px;
    text-align: center;
    box-shadow: 3px rgba(1, 245, 13, 1);
    background: #00b894;
    outline: none;
    color: white;
    font-size: 15px;
    transition: 0.5s;
}

a {
    text-decoration: none;
}

#man1 {
    position: absolute;
    height: 380px;
    width: 250px;
    left: 20%;
    bottom: 40%;
    opacity: 1;
}

#man2 {
    position: absolute;
    height: 380px;
    width: 250px;
    left: 20%;
    bottom: 40%;
    opacity: 0;
}

#spear1 {
    position: absolute;
    margin: 0;
    padding: 0;
    height: 380px;
    width: 250px;
    top: -120px;
    right: 120px;
    z-index: 1;
    opacity: 0;
}

#spear2 {
    position: absolute;
    margin: 0;
    padding: 0;
    height: 380px;
    width: 250px;
    top: -40px;
    right: 120px;
    z-index: 1;
    opacity: 0;
}

#spear3 {
    position: absolute;
    margin: 0;
    padding: 0;
    height: 380px;
    width: 250px;
    top: 40px;
    right: 120px;
    z-index: 1;
    opacity: 0;
}

#spear4 {
    position: absolute;
    margin: 0;
    padding: 0;
    height: 380px;
    width: 250px;
    top: 120px;
    right: 120px;
    z-index: 1;
    opacity: 0;
}

#spear5 {
    position: absolute;
    margin: 0;
    padding: 0;
    height: 380px;
    width: 250px;
    top: 200px;
    right: 120px;
    z-index: 1;
    opacity: 0;
}

.option1:hover {
    background-color: #00cec9;
    cursor: pointer;
}

.option2:hover {
    background-color: #00cec9;
    cursor: pointer;
}

.option3:hover {
    background-color: #00cec9;
    cursor: pointer;
}

.option4:hover {
    background-color: #00cec9;
    cursor: pointer;
}

.option5:hover {
    background-color: #00cec9;
    cursor: pointer;
}
</style>

      <div style="position: absolute; top: 10%; width: 100%;">
        <div>
        <div></div>
        <div>
          <div class="selection">
            <div style="margin: 2%;">
            <section>
            <header id="alang">
                Let's Learn Aboriginal Languages!
            </header>
            <nav id="mainopt">
                <ul id="langlist">
                    <li>
                        <a href="dictionary.php?Language=Yugara">
                            <div class="opt">
                                <button class="option1" name="Yugara">Yugara word list</button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dictionary.php?Language=Yugambeh">
                            <div class="opt">
                                <button class="option2" name="Yugambeh">Yugambeh word list</button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dictionary.php?Language=Yugarabul">
                            <div class="opt">
                                <button class="option3" name="Yugarabul">Yugarabul word list</button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dictionary.php?Language=Turubul">
                            <div class="opt">
                                <button class="option4" name="Turubul">Turubul word list</button>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="dictionary.php?Language=Kala-kawaw-ya">
                            <div class="opt">
                                <button class="option5" name="Kala-kawaw-ya">Kala-kawaw-ya word list</button>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <section id="man">
                <img id="man1" src="../View/Images/Aboriginals2.svg" alt="select">
                <img id="man2" src="../View/Images/Aboriginals3.svg" alt="select2">
                <img id="spear1" src="../View/Images/spear.svg" alt="select3">
                <img id="spear2" src="../View/Images/spear.svg" alt="select3">
                <img id="spear3" src="../View/Images/spear.svg" alt="select3">
                <img id="spear4" src="../View/Images/spear.svg" alt="select3">
                <img id="spear5" src="../View/Images/spear.svg" alt="select3">
             </section>
        </section>
            </div>
          </div>
        </div>
      </div>
  </div>
  <script src="../Control/home.js"></script>
  <script>

      $(function() {
          $('.option1').hover(function() {
          $('#man1').css('opacity', '0');
          }, function() {
          $('#man1').css('opacity', '1');
  });

});

      $(function() {
          $('.option1').hover(function() {
          $('#man2').css('opacity', '1');
          }, function() {
          $('#man2').css('opacity', '0');
      });

  });

      $(function() {
          $('.option1').hover(function() {
          $('#spear1').css('opacity', '1');
          }, function() {
          $('#spear1').css('opacity', '0');
      });

  });

      $(function() {
          $('.option2').hover(function() {
          $('#man1').css('opacity', '0');
          }, function() {
          $('#man1').css('opacity', '1');
  });

});

      $(function() {
          $('.option2').hover(function() {
          $('#man2').css('opacity', '1');
          }, function() {
          $('#man2').css('opacity', '0');
      });

  });

      $(function() {
          $('.option2').hover(function() {
          $('#spear2').css('opacity', '1');
          }, function() {
          $('#spear2').css('opacity', '0');
      });

  });

      $(function() {
          $('.option3').hover(function() {
          $('#man1').css('opacity', '0');
          }, function() {
          $('#man1').css('opacity', '1');
  });

});

      $(function() {
          $('.option3').hover(function() {
          $('#man2').css('opacity', '1');
          }, function() {
          $('#man2').css('opacity', '0');
      });

  });

      $(function() {
          $('.option3').hover(function() {
          $('#spear3').css('opacity', '1');
          }, function() {
          $('#spear3').css('opacity', '0');
      });

  });

      $(function() {
          $('.option4').hover(function() {
          $('#man1').css('opacity', '0');
          }, function() {
          $('#man1').css('opacity', '1');
  });

});

      $(function() {
          $('.option4').hover(function() {
          $('#man2').css('opacity', '1');
          }, function() {
          $('#man2').css('opacity', '0');
      });

  });

      $(function() {
          $('.option4').hover(function() {
          $('#spear4').css('opacity', '1');
          }, function() {
          $('#spear4').css('opacity', '0');
      });

  });

      $(function() {
          $('.option5').hover(function() {
          $('#man1').css('opacity', '0');
          }, function() {
          $('#man1').css('opacity', '1');
  });

});

      $(function() {
          $('.option5').hover(function() {
          $('#man2').css('opacity', '1');
          }, function() {
          $('#man2').css('opacity', '0');
      });

  });

      $(function() {
          $('.option5').hover(function() {
          $('#spear5').css('opacity', '1');
          }, function() {
          $('#spear5').css('opacity', '0');
      });

  });

  </script>
<style>
     
    body{
        background-image: url(../View/Images/grass.svg);
        background-repeat: no-repeat;
        background-size: auto;
    }
     
</style>
<?php include("footer.php"); ?>
