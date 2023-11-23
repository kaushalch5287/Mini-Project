<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body class="bod" id="donor">
    
    <div class="container">
    
        <h3>Donator Details:</h3>
    
    </div>
    <br>
    <form action="/Action.php" method="post">
        
        <div class="name">

            Donor's Name:<input type="text" placeholder="Enter Name" class="one" name="d_name">
        
        </div>

        <div class="parents">

            <div class="father">
                Father's Name:<input type="text" placeholder="Enter Name" class="two" name="d_f_name">
            </div>
            <div class="mother">
                Mother's Name:<input type="text" placeholder="Enter Name" class="two" name="d_m_name">
            </div> 

        </div> 
        <div class="birth">     
            <div>
                            Date of Birth :&emsp;<input type="date" class="three" name="dob" >
            </div>

            <div>
                            Blood-Group:&emsp;<select name="b_group" id="Group" class="three">
                            <option value="Select">Select</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            </select>
            </div>

            <div>
                            Gender:&emsp;<select name="gender" id="Gender" class="three">
                            <option value="Select">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Inter-Sex">Inter-Sex</option>
                                </select>
            </div>

        </div>
        <div class="details">
            
            <div class="ph">
                Phone Number:<input type="number" placeholder="Enter Number" class="four" name="p_no">
            </div>
            
            <div class="email">
                Email-Id:<input type="email" placeholder="Enter Gmail-Id" class="six" name="e_mail">
            </div>

        </div>

        <div class="address">
            
            Address:<input type="textarea" placeholder="Address" class="five" name="addr">
        
        </div>
        
        <div class="detailadd">

            City:<input type="text" placeholder="City" class="other" name="city">
            State:<input type="text" placeholder="State" class="other" name="state">
            Pin-Code:<input type="number" placeholder="PinCode" class="other" name="pincode" >
            
        </div>
        
        <div class="extra">
            
            <div class="weight">

                Weight:<input type="text" placeholder="Weight" class="other" name="weight">
            
            </div>

            <div class="pulse">

                Pulse:<input type="text" placeholder="Pulse" class="other" name="pulse">
            
            </div>

            Haemoglobin:<input type="text" placeholder="Haemoglobin" class="other" name="haemo">

        </div>

        <div class="bp">

            BP:<input type="text"  placeholder="Blood Pressure" class="other" name="bp">
        
            Temperature:<input type="text" placeholder="Temperature" class="other" name="temp">
        
        </div>

        <div class="choice">
        
            Have you donate previously:
        
            <label for="Yes">
                <input type="radio" value="Yes" name="previously"  id="Yes" class="other">Yes
            </label>

            <label for="No" >
                <input type="radio" name="previously"  id="No" class="other">No
            </label>
        
        </div>

        <div class="last">

        What was the last time you donated blood: <input type="date" id="" class="other" name="ques">
        
        </div>
        <td align="center">
            <input type="submit" name="subBtn" id="">
        </td>
    </form>

    <?php
extract($_POST);
        if (isset($subBtn))
        {
            include_once("./major_db_conn.php");
            $link = mysqli_connect($hostName,$userName,$password,$databaseName);
            // $qry = "insert into tab_stu_data(rollnum,stu_name,stu_email,stu_password,stu_addr)
            // values($i_roll,'$i_snm','$i_mail_id','$i_pwd','$i_addr')";

             $qry = "insert into d_details(d_name, d_f_name, d_m_name, dob,
              b_group, p_no, e_mail, addr, city, state,pincode, weight, pulse, haemo, bp, temp, ques)
             values('$cnm','$cphone','$cmail','$c_pwd')";

            $r = mysqli_query($link,$qry);
            // echo $r;
            if($r==1)
                echo "Record Inserted";
            else 
                echo "Insertion Failed";

                
            mysqli_close($link);
        }

        ?>
    
</body>
</html>