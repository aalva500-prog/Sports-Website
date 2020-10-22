<!-- ***************************************************************************************
    Page Name  : Modify.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/04/2020, 9:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page modifies record requested by user.
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
<html>

  <body>    
          
    <?php
        
       $found = $_POST['found'];   
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       {               
                  
          $query = "UPDATE customers 
                    SET Email       = '$Email',
				        LastName    = '$LastName',
                        FirstName   = '$FirstName',
				        Address     = '$Address',
				        City        = '$City',
				        State       = '$State',
				        Country     = '$Country',
				        Zip         = '$Zip',
				        Football    = '$Football',
				        Soccer      = '$Soccer',
				        Baseball    = '$Baseball',
				        Basketball  = '$Basketball',
				        Athlete     = '$Athlete',
                        Age         = '$Age',                                 
                        Information = '$Information'		        
                                 
                   WHERE Telephone = '$Telephone'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
          }   
          else
          {             
             $message ="<span style=\"color: red;\">RECORD $Telephone CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $Telephone CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
       }
           
    ?>
            
  </body>
                
</html>