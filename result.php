 <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div style="display: table; margin: 0 auto">

            <h2 id="h2">The character you are most like is:</h2>
            <?php
                $max = 0;
                $maxint = 0;
                if($json = file_get_contents('http://projectv.me/api/'.$_GET['form'].'.json')) {
                    $j = json_decode(stripslashes($json));
                    $choiceCount = [0,0,0,0];
                    foreach($_POST as $post) {
                        $choiceCount[$post - 1]++;
                    }
                    $max = $choiceCount[0];
                    $maxint = 0;
                    for($i = 0;$i<sizeof($choiceCount);$i++) {
                        if($max < $choiceCount[$i]) {
                            $maxint = $i;
                            $max = $choiceCount[$i];
                        }

                    }

                    echo $j->answers[$maxint]->answer;
                    echo "<img src=\"".$j->answers[$maxint]->image."\" id=\"pic\">";
                    /*$max = -2134;
                    $index = -1;
                    $count = 0;
                    foreach($choiceCount as $choice) {
                        if($choice > $max) {
                            $max = $choice;
                            $index = $count;
                        }
                        $count++;
                    }
                    foreach ($j->answers as $answer) {
                        if($answer->value == $count)
                            echo "<h1 id=\"h1\">".$answer->answer."</h1>";
                    }*/

                }

            ?>
            


        </div>
         <div id="fb-root"></div>
         <script>(function(d, s, id) {
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) return;
                 js = d.createElement(s); js.id = id;
                 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                 fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));</script>
        <div style="display: table; margin: 0 auto; padding-top: 10px">

            <div class="fb-share-button" data-href='index.php?form=survey1' data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8887%2FsharingIsCaring%2Fresult.php&amp;src=sdkpreparse">Share</a></div>

        </div>