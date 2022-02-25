<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know your candidate</title>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php 
        include_once("config.php");
     ?>
    <div class="center1">
        <div style="margin-top: 60px;">
            <span class="arrange">CONSITUENCY
                110</span>
            <p class="w3-center paranice" style="font-size:23px;">KNOW
                YOUR</p>
            <p class="w3-center paranice" style="font-size:30px;">
                CANDIDATES</p>
        </div>
    </div>


    <?php

            $result = $conn->query("select * from details");
            $result1 = $conn->query("select * from election_details");
        ?>
    <div class="center outlineYellow">


        <div style="margin-left: 10px;margin-top:10px;background-color: white;">
            <p class="w3-center" style="margin: 0px;">Electoral Commission - Sierra Leone</p>

            <img src="./images/sl.png" alt="" height="50px" style="float:left; margin-left:5px">
            <span class="w3-center parliamentary">PARLIAMENTARY
                RE-RUN ELECTION 2019</span>
            <img src="./images/nec.png" alt="" height="50px" float="right">
            <p class="w3-center westernArea">WESTERN AREA RURAL CONSTITUENCY
                110</p>
            <p class="w3-center" style="font-size:8px;margin: 0;">Choose ONLY ONE (1) CANDIDATES and put a mark inside
                the box next to the candidate of your choice</p>



        </div>

        <table>

            <?php
               while ($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo "<td><img src='".$row['candidate_photo']."' height='100px' alt=''></td>";
                   echo "<td class='w3-center'>
                   <p class='design' style='margin:0px; margin:0px; text-transform:uppercase; font-size:'>".$row['candidate_lname']."</p> <p class='design' style='margin:0px;margin:0px'>".$row['candidate_mname']."</p> <p class='design' style='margin:0px;'>".$row['candidate_fname']."</p> </td>";
                   echo "<td><img src='".$row['political_party_photo']."' height='100px' alt=''></td>";
                   echo "<td></td>";
                   echo "</tr>";
               }

            ?>

        </table>
        <div class="footer">
            <p class="w3-center vote_date">VOTE ON 24th AUGUST, 2019 FROM
                7:00am TO 5:00pm</p>
            <p class="w3-center" style="font-size:9.4px;margin:0px">Issued by the Electoral Commission, O.A.U, Drive,
                Tower Hill, Freetown, Sierra Leone.</p>
        </div>
    </div>


</body>

</html>