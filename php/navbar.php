<?php
include ('init.php');
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>

<?php if(isset($_SESSION['loggedin'])): ?>
	<nav class="navbar navbar-default">
		<ul class="nav navbar-nav">
			<li <?=echoActiveClassIfRequestMatches("main")?>><a href="main.php">Main</a>
			</li>
			<li <?=echoActiveClassIfRequestMatches("halacha")?>><a href="halacha.php">Halacha</a>
			</li>
			<li <?=echoActiveClassIfRequestMatches("contact")?>><a href="contact.php">Contact</a>
			</li>
			<li><a href="logout.php">Logout</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right navbar-right-user">
			<li><a href="#"><?php echo($_SESSION['fName'] . " " . $_SESSION['lName']); ?></a></li>
		</ul>
	</nav>
<?php else: ?>
	<nav class="navbar navbar-default">

		<ul class="nav navbar-nav">
			<li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">Welcome</a>
			</li>
			<li <?=echoActiveClassIfRequestMatches("halacha")?>><a href="halacha.php">Halacha</a>
			</li>
			<li <?=echoActiveClassIfRequestMatches("contact")?>><a href="contact.php">Contact</a>
			</li>
			<li <?=echoActiveClassIfRequestMatches("login")?>><a href="login.php">Login</a>
			</li>
			<li <?=echoActiveClassIfRequestMatches("signup")?>><a href="signup.php">Sign up</a></li>
		</ul>
	</nav>
<?php endif; ?>