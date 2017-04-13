<form method="post">

    <?php
    //parse the json file
    if(isset($_GET['form'])) {
        if($json = file_get_contents('http://projectv.me/api/'.$_GET['form'].'.json')) {
            $j = json_decode(stripslashes($json));
            foreach ($j->pages[0]->elements as $onequestion) {
                echo "<fieldset>";
                //one question with choices
                echo "<legend>$onequestion->name</legend>";
                foreach ($onequestion->choices as $oneitem) {
                    //one choice
                    echo "<input type='radio' name=$onequestion->name value=$oneitem->value />$oneitem->text<br />";
                }
                echo "</fieldset>";
                echo "<br/>";
            }
            echo "<input type='submit' value='Submit now' />";
        } else {
            echo "I don't know";
        }
    } else {
        echo "I don't know";
    }


    //array of questions


    ?>
</form>


