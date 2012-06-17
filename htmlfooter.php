<?php
	//htmlfooter.php: footer used on every page in the site
	echo " </div>"; //this line ends the content_main div from htmlheader.php
	
	//puts in the rest of the stuff for the bottom of the page,
	//including links and the validation button.
	echo "	<div id=\"content_bottom\"></div>";
				
	echo "		<div id=\"footer\">";
	echo "			<img src=\"images/girl_scouts.gif\" alt=\"GS Logo\"/>";
	echo "			<a href= \"http://validator.w3.org/check/referer\"> ";
	echo "				<img src= \"http://www.w3.org/Icons/valid-xhtml11\"";
	echo "				alt= \"Valid XHTML 1.0!\" height=\"31\" width=\"88\" /></a> ";
	echo "			<h3><a href=\"http://www.bryantsmith.com\">Main HTML Source</a> ";
	echo "			| <a href=\"http://www.girlscouts.org\">Girl Scouts Main Site</a> ";
	echo "			</h3>";
	echo "		 </div>";
	echo "	  </div>";
	echo "   </div>";
	echo "</body>";
	echo "</html>";
?>