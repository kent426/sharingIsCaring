<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SharingIsCaring</title>
    <script src="Script/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="Style/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="Style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script>
        onload=function() {
            var ads = document.getElementsByClassName("advertisement");
            for (i = 0; i < ads.length; i++) {
                ads[i].setAttribute("align", "center");
            }
        };
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 advertisement">
                <img src="Image/728x90.png" class="img-responsive">
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-2 hidden-sm hidden-xs advertisement">
                <img src="Image/120x600.png" class="img-responsive">
            </div>
            <div class="col-sm-9 col-md-8">
                <?php
                    include "result.php";
                ?>
            </div>
            <div class="col-sm-3 col-md-2 hidden-xs advertisement">
                <img src="Image/120x600.png" class="img-responsive">
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12 hidden-sm-down advertisement">
                <img src="Image/badad.png" class="img-responsive" style="display:inline-block">
                <img src="Image/badad.png" class="img-responsive" style="display:inline-block">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 hidden-sm-down advertisement">
                <img src="Image/728x90.png" class="img-responsive">
            </div>
        </div>
    </div>

</body>
</html>