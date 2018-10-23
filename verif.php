<?php
$email=$_POST['email'];
$pwd=$_POST['pwd'];
mysql_connect("localhost","root","");
mysql_select_db("magazin");
$req="select * from admin where email='$email' and pwd='$pwd'";
$res=mysql_query($req)or die("echec");
$s=mysql_fetch_array($res);
$nb=mysql_num_rows($res);

if($nb==0) {
    header("location:http://127.0.0.1/magazin/");
} else if($s[5]=="administrateur") {
    header("location:http://127.0.0.1/magazin/gestion%20admin/");
}
else if($s[5]=="responsable") {
    header("location:http://127.0.0.1/magazin/gestion%20responsable/");
} else if ($s[5]=="magazinier"){
    header("location:http://127.0.0.1/magazin/gestion%20magasinier/");
}
