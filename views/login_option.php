<?php
if(!isset($_SESSION['user_id'])||$_SESSION['user_id']==='notuser'||empty($_SESSION['user_id']))
{
    //echo $_SESSION['user_id'];
    echo '<a href="/login_view" class="bttn">Login</a>';
}
else
{
    //echo $_SESSION['user_id'];
    echo '<a href="/logout" class="bttnLout">Logout</a>';
}
?>