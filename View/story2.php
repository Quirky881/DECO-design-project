<!doctype html>
<html>
  <?php include("header.php"); ?>

    <div class="row main">
	  <div class="col-1"></div>

      <div class="col-10">
        <div class="readbook">

          <div class="flipbook-viewport">
          		<div class="flipbook">
          			<div style="background-image:url(../View/Images/bookEntry1.png)" class="title">
          				<h2>How the Water got to the Plains</h2>
          			</div>
          			<div class="onpage">
          				<div class="padding-style">
          					Way, way back in the first time, when everything was new, there was a group of Aboriginal people living on a mountain. It was a lovely place, but everyone was worried. It had not

          					<div calss="flip-box-position" style="display:inline-block;" >
          						<div class="flip-box">
          							<div class="flip-container" >
          								<div class="flipper">
          									<div class="front" >
          										<!-- https://www.pexels.com/photo/red-and-gray-rain-boots-near-pink-umbrella-34519/ -->
          									<img src="../View/Images/boots-footwear-rain-34519 (1).jpg" alt="rain">
          									<!-- ----------------------------------- -->

          									</div>
          									<div class="back">
          										<div id="back-img">
          											<div class="abori-word">
          												<p>Ari</p>
          												<p class="eng-meaning">English:Rain</p>
          											</div>
          										</div>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div>
          				for a long, long time and they were very short of
          				<div calss="flip-box-position" style="display:inline-block;" >
          					<div class="flip-box">
          						<div class="flip-container" >
          							<div class="flipper">
          								<div class="front" >
          									<!-- https://pixabay.com/photos/drip-drop-of-water-wave-wet-water-921067/-->
          								<img src="../View/Images/water.jpg" alt="water">
          								<!-- ----------------------------------- -->

          								</div>
          								<div class="back">
          									<div id="back-img">
          										<div class="abori-word" >
          											<p>Nguki</p>
          											<p class="eng-meaning" >English:Water</p>
          										</div>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div>
          				</div>.
          				</div>
          			</div>

          			<div class="onpage">
          				<div class="padding-style">
          					They had some wells but these, except for one, were empty. When it had rained before, the water had just run down the side of the mountain, into the
          				<div calss="flip-box-position" style="display:inline-block; " >
          					<div class="flip-box">
          						<div class="flip-container" >
          							<div class="flipper">
          								<div class="front" >
          									<!-- https://pixabay.com/photos/wave-water-surf-ocean-sea-spray-3473335/ -->
          								<img src="../View/Images/sea.jpg" alt="sea">
          								<!-- ----------------------------------- -->

          								</div>
          								<div class="back">
          									<div id="back-img">
          										<div class="abori-word">
          											<p>Malu</p>
          											<p class="eng-meaning">English:Sea</p>
          										</div>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div>
          				</div>
          				, which was far, far away. Now, on the other side of the mountain, there were just some big, dry plains where nothing grew.
          				</div>
          			</div>

          			<div class="onpage">
          				<div class="padding-style">
          					Weeri and Walawidbit were two greedy men. They decided to steal the last of the water for themselves and then run away.

          					<br>

          					In secret, they made a large water-carrier, which was called an eel-a-mun. When everyone was asleep, they stole the water from the last well and hurried off.
          					<br>
          					When the people woke up, there was no water for them. This was very bad, because there were little

          					<div calss="flip-box-position" style="display:inline-block; " >
          						<div class="flip-box">
          							<div class="flip-container" >
          								<div class="flipper">
          									<div class="front" >
          										<!-- https://pixabay.com/photos/child-boy-portrait-children-people-817373/ -->
          									<img src="../View/Images/child.jpg" alt="child">
          									<!-- ----------------------------------- -->

          									</div>
          									<div class="back">
          										<div id="back-img">
          											<div class="abori-word">
          												<p>Kazi</p>
          												<p class="eng-meaning">English:children</p>
          											</div>
          										</div>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div>

          					and babies needing water and also
          				</div>
          			</div>



          			<div class="onpage">
          				<div class="padding-style">
          					the old people. And also, it was very hot.
          					<br><br>
          					The water-carrier was very heavy and Weeri and Walawidbit were walking slowly. This was because they thought they were safe. However, when they saw the warriors coming they ran, too.
          				</div>
          			</div>

          			<div class="onpage">
          				<div class="padding-style">
          					The best spearmen in the group ran to a cliff which jutted out and threw all the spears they had. One hit the eel-a-mun and dropped off. However, it did make a hole in the water-carrier. On and on across the plains ran the two men. They did not notice that the water was leaking out until the carrier was almost empty. This was why they had been able to run faster and by this time, the warriors had caught up.
          				</div>
          			</div>



          			<div class="onpage">
          				<div class="padding-style">
          					Now, this was way back in the first time, when very strange things happened. So the warriors took the men back home and the Elders called a big meeting. It was decided that the two men had to be punished for stealing and also, for thinking of themselves first and not the community.
          				</div>
          			</div>


          		</div>
          </div>
        </div>
	  </div>
	  <div class="col-1" id="exit" >
			<img src="../View/Images/closeButton.png" alt="close button" onclick="bookExit()">
			<div id="point"><img src="../View/Images/Pointing.gif" alt="pointing" style="width: 15%;float: right;margin: 10% 0 0 0;"></div>
    </div>
	</div>
    </div>

      <script type="text/javascript">

      function loadApp() {

      	// Create the flipbook

      	$('.flipbook').turn({
      			// Width

      			width:1200,

      			// Height

      			height:600,

      			// Elevation

      			elevation: 50,

      			// Enable gradients

      			gradients: true,

      			// Auto center this flipbook

      			autoCenter: true

      	});
      }

      // Load the HTML4 version if there's not CSS transform

      yepnope({
      	test : Modernizr.csstransforms,
      	yep: ['../../Control/turn2.js'],
      	nope: ['../../Control/turn.html4.min.js'],
      	both: ['../View/styles.css'],
      	complete: loadApp
      });

	  function bookExit() {
  window.location.href = "storyEntry.php#2";
}
      </script>
    <?php include("footer.php"); ?>
