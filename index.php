<?php

    if(isset($_POST['submit-button'])){
        echo "input1: ", $_POST['input1'], "<br>";
        echo "input2: " , $_POST['input2'] , "<br>";
        echo "input3: " , $_POST['input3'] , "<br>";
        echo "input4: " , $_POST['input4'] , "<br>";
        echo "input5: " , $_POST['input5'] , "<br>";
        echo "input6: " , $_POST['input6'] , "<br>";
        echo "input7: " , $_POST['input7'] , "<br>";
        echo "input8: " , $_POST['input8'] , "<br>";
        echo "input9: " , $_POST['input9'] , "<br>";
    }
    else{
        header('Location: index.html');
    }

?>