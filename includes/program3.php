<!-- ***************************************************************************************
    Page Name  : program3.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 02/24/2020, 3:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page represents the Program 3 main page. In this program we extend 
	             our current website creating new pages, using html, css3, php and mySql.
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
  <html>
    <head>
	  <title>Alvarez Aaron Program 3</title>
	</head>
	
	<body>
	  <!-- Call header page -->
	  <?php include("alvarez_header.php"); ?>
	  
	  <!-- Heading "Program 3" -->
	  <table width="100%">
	    <tr>
		  <td align="center">
	        <font face="Times New Roman" color="red" size="5"><strong>Program 3</strong></font>
		  </td>
		</tr>
	  </table>
	  <br>
	  
	  <!-- Call Main Menu -->
	  <?php include("mainMenu.php"); ?>
	  <br>
	  
	  <form method="post" action="controller3.php">
	    <table style="width: 50%; margin: 0px auto; padding-right: 10%; align: center">
	       <!--  text type input  -->
           <tr>
             <td style="width: 15%; text-align: right;">Telephone &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="Telephone" value="<?php echo $Telephone; ?>" style="width: 100%;">
             </td>
           </tr>
			
		   <tr>
             <td style="width: 15%; text-align: right;">Email Address &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="Email" value="<?php echo $Email; ?>" style="width: 100%;">
             </td>
           </tr>	
            
           <tr>
             <td style="width: 15%; text-align: right;">Last Name &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="LastName" value="<?php echo $LastName; ?>" style="width: 100%;">
             </td>
           </tr>
			
		   <tr>
             <td style="width: 15%; text-align: right;">First Name &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="FirstName" value="<?php echo $FirstName; ?>" style="width: 100%;">
             </td>
           </tr>
            
           <tr>
             <td style="width: 15%; text-align: right;">Address &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="Address" value="<?php echo $Address; ?>" style="width: 100%;">
             </td>
           </tr>
            
           <tr>
             <td style="width: 15%; text-align: right;">City &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="City" value="<?php echo $City; ?>" style="width: 100%;">
             </td>
           </tr>

           <tr>
             <td style="width: 15%; text-align: right;">State &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="State" value="<?php echo $State; ?>" style="width: 100%;">
             </td>
           </tr>

           <tr>
             <td style="width: 15%; text-align: right;">Country &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="Country" value="<?php echo $Country; ?>" style="width: 100%;">
             </td>
           </tr>

           <tr>
             <td style="width: 15%; text-align: right;">Zip &nbsp;</td>
             <td style="width: 20%;">
               <input type="text" name="Zip" value="<?php echo $Zip; ?>" style="width: 100%;">
             </td>
           </tr>
			  
		   <tr><td> &nbsp; </td> </tr>
			  
		   <!-- CheckBoxes -->
           <tr>
             <td style="width: 15%; text-align: right">Favorite Sports &nbsp;</td>
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
             <td style="width: 15%; text-align: right;">Favorite Athlete &nbsp;</td>
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
             <td style="width: 5%; text-align: right;">Age &nbsp;</td>
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
             <td style="width: 5%; text-align: right;">Additional Information &nbsp;</td>
             <td style="width: 20%;">
               <textarea name="Information" rows="5" cols="42">
			     <?php echo $Information; ?>
			   </textarea>
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
			
		   <tr>
             <td style="width: 15%;"> </td>            
             <td style="width: 20%;" align=left> 
			   <input type="submit" name="Save"       value="Save">
               <input type="submit" name="Find"       value="Find">     
               <input type="submit" name="Modify"     value="Modify">
               <input type="submit" name="Delete"     value="Delete">
               <input type="submit" name="Clear"      value="Clear">
               <input type="submit" name="Contact_Me" value="Contact_Me">
			   <input type="hidden" name="found"  value="<?php echo $found ?>" >			   
             </td>
           </tr>
			
		   <tr><td> &nbsp; </td> </tr>		
	     </table>
       </form>
	  
	   <!-- Call Main Menu -->
	   <?php include("mainMenu.php"); ?>	  
	</body>
  </html>