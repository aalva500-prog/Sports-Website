<!-- ***************************************************************************************
    Page Name  : Delete.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/04/2020, 11:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page deletes record selected by user
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
  <html>

  <body>
    
    <?php
                   
       $record = "RECORD ". $Telephone." DELETED";

	   $found = $_POST['found'];   
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE Telephone='$Telephone'";
         
       $Telephone=trim($Telephone);          
                
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Telephone) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {             
             $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
             $found=""; //this clear the flag for record found to be able to modify 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $Telephone CAN NOT BE DELETED, IT DOES NOT EXISTS</span><br\>";
       }
       
    ?>
                           
  </body>
                    
</html>