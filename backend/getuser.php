<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            /* color: white;
            width: 69%;
            border-collapse: collapse;
            border: 4px solid black;
            padding: 8px;
            margin-left: 16%;
            margin-top: 15%; */


            text-align: center;
            position: relative;
            border-collapse: collapse;
            background-color: #f6f6f6;
            margin-left: 15%;
            width: 69%;








        }

        table,
        td,
        th {
            /* border: 2px solid white;
            padding: 8px; */
            border: 1px solid #999;
            padding: 20px;


        }

        tfoot>tr {
            background: black;
            color: white;
        }


/* .////////////////////////////////////// */
        /* new one */

        td:hover {
            background: lightgray;
        }

        /* a few selector examples */
        td[colspan]:hover {
            background: lime;
        }

        td[colspan]+td[colspan]:hover {
            background: turquoise;
        }

        td[colspan="2"]:hover {
            background: gold;
        }

        td[rowspan]:hover {
            background: tomato;
        }

/* ///////////////////////////////////////////// */



        th {
            /* text-align: left; */
            background: brown;
            color: white;
            border-radius: 0;
            position: sticky;
            top: 0;
            padding: 10px;
        }
    </style>
</head>

<body style=" background: url('yellow background.jpg'); ">

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost', 'root', '', 'ajax');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "ajax");
    $sql = "SELECT * FROM peter WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
<tr>
<th>Part Number</th>
<th>Desciption</th>
<th>Machine</th>
<th>JCB Kanban Quantity</th>
<th>Total Cards</th>
</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['part_no'] . "</td>";
        echo "<td>" . $row['descript'] . "</td>";
        echo "<td>" . $row['mchine'] . "</td>";
        echo "<td>" . $row['jcb_kbn_qty'] . "</td>";
        echo "<td>" . $row['ttl_cards'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>

    
</body>

</html>