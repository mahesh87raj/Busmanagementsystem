<?php

include 'homehead.php';
?>


<style >
  .container{
     border-spacing: 10px;
     font-family: Montserrat, sans-serif;
     font-size: 18px !important;
     border: 2px solid grey;
     margin-top: 50px;
     margin-bottom: 200px;
     padding-top: 50px;
     padding-right: 120px;
     padding-bottom: 50px;
     padding-left: 150px;
     align-content: center;

    }
    div.container {
      background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    }
</style>

<html>
<head>
<link rel='stylesheet' href='index.css'>
<br><br>
  <h1   text-transform: capitalize;><center><b style="background: rgba(12, 18, 38, 0.74); padding:5px; border-radius: 5px"> Welcome To Quick-BT Booking Portal </center></b></h1>

<div class="container">

  <td><a href='book.php'><button style="background-color: rgba(12, 13, 13, 0.67) ; border-color:black "  ><img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp&nbspBook Train Tickets </button></a></td>
 </tr> 
<br> <br> 

<tr>

<td><a href='bookbus.php'><button style="background-color: rgba(12, 13, 13, 0.67) ; border-color:black  "><img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp&nbspBook Bus Tickets</button></a></td></td>
</tr>
</table>
</tr>
</div>
<?php include 'footer.php';
?> 

</html>