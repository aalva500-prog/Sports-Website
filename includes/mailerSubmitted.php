<!-- ***************************************************************************************
    Page Name  : mailerSubmitted.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/05/2020, 10:23 PM  
    Professor  : Michael Robinson 
    Program #  : Program 2
	Purpose    : This displays Your message has been submitted when processing a Contact_me.php message .              
    Due Date   : 02/18/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
 <html>
 
   <head>
     <title>Mail Confirmation</title>
   </head>
   
   <body>
     <?php include("alvarez_header.php"); ?>
	 
	  <!-- Heading "CONTACT ME" -->
	  <table width="100%">
	    <tr>
		  <td align="center">
	        <font face="Times New Roman" color="red" size="5"><strong>CONTACT ME</strong></font>
		  </td>
		</tr>
	  </table>
	  <br>
	  
	  <!-- Call Main Menu -->
	  <?php include("mainMenu.php"); ?>
	  <br>
	  
	  <center>        
        <p align="center">
          <b>Your message has been submitted, thank you!.!</b><br>    <br><br><br><br>    <br><br><br><br>
        </p>           
     </center>
	 
   </body>
   
 </html>