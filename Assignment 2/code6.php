<html>
<head>
    <title>Best Fantasy Charcters Ever</title>

    <style>
        .table{

            border: 1px solid black;
            padding: 10px;
            margin: 10px;
            border-collapse: collapse;

        }


        th, td{
            border: 1px solid black;

        }

    </style>
</head>
<body>
<?php

$name = array("Bilbo Baggins" , "Harry Potter", "Tyrion Lannister", "Gandalf", "Belle", "Hermione Granger");
$username = array("ringbearer", "theboywholived", "thelittlelion", "thewanderingwizard", "belletheprincess", "littlemissperfect" );
$email = array("ringbearer@hobbit.com", "harrypotter@hogwarts.com", "thelittlelion@got.com", "thewanderingwizard@lor.com", "belletheprincess@disney.com", "hermionegranger@ministerofmagic.com");
$number = array("1-800-200-RING", "1-809-666-HORCRUX", "1-909-672-LION","1-023-333-WIZARD", "1-032-444-BEAUTY", "44-123-MINISTER");
?>
<table class="table">

    <tr>
        <th>Name</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Cellular Number</th>

    </tr>
    <?php
    echo "<tr>";
    echo "<td>".$name[0]."</td>";
    echo "<td>".$username[0]."</td>";
    echo "<td>".$email[0]."</td>";
    echo "<td>".$number[0]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>".$name[1]."</td>";
    echo "<td>".$username[1]."</td>";
    echo "<td>".$email[1]."</td>";
    echo "<td>".$number[1]."</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>".$name[2]."</td>";
    echo "<td>".$username[2]."</td>";
    echo "<td>".$email[2]."</td>";
    echo "<td>".$number[2]."</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>".$name[3]."</td>";
    echo "<td>".$username[3]."</td>";
    echo "<td>".$email[3]."</td>";
    echo "<td>".$number[3]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>".$name[4]."</td>";
    echo "<td>".$username[4]."</td>";
    echo "<td>".$email[4]."</td>";
    echo "<td>".$number[4]."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>".$name[5]."</td>";
    echo "<td>".$username[5]."</td>";
    echo "<td>".$email[5]."</td>";
    echo "<td>".$number[5]."</td>";
    echo "</tr>";






    ?>
</table>




</body>
</html>


