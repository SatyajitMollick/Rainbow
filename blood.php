<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Red Top Template - Contact</title>
<meta name="keywords" content="free web templates, red top, contact form, address, vertical menu with icons, CSS, HTML" />
<meta name="description" content="Red Top (contact page) - free website template from templatemo.com for anyone." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
	    	<a href="http://www.templatemo.com" target="_parent"><img src="images/logo.png" alt="logo" /></a>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	
        <div id="templatemo_sidebar">
        
        	<div id="templatemo_menu">
                <ul>
                    <li><a href="index.html" class="home">Home</a></li>
                    <li><a href="aboutus.html" class="aboutus">About Us</a></li>
                    <li><a href="services.html" class="services">Services</a></li>
                    <li><a href="gallery.html" class="gallery">Gallery</a></li>
                    <li><a href="contactus.html" class="contactus current_contactus">Contact Us</a></li>
                </ul>    	
            </div> <!-- end of templatemo_menu -->
            
            <div class="sidebar_box">
                    <h4>Blog Posts</h4>
                <div class="sidebar_news_box">
                    <a href="#"><strong>Nutrition</strong></a>
                    <p>At present most of the poor people are get proper nutrition
					by our Organization. The service rate increases about 10% every year.</p>
          		</div>
                
                <div class="sidebar_news_box">
                    <a href="#"><strong> Making Home </strong></a>
                    <p>The poor who have no resident at all our Organization make tinshed
					room for them so that they can live happly.</p>
                </div>

                <div class="sidebar_news_box last_box">
                    <a href="#"> <strong>Financial Support</strong></a>
                    <p>Our Organization donate a amount of money to the poor or buy a rickshow
					or van and give them cash so that they can earn their livelihood.</p>
                </div>
            </div>
            
          <div class="sidebar_box">
              <h4>Organization Address</h4>
                K/D A avenue ,New Market <br />
            Khulna<br />
                Bangladesh<br />
            <a href="#">info@rainbow.com</a>
            </div>

        </div> <!-- end of sidebar -->
        
        <div id="templatemo_content_wrapper">
        	
            <div id="social_box">
            	<ul>
                	<li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="linkedin"></a></li>
                    <li><a href="#" class="myspace"></a></li>
                    <li><a href="#" class="technorati"></a></li>
				</ul>
                <div class="cleaner"></div>
            </div> <!-- end of social box -->
            
            <div id="page_intro">
            	<h1>Contact Information</h1>
                <p>Our Organization has many sector for doing the work. We all ensure
					proper help through our Organization.<a href="office.html"> Click the Link to see our Office </a>
					If any mistake happened by our Organization or Our service holder you 
					can make comment us.<a href="blooded.html"> For Emergency need Blood click Here </a></p>
            </div> <!-- end of page intro -->
            
            <div id="templatmeo_content">
            
            	<div class="content_box last_box">
                	<div class="col_w300 float_l">
                    	<div id="contact_form">
                            <h4>Search Form</h4>
                            <form method="post" name="contact" action="blood.php">
        
                                <label for="name">Search the region :</label> <input type="text" id="name" name="name" class="required input_field" />
                               <!-- <label for="blood">Blood Group :</label> <input type="text" id="blood" name="blood" class="required input_field" />-->
                                
								<input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                              <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            
                            </form>
                        </div>
                    </div>
                    
                    <div class="col_w300 float_r">
                    	<h3> Location </h3>
						<?php
                        $con=@mysql_connect("localhost","root","");
						if(!$con)
					{echo('Could not connect:'.mysql_error());
					exit();
					}
					mysql_select_db("mysql",$con);
      //echo "Database connected";
				$name = $_POST['name'];
				//$blood=$_POST['bgroup'];
				//$sql = "SELECT * FROM blood WHERE name='$name' and bgroup='$blood'";
				$sql = "SELECT * FROM blood WHERE name='$name'";
				$result = mysql_query($sql) or die (mysql_error());
				while ($row = mysql_fetch_array($result)){
				echo "<p>"."Location : " . $row['name'] . "</p>";
				echo "<p>"."Hospital Name: " . $row['hospital'] . "</p>";
				
				echo "<p>"."A(+ve): " . $row['a'] ." !! ";
				echo " "." B(+ve): " . $row['b'] . "</p>";
				echo "<p>"." AB(+ve): " . $row['ab'] . " !! ";
				echo " "." O(+ve): " . $row['o'] . "</p>";
				echo "<p>"."A(-ve): " . $row['an'] . " !! ";
				echo " "."B(-ve): " . $row['bn'] . "</p>";
				echo "<p>"."AB(-ve): " . $row['abn'] . " !! ";
				echo " "."O(-ve): " . $row['on'] . "</p>";
				echo "<p>" ."Phone : 0". $row['phone'] . "</p>";
				
				echo "<p>"."............................................"."</p>";
				echo "Update check in every 24 Hours.......";
	
				}
                        ?>
                    </div>
                    <div class="cleaner"></div>
                </div>
            
            </div> <!-- end of content -->
            <div id="templatemo_content_bottom"></div>
        
        </div> <!-- end of content -->
        
    	<div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <div id="templatemo_footer">
    	
        <a href="index.html" class="current">Home</a> | <a href="aboutus.html">About Us</a> | <a href="services.html">Services</a> | <a href="gallery.html">Information</a> | <a href="contactus.html">Contact Us</a>
        
        <div class="cleaner h10"></div>
	    	
        Copyright © 2015 <a href="#">Rainbow</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Satyajit Mollick</a>
    
    </div> <!-- end of footer -->

</div> <!-- end of wrapper -->

</body>
</html>