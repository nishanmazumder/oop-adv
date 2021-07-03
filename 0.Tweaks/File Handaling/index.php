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
        <div class="row justify-content-md-center">
            <div class="col-md-6 mt-5">

                <?php
                if (isset($_POST["nm_txt_add"])) {
                    $text = $_POST["nm_txt"];
                    $file->add_data($text);
                }
                ?>

                <form class="row g-3" method="post" action="">
                    <div class="col-auto">
                        <input type="text" class="form-control" name="nm_txt" id="" value="" placeholder="Change Text!">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" name="nm_txt_add" id="nmTxtAdd">Add
                            Text</button>
                    </div>
                </form>
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
        // $(document).ready(function() {
        //     $.ajax({
        //         type: 'GET',
        //         url: 'file/file.txt',
        //         success: function(data) {
        //             test(data)
        //         }

        //     });

        //     function test(data) {
        //         $('.nm-text-area').text(data)
        //     }

        // });
    </script>
</body>

</html>