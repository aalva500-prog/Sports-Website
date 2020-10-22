<!-- ***************************************************************************************
    Page Name  : About.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/25/2020, 6:23 PM  
    Professor  : Michael Robinson 
    Program #  : Program 4
	Purpose    : This page displays the purpose of this website.             
    Due Date   : 03/28/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->

<html>
  <head>
    <title>About</title>
	
	<style type="text/css">

    .helpHeadings1 /*current applications*/ 
    { 
       font-family:sans-serif; 
       font-size:12pt;
       style="height:5px";
       color: white;
       background-color:red;
    }

    .helpHeadings2 /*future applications*/
    { 
       font-family:sans-serif; 
       font-size:12pt;
       style="height:5px";
       color: blue;
    }

    .helpHeadings3 /*purposes*/
    { 
       font-family:sans-serif; 
       font-size:12pt;
       style="height:5px";
       color: red;
    }


    .MainHeadings20 /*main heading 20 pt*/
    { 
       font-family:sans-serif; 
       font-size:20pt;
       style="height:5px";
       color: red;
    }
	
    </style> 
  </head>
  
  <body>
    <!-- Call header page -->
	<?php include("alvarez_header.php"); ?>
	
	<!-- Call Main Menu -->
	<?php include("mainMenu.php"); ?>
	<br>

    <div align="center">
   <h2 class="MainHeadings20">ABOUT</h2>

   <table width="80%" border="0"  BORDERCOLOR=red  border-spacing: 15px; >
     <tr> 
       <td>        
         <table width="100%" border="0"  BORDERCOLOR=BLUE  border-spacing: 15px; >
           <td width="50%" style="border:solid 2px #060">
             <br>
             &nbsp; &nbsp; &nbsp; <a class="helpHeadings1"><b>&nbsp; Purpose of this Website &nbsp;</a>
			 &nbsp; &nbsp; &nbsp; <p>&nbsp; This website has been created for academic purposes to practice different web programming languages such as HTML, CSS, PHP, and Javascript. &nbsp;<p/>

             <ul style="list-style-type:circle"> <!-- type = disc|circle|square -->
               <li> <a class="helpHeadings2">Home<br></a>
			     The Home section allows the user to navigate to the Home Page of the website.               
               <li> <a class="helpHeadings2">Program 1<br></a>
				 Program 1 was created to introduce the HTML language and use some of its features, such as creating hyperlinks and inserting images.
               <li> <a class="helpHeadings2">Program 2<br></a>
			     In Program 2 we continue to expand our understanding of the HTML language and CSS is introduced to create a dropdown menu.
               <li> <a class="helpHeadings2">Program 3<br></a>
			     Program 3 was created to introduce the PHP language and also how to manipulate data storage in a MySQL database. Furthermore, in Program 3 we learn to send an email using PHP.
               <li> <a class="helpHeadings2">Program 4<br></a>
                 Program 4 serves to continue expading our HTML and CSS skills. Additionally, Javascript is introduced as a new langguage for creating functions to display the current time and login time.			   
               <br><br>     
             </ul>
           </td>
         </table>  
       </td>
     </tr>
   </table> 
    
</div>	
	  
  </body>
</html>