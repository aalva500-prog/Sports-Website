<!-- ***************************************************************************************
    Page Name  : controller2.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 02/18/2020, 6:23 PM  
    Professor  : Michael Robinson 
    Program #  : Program 2
	Purpose    : This page displays the information inserted in program2.php using PHP.              
    Due Date   : 02/18/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
<html>
  <head>
    <title>Alvarez A. Controller 2</title>
  </head>
  
  <body>
    <table align="center">
	  <tr>
	    <td>
          <?php 
	        echo "This is controller2.php"."<br>";	  
	        echo "  Called from Program 2"."<br>"."<br>";
	  
	        //Extract the data inputed by the user creating global php fields 
            $Telephone    = $_POST['Telephone'];      
	        $Email        = $_POST['Email'];
            $LastName     = $_POST['LastName'];
            $FirstName    = $_POST['FirstName'];
            $Address      = $_POST['Address'];		  
            $City         = $_POST['city'];
            $State        = $_POST['State'];
            $Country      = $_POST['Country'];
            $Zip          = $_POST['Zip'];
            $Football     = $_POST['Football'];
            $Soccer       = $_POST['Soccer'];
            $Baseball     = $_POST['Baseball'];
            $Basketball   = $_POST['Basketball'];
	        $Athlete      = $_POST['Athlete'];
	        $Age          = $_POST['Age'];
	        $Information  = $_POST['Information'];
	   
	        //Display the information entered by user
	        echo "             Telephone:  $Telephone"."<br>";
	        echo "         Email Address:  $Email"."<br>";
	        echo "             Last Name:  $LastName"."<br>";
	        echo "            First Name:  $FirstName"."<br>";
	        echo "               Address:  $Address"."<br>";
	        echo "                  City:  $City"."<br>";
	        echo "                 State:  $State"."<br>";
	        echo "               Country:  $Country"."<br>";
	        echo "                   Zip:  $Zip"."<br>";
	        echo "       Favorite Sports:  $Football $Soccer $Baseball $Basketball"."<br>";
	        echo "      Favorite Athlete:  $Athlete"."<br>";
	        echo "                   Age:  $Age"."<br>";
            echo "Additional Information:  $Information"."<br>";
	  
	        // Display the name of the button pressed by user
			if ( $_POST['Save'] )
            { 
              echo "<br>"."You pressed the Save Button";
            }
            else if ( $_POST['Find'] )
            { 
              echo "<br>"."You pressed the Find Button";
            }
            else if ( $_POST['Modify'] )
            {  
              echo "<br>"."You pressed the Modify Button";
            }
            else
            { 
              echo "<br>"."You pressed the Delete Button";
            }
	      ?>
	    </td>
	  </tr>
	</table>
  </body>
</html>