<!-- ***************************************************************************************
    Page Name  : program4.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 03/23/2020, 7:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 4
	Purpose    : This page represents the Program 4 main page. In this program we extend 
	             our current website creating the new pages, described below, using html, 
				 css3, php, mySql and javascript.
    Due Date   : 03/28/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
  <html>
    <head>
	  <title>Alvarez Aaron Program 4</title>
	  
	  <style>
	  
        .tooltip 
        {
           position: relative;
           display: inline-block;

        }

        .tooltip .tooltiptext 
        {
           visibility: hidden;
           width: 120px;
           background-color: green;
           color: #fff;
           text-align: center;
           border-radius: 6px;
           padding: 5px 0;
           position: absolute;
           z-index: 1;
           bottom: 125%;
           left: 50%;
           margin-left: -60px;
           opacity: 0;
           transition: opacity 1s;
        }

       .tooltip .tooltiptext .tooltip-left 
       {
          top: -5px;
          bottom:auto;
          right: 128%;  
       }

       .tooltip .tooltiptext::after 
       {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: red transparent transparent transparent; /*arrow*/
       }

      .tooltip:hover .tooltiptext
      {
         visibility: visible;
         opacity: 1;
      }

      </style>
	  
	  <script>         
         
        function currentTime() 
        {
           var today   = new Date();
           var hour    = today.getHours();
           var minutes = today.getMinutes();
           var sec     = today.getSeconds();
      
           minutes = checkTime(minutes);
           sec     = checkTime(sec);
         
           document.getElementById('txt').innerHTML = "Current Time: "+hour+":"+minutes+":"+sec;
      
           var t = setTimeout(function(){currentTime()},500);
              
        }


        function checkTime(i) 
        {
           if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
           return i;
        }
	  
      </script>
   
	</head>
	
	<body onload="currentTime()" style="text-align:center;">
	
	  <!-- Call header page -->
	  <?php include("alvarez_header.php"); ?>

      <script>
	  
        loggedInTime();
             
        var temp1;
      
        function loggedInTime( temp )
        {
           var tiempo = new Date();  
           var temp2 =  " &nbsp Logged in: " + tiempo + " &nbsp &nbsp ";
           temp1 = temp2;
           document.write( temp2 );
        }
		
		currentTime();
      
     </script>
	 
	 <font id="txt"></font>
	 <br><br>
	  
	  <!-- Heading "Program 4" -->
	  <table width="100%">
	    <tr>
		  <td align="center">
	        <font face="Times New Roman" color="red" size="5"><strong>Program 4</strong></font>
		  </td>
		</tr>
	  </table>
	  <br>
	  
	  <!-- Call Main Menu -->
	  <?php include("mainMenu.php"); ?>
	  <br>
	  
	  <form method="post" action="controller4.php">
	  
	    <!-- Table for input text-fields -->
	    <table style="width: 50%; margin: 0px auto; padding-right: 10%; align: center">
	       <!--  text type input  -->
           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Telephone &nbsp;
			     <span class="tooltiptext"><font color="yellow">REQUIRED</font></span>
			   </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="Telephone" placeholder="Telephone" value="<?php echo $Telephone; ?>" style="width: 100%;">
             </td>
           </tr>
			
		   <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Email Address &nbsp;
			     <span class="tooltiptext tooltip-left">Enter Email</span>
			   </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="Email" placeholder="Email" value="<?php echo $Email; ?>" style="width: 100%;">
             </td>
           </tr>	
            
           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Last Name &nbsp;
			     <span class="tooltiptext tooltip-left">Enter Last Name</span>
               </div>			   
			 </td>
             <td style="width: 20%;">
               <input type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName; ?>" style="width: 100%;">
             </td>
           </tr>
			
		   <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">First Name &nbsp;
			     <span class="tooltiptext tooltip-left">Enter First Name</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName; ?>" style="width: 100%;">
             </td>
           </tr>
            
           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Address &nbsp;
			     <span class="tooltiptext tooltip-left">Enter Address</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="Address" placeholder="Address" value="<?php echo $Address; ?>" style="width: 100%;">
             </td>
           </tr>
            
           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">City &nbsp;
			     <span class="tooltiptext tooltip-left">Enter City</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="City" placeholder="City" value="<?php echo $City; ?>" style="width: 100%;">
             </td>
           </tr>

           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">State &nbsp;
			     <span class="tooltiptext tooltip-left">Enter State</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="State" placeholder="State" value="<?php echo $State; ?>" style="width: 100%;">
             </td>
           </tr>

           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Country &nbsp;
			     <span class="tooltiptext tooltip-left">Enter Country</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="Country" placeholder="Country" value="<?php echo $Country; ?>" style="width: 100%;">
             </td>
           </tr>

           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Zip &nbsp;
			     <span class="tooltiptext tooltip-left">Enter Zip</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <input type="text" name="Zip" placeholder="Zip" value="<?php echo $Zip; ?>" style="width: 100%;">
             </td>
           </tr>
			  
		   <tr><td> &nbsp; </td> </tr>
			  
		   <!-- CheckBoxes -->
           <tr>
             <td style="width: 15%; text-align: right">
			   <div class="tooltip">Favorite Sports &nbsp;
			     <span class="tooltiptext tooltip-left">Select your Favorite Sports</span>
               </div>
			 </td>
             <td style="width: 20%; text-align: left;">
               <table style="margin: 0px auto; width: 100%; align: left;">
                 <tr>                                    
                   <td><input type="checkbox" name="Football"
				       <?php if ($Football == "Football") echo checked;?> value="Football"> Football </td>                      
                   <td><input type="checkbox" name="Soccer"
                       <?php if ($Soccer == "Soccer") echo checked;?> value="Soccer"> Soccer </td>                      
                   <td><input type="checkbox" name="Baseball"
				       <?php if ($Baseball == "Baseball") echo checked;?> value="Baseball"> Baseball </td>
                   <td><input type="checkbox" name="Basketball" 
				       <?php if ($Basketball == "Basketball") echo checked;?> value="Basketball"> Basketball </td>
                 </tr>      
               </table>
             </td>
           </tr>

           <!--  radio buttons  -->
           <tr>
             <td style="width: 15%; text-align: right;">
			   <div class="tooltip">Favorite Athlete &nbsp;
			     <span class="tooltiptext tooltip-left">Select Your Favorite Athlete</span>
               </div>
			 </td>
             <td style="width: 20%; text-align: left">
               <table style="margin: 0px auto; width: 100%; align: left;">
                 <tr>
                   <td style="text-align: left">
				     <input type="radio" <?php if ($Athlete == "T. Brady") echo "checked"; ?> 
					        name="Athlete" value="T. Brady" checked> T. Brady &nbsp; &nbsp;&nbsp;
					 <input type="radio" <?php if ($Athlete == "L. Messi") echo "checked"; ?>
					        name="Athlete" value="L. Messi" > L. Messi&nbsp;&nbsp;
                     <input type="radio" <?php if ($Athlete == "R. Cano") echo "checked"; ?>
					        name="Athlete" value="R. Cano" > R. Cano &nbsp; &nbsp; &nbsp;  
					 <input type="radio" <?php if ($Athlete == "L. James") echo "checked"; ?>
					        name="Athlete" value="L. James" > L. James	 
                   </td>
                 </tr>
               </table>
             </td>
           </tr>
			
		   <!--  dropdown boxes -->
           <tr>
             <td style="width: 5%; text-align: right;">
			   <div class="tooltip">Age &nbsp;
			     <span class="tooltiptext tooltip-left">Select your Age</span>
               </div>
			 </td>
             <td style="width: 20%; text-align: left;">
               <select name="Age" style="width: 100%" size="1";>
                 <option value="Under_20" <?php if ($Age == "Under_20") echo selected; ?> >Under 20   </option>
                 <option value="20-30"    <?php if ($Age == "20-30")    echo selected; ?> >20-30      </option>
                 <option value="31-40"    <?php if ($Age == "31-40")    echo selected; ?> >31-40      </option>
                 <option value="41-50"    <?php if ($Age == "41-50")    echo selected; ?> >41-50      </option>
                 <option value="51-60"    <?php if ($Age == "51-60")    echo selected; ?> >51-60      </option>
                 <option value="Above_60" <?php if ($Age == "Above_60") echo selected; ?> >Above 60   </option>
               </select>
             </td>
           </tr>
			
           <tr><td> &nbsp; </td> </tr>	

		   <!--  textarea box  -->
           <tr>
             <td style="width: 5%; text-align: right;">
			   <div class="tooltip">Additional Information &nbsp;
			     <span class="tooltiptext tooltip-left">Write any additional information</span>
               </div>
			 </td>
             <td style="width: 20%;">
               <textarea name="Information" placeholder="Information" rows="5" cols="42"><?php echo $Information; ?></textarea>
             </td>
           </tr>
               
           <tr><td> &nbsp; </td> </tr>                                                        
               
           <tr>
             <td style="width: 15%;"> </td>   
             <td style="width: 20%;" align=center>
			   <?php echo $message; ?>
			 </td>
           </tr>
               
           <tr><td> &nbsp; </td> </tr>		
		   		
	     </table>
		 
		 <!-- Table for buttons-->
		 <table style="width: 50%; margin: 0px auto; padding-right: 10%; align: center">
		   <tr>
		     <td style="width: 10%;"></td> 
		     <td style="width: 60%;" align=center>
			   <input type="submit" name="Save"       value="Save">
               <input type="submit" name="Find"       value="Find">     
               <input type="submit" name="Modify"     value="Modify">
               <input type="submit" name="Delete"     value="Delete">
               <input type="submit" name="Clear"      value="Clear">
               <input type="submit" name="Contact_Me" value="Contact_Me">
			   <input type="submit" name="Help" 	  value="Help">
			   <input type="submit" name="About" 	  value="About">			   
			   <input type="hidden" name="found"  	  value="<?php echo $found ?>" >
			 </td>
		   </tr>
		   <tr><td> &nbsp; </td> </tr>
		 </table>
       </form>
	  
	   <!-- Call Main Menu -->
	   <?php include("mainMenu.php"); ?>	  
	</body>
  </html>