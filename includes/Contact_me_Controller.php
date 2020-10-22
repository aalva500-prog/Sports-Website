<!-- ***************************************************************************************
    Page Name  : Contact_me_Controller.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/05/2020, 9:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page sents data from Contact_me.php to email account.
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
<html>
  <body>
    <?php 

      if(isset($_POST['Submit'])) 
      {
        $to          = "michael.robinson@cs.fiu.edu";
        $subject     = "From Teaching Website";    
        $Email       = $_POST['Email'];
	    $LastName    = $_POST['LastName'];
	    $FirstName   = $_POST['FirstName'];
        $Age         = $_POST['Age'];  
        $Athlete     = $_POST['Athlete'];
        $Football    = $_POST['Football']; 
        $Soccer      = $_POST['Soccer'];
	    $Baseball    = $_POST['Baseball'];
	    $Basketball  = $_POST['Basketball'];
        $Information = $_POST['Information'];

        $body = " Your Email:                  $Email\n".
		        " Last Name:                  $LastName\n".
			    " First Name:                  $FirstName\n\n".
				" Age:                             $Age\n\n".
	            " Favorite Athlete:           $Athlete\n".
			    " Favorite Sports:           $Football $Soccer $Baseball $Basketball\n\n".
			    " Additional Information:  $Information";

        mail($to, $subject, $body);

        include('mailerSubmitted.php');
      } 
 
    ?>
  
  </body>

</html>