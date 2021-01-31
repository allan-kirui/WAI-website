<?php


$db = get_db();


$number_of_images = $db->img_col->count();
$perPage = 3;
$number_of_pages = ceil($number_of_images/$perPage);

if(!isset($_GET['page']))
{
    $page = 1;
}
else{
    $page = $_GET['page'];
}
     

echo '<h3> PAGE '.$page.'</h3>';
$this_page_first_result = ($page - 1)*$perPage;
 if(!isset($_SESSION['user_id']))
 {
    $_SESSION['user_id']='notuser';
 }

$items=$db->img_col->find([],['skip'=>$this_page_first_result,'limit'=>$perPage]);
foreach($items as $items){
    
    $hidden = FALSE;
    if($_SESSION['user_id']!=$items['user_id']&&$items['status']==='private')
    {
      $hidden = TRUE;  
          
    }
    echo '<div class = "gal" '.($hidden === FALSE?"":'hidden = "hidden"').' ><a href="'.$items['watermarkpath'].'">
    <input type="checkbox" name ="imageTitle[]" value='.$items['_id'].' '.(isset($_SESSION['rows'])&&array_keys($_SESSION['rows'], $items['_id'])? 'checked="checked"':"").'></input>
    <div style="background-image:url('.$items['filepath'].'); height:125px; width:200px;">
    </div>
    <h4>'.$items['title'].'</h4>
    <p>'.$items['author'].'<p>
    <P>'.$items['status'].'</p>
    </a></div>';
    
}

for($page = 1; $page<=$number_of_pages;$page++)
{
    echo '<div id="pagination"><a href="/gallery_view?page='. $page .'">'. $page .'</a> </div>';
}


?>