<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://static.vecteezy.com/system/resources/previews/007/849/341/original/blood-donation-equipment-background-free-vector.jpg">      
    <section class='mt-3'>
            <div class='container-fluid'>
                <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div align='center'>
            <?php
             include_once("./mini_db_conn.php");
             $link = mysqli_connect($hostName,$userName,$password,$databaseName);
             $qry = "select b_group from d_details";
              $resultset = mysqli_query($link,$qry);
              ?>
            <input type="text" name="i_snm" id="" list="mylist" class="mt-10" >
            <datalist id="mylist">
            <?php
                while ($row=mysqli_fetch_assoc($resultset))
                echo "<option>$row[b_group]<option>";
            ?>
            </datalist>
            <input type="submit" name="showBtn" id="" value="Show Record ">
            <?php
                extract($_POST);
                if(isset($showBtn))
                {
                    $qry="select * from d_details where b_group='$i_snm'";
                    // echo $qry;
                    $resultset = mysqli_query($link,$qry);
                    $row = mysqli_fetch_assoc($resultset);
                    extract($row);
                }
           ?>
<table border='2px' width='300px'>
    <tr>
        <td>
            Name
        </td>
        <td>
            <input type="text" name='snm' value="<?php if(isset($showBtn)) echo $d_name; ?>">
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <input type="email" name='i_mail_id' value="<?php if(isset($showBtn)) echo $e_mail; ?>">
        </td>
    </tr>
    <tr>
        <td>
            Blood Group
        </td>
        <td>
            <input type="text" name='b_group' value="<?php if(isset($showBtn)) echo $b_group; ?>">
        </td>
    </tr>
    <tr>
        <td>
           Address
        </td>
        <td>
            <textarea name="i_addr" id="" >
           <?php 
           if(isset($showBtn)) echo $addr; 
           ?>
            </textarea>
        </td>
    </tr>
    <!-- <tr>
        <td colspan="2" align="center">
            <input type="Submit" name="updateBtn" id="" value="Update">
        </td>
    </tr> -->
</table>
        </div>
</div>
            </div>
</section>
</body>
</html>
