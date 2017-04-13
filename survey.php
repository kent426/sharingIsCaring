<form method="post">

    <?php
    //parse the json file
    $json = file_get_contents("./he.json");
    $j = json_decode(stripslashes($json));
    //array of questions

    foreach( $j->pages[0]->elements as $onequestion) {
        echo "<fieldset>";
        //one question with choices
        echo "<legend>$onequestion->name</legend>";
        foreach ($onequestion->choices as $oneitem) {
            //one choice
            echo "<input type='radio' name=$oneitem->text value=$oneitem->text />$oneitem->text<br />";
        }
        echo "</fieldset>";
    }
    echo "<input type='submit' value='Submit now' />";
    ?>
</form>


