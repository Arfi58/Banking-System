<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <?php include 'connection.php'?>
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
            font-size: 22px;
            color: #e84393;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: bold;
        }
        table{
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.04);
            border-radius: 10px;
            margin: auto;
        }
        th,td{
            border: 1px solid #f2f2f2;
            padding: 6px 30px;
            text-align: center;
            color: grey;
        }
        th{
            text-transform: uppercase;
            font-size: 16px;
        }
        td{
            font-size: 15px;
        }
        .email-style{
            font-size: 14px;
            color: grey;
            display: inline-block;
            background: #f2f2f2;
            border-radius: 2px;
            line-height: 30px;
            padding: 0 14px;
        }
        .fa-user{
            color: lightblue;
        }
        .fa-user:hover{
            cursor: pointer;
        }
        
</style>

</head>

<body>
	<div class="container">
        <h1>Transaction History</h1>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered text-white ">
        <thead>
            <tr>
                <th class="text-center">Sl. No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sl. no.']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['date and time']; ?> </td>
            </tr>    
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</body>
</html>