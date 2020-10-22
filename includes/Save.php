<!-- ***************************************************************************************
    Page Name  : save.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 02/24/2020, 3:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page saves record requested by user
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
  <html>
    
  <body>     
     
    <?php              
                
       $Telephone = trim($Telephone);
	   
       if(strlen($Telephone) > 0)           
       {   
          $sql="INSERT INTO customers (
                  Telephone,
				  Email,
				  LastName,
                  FirstName,
				  Address,
				  City,
				  State,
				  Country,
				  Zip,
				  Football,
				  Soccer,
				  Baseball,
				  Basketball,
				  Athlete,
                  Age,                                                
                  Information
               )
               VALUES
               (            
                 '$Telephone',    
	             '$Email',
				 '$LastName',
				 '$FirstName',
				 '$Address',	  
				 '$City',
			     '$State',
			     '$Country',
				 '$Zip',
				 '$Football',
				 '$Soccer',
		         '$Baseball',
				 '$Basketball',
				 '$Athlete',
				 '$Age',
				 '$Information'                       
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             //echo "<br>New record created successfully";
             $message ="<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
          } 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS</span><br\>";
          }
           
       }//end if(strlen($Telephone)>0)                    
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
       }       
    ?>
       
  </body>

</html>