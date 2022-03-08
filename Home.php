<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$stdid=$_SESSION['stdid'];
$username=$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Registration | Eritrea Institute Of Technology (EIT)</title>
       <meta charset="UTF-8">
		<link rel="shortcut icon" href="../images1/eit.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            
            body{
                background-color:#f0f0f0;
                
               
                height:100%;
                background-size: cover;
				
            }
            #content{
                width:80%;
                margin:0 auto;
                background-color:WHITE;
              
                 
            }
            
            #part1{
                border: 1px solid;
                height:200px;
                clear:right;
				
				opacity: 1;                         
                background-size:cover;
			    background-image:url('../images1/eit3.jpg');
				
                 
            }
            #part1 img{
                width:200px;
                height:200px;
                float:left;
				}
                
            
            
            
            
            #part2 ul {
                
                list-style: none; <!--disc circle square none-->
                
                
            
                       }
                        #part2 ul li{
                           background-color:teal;
                           border:1px solid white; 
                           width:15%;
                           height:35px;
                           line-height: 35px;
                           text-align:center;
                           float:left;
                           position:relative;
                           opacity:5;
                           border-radius: 8px;
                           margin:3px;
                           clear:right;
                           
                       }    
                       #part2 ul li a{
                           text-decoration: none;
                           color:white;
                           display:block;
                       }
                       #part2 ul li:hover{
                           background-color: silver;
                           display:block;
                           border-radius:8px;
                       }
                      
                       
					                        
                       #part3{
                           padding-top: 50px;
                           padding-left: 15px;
                           width:55%;
                           padding-right:20px;
                           margin-right: 0px;
                           float:left;                           
						   margin-bottom: 0px;
                           
                       }
                       #footer{
                           height:40px;
                           width:100%;
                           margin:0 auto;
                           background-color: #003399;
                           opacity: 3;
                           position:relative;
                           margin-top: 100%;
                          
                           left:0px;
                           bottom:0px;
                           float:bottom;
						   
                       }
                       #footer p{
                       text-align: center;
                           color:white;
                           font-size: 15px;
                           font-weight: bold;
                           padding:5px 0px 0px 0px;
						   
                 
                           
                       }
                       #link{
                          padding-top: 50px;
                          width:35%;
                          position:relative;
                          top:5px;
                          left:0%;
                          right:0px;
                          float:left;
                          clear:right;
                          padding-left:10px;
                          
                       }
                       #link img{
                               width:400px;
                       }

                       
                      
                       
        </style>
        
    
</head>
<body>
        <div id="content">
        <div id='part1'>
            <img src="images1/logo1.gif" alt="COLLEGE OF EIT" />
            
            
            
            
        </div>
        
        
        <div id='part2'>
            
            
                <ul>
                    <li class="list1"><a href="Home.php">Home</a></li>
                    <li class="list2"><a href="Engineering.php">Engineering</a></li>
                    <li class="list3"><a href="Education.php">Education</a>
                        
                    </li>
                   
                    <li class="list5"><a href="Science.php">Science</a>
                    
                    </li>
                     <li class="list4"><a href="semister1.php">Acedemic</a></li>
					 <li class="list4"><a href="admin Login/lo.html">Admin</a></li>
                
                   </ul>
            
            <br/><br/>
            <hr/>
      
            
        </div>
        
        
       
        <div id='part3'>
            <blockquote> <h2>COLLEGE OF EIT</h2>
            <font size=3 face="Calibri Light"><p align="justify"> The Eritrea Institute of Technology (EIT) has launched this new website with contents
			    that guide the visitor through all the colleges and other activities of the Institute.
				As the leading Institute in Eritrea, the EIT encompasses three colleges namely the college
				of Education,the College of Engineering & Technology, and the College of Science.

          </p>
 <p align="justify">With various departments under their respective colleges, detailed 
    information is provided on this website that spans all their respective 
	programs offered. Moreover, important information for students is provided on 
	this online-registration website where they can often surf and get any 
	information related to the current academic year,the curriculum of their 
	home departments, academic calendar & events indicated on it.</p>
 
 
 <p align="justify">This website being the sample version of its kind for the Institute,
	respected viewers are welcome to send your comments and recommendations 
	for improvement and inclusion for future enhancement of the website.</font>
</blockquote>
          
</p>
 <blockquote><hr Noshade>
<h5>College of Engineering</h5>
<p align="justify"><font size=2>The College of Engineering and Technology is composed of seven departments: 
			                    Chemical Engineering, Civil Engineering, Computer Engineering, 
								Electrical and Electronics Engineering, Mechanical Engineering, and Mining Engineering. 
	</p><p align=right><a href="Engineering.php">read more</a></p></font></blockquote>  
<blockquote><hr Noshade>
<h5>College of Education</h5>
<p align="justify"><font size=2>The country has made Education for All and Millennium Development Goals basic
		   priorities in the process of empowering citizens to fully participate
		   in social and economic development. 
	</p><p align=right><a href="Education.php">read more</a><hr Noshade></p></font></blockquote>  
<blockquote>
	<p align="justify"><h5>College of Science</h5><font size=2> The College of Science consists of seven departments: Biology, Chemistry,
		   Computer Science, Earth Science, Library and Information Science, Mathematics
		   and Physics. Each department of the college is offering degree program. 
	</p><p align=right><a href="Science.php">read moreና</a><hr Noshade></p></font>  


 <p align="justify"><b>More info:</b>&nbsp;&nbsp;
     <a href="http://www.eit.edu.er">Eit website</a></p></blockquote>
            
            
            </div>
             
             
             <div id='link'>
                  <font color=darkblue><h2>Registration Day On Eit</h2>
               
                 <font face=nyala size=4> <p>Registration Day  is observed every year on semister I and II in the College of Eit.
                     
                      </p></font></font>
                 
                   <img src="images1/online-registration.jpg"/>
                 <font face=nyala size=4><p align="justify"> The Collge of Eit has registration office and programming office to register students via this website ......
                </p></font></font>
                <img src='images1/11.jpg'/>
                <font color=darkblue face=nyala size=4><p align="justify">The Collge of Eit has registration office and programming office to register students via this website .....</font>.
				</p><center><font color=gray><u color=gray><h2>&nbsp;&nbsp;Academic Calendar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></u></font></center>
				
                <a href="semister1.php"><img src='../images1/images_4.jpg' height=200  /></a>
                
                
                
            </div>
        
        
         <div id='footer'>
            
            <p>&copy; 2017 Eit Online-Registration. All right Reserved.</p>
            
           
        </div>
        
              </div>
           


</body>
</html>
