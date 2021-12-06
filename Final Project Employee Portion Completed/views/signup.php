

<html>
<head>
	<title>Signup Page</title>
</head>
<body>
    <a href="bankemp.php">Back</a><br>
    <!-- <a href="../controller/logout.php">Logout</a> -->
    <br>
    <form method="post" action="../controller/signupCheck.php">
    	<fieldset>
    		<legend>Sign-Up</legend>
                        <table border="1" width="80%" align="center">
                            <tr height="150px">
                                  <th colspan="3" align="right">
                                        <img src="../assets/bank_x.png" width="420px" height="150px" style="float: left" /><br>
                                        <center>
                                        
                                        
                                        </center>
                                        <br><br><br>
                                        
                                  </th>
                                  
                            </tr>

                            <tr height="350px">
                                
                                  <td colspan="3" width="300px" align="left">

                                        <table border="1" width="100%">
                                            <tr height="100px">
                                                <td colspan="3">
                                                    <center>
                                                        <h1>---- Sign-Up Below ----</h1>
                                                    
                                                    </center></td>
                                                
                                            </tr>

                                            <tr height="50px">
                                                <td width="200px" align="center">User Name</td>
                                                <td align="center">
                                                    <input type="text" name="username" value="" placeholder="User name"> <br>
                                                </td>
                                                <td width="50px"></td>
                                            </tr>

                                            <tr height="50px">
                                                <td width="200px" align="center">Password</td>
                                                <td align="center">
                                                    <input type="Password" name="password" value="" placeholder="Password"> <br>
                                                </td>
                                                <td width="50px"></td>
                                            </tr>

                                            <tr height="50px">
                                                <td width="200px" align="center">Retype Password</td>
                                                <td align="center">
                                                    <input type="Password" name="repassword" value="" placeholder="retypr your password"> <br>
                                                </td>
                                                <td width="50px"></td>
                                            </tr>

                                            <tr height="50px">
                                                <td align="center">Gender</td>
                                                <td align="center">
                                                    <input type="radio" name="gender" value="Male"> Male
                                                    <input type="radio" name="gender" value="Female">Female
                                                    <input type="radio" name="gender" value="Other">Other <br>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr height="50px">
                                                <td align="center">Blood Group</td>
                                                <td align="center">
                                                    <select name="bloodgroup">
                                                        <option selected value="A+">A+</option>
                                                        <option value="A-"> A-</option>
                                                        <option value="B+"> B+</option>
                                                        <option value="B-"> B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+"> O+</option>
                                                        <option value="O-"> O-</option> 

                                                    </select><br>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr height="50px">
                                                <td align="center">Date of Birth</td>
                                                <td align="center">
                                                    <input type="date" name="date" value="">(mm/dd/yyyy)
                                            <br>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr height="50px">
                                                <td width="200px" align="center">Address</td>
                                                <td align="center">
                                                    <textarea name="address"></textarea> <br>
                                                </td>
                                                <td width="50px"></td>
                                            </tr>

                                            <tr height="50px">
                                                <td align="center">Email</td>
                                                <td align="center">
                                                    <input type="email" name="email" value="" placeholder="hint:sample@example.com"> <br>
                                                </td>
                                                <td></td>
                                            </tr>
                                            

                                            <tr height="50px">
                                                <td align="center">Education</td>
                                                <td align="center">
                                                    <input type="checkbox" name="education[]" value="SSC">SSC 
                                                    <input type="checkbox" name="education[]" value="HSC">HSC 
                                                    <input type="checkbox" name="education[]" value="BSc">BSc 
                                                    <input type="checkbox" name="education[]" value="MSc">MSc
                                                    <input type="checkbox" name="education[]" value="PHD">PHD
                                                    <input type="checkbox" name="education[]" value="BBA">BBA 
                                                    <input type="checkbox" name="education[]" value="MBA">MBA   <br>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr height="50px">
                                                <td align="center">Designation</td>
                                                <td align="center">
                                                    <select name="designation">
                                                        <option selected value="Accounts Manager">Accounts Manager</option>
                                                        <option value="Bank Teller"> Bank Teller</option>
                                                        <option value="Banker"> Banker</option>
                                                        <option value="Loan Processor"> Loan Processor</option>
                                                        <option value="Investment Representative"> Investment Representative</option>
                                                        <option value="Credit Analyst"> Credit Analyst</option>
                                                        <option value="Investment Banker"> Investment Banker</option>
                                                        <option value="Relationship Manager"> Relationship Manager</option> 
                                                        <option value="Customer Officer"> Customer Officer</option>
                                                        <option value="IT Officer"> IT Officer</option>
                                                        <option value="Project Manager"> Project Manager</option>

                                                    </select><br>
                                                </td>
                                                <td></td>
                                            </tr>

                                            <!-- <tr height="50px">
                                                <td align="center">Photo</td>
                                                <td colspan="2" align="center">
                                                    <input type="file" name="" value="">
                                            <br>
                                                </td>
                                            </tr> -->

                                            <tr height="50px">
                                                <td colspan="3"></td>
                                            </tr>

                                            <tr height="50px">
                                                <td colspan="3" align="right">
                                                    <a href="completed.html"><input type="submit" name="submit" value="Submit"></a>
                                                    <input type="reset" name="" value="Reset">
                                                </td>
                                                
                                            </tr>

                                        </table>
                                  
                                  <center>
                                  
                                  </center>
                                  </td>
                                  
                            </tr>

                            <tr height="50px">
                                  <td colspan="3" align="center">copyright © 2021</td>
                                  
                            </tr>
                      </table>     

    	</fieldset>
    </form>
</body>
</html>

<!-- <table border="1" width="70%">
                        <tr height="100px">
                            <td colspan="3"></td>
                            
                        </tr>

                        <tr height="50px">
                            <td width="200px" align="center">Name</td>
                            <td align="center">
                                <input type="text" name="" value="" placeholder="Name"> <br>
                            </td>
                            <td width="50px"></td>
                        </tr>

                        <tr height="50px">
                            <td align="center">Email</td>
                            <td align="center">
                                <input type="text" name="" value="" placeholder="hint:sample@example.com"> <br>
                            </td>
                            <td></td>
                        </tr>

                        <tr height="50px">
                            <td align="center">Gender</td>
                            <td align="center">
                                <input type="radio" name="gend" value=""> Male
                        <input type="radio" name="gend" value="">Female
                        <input type="radio" name="gend" value="">Other <br>
                            </td>
                            <td></td>
                        </tr>

                        <tr height="50px">
                            <td align="center">Date of Birth</td>
                            <td align="center">
                                <input type="date" name="gend" value="">(mm/dd/yyyy)
                        <br>
                            </td>
                            <td></td>
                        </tr>

                        <tr height="50px">
                            <td align="center">Blood Group</td>
                            <td align="center">
                                <select>
                            <option selected>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>A-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option> 

                        </select><br>
                            </td>
                            <td></td>
                        </tr>

                        <tr height="50px">
                            <td align="center">Degree</td>
                            <td align="center">
                                <input type="checkbox" name="option[]" value="">SSC 
                                <input type="checkbox" name="option[]" value="">HSC 
                                <input type="checkbox" name="option[]" value="">BSc 
                                <input type="checkbox" name="option[]" value="">MSc <br>
                            </td>
                            <td></td>
                        </tr>

                        <tr height="50px">
                            <td align="center">Photo</td>
                            <td colspan="2" align="center">
                                <input type="file" name="" value="">
                        <br>
                            </td>
                        </tr>

                        <tr height="50px">
                            <td colspan="3"></td>
                        </tr>

                        <tr height="50px">
                            <td colspan="3" align="right">
                                <a href="completed.html"><input type="submit" name="" value="Submit"></a>
                                <input type="reset" name="" value="Reset">
                            </td>
                            
                        </tr>

                    </table> -->
         
///another

         <!-- <fieldset>

                                        <legend><b>Employee Profile</b></legend>
                                        <img src="../assets/empty.png" width="100px" height="100px" style="float: right" /><br>

                                        
                                        <b>name:</b> <input type="text" name="name" value="Akash"> <br>
                                        --------------------<br>
                                        <b>Email:</b> <input type="email" name="email" value="na.akash715@gmail.com"><br>
                                        --------------------<br>
                                        <b>Gender: </b><input type="radio" name="gender" value="">Male
                                                       <input type="radio" name="gender" value="">Female
                                                       <input type="radio" name="gender" value="">Other<br>
                                        
                                        <button style="float: right">Change Profile Pic</button><br>

                                        --------------------<br>

                                        <b>Date Of Birth:</b><input type="date" name="date" value="24/05/1999">  <br>
                                        --------------------<br>
                                        <b>Designation: </b><input type="text" name="name" value="Accountant">  <br>
                                        --------------------<br>

                                  </fieldset><br> -->