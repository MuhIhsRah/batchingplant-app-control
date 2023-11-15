<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="" method="POST">
        <div class="row">
            <h1>Control Page</h1>
            <div class="input-group">
                <span class="input-group-text">Select Port</span>
                <select id="portNum" class="form-select form-control-sm" aria-label="Default select example">
                    <?php
                        for ($x = 1; $x <= 20; $x++) {
                            echo '<option value="' . 'COM' . $x . '">' . 'COM' . $x . '</option>';
                        }
                    ?>
                </select>
                <div class="row">
                    <div class="col-4">
                        <a>Indikator Katup Bin =</a>
                        <input type="button" value="ON" class="btn btn-success" id="btnON">
                        <input type="button" value="OFF" class="btn btn-danger" id="btnOFF">
                    </div>
                    <div class="col-4">
                        <a>Indikator Conveyor =</a>
                        <input type="button" value="ON" class="btn btn-success" id="btnON1">
                        <input type="button" value="OFF" class="btn btn-danger" id="btnOFF1">
                    </div>
                    <div class="col-4">
                        <a>Indikator Mixer =</a>
                        <input type="button" value="ON" class="btn btn-success" id="btnON2">
                        <input type="button" value="OFF" class="btn btn-danger" id="btnOFF2">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

</html>

<script>
    $(document).ready(function() {
        var portid = "";
        $('#portNum').change(function() {
            portid = $('#portNum').val();
        });

        $('#btnON').click(function() {
            $.ajax({
                type: "POST",
                url: "data.php",
                data: ({
                    port: portid,
                    Selector: '1'
                })
            });
        });

        $('#btnON1').click(function() {
            $.ajax({
                type: "POST",
                url: "data.php",
                data: ({
                    port: portid,
                    Selector: '3'
                })
            });
        });

        $('#btnON2').click(function() {
            $.ajax({
                type: "POST",
                url: "data.php",
                data: ({
                    port: portid,
                    Selector: '5'
                })
            });
        });

        $('#btnOFF').click(function() {
            $.ajax({
                type: "POST",
                url: "data.php",
                data: ({
                    port: portid,
                    Selector: '2'
                })
            });
        });

        $('#btnOFF1').click(function() {
            $.ajax({
                type: "POST",
                url: "data.php",
                data: ({
                    port: portid,
                    Selector: '4'
                })
            });
        });

        $('#btnOFF2').click(function() {
            $.ajax({
                type: "POST",
                url: "data.php",
                data: ({
                    port: portid,
                    Selector: '6'
                })
            });
        });
    });
</script>
