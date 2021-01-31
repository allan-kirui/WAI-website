<?php
require('/var/www/dev/vendor/autoload.php');
  
use MongoDB\BSON\ObjectID;
function get_db()
    {
        $mongo = new MongoDB\Client(
        "mongodb://127.0.0.1:27017/wai"
        ,
        [
        'username' => 'wai_web'
        ,
        'password' => 'w@i_w3b',
        ]);
        $db = $mongo->wai;
        return $db;
        
    }

$db = get_db();


function uploadCheck($target_file, $filesize_real ,$imageFileType, $fileformat, $filesize, $imagetitle, $imageauthor, $watermark_text, $uploadOk)
{
// Check if file already exists
if (file_exists($target_file)) { 
        $uploadOk = 0;
        header("Location: /gallery_view?uploads=fileExists");
        exit();
    }
    // Check file size
    if ($filesize_real > 1000000) {
        $uploadOk = 0;
        $filesize = 0;
    }
    // Allow jpg and png file formats
    if($imageFileType != "jpg" && $imageFileType != "png" ) {
        $uploadOk = 0;
        $fileformat = 0;
    }
    if($fileformat === 0 && $filesize === 0)
    {
        header("Location: /gallery_view?uploads=wrongTypeandSize");
        exit();
    }
    elseif($fileformat === 0 && $filesize === 1)
    {
        header("Location: /gallery_view?uploads=wrongType");
        exit();
    }
    elseif($fileformat === 1 && $filesize === 0)
    {
        header("Location: /gallery_view?uploads=wrongSize");
        exit();
    }
    //Check if title or author or watermark is empty
    if(empty($imagetitle)||empty($imageauthor)||empty($watermark_text))
    {      
        $uploadOk = 0;
        header("Location: /gallery_view?uploads=empty");
        exit();
    }
    if($uploadOk == 1)
    {
        return $uploadOk;
       // header("Location:./gallery_view?uploads=success");   
        //exit(); 
    }
    return $uploadOk;
}

function errorPrint($uploadCheck)
{
        if($uploadCheck == "wrongTypeandSize")
        {
            echo '<script>alert("File is not a png or jpg file type and size is greater than 1 MB")</script>';    
        }
        elseif($uploadCheck == "wrongType")
        {
            echo '<script>alert("File is not a png or jpg file type")</script>'; 
        }
        elseif($uploadCheck == "wrongSize")
        {
            echo '<script>alert("Size of file is greater than 1 MB")</script>';  
        }
        elseif($uploadCheck == "empty")
        {
            echo '<script>alert("All fields must be filled")</script>';  
        }
        elseif($uploadCheck == "fileExists")
        {
            echo '<script>alert("Sorry, file already exists!")</script>';  
        }
        elseif($uploadCheck == "notUploaded")
        {
            echo '<script>alert("File was not uploaded")</script>'; 
        }
        elseif($uploadCheck == "success")
        {
            echo '<script>alert("File was uploaded")</script>';   
        }
        elseif($uploadCheck == "email")
        {
            echo '<p>Email is not of standard type</p>';   
        }
        elseif($uploadCheck == "emptyPswd")
        {
            echo '<p>Password field is empty</p>';   
        }
        elseif($uploadCheck == "emptyPswdRpt")
        {
            echo '<p>Repeat password field is empty</p>';   
        }
        elseif($uploadCheck == "NotMatching")
        {
            echo '<p>Passwords are not matching</p>';   
        }
        elseif($uploadCheck == "exists")
        {
            echo '<p>User already exists</p>';   
        }
        elseif($uploadCheck == "emptyUname")
        {
            echo '<p>Username must be filled</p>';   
        }    
}

function registrationCheck($username, $email, $pswd, $pswd_repeat, $UploadOk){
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $UploadOk=0;
        header("Location: /registration_view?signup=email");
        exit();
    }
    elseif(empty($username)){
        $UploadOk=0;
        header("Location: /registration_view?signup=emptyUname");
        exit();
    }
    elseif(empty($pswd)){
        $UploadOk=0;
        header("Location: /registration_view?signup=emptyPswd");
        exit();
    }
    elseif(empty($pswd_repeat)){
        $UploadOk=0;
        header("Location: /registration_view?signup=emptyPswdRpt");
        exit();
    }
    elseif($pswd != $pswd_repeat){
        $UploadOk=0;
        header("Location: /registration_view?signup=NotMatching");
        exit();
    }
    return $UploadOk;
}

function successCheck()
{
    if(isset($_GET["type"]))
            {
                $type = $_GET["type"];
                
                if($type == "registration")
                {
                    $email = $_GET["email"];
                    echo '<p id=message>
                    Congratulations, your account has been successfully created.
                    Press continue to login
                    </p>
                    <a href="/login_view?email='.$email.'" id="contBtn">Continue</a>';
                }
                elseif($type == "login")
                {
                    echo '<p id=message>
                    Congratulations, you have successfully logged in.
                    </p>
                    <a href="/gallery_view" id="contBtn">Continue</a>';
                }
                elseif($type == "fail")
                {
                    echo '<p id=messageFail>
                    Unfortunately, you have not logged in, check your credentials!
                    </p>
                    <a href="login_view" id="contBtn">Go Back</a>';
                }
            }
}

function search_images($keyword)
{
    $db = get_db();
    $query = ['$and' => [
        [
            'private' => NULL
        ],
        [
            'title' => ['$regex' => ".*".$keyword.".*"]
        ]
    ]];

    $result = $db->img_col->find($query);
    return $result;
}

function saved_view($var)
{
    
$db = get_db();
$items=$db->img_col->find();

$i =0;
/*echo "third"; 
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>\n";*/
        if(isset($var)&&!empty($var))
    {
        foreach($items as $items){
            
            if(array_keys($var, $items['_id']))
            {
            echo '<div class = "gal"><a href="'.$items['watermarkpath'].'">
            <input type="checkbox" name ="imageTitle[]" value='.$items['_id'].' '.(array_keys($var, $items['_id'])? 'checked="checked"':"").'></input>
            <div style="background-image:url('.$items['filepath'].'); height:125px; width:200px;">
            </div>
            <h4>'.$items['title'].'</h4>
            <p>'.$items['author'].'<p>
            </a></div>';
            }
            $i++;
}
    echo ' <button type="submit"  name="checkboxDelete" class="bttn">Delete the selected</button>';
}else{
    echo '<p>No saved images yet</p>'.'</br>';
}
}

?>