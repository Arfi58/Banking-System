<!DOCTYPE html>
<html>
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
            background: linear-gradient(#ffcccc, #ff4d4d);
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
        .fa-exchange{
            color: lightblue;
        }
        .fa-exchange:hover{
            cursor: pointer;
            color: purple;
        }
        
</style>

</head>

<body>
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($con,$sql);
        ?>
    <div class="main-div">
        <h1>List of all Customers</h1>
            <div class="center-div">
                <div class="table-responsive">
                        <table class="table-hover">
                        <thead>
                            <tr>
                            <th> Id </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Balance </th>
                            <th> Start Transaction </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $rows['id'] ?></td>
                                <td><?php echo $rows['name']?></td>
                                <td><span class="email-style"><?php echo $rows['email']?></span></td>
                                <td><?php echo $rows['balance']?></td>
                                <td><a href="/banking/transfer.php?id= <?php echo $rows['id'] ;?>"> <i class=" fa fa-2x fa-exchange" aria-hidden="true"> </i> </a></td> 
                            </tr>
                            <?php
                                }
                            ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
</body>
</html>