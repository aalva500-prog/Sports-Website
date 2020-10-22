<!-- ***************************************************************************************
    Page Name  : mainMenu.php
	Author     : Aaron Alvarez
	URL        : ocelot.aul.fiu.edu/~aalva500
    Course     : WEB-Online, 02/18/2020, 6:23 PM   
    Professor  : Michael Robinson 
    Program #  : Program 2
	Purpose    : This page contains the dropdown menu to use in Program 2.
    Due Date   : 02/18/2020
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Aaron Alvarez }..........

  **************************************************************************************** -->
 <html>
   <head>
     <title>Drop Down Menu</title>
	 
	 <style type ="text/css"> 
        
        nav ul ul 
        {
            display: none;
        }
        
        
        nav ul li:hover > ul 
        {
            display: block;
        }
        
          
        nav ul 
        {
            background: #efefef; 
            background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
            background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
            background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 5px;
            border-radius: 10px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
        
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
	    }
                
                
        nav ul li 
        {
                float: left;
        }
        
        
	    nav ul li:hover 
        {
                background: #4b545f; 
                background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
                background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }
                
                
        nav ul li:hover a 
        {
                color: #ffffff; /*=white#ff00ff; /*#fff; */ /*menu name color */
        }
                
                
        nav ul li a 
        {
                display: block; padding: 15px 45px;
                color: blue; /* main menu name #757575;*/ text-decoration: none;
	    }
                
                
        nav ul ul 
        {
                background: lightslategray; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
        }
        
        
	    nav ul ul li 
        {
		float: none; 
		border-top: 1px solid white; /*#6b727c; */ /*border top */
		border-bottom: 1px solid #575f6a; /*border down */
		position: relative;
	    }
	
	
        nav ul ul li a 
        {
                padding: 10px 40px;
                color: #fff;
        }	
                
                
        nav ul ul li a:hover 
        {
                background: blue; /* #4b545f; */ /*submenu background color*/
        }
                
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }
    </style>
   </head>
	
   <body>
     <nav align="center">
       <ul>
	     <li><a href="../index.html">Home</a></li>  
         <li><a href="#">Program 1</a>
           <ul> 
             <li><a href="../includes/pgm1.html">Program 1</a></li>
             <li><a href="../includes/page1.html">Page 1</a></li>
             <li><a href="../includes/page2.html">Page 2</a></li> 
             <li><a href="../includes/page3.html">Page 3</a></li>
             <li><a href="../includes/page4.html">Page 4</a></li> 
             <li><a href="../index.html">Home</a></li>
          </ul>
		</li> 
        <li><a href="program2.php">Program 2</a></li>
		<li><a href="program3.php">Program 3</a></li>
		<li><a href="program4.php">Program 4</a></li>
	  </ul>
     </nav>
   <body>
 </html>