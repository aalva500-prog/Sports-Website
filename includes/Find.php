<!-- ***************************************************************************************
    Page Name  : Find.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/04/2020, 8:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page finds and displays record requested by user.
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
  <html>
                     
  <body> 
                        
    <?php
	
       $sql = "SELECT * FROM customers where Telephone = '$Telephone'";
             
       if ($result = mysqli_query($connection,$sql))
       {
		   
          // Return the number of rows in result set
          $rowcount = mysqli_num_rows($result);         
             
                        
          while( $row = mysqli_fetch_array( $result ) )
          {             
			 $Telephone    = $row['Telephone'];   //primary key
			 $Email        = $row['Email']; 	  //type="text"
			 $LastName     = $row['LastName'];	  //type="text"
			 $FirstName    = $row['FirstName'];	  //type="text"
			 $Address      = $row['Address'];	  //type="text"	  
			 $City         = $row['City'];		  //type="text"
			 $State        = $row['State'];		  //type="text"
			 $Country      = $row['Country'];	  //type="text"
			 $Zip          = $row['Zip'];		  //type="text"
			 $Football     = $row['Football'];	  //type="checkbox"
			 $Soccer       = $row['Soccer'];	  //type="checkbox"
			 $Baseball     = $row['Baseball'];	  //type="checkbox"
			 $Basketball   = $row['Basketball'];  //type="checkbox"
			 $Athlete      = $row['Athlete'];	  //type="radio"
			 $Age          = $row['Age'];		  //type="dropdown"
			 $Information  = $row['Information']; //type="textarea"		       
          }          
		  
		  $Telephone=trim($Telephone); //take all front and back spaces out               
          
          if ( $rowcount )
          {
             $found = $Telephone;
             $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Telephone) ==0 )           
          {
             $message ="<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br>";
                               
             //clear data in variables          
			 $Email        = "";
			 $LastName     = "";
			 $FirstName    = "";
			 $Address      = ""; 
			 $City         = "";
			 $State        = "";
			 $Country      = "";
			 $Zip          = "";
			 $Football     = "";
			 $Soccer       = "";
			 $Baseball     = "";
			 $Basketball   = "";
			 $Athlete      = "";
			 $Age          = "";
			 $Information  = "";		            
                      
             $found        = "";  
          }
          else 
          {
             $message ="<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br>";            
          }
             
      }                
   ?>

  </body>

</html>