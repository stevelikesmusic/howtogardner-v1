<?php
require_once('inc/config.php');

$pageTitle = 'Projects | How to Gardner';
$section = 'projects';
include(ROOT_PATH . 'inc/header.php');

?>

<section>
  <div class='description'>
    <h1>Projects</h1>
    <p>Here are some projects I've worked on while learning to code. Inspirations came from Andrew Chalkers at Treehouse, Jen DeWalt, and <a href='http://rileyh.com/'>Riley Hilliard</a>. </p>
  </div>
  <div class='collection'>
    <ul id='projects'>
      <li>
        <a href='projects/Quiz/index.html'><img src='img/quiz.PNG'></a>
      </li>
      <li>
        <a href='projects/Etch/index.html'><img src='img/etch.png'></a>
      </li>
      <li>
        <a href="projects/Clock/index.html"><img src="img/clock.png"></a>
      </li>
      <li>
        <a href="projects/Grocery_List/index.html"><img src="img/list.PNG"></a>
      </li>
      <li>
        <a href="projects/Mondrian/index.html"><img src="img/mondrian.PNG"></a>
      </li>
      <li>
        <a href="projects/Random_Background_Color/index.html"><img src="img/randomcolor.PNG"></a>
      </li>
    </ul>
  </div>
</section>


<?php include(ROOT_PATH . 'inc/footer.php'); ?>