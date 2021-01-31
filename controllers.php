<?php

include_once 'business.php';

    function home(&$model)
    {
        return '/home';
    }
    function register(&$model)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $db = get_db();
        if(isset($_POST["submit"])) {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $pswd=$_POST['pswd'];
            $pswd_repeat=$_POST['pswd-repeat'];
            $UploadOk=1;
        }
        
        $UploadOk = registrationCheck($username, $email, $pswd, $pswd_repeat, $UploadOk);
        
        if($UploadOk == 1 ){
            $user=$db->users->findOne(['email'=>$email]);
            if($user ===  null){
            $hash=password_hash($pswd, PASSWORD_DEFAULT);
            $users=[
                'username'=>$username,
                'email'=>$email,
                'pswd'=>$hash
            ];
            $db->users->insertOne($users);
             //Deleting from database
           /* $user = $db->users->find();
            foreach($user as $id => $value){
                var_dump($value);
            }
            $user = $db->users;
            $result = $user->drop();
            foreach($user as $id => $value){
                var_dump($value);
            }*/
            header('Location: success?type=registration&email='.$email.'');
            }else{
                header("Location: registration_view?signup=exists");
                exit();
            }
        }
        else
        {
        echo "Its fucked";
        }}
        return '/registration_view';
    }

    function login_user(&$model)
    {
        $db = get_db();
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['email'])||!empty($_POST['pswd'])){
            if(isset($_POST["submit"])) {
                $email=$_POST['email'];
                $pswd=$_POST['pswd'];
            }
            $user=$db->users->findOne(['email'=>$email]);

            if($user !== null && password_verify($pswd,$user['pswd'])){
                session_regenerate_id();
                $_SESSION['user_id'] = $user['_id'];
                $_SESSION['username'] = $user['username'];
                header("Location: /success?type=login");
            }else{
                header("Location: /success?type=fail");
        }}
    }
        return '/login_view';

    }

    function logout(&$model)
    {
        ob_start();
        session_destroy();
        $_SESSION = [];//clears out session
        setcookie('PHPSESSID', '', -3600, '/');//deletes PHPSESSID by settting time to previous thus expiring
        return '/gallery_view';
    }

    function saved(&$model)
    {
        if(isset($_SESSION['rows'])&&!empty($_SESSION['rows']))
        {
            $var = $_SESSION['rows'];
        } 
        if(isset($_POST["checkboxDelete"])&&isset($_POST["imageTitle"]))
        {
            foreach($_POST["imageTitle"] as $delete )
            {
                
                    //echo $delete.'</br>';
                    $key = array_search($delete, $_SESSION['rows']);
                    if($key!==false)
                    {
                        unset($_SESSION['rows'][$key]);
                        $_SESSION['rows'] = array_values($_SESSION['rows']);
                    }
                
            }    
            /*echo "<pre>";
            print_r($_SESSION);fun dont do 
            echo "</pre>\n";
            exit();*/
            return '/saved_view';
            // header("Location: /saved_view");
        }
        return '/saved_view';
    }
    function success(&$model)
    {
        return '/success';
    }
    function author(&$model)
    {
        return '/Author';
    }
    function contact(&$model)
    {
        return '/Contact';
    }



    function search(&$model)
{
     if(isset($_GET['title']))
     {
    
    $img_col = search_images($_GET['title']);
   foreach ($img_col as $img_col) {// Deleting shit
      echo $img_col['filepath'];
    }
    return '/search1';
    }
    return '/AjaxSearch';
}

function gallery(&$model)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST"&&!empty($_POST["filetitle"]))
        {
            ini_set('memory_limit', -1);
            $target_dir = "uploads/";
            $target_thumb="thumbnails/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $newname = $_FILES["fileToUpload"]["name"];
            $filesize_real = $_FILES["fileToUpload"]["size"];
            //to avoid running into errors
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $imagetitle=$_POST["filetitle"];
            $imageauthor=$_POST["fileauthor"];
            $watermark_text =$_POST["watermark"];
            if(!isset($_POST['radio']))
            {
                $_POST['radio'] = 'public';// defaults to public
            }
            $status = $_POST['radio'];
            if(empty($_FILES["fileToUpload"]["size"]))
            {
                $uploadOk=0;
                header("Location: /gallery_view?uploads=empty");
                exit();
            }
            $image_size = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

            $fileformat = 1;
            $filesize = 1;
            // Check if image file is an actual image or not
            if($image_size !== false) {
                $uploadOk = 1;
                $image_width=$image_size[0];
                $image_height=$image_size[1];

            } 

            $uploadOk = uploadCheck($target_file, $filesize_real ,$imageFileType, $fileformat, $filesize, $imagetitle, $imageauthor, $watermark_text, $uploadOk);
            
            if($uploadOk == 0)
            {
                header("Location: /gallery_view?uploads=notUploaded");
                exit();
            }
            elseif(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    
                    if($imageFileType=="jpg"){
                        //header("Content-type:image/jpeg");
                        $image = imagecreatefromjpeg($target_file);
                        $image_thumbnail = imagecreatefromjpeg($target_file);
                        $output=$target_dir.$newname."_watermark.jpg";
                        $output_thumbnail=$target_thumb.$newname."_thumbnail.jpg";
                    }else{
                        //header("Content-type:image/png"); 
                        $image = imagecreatefrompng($target_file); 
                        $image_thumbnail = imagecreatefrompng($target_file); 
                        $output=$target_dir.$newname."_watermark.png";  
                        $output_thumbnail=$target_thumb.$newname."_thumbnail.png"; 
                    }
                    /* WATERMARK*/
                    $font = './fonts/arial.ttf';
                    $black=imagecolorallocate($image,0,0,0);
                    $white=imagecolorallocate($image,255,255,255);
                    $fontsize=12;
                    $rotation=0;
                    $origin_x=100;
                    $origin_y=100;
                    $text=imagettftext($image,$fontsize,$rotation,$origin_x,$origin_y,$black, $font,$watermark_text);//writes text to image
                    $text=imagettftext($image,$fontsize,$rotation,$origin_x+2,$origin_y,$white, $font,$watermark_text);
                    imagejpeg($image,$output,99);
            
                    /*THUMBNAIL*/
                    $new_height=125;
                    $new_width=200;
                    $new_image=imagecreatetruecolor($new_width,$new_height);
                    imagecopyresized($new_image,$image_thumbnail,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
                    imagejpeg($new_image,$output_thumbnail,99);
            
                    /*DATABASE*/
                    $db = get_db();
                    $img_col=[
                        'author'=>$imageauthor,
                        'title'=>$imagetitle,
                        'filepath'=>$output_thumbnail,
                        'watermarkpath'=>$output,
                        'status'=>$status,
                        'user_id'=>$_SESSION['user_id']
                    ];
                    $db->img_col->insertOne($img_col);
            
                   /* 
                    $img_col = $db->img_col->find();
                    foreach ($img_col as $img_col) {// Deleting shit
                        echo $img_col['title']." ";
                    echo $img_col['title'] . '<br/>';
                    $db->img_col->deleteOne($img_col);
                    echo $img_col['title'] . '<br/>';
                    } 
            
                    if(is_file($output))
                    {
                        unlink($output);
                        unlink($output_thumbnail);
                        unlink($target_file);
                    }
                    */      
            }
            
        }
        elseif($_SERVER["REQUEST_METHOD"] == "POST"&&!empty($_POST["imageTitle"]))
        {
            $_SESSION['rows'] = array();
            /* echo "first"; 
                    echo "<pre>";
                    print_r($_SESSION);
                    echo "</pre>\n";*/
                if(isset($_SESSION['rows'])&&!empty($_POST["imageTitle"]))
                {
                    
                    foreach($_POST["imageTitle"] as $checkbox)
                    {
                        array_push($_SESSION['rows'] , $checkbox);
                    }
                    
                /* echo "second"; 
                    echo session_id();
                    echo "<pre>";
                    print_r($_SESSION);
                    echo "</pre>\n";*/
                    //header("Location: /saved_view");
                    return '/saved_view';
                }
        }
        return '/gallery_view';
    }
?>