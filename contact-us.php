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
        <title>Eit online-registration</title>
        <meta charset="UTF-8"/>
		<link rel="shortcut icon" href="../images1/eit.png" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="logo1.jpg" type="image/jpg" />
	<style type="text/css">
            
            body{
                background-color:#f0f0f0;
                
                background-size:cover;
                font-family:Fallback, sans-serif;
               
                
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
            #part1 h1{
                
                text-align: center;
                  color:darkblue;
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
                       
					   #footer{
                           height:40px;
                           width:100%;
                           margin:0 auto;
                           background-color: #003399;
                           opacity: 3;
                           position:relative;
                           margin-top: 85%;
                          
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
						   padding-left:150px;
                           padding-right:20px;
						    
						     
                       }
                      	     #form img{
                               width:100px;
                               height:100px;
                               float:left;
                }
						   
            
					  #form table{
                       border:1px;
                       width:130%; 
					   border-collapse: collapse;
                       font-size:2;
					   font-family:Calibri Light;
					   	}
					  th, td{
                               text-align: left;
                               padding: 6px;
}
tr:nth-child(odd){background-color: #f0f0f0}
                       #tr{
                           background-color: lightblue;
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
                 <img src="images1/phone.jpg"><font color=tomato ><h1>Enquiries</h1></font>
                 
                 <br/>
                 <table>		                        
                       <tr id="tr">
                     <th>Office sort descending</th>  <th>Telephone</th>
                     </tr>
                     <tr>
                               <td>Cafeteria (Lower Campus)  </td> <td> 	08202681</td>
                                 
                     </tr>
                     <tr>
                         <td>Cafeteria (Upper Campus)</td> <td> 	08202682  </td>
                     </tr>
					 <tr>
                         <td>Dean of the College of Education</td> <td> 	08202693 </td>
                     </tr>
                <tr>
                         <td>Dean of the College of Engineering and Technology. </td> <td> 	08202692  </td>
                     </tr>
                <tr>
                         <td>Dean of the College of Science</td> <td> 	08202691 </td>
                     </tr>
                <tr>
                         <td>Director of Administration and Finance</td> <td> 	08371121   </td>
                     </tr>
                <tr>
                         <td> Director of Freshman Program </td> <td> 	08202690 </td>
                     </tr>
                <tr>
                         <td>Director of ICT & Tele-Education Center 	08213759  </td> <td> 	08213759   </td>
                     </tr>
                <tr>
                         <td>Director of Registrar Office</td> <td> 	08370931 	 </td>
                     </tr>
                <tr>
                         <td>Director of Research and Post Graduate Studies 	08202694  </td> <td> 	08202694 </td>
                     </tr>
                <tr>
                         <td>Director of Student Affairs </td> <td>	08371128 </td>
                     </tr>
                <tr>
                         <td>Head of Academic Standards and Monitoring</td> <td> 	08210932  </td>
                     </tr>
                <tr>
                         <td>Health Service (Ambulance & Emergency call)</td> <td> 	08202680  </td>
                     </tr>
                <tr>
                         <td>Vice President for Academic Affairs </td> <td>	08371120 </td>
                     </tr>
                             
                                
                 </table><br>
				 <p align="justify"><b>P.O.Box: 12676, Asmara, Eritrea</b><br>
                                     <b>Fax: 08373092</b>
                     </p>
					 <hr width="765">
                 <br>
        <div id='part2'>
                    <ul>
                    <li class="list1"><a href="contact-us.php">Contact-Us</a>
                		</li>
                    <li class="list2"><a href="semister1.php">Semester I</a></li>
                    <li class="list3"><a href="semister2.php">Semester II</a></li>
            </ul>
			</div>
			</div>
      
                    
 
        
        
        <div id='footer'>
            
            <p>&copy;2017 College of Eit online-registration. All right Reserved. </p>
            
            
       
        
        </div>
         </div>
</body>
</html>
