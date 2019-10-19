<!doctype html>
<html>
  <?php include("header.php"); ?>
    <div class="AboutUsContent">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: white;
    color: black;
}

.header {
    display: flex;
    justify-content: space-evenly;
    font-family: 'Lobster', cursive;
    letter-spacing: 2px;
    font-size: 2.5rem;
    margin-top: 80px;
}

.teamdescritption {
    display: flex;
    justify-content: space-evenly;
}

.box {
    display: flex;
    justify-content: space-evenly;
    flex-direction: column;
    align-items: center;
    margin: 2em 0;
    box-shadow: .5rem .5rem 3rem rgba(0, 0, 0, 0.2);
    width: 32rem;
    background: #ebeef8;
    border-radius: 10px;
}

.back {
    height: 20rem;
    width: 15rem;
}

.box .back {
    width: 100%;
    object-fit: cover;
    clip-path: polygon(0 0, 100% 0, 100% 72%, 0% 100%);
}

#mates {
    width: 10rem;
    height: 10rem;
    object-fit: cover;
    border-radius: 50%;
    margin-top: -5rem;
    z-index: 1;
    border: 1rem solid #ebeef8;
}

.name {
    font-family: 'Roboto', sans-serif;
    font-size: 2rem;
    color: #333;
    margin: 1rem;    
}

.role {
    font-family: 'Roboto', sans-serif;
    color: #777;
    font-size: 1.5rem;
    margin: 1.5rem;
}

.description {
    font-family: 'Roboto', sans-serif;
    color: #777;
    font-size: 1.5rem;
    margin: 1.5rem;
}

.teammember {
    display: flex;
    justify-content: space-evenly;
    margin: 2rem;
    flex-direction: column;
    text-align: center;
}

.motto {
    font-size: 1.3rem;
    font-family: 'Damion', cursive;
}

.contact {
    padding: 1rem 2.5rem;
    margin: 1rem 0;
    background-color: #10ac84;
    border-radius: 10px;
    font-size: 1.4rem;
    font-family: 'Roboto', sans-serif;
    text-transform: uppercase;
    color: white;
    outline: none;
    transition: ease 0.3s;
}

.contact:hover {
    transform: translateY(-2px);
    box-shadow: 0.5rem 0.5rem 2rem rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.contact:active {
    transform: translateY(0);
    box-shadow: none;
}

@media screen and (min-width: 700px) {
    .teammember {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
    .teamdescritption {
        margin: 2rem;
    }
}

</style>

      <div id="aboutusmain">
        <article class="team">
            <div class="header">
                <h1>Meet The Team</h1>
            </div>
                <section class="teammember">
                    <div class="teamdescritption">
                        <div class="box">
                            <img class="back" src="images/title-page.svg" alt="project">
                            <img id="mates" src="images/teamleader.png" alt="kieran">
                            <h2 class="name">Kieran Quirke-Brown</h2>
                            <p class="role">Team Leader/UI Designer</p>
                            <p class="description">I am currently studying a masters of information technology while working full time at Schneider Electric working as a smart services engineer. Based on my past university courses, university projects and work I believe my top skills that I bring to the project are: project management, front end programming and server side programming. I have little design experience and hope to build some skills in design by creating some of the pictures and graphics within our website.</p>
                            <blockquote>
                                <p class="motto">"Php and coding are so easy." <br>---Kieran Quirke-Brown</p>
                            </blockquote>
                            <button class="contact" href="#">Contact</button>
                        </div>
                    </div>
                    <div class="teamdescritption">
                        <div class="box">
                            <img class="back" src="images/title-page.svg" alt="project">
                            <img id="mates" src="images/MarkBird.png" alt="mark">
                            <h2 class="name">Mark Bird</h2>
                            <p class="role">Database Designer/Coder</p>
                            <p class="description">I am currently studying a masters of information technology, my background is in mathematics but I have also studies Databases, programing and some web development. I have limited design experience which I hope to expand upon but will be best utilized working on programing and database tasks.</p>
                            <blockquote>
                                <p class="motto">"Database is so much fun." <br>---Mark Bird</p>
                            </blockquote>
                            <button class="contact" href="#">Contact</button>
                        </div>
                    </div>
                    <div class="teamdescritption">
                        <div class="box">
                            <img class="back" src="images/title-page.svg" alt="project">
                            <img id="mates" src="images/girl.jpg" alt="mengqi">
                            <h2 class="name">Mengqi Huang</h2>
                            <p class="role">Designer/Coder</p>
                            <p class="description">As a member with design background, I enjoy applying my design skills to solve real-world problems and being part of the creative  project. Based on the previous project experience, I can bring the following skills to the team: aesthetic designing and  front-end developing. I have no experience in back-end developing and hopefully I am able to expand my skill sets through the project.</p>
                            <blockquote>
                                <p class="motto">"I love design." <br>---Karen</p>
                            </blockquote>
                            <button class="contact" href="#">Contact</button>
                        </div>
                    </div>
                    <div class="teamdescritption">
                        <div class="box">
                            <img class="back" src="images/title-page.svg" alt="project">
                            <img id="mates" src="images/me.jpg" alt="zengzhi">
                            <h2 class="name">Zhi Zeng</h2>
                            <p class="role">UI Designer/Coder</p>
                            <p class="description">I am currently studying a master of information technology. My background is business, however, I have studied some web design including Javascript, HTML, CSS. I currently work part-time in marketing and design, but I feel like there is still so much more to learn in terms of web design and web development. I hope that my current knowledge will help me complete the tasks set by the team.</p>
                            <blockquote>
                                <p class="motto">"Work harder." <br>---Chris</p>
                            </blockquote>
                            <button class="contact" href="#">Contact</button>
                        </div>
                    </div>
                </section>
        </article>
      </div>
  <?php include("footer.php"); ?>
</html>
