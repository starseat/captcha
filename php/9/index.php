<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captcha Generation</title>

    <!-- Bootstrap 4 -->
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</head>
<body style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel">
                    <hr>
                    <div class="panel-heading">
                        <h1>Am I a Human?</h1>
                    </div>
                    <hr>
                    <form action="getting.php" method="post" autocomplete="off"
                        <div>
                            <img src="captcha.php" alt="Captcha Image"><br><br>
                            <input type="text" name="captcha" ><br><br>
                            <input type="submit" value="Submit Form" class="btn btn-danger btn-sm">
                        </div>
                    </form>
                    <br><br><hr><br>
                    <p style="font-size: 80%; text-align: center; ">Brought to you by <a href="https://youtube.com/myPHPnotes">myPHPnotes</a> | <a href="https://www.myphpnotes.tk">Learn How I Made This</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>