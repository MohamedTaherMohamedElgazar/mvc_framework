<?php

//var_dump($data);

foreach($data['users'] as $user){
    echo $user->user_name;
    echo "<br />";
}

?>