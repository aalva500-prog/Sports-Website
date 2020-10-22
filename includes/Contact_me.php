<!-- ***************************************************************************************
    Page Name  : Contact_me.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 02/24/2020, 3:15 PM   
    Professor  : Michael Robinson 
    Program #  : Program 3
	Purpose    : This page represents the Contact_me page.
    Due Date   : 03/07/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
  <html>
    <head>
	  <title>CONTACT ME</title>
	</head>
	
	<body>
	  <!-- Call header page -->
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
	  
	  <form method="post" action="Contact_me_Controller.php">
	    <table style="width: 50%; margin: 0px auto; padding-right: 10%; align: center">
	      <!--  text type input  -->
          <tr>
            <td style="width: 20%; text-align: right;">Your Email &nbsp;</td>
            <td style="width: 10%;">
              <input type="text" name="Email" value="" style="width: 100%;">
            </td>
          </tr>	  	   
            
          <tr>
            <td style="width: 20%; text-align: right;">Last Name &nbsp;</td>
            <td style="width: 10%;">
              <input type="text" name="LastName" value="" style="width: 100%;">
            </td>
          </tr>
			
		  <tr>
            <td style="width: 20%; text-align: right;">First Name &nbsp;</td>
            <td style="width: 10%;">
              <input type="text" name="FirstName" value="" style="width: 100%;">
            </td>
          </tr>             
			  
		  <tr><td> &nbsp; </td> </tr>
			  
	      <!--  dropdown boxes -->
          <tr>
            <td style="width: 5%; text-align: right;">Age &nbsp;</td>
            <td style="width: 20%; text-align: left;">
              <select name="Age" style="width: 100%" size="1";>
                <option value="Under_20">Under 20   </option>
                <option value="20-30"   >20-30      </option>
                <option value="31-40"   >31-40      </option>
                <option value="41-50"   >41-50      </option>
                <option value="51-60"   >51-60      </option>
                <option value="Above_60">Above 60   </option>
              </select>
            </td>
          </tr>
		  
		  <tr><td> &nbsp; </td> </tr>
		  
		  <!--  radio buttons  -->
          <tr>
            <td style="width: 15%; text-align: right;">Favorite Athlete &nbsp;</td>
            <td style="width: 20%; text-align: left">
              <table style="margin: 0px auto; width: 100%; align: left;">
                <tr>
                   <td style="text-align: left">
				     <input type="radio" name="Athlete" value="T. Brady" checked> T. Brady &nbsp;&nbsp;
					 <input type="radio" name="Athlete" value="L. Messi"        > L. Messi&nbsp;
                     <input type="radio" name="Athlete" value="R. Cano"         > R. Cano &nbsp; &nbsp;  
					 <input type="radio" name="Athlete" value="L. Jame"         > L. James		 
                   </td>
                </tr>
              </table>
            </td>
          </tr>
			  
		  <!-- CheckBoxes -->
          <tr>
            <td style="width: 15%; text-align: right">Favorite Sports &nbsp;</td>
            <td style="width: 20%; text-align: left;">
              <table style="margin: 0px auto; width: 100%; align: left;">
                <tr>                                    
                  <td><input type="checkbox" name="Football"   value="Football"  > Football </td>                        
                  <td><input type="checkbox" name="Soccer"     value="Soccer"    > Soccer </td>                      
                  <td><input type="checkbox" name="Baseball"   value="Baseball"  > Baseball </td>
                  <td><input type="checkbox" name="Basketball" value="Basketball"> Basketball </td>
                </tr>      
              </table>
            </td>
          </tr>         
			
          <tr><td> &nbsp; </td> </tr>	

		  <!--  textarea box  -->
          <tr>
            <td style="width: 5%; text-align:right;">Additional Information &nbsp;</td>
            <td style="width: 20%;">
              <textarea name="Information" rows="5" cols="42"></textarea>
            </td>
          </tr>    
               
          <tr><td> &nbsp; </td> </tr>
			
		  <tr>
            <td style="width: 15%;"> </td>            
            <td style="width: 20%;" align=center> 
			  <input type="submit" name="Submit" value="Submit">              
              <input type="reset" name="Clear"   value="Clear">              
            </td>
          </tr>
			
	      <tr><td> &nbsp; </td> </tr>		
	    </table>
      </form>
	  
	  <!-- Call Main Menu -->
	  <?php include("mainMenu.php"); ?>	  
	</body>
  </html>