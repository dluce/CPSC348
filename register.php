<?php
	include "htmlheader.php";
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<title>Fredericksburg Sign-Up (Girl Scouts)</title>
</head>

<body>
<div id="container">
		<div id="header">
        	<h1>Fredericksburg, <span class="off">VA</span></h1>
            <h2>Girl Scout Cookie Booth Locations</h2>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.html">Home</a></li>
                <li class="menuitem"><a href="#">Login</a></li>
                <li class="menuitem"><a href="register.html">Sign-Up Sheet</a></li>
                <li class="menuitem"><a 
					href="http://www.girlscouts.org">Girl Scouts</a></li>
            </ul>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3>Locations</h3>
                        
                <ul>
                    <li><a href="#">List</a></li>
                    <li><a href="#">of</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Goes</a></li>
                    <li><a href="#">Here</a></li>
					<li><a href="#">(brings up schedules for each location)</a></li>
                </ul>
</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
		<div id="content">
        
        <div id="content_top"></div>
        <div id="content_main"> -->
        	<h2> Scoutmaster Sign-up Form </h2>
        	<h3> NOTE: Only register if you are a scout master. Only one person may register per troop! </h3>
		<p>&nbsp;</p>
        	<p>&nbsp;</p>
       	  	<form name="myForm" method="post" action="registerScript.php">
		<p>
		Name: <input type="text" name="name" maxlength="38"> </input><br /><br />
		Phone #:<input type="integer" name="phone" size="8" maxlength="10" /> 
		Troop Number: <input type="text" name="troop" size="3" maxlength="4" />
		<br />
		<br />
		Username:<input type="text" name="user" maxlength="14" />
		E-Mail: <input type="text" size="15" maxlength="35" name="email" /> <br /><br />
		Password:<input type="password" name="pass1" maxlength="22"> </input><br /><br />
		Re-type Password:<input type="password" name="pass2" maxlength="22" /><br /><br />
		</form>	
		<button type="submit" onclick="registerScript.php"> Register Now </button>	
	<p>&nbsp;</p>
<?php
	include "htmlfooter.php";
?>
<!--        </div>
        <div id="content_bottom"></div>
            
            <div id="footer">
				<img src="images/girl_scouts.gif" alt="GS Logo"/>
				<h3><a href="http://www.bryantsmith.com">Main HTML Source</a> 
				| <a href="http://www.girlscouts.org">Girl Scouts Main Site</a> 
				</h3>
			</div>
      </div>
   </div>
</body>
</html>
-->