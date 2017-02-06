<ul class="nav navbar-nav pull-left">
	<li><a href="index.php?page=home">HOME PAGE</a></li>
	<li><a href="index.php?page=services">SERVICES</a></li>
	<li><a href="index.php?page=about">ABOUT</a></li>
</ul>

<?php
if(isset($_GET['page']))
{
	if($_GET['services'] == "services"
	echo $_GET "services"
}
	else {
		echo $_GET "home"
	}
?>
<?php

if(isset($_GET['page']))
{
	switch ($_GET['page']) {
		case 'about':
			echo "about";...
			break;
		case 'services':
			echo "services";...
			break;
		
		default:
			echo "404";
			break;
	} 
}