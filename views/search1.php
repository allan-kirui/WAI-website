<?php
   
    $keyword = $_GET['title'];
    $db = get_db();

    $query = ['$and' => [
        [
            'private' => NULL
        ],
        [
            'title' => ['$regex' => ".*".$keyword.".*"]
        ]
    ]];
    $img_col = $db->img_col->find($query);
    
     /*foreach ($img_col as $img_col) {// Print shit
       echo $img_col['filepath'];
     }*/

    
?>