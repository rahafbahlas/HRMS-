<?php
    $home = 'index.php';
    $aboutUS = 'aboutUS.php';
    $help = 'help.php';
    if(!empty($_GET['role']))
    {
        if($_GET['role'] == 'Employee')
        {
            $home = 'EMP_page.php?emp_num='.$_GET['emp_num'].'&role=Employee';
            $aboutUS = 'aboutUS.php?emp_num='.$_GET['emp_num'].'&role=Employee';
            $help = 'help.php?emp_num='.$_GET['emp_num'].'&role=Employee';
        }
        else
        {
            $home = 'MAN_page.php?id='.$_GET['id'].'&role=Manager';
            $aboutUS = 'aboutUS.php?id='.$_GET['id'].'&role=Manager';
            $help = 'help.php?id='.$_GET['id'].'&role=Manager';
        }
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About Us </title>
		<link rel="stylesheet" href="StyleSheet.css ">
		<script src="javaScript.js"></script>
	</head>
	
	<body >
		<header>
			<nav>
				<ul class="navb">
					<li><a href="<?=$aboutUS?>"accesskey="a">About us</a></li>
					<li><a href="<?=$help?>"accesskey="q">Help</a> </li>
					    <div class="logOut">
                            <a href="index.php"> <img src="img/home.png" alt="log out" width="40" height="40"></a>
                        </div>
				</ul>
                         
			</nav>

			<ul class="breadcrumbs">
				<li></><a href="<?=$home?>">Home</a></li>
				<li><span>About Us </span></li>
			</ul>

		</header>
		
		
		<main>
			<a href="index.php">
				<img src="img/HRMS.png" alt="logo" width="270" height="100">
			</a><br>
			<h1>Welcome to HRMS Company</h1>
			<div class="aboutUs">
			<p><h3>What is a Request Management System?</h3>A request management system brings order to a chaotic environment and makes requests streamlined irrespective of where they originate from. The system is expected to be easy to use with customization options and suited to different types of requests .
			<h4>Who makes these requests?</h4> Service requests can be made by different departments in an organization 
			<h4>The Efficient Workflow Behind Collating Service Requests:</h4> A service request is always generated through a user portal. The term user refers to an employee hired by the company
			<ol>

			<li>	The user portal is where they request access and services by making submissions</li>
			<li>	The workflow process begins which will route the requested query along a specified path to procure the necessary information
					The workflow is important because it makes it easier for the servers and the people behind it to process a query. It will help collate all the necessary information so as to understand what kind of questions they have. The forms can be fully customized according to an organization’s requirements.
				Once the forms are filled up, the administrators will route them to their respective departments. </li>
			</ol>

			</p>
			</div>
		</main>
		
		<footer>
			<img src="img/twitter.png" alt="Twitter" width="30" height="30" onclick="twitter()">
			<img src="img/email.png" alt="Email" width="30" height="30" onclick="email()">
			<img src="img/call.png" alt="phoneNumber" width="30" height="30" onclick="phone()">
			<aside><P>&copy;2021 KSU</P></aside>
		</footer>
	</body>
</html>
