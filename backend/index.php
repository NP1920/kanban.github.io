<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getuser.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>


</head>

<body style=" background: url('yellow background.jpg'); background-size: cover; ">

    <body>
        <!-- <video autoplay loop muted plays-inline class="backvideo">
        <source src="black.mp4" type="video/mp4">
    </video> -->
        <h1 style="margin-left: 45%;
    color: crimson;
    margin-top: 29px;
    font-size: xxx-large;">BONY</h1>

        <form>
            <select name="users" onchange="showUser(this.value)" style="  width: 50%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
    margin-top: 2%;
    margin-left: 24%;">
                <option value="">Select part number</option>
                <option value="1">1406/0011
                </option>
                <option value="2">1406/0021
                </option>
                <option value="3">120/16903
                </option>
                <option value="4">332/C0662
                </option>
                <option value="5">333/Y2108
                </option>
                <option value="6">332/Y8611
                </option>
                <option value="7">332/Y8671
                </option>
                <option value="8">331/34392
                </option>
                <option value="9">331/18442
                </option>
                <option value="10">331/34393
                </option>
                <option value="11">331/25996
                </option>
                <option value="12">320/07524
                </option>

            </select>

        </form>





        <br>
        <div id="txtHint"></div>



        <a href="../seachBox/searchbox.php">
            <button type="button">
                <style>
                    button {
                        display: inline-block;
                        background: crimson;
                        color: #fff;
                        font-size: 18px;
                        padding: 6px 28px;
                  
                        margin-top: 72px;
                        font-weight: 400;
                        border-radius: 6px;
                        border: 2px solid crimson;
                        transition: all 0.3s ease;
                        cursor: pointer;
                        margin-left: 43%;
                    }

                    button:hover {
                        color: crimson;
                        background: none;
                    }
                </style> Find Using search
            </button>
        </a>


    </body>

</html>