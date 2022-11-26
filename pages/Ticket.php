<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Ticket</title>
    <link rel="stylesheet" href="../css/Ticket.css">
</head>
<body>
    <div class="card">
        <div class="imgBx">
            <img src="../images/QRcode.png" alt="">
        </div>
        <div class="content">
            <div class="details">
                <h2> <?php echo $_SESSION['name'];?> <br> <span>AK Travels</span></h2>



                <div class="data">
                    <h3> <?php echo $_SESSION['seat'];?> <br> <span>Seat #</span></h3>
                    <h3>123 <br> <span>Gari #</span></h3>
                    <h3> <?php echo $_SESSION['date'];?> <br> <span>Date</span></h3>
                </div>
                <div class="data" id="data1">
                    <h3> <?php echo $_SESSION['to_d'];?> <br> <span>Towards</span></h3>
                    <h3> <?php echo $_SESSION['from_d'];?> <br> <span>From</span></h3>
                    <h3>10:00PM <br> <span>Time</span></h3>
                    <h3> <?php echo $_SESSION['rent'];?> <br> <span>Rent</span></h3>
                </div>
                <div class="data" id="data2">
                    <h3><span>Plz come to us 30 minutes Before</span></h3>
                </div>



                <div class="actionBtn">
                    <button onclick="window.print();">Print</button>
                    <button>Help</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>