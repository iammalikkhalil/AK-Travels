<?php
session_start();
    $con= mysqli_connect("localhost","root","","travel");
    $id = $_POST['id'];
    $to_d = $_POST['to_d'];


    $query="select * from data where id='$id' and to_d='$to_d'";    
    $run=mysqli_query($con,$query);
    
    //assigning value to name
    
    $q2="select name from data where id='$id'";
    $run2=mysqli_query($con,$q2);
    $row2 = mysqli_fetch_array($run2);
    $_SESSION['name'] = $row2['name'];
    
    //assigning value to seat
    
    $q3="select seat from data where id='$id'";
    $run3=mysqli_query($con,$q3);
    $row3 = mysqli_fetch_array($run3);
    $_SESSION['seat'] = $row3['seat'];
    
    //assigning value to from_d
    
    $q4="select to_d from data where id='$id'";
    $run4=mysqli_query($con,$q4);
    $row4 = mysqli_fetch_array($run4);
    $_SESSION['to_d'] = $row4['to_d'];


    //assigning value to date
    
    $q5="select date from data where id='$id'";
    $run5=mysqli_query($con,$q5);
    $row5 = mysqli_fetch_array($run5);
    $_SESSION['date'] = $row5['date'];
        
    
    //assigning value to from_d
    
    $q6="select from_d from data where id='$id'";
    $run6=mysqli_query($con,$q6);
    $row6 = mysqli_fetch_array($run6);
    $_SESSION['from_d'] = $row6['from_d'];
   
   
   
    //assigning value to rent
    
    $q7="select rent from data where id='$id'";
    $run7=mysqli_query($con,$q7);
    $row7 = mysqli_fetch_array($run7);
    $_SESSION['rent'] = $row7['rent'];
        




    if(!mysqli_fetch_array($run))
    {
        echo '<script>alert("No Ticket is Booked By this CNIC");</script>';
        echo '<meta http-equiv="refresh" content="0; url=../pages/print.html">';
    }
    else
    {
            echo '<meta http-equiv="refresh" content="0; url=../pages/Ticket.php">';   
    }
?>