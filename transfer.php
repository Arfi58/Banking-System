<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customer where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);



    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  
        echo '</script>';
    }


  
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  
        echo '</script>';
    }
    


    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
               
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customer set balance=$newbalance where id=$from";
                mysqli_query($con,$sql);
             

                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customer set balance=$newbalance where id=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(sender,receiver,amount) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>userinfo</title>
    <?php include 'connection.php' ?>
    <?php include 'links.php'?>
    <?php include 'navbar.php'?>
    <style>
        
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }
        body
        {
            background: #ffcccc;
        }
        h1{
            color: #e84393;
        }
         button{
            background: linear-gradient(57deg, #00c6e7, #1e4d92, #00c6e7);
            height: 50px;
            width: 25%;
            background-color: black;
            color: white;
            border-radius: 25px;
            font-weight: bold;
            justify-content: center;
        }
        button:hover{
            box-shadow: 5px 5px 10px #999;
            transition: 0.3s;
        }


    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center pt-2">Make a Transaction</h1>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customer where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2 text-center"><?php echo $rows['id'] ?></td>
                    <td class="py-2 text-center"><?php echo $rows['name'] ?></td>
                    <td class="py-2 text-center"><?php echo $rows['email'] ?></td>
                    <td class="py-2 text-center"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" autocomplete="off" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-2 text-white" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>

</body>
</html>