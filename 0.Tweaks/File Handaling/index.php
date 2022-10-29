<?php
include "class.php";
$file = new File("file/file.txt");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>File Handling</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo "TEST <br>";



            $var =  [];

            function blankT($res='', $test = null){
                $lists = func_get_args();

                foreach($lists as $list){
                    print_r($list);
                }

                //print_r($lists);
            }


            print_r(blankT(8080, 'Test'));








            ?></h1>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6 mt-5 nm-data">

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addData"])) {
                    ob_clean();
                    $file->add_data($_POST["addData"]);
                    exit();
                }
                ?>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nm_txt" id="nm_txt" placeholder="Add Text!" aria-label="Recipient's username" aria-describedby="nm_txt_add">
                    <button class="btn btn-outline-primary" name="nm_txt_add" type="button" id="nm_txt_add">Add
                        Text</button>
                </div>
            </div>
        </div>

        <!-- File Area -->
        <div class="row justify-content-md-center">
            <div class="col-md-6 border border-info nm-text-area">
                <?php echo $file->show_data(); ?>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-md-6 mt-3">
                <button type="button" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {

            $("#nm_txt_add").click(function(e) {
                e.preventDefault()

                var text = $("#nm_txt").val();
                var data = {
                    addData: text
                }
                var url = "index.php"

                //$.post(url, data)

                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: "SUCCESS!"
                })
            })


        });
    </script>
</body>

</html>