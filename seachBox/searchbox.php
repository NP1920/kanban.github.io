<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>bony</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>BONY Database</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                echo $_GET['search'];
                                            } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <style>
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        min-width: 0;
                        word-wrap: break-word;
                        background:none;
                    </style>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Part Number</th>
                                    <th>Description</th>
                                    <th>Machine</th>
                                    <th>JCB Kanban Quantity</th>
                                    <th>Total Cards</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "ajax");

                                if (isset($_GET['search'])) {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM peter_new WHERE CONCAT
                                        (id,part_no, descript,mchine,jcb_kbn_qty,ttl_cards) 
                                        LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $items['id']; ?>
                                    </td>
                                    <td>
                                        <?= $items['part_no']; ?>
                                    </td>
                                    <td>
                                        <?= $items['descript']; ?>
                                    </td>
                                    <td>
                                        <?= $items['mchine']; ?>
                                    </td>
                                    <td>
                                        <?= $items['jcb_kbn_qty']; ?>
                                    </td>
                                    <td>
                                        <?= $items['ttl_cards']; ?>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    } else {
                                ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <a href="../mainPage/main.php"> 
        
        
        <button type="button">Home</button>

    </a>

</body>

</html>