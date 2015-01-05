<?php 
require_once('inc/config.php');

include(ROOT_PATH . 'inc/header.php');

?>
	<div id="main">
		<img src="img/steve.jpg" alt="Photo of Steve Gardner">
		<div class="intro">
			<h1>Let's Make Something</h1>
			<p>A project. A friendship. A plan to take over the world.</p>
			<p>Want to drop me line? I'd love to collaborate on a build. If you'd like, check out some of the <a href="<?php echo BASE_URL . 'projects.php'; ?>">little learning projects</a> I've been working on. Dangling preposition.</p>
		</div>
		<form method='post' action='contact.php'></form>

<?php include(ROOT_PATH . 'inc/footer.php');
