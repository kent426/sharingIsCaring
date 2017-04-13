<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SharingIsCaring</title>
    <meta property="og:url"           content='projectv.me/sharingIsCaring/index.php?form=survey1' />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Sharing is Caring" />
    <meta property="og:description"   content="Give me your money" />
    <!--<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />-->
</head>
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

    <style>
        h1 {
            font-size: 80px;
        }

        h2 {
            text-align: center;
        }

        #pic {
            align-items: center;
            max-width: 600px;
        }

        head, body {
            background-color: lightgray;
        }
    </style>
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
                    if(isset($_POST['question1'])) {
                        include "result.php";
                    } else {
                        include "survey.php";
                    }

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