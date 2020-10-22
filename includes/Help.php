
<!-- ***************************************************************************************
    Page Name  : Help.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/24/2020, 10:23 PM  
    Professor  : Michael Robinson 
    Program #  : Program 4
	Purpose    : This page displays the Help window, explaining what each button on Program 4 does.             
    Due Date   : 03/28/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
<html>
  
  <body onload="help()">
    <script>
      function help()
      {
         // Open a new window at a specific location
         var myWindow = window.open("", "Help","width=500, height=600, scrollbars=yes,resizable=yes, left=80, top=80");    	
         // Display the purpose of each button on the form in the newly opened window 
         myWindow.document.write("<head>");
         myWindow.document.write("<title>Help</title>");
         myWindow.document.write("</head>");
         myWindow.document.write("<div>");
         myWindow.document.write("<div><h1 style='color:maroon'>* HELP * </h1></div>");
         myWindow.document.write("<hr>");
         myWindow.document.write("<div> <h2><span style='color:navy'>Buttons Purpose</span></h2></div>");
         myWindow.document.write("<div>");
         myWindow.document.write("<ul style='list-style-type:circle'>");
		 // Save Button
		 myWindow.document.write("<li>\n <h3 style='color:green'>Save.</h3>");
         myWindow.document.write("<div>Use the Save button to add information on the database.The information will be stored in the table, and a message will appear stating <span style='color:blue'>RECORD ADDED</span>. Otherwise, if the information has previously been entered, a message will appear, stating <span style='color:red'>RECORD ALREADY EXISTS.</span></div><br></li>");
         // Find Button
		 myWindow.document.write("<li>\n <h3 style='color:green'>Find.</h3>");
         myWindow.document.write("<div>Use Find button to find a record enter the Telephone number and press the FIND button,then pass the telphone (primary key), using POST, to the table.</div><br></li>");
         myWindow.document.write("<div>If the record is found, the fields on the Data page will be filled with information about the user, and a message will appear, stating <span style='color:blue'>RECORD FOUND</span>. Otherwise, a message will appear stating <span style='color:red'>RECORD NOT FOUND.</span></div><br>");
         // Modify Button
         myWindow.document.write("<li>\n <h3 style='color:green'>Modify.</h3>");
         myWindow.document.write("<div>Use the Modify button to edit existing record on the table. to do that the telephone must be found first, then the data can be changed.</div><br></li>");
         myWindow.document.write("<div>To modify a user info, follow these steps:</div>");
         myWindow.document.write("<ol class='popup-list' type='1'>");
         myWindow.document.write("<li>Enter the user Telephone number that you want update.</li>");
         myWindow.document.write("<li>Then, press the <b>Find button</b> to search for the record .</li>");
         myWindow.document.write("<li>Next, change the data you want update</li>");
         myWindow.document.write("<li>Finally, press the <b>Modify button </b> to store the modified information.</li>");
         myWindow.document.write("</ol><br>");
		 // Delete Button         
         myWindow.document.write("<li><h3 style='color:green'>Delete.</h3>");
         myWindow.document.write("<div>Use the Delete button to delete existing telephone. To do that, the telephone must be found, then the data can be deleted from the database.</div><br></li>");
         // Clear Button
		 myWindow.document.write("<li><h3 style='color:green'>Clear.</h3>");
         myWindow.document.write("<div>Use the Clear button to clear the data from the fields on the Data page.</div><br></li>");
		 // Contact_Me Button
		 myWindow.document.write("<li><h3 style='color:green'>Contact-Me.</h3>");
         myWindow.document.write("<div> Use the Contact_Me button to call the Contact_me.php program, which will send all the data inputed in the Contact_me front end to michael.robinson@cs.fiu.edu.</div><br></li>");         
		 // Help Button
         myWindow.document.write("<li><h3 style='color:green'>HELP.</h3>");
         myWindow.document.write("<div> Use the Help button to discover the purpose and functionality of the buttons and using JavaScript.</div><br></li>");         
		 // About Button
         myWindow.document.write("<li><h3 style='color:green'>About.</h3>");
         myWindow.document.write("<div> Use the About button to discover the purpose of this website.</div><br></li>");         
      }

    </script> 
   
  </body>
</html>