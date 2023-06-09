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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>about us </title>
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
				<li><span>Help</span></li>
			</ul>
		</header>
		
		
		<main>
			<a href="index.php"><img src="img/HRMS.png" alt="logo" width="270" height="100"></a><br>
			<h1>Welcome to HRMS Company</h1>
			<div class="help">
				<h2>
					We are happy to help you, here are the most commonly asked questions,
					you can find what you are looking for here,
					if not, you can contact us via email, phone or our Twitter account.
				</h2>
				<br><br>
				<h3>Q1 How can I raise a request?</h3>
				<p>If you are an employee, just log in - if you already have an account or a sing up - then click on "New Request" and enter the required data.</p>
				<h3>Q2 Can I change or edit the request after it has been submitted?</h3>
				<p>Yes, you can. If you are an employee, you will find on the page the 'edit' button next to each request, click on it and you can modify the requst.</p>
				<h3>Q3 How do I know if my request is accepted?</h3>
				<p>If you are an employee, you will see the status of your request on the side of each request .</p>
				<h3>Q4 Can I submit more than one request?</h3>
				<p>Yes, you can. If you are an employee, you will find on the page a “new request” button , click on it and enter the required data.</p>
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
