<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$stdid=$_SESSION['stdid'];
$user=$_SESSION['username'];
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Online Registration | Eritrea Institute Of Technology (EIT)</title>
        <meta charset="UTF-8"/>
		<link rel="shortcut icon" href="../images1/eit.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="logo1.jpg" type="image/jpg" />
	<style type="text/css">
            
            body{
                  background-color:#f0f0f0;
                                
				background-size:cover;
                
               
                
            }
            #content{
                width:80%;
                margin:0 auto;
                background-color:white;
              
            
                 
            }
            
            #part1{
                border: 1px solid;
                height:200px;
                clear:right;
                background-size: cover;
                background-image:url('../images1/eit3.jpg');
            }
            #part1 img{
                width:200px;
                height:200px;
                float:left;
                
            }
            
            
              #part2 ul {
                
                list-style: none;
                
                
            
                       }
                       #part2 ul li{
                           background-color: teal;
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
                       #part2 ul ul li{
                           width:100%;
                       }
                       #part2 ul ul{
                           position:absolute;
                           display:none;
                       }
                       #part2 ul li:hover > ul{
                           display:block;
                       }
                      #part3{
                           padding-top: 50px;
                           padding-left:15px;
                           width:60%;
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
                           margin-top: 120%;
                          
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
                     #form{
                           position:relative;                          
                          margin:0 auto;
                          width:55%;
                          float:left;
						   padding-left:15px;
                           padding-right:20px;
                          
                       }
                      #form table{
                       border:1px;
                       width:100%; 
					   border-collapse: collapse;
                       font-size:2;
					   font-family:Calibri Light;
					   	}
					  th, td {
                               text-align: left;
                               padding: 6px;
}
tr:nth-child(even){background-color: #f0f0f0}
                       #tr{
                           background-color: lightblue;
                       }
					   #tri{
                           background-color:#f0f0f0 ;
                       }
                                            
					  #link{
						   border: 0px solid;
						    border-radius:20px;
						  background-color:#f0f0f0;
                          padding-top: 70px;
                          width:35%;
                          position:relative;
                          top:50px;
                          left:0%;
                          right:0px;
                          float:left;
                          clear:right;
                          padding-left:10px;
						  height:1000px;
                         
                       }
                       #link img{
                               width:240px;
                       }

                       
                                
                       
                         
                     
        </style>
        
    </head>
    <body>
        <div id="content">
        <div id='part1'>
            <img src="../images1/logo1.gif" alt="college of eit" />
            
            
            
        </div>
             <div id='part2'>
            
            
                <ul>
                    <li class="list1"><a href="Home.php">Home</a></li>
                    <li class="list2"><a href="Engineering.php">Engineering</a></li>
                    <li class="list3"><a href="Education.php">Education</a></li>
                    <li class="list5"><a href="Science.php">Science</a>
                    
                    </li>
                     <li class="list4"><a href="semister1.php">Acedemic</a></li>
					 <li class="list4"><a href="admin Login/lo.html">Admin</a></li>
                
                </ul>
            
            <br/><br/>
            <hr/>
      
             <div id="form">
                 <h1>Academic Year 2018 and 2019</h1>
                 <br/>
                 <br/>
                 <p>Academic Year 2018 and 2019 is observed every year on semister I and II in the College of Eit.
                      </p>
                 <table>
				     <tr id="tri">
                     <td colspan=2 ><center>SEMESTER: I</center></td>  
                     </tr>
                     <tr id="tr">
                     <th>Date</th>  <th>Programs</th>
                     </tr>
                     <tr>
                               <td>27/08/2018 </td> <td>Academic staff report to duty.</td>
                                 
                     </tr>
                     <tr>
                         <td>28-30/08/2018</td> <td> 	Re-sit/make-up examinations </td>
                     </tr>
					 <tr>
                         <td>06/09/2018</td> <td> 	- Last day for reporting results of re-sit /make-up examination from colleges to the Registrar's Office </td>
                     </tr>
                <tr>
                         <td>08/09/2018 </td> <td> 	Registration of Freshman students </td>
                     </tr>
                <tr>
                         <td>09/09/2018</td> <td>Registration of 2nd year and above students, including students who took re-sit/make-up examinations</td>
                     </tr>
                <tr>
                         <td>15/09/2018  </td> <td>	First semester classes begin , Late registration with penalty</td>
                     </tr>
                <tr>
                         <td>22-23/09/2018  </td> <td>	Add and drop of courses</td>
                     </tr>
                <tr>
                         <td>23/09/2018 </td> <td>	Orientation of Freshman Students </td>
                     </tr>
                <tr>
                         <td>20/10/2018 </td> <td>	Deans to Programming Office First semester staff load </td>
                     </tr>
                <tr>
                         <td>24/10/2018  </td> <td>	Programming Office to Vice President and Deans previous semester statistical report</td>
                     </tr>
                <tr>
                         <td>03/11/2018</td> <td> 	Deans to Programming Office list of students with Add/Drop of courses </td>
                     </tr>
                <tr>
                         <td>10-21/11/2018</td> <td> 	Mid Semester examination period </td>
                     </tr>
                <tr>
                         <td>19-27/11/2018</td> <td> 	Readmission application to Second semester </td>
                     </tr>
                <tr>
                         <td>28/11/2018</td> <td> 	Deans to Programming Office Second semester course offering </td>
                     </tr>
                <tr>
                         <td>05/12/2018</td> <td> 	Last day of withdrawal without being regarded as having completed the semester work , Registrar to Deans- Readmission application </td>
                     </tr>
                <tr>
                         <td>18/12/2018 </td> <td> 	Programming Office to Deans,Final Examination schedule , Deans to Registrar-readmission list</td>
                     </tr>
                <tr>
                         <td>02/01/2018</td> <td> 	First semester classes end </td>
                     </tr>
                <tr>
                         <td>5-16/01/2018</td> <td> 	First semester examination period </td>
                     </tr>
                <tr>
                         <td>26-27/01/2018  </td> <td>	Academic Senate meeting</td>
                     </tr>
                <tr>
                         <td>28/01/2018</td> <td> 	Last day for reporting grade reports to the Registrar’s office </td>
                     </tr>
                <tr>
                         <td>29/01/2018</td> <td> 	Grade report submission to students </td>
                     </tr>
                <tr>
                         <td>29-30/01/2018 </td> <td>	Application for reviewing examination papers </td>
                     </tr>
                                
                 </table><br>
				 <hr>
                 <br><br>
        <div id='part2'>
                    <ul>
                    <li class="list1"><a href="contact-us.php">Contact-Us</a>
                		</li>
                    <li class="list2"><a href="#">Semester I</a></li>
                    <li class="list3"><a href="semister2.php">Semester II</a></li>
            </ul>
			</div>
			</div>
        <div id='link'>     
      <blockquote>                             
   <h2>Public Holidays</h2>
<font size=2>
<p><font color=blue>2018</font></p>
<p>01 September................. Armed Struggle Day</p>
<p>12 September ................New Year (Geez)</p>
<p>28 September ................Feast of the Cross</p>
<p>24 December ................ Eid Mewlid Alnebi</p>
<p>25 December ................. Christmas</p>
<p><font color="blue">2019</font></p>
<p>01 January.........................New Year</p>
<p>07 January.........................Geez Christmas</p>
<p>20 January.........................Geez Epiphny</p>
<p>08 March...........................International Women’s Day</p>
<p>29 April.............................Good Friday</p>
<p>01.....................................Easter</p>
<p>01 May..............................Workers’ Day</p>
<p>24 May..............................Independence Day</p>
<p>20 June.............................Martyrs’ Day</p>
<p>18 July..............................Id Al Fater</p>
 </font>            
                </blockquote>
            </div>
        
      
                    
 
        
        
        <div id='footer'>
            
            <p>&copy;2017 College of Eit online-registration. All right Reserved. </p>
            
            
       
        
        </div>
         </div>
</body>
</html>
