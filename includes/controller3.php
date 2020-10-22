<!-- ***************************************************************************************
    Page Name  : controller3.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/04/2020, 7:23 PM  
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : - This page connect to webserver where the website is hosted
                 - Connect to SQL server where database is located
                 - If table is not created, create it
                 - Load the data inputed by the user into global PHP variables
                 - Check sumbit buttons pressed and load corresponding program              
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
<html>         
  <body>
      
    <?php
                     
       //connecting to mysql      

       //                            server               user             password  database     
       $connection = mysqli_connect("ocelot.aul.fiu.edu","spr20_aalva500","6137240","spr20_aalva500");
       if (mysqli_connect_errno())
       {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
       else
       {  
                
          // Change database to another name if needed
             
          $dbName="spr20_aalva500";
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {
                               
             //access to a table                    
             $tableName = "customers";
                      
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                     
             //if table does not exist, create it
             if(!$query)
             {
                echo "The ".$tableName." does not exists<br>";
                        
                echo "<br>Creating table : ".$tableName."<br>";
                       
                $sql = "CREATE TABLE ".$tableName."(
                        Telephone VARCHAR(20) NOT NULL,
                        PRIMARY KEY(Telephone),
						Email VARCHAR(30),
						LastName VARCHAR(30),
                        FirstName VARCHAR(30),
						Address VARCHAR(100),
						City VARCHAR(20),
						State VARCHAR(20),
						Country VARCHAR(30),
						Zip VARCHAR(10),
						Football VARCHAR(15),
						Soccer VARCHAR(15),
						Baseball VARCHAR(15),
						Basketball VARCHAR(15),
						Athlete VARCHAR(15),
                        Age VARCHAR(15),                                                
                        Information VARCHAR(200)
                        )";
                                
                $result = mysqli_query( $connection, $sql );
                         
                //confirm table creation
                if ($result)
                {
                   echo "table ". $tableName." created<br>";
                }
                else
                {
                   die ("Can\'t create ". $tableName." ". mysqli_error() );
                }
                     
             }//if(!$query) if table does not exist, create it 
                        
          }//end if (!$db_selected) connecting to db
                
       }//end if (mysqli_connect_errno()) connecting to mysql

                    
       //Extract the data inputed by the user creating global php fields 
       $Telephone    = $_POST['Telephone'];  
	   $Email        = $_POST['Email'];
       $LastName     = $_POST['LastName'];
       $FirstName    = $_POST['FirstName'];
       $Address      = $_POST['Address'];		  
       $City         = $_POST['City'];
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

	   $found = $_POST['found'];
       

       // Verify the button pressed by user	and call corresponding page   
       if ( $_POST['Find'] )
       { 
          include('Find.php');
		  include( "program3.php" );	
       }
       else if ( $_POST['Save'] )
       { 
          include('Save.php');
		  include( "program3.php" );	
       }
       else if ( $_POST['Modify'] )
       {  
          include('Modify.php');
		  include( "program3.php" );	
       }
       else if ( $_POST['Delete'] )
       { 
          include('Delete.php');
		  include( "program3.php" );	
       }
       else if ( $_POST['Clear'] )
       {
          include('Clear.php');
		  include( "program3.php" );	
       }
	   else if ($_POST['Contact_Me'])
	   {
		  include('Contact_me.php'); 
	   }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";
       }

       mysqli_close($connection);        
      
    ?>
                 
  </body>

</html>