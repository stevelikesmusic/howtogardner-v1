<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/config.php');

$pageTitle = 'Projects | How to Gardner';
$section = 'projects';
include(ROOT_PATH . '/inc/header.php');

?>

<section>
  <div class='description'>
    <h1>Projects</h1>
    <p>Here are some projects I've worked on while learning to code. Inspirations came from <a href="https://www.twitter.com/chalkers">Andrew Chalkley</a> at <a href='http://referrals.trhou.se/stevegardner'>Treehouse</a>, <a href="http://www.theodinproject.com">The Odin Project</a>, <a href="https://www.twitter.com/jenniferdewalt">Jennifer DeWalt</a>, and <a href="https://www.twitter.com/rileyhSD">Riley Hilliard</a>.</p>
  </div>
  <div class='collection'>
    <ul id='projects'>
      <li class='project-view'>
        <a href='projects/Quiz/index.html'><img src='img/quiz.PNG'></a>
        <div class='mask'>
          <h2>The Quixotic Quiz</h2>
          <p>JavaScript</p>
          <a href='projects/Quiz/index.html'>Check it out</a>
        </div>
      </li>
      <li class='project-view'>
        <a href='projects/Etch/index.html'><img src='img/etch.PNG'></a>
        <div class='mask'>
          <h2>Etch-A-Sketch</h2>
          <p>JavaScript and jQuery</p>
          <a href='projects/Etch/index.html'>Check it out</a>
        </div>
      </li>
      <li class='project-view'>
        <a href="projects/Clock/index.html"><img src="img/clock.PNG"></a>
        <div class='mask'>
          <h2>Counting Clock</h2>
          <p>JavaScript</p>
          <a href='projects/Clock/index.html'>Check it out</a>
        </div>
      </li>
      <li class='project-view'>
        <a href="projects/Grocery_List/index.html"><img src="img/list.PNG"></a>
        <div class='mask'>
          <h2>Todo List</h2>
          <p>JavaScript</p>
          <a href='projects/Grocery/index.html'>Check it out</a>
        </div>
      </li>
      <li class='project-view'>
        <a href="projects/Mondrian/index.html"><img src="img/mondrian.PNG"></a>
        <div class='mask'>
          <h2>Mondrian Painter</h2>
          <p>jQuery</p>
          <a href='projects/Mondrian/index.html'>Check it out</a>
        </div>
      </li>
      <li class='project-view'>
        <a href="projects/Random_Background_Color/index.html"><img src="img/randomcolor.PNG"></a>
        <div class='mask'>
          <h2>Generate Random Background Color</h2>
          <p>JavaScript</p>
          <a href='projects/Random_Background_Color/index.html'>Check it out</a>
        </div>
      </li>
    </ul>
  </div>
</section>


<?php include(ROOT_PATH . '/inc/footer.php'); ?>