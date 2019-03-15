
   <?php
   error_reporting(E_ALL ^ E_DEPRECATED);
  if (!$link = mysql_connect('localhost', 'u467674470_kas', 'deikas72')) {
    echo 'Could not connect to mysql bbd';
    exit;
} 
   

  $db=mysql_select_db("deikasdb") or die("Neprisijungia prie DB");
 /*$uvr="create table if not exists vartotojai 
 (id int(4) auto_increment primary key,
 v_vardas varchar(20),
 slaptazodis varchar(50),
 el_pastas varchar(30),
 vardas varchar(20),
 pavarde varchar(30))"; 
 mysql_query($uvr) or die("Nesukure");
 */
   /*$uzk_lenta="create table if not exists kaskas
                    (id int(7) primary key auto_increment,
                    prekes_kodas char(4),
                    prekes_pavadinimas varchar(30),
                    prekes_kaina float(7,2),
                    prekes_likutis float(9,3))";
       $uzk_lentav=mysql_query($uzk_lenta) or die ("<h3 style='color:red'>- Nesukure lenteles</h3>");
       if($uzk_lentav)
       echo"<h3 style='color:green'>+ Sukure lentele</h3>";

   */

   error_reporting(0);
 ob_start();
 session_start();
  $lt="<meta http-equiv=\"Content-Type\"content=\"text/html;charset=utf-8\" >";   
 echo $lt;

 $uvr="create table if not exists vartotojais 
 (id int(4) auto_increment primary key,
 v_vardas varchar(20),
 slaptazodis varchar(50),
 el_pastas varchar(30),
 vardas varchar(20),
 pavarde varchar(30))"; 
 mysql_query($uvr) or die("Nesukure");
if(!empty($_POST['registruoti'])) { 
    extract($_POST);
    $pass=md5($pass);
  $uzir="insert into vartotojai
  (v_vardas, slaptazodis, el_pastas, vardas, pavarde)
  values
  ('$nick','$pass','$elpastas','$vardas','$pavarde')";
  $uzirv=mysql_query($uzir) or die("Neirašė");      
}   
if(!empty($_POST['reg'])) { 
$forma_reg="<form method='post' action=\"".$_SERVER['PHP_SELF']."\">  
<center><br> <strong> Užpildykite laukelius </strong> <br> 
<br> <table border=0 width=40% > <tr> <td width=50% > <strong> Vartotojo vardas* </strong> </td><td> <input type=\"text\" name=\"nick\" > </td></tr>
<tr><td><strong> Vardas </strong> </td><td> <input type=\"text\" name=\"vardas\" > </td></tr> 
<tr><td><strong> Pavardė </strong> </td><td> <input type=\"text\" name=\"pavarde\" > </td></tr> 
<tr><td><strong> El. paštas* </strong> </td><td> <input type=\"text\" name=\"elpastas\" > </td></tr>
<tr><td><strong> Slaptažodis* </strong> </td><td> <input type=\"password\" name=\"pass\" > </td></tr>
<tr><td><strong> Pakartoti slaptažodį* </strong> </td><td> <input type=\"password\" name=\"pass2\" > </td></tr></table>
<br><center> <input type=\"submit\" name=\"registruoti\" value=\"Registruoti\"></center>
</form>";
echo $forma_reg;
} 
 if(!empty($_POST['pri'])) {
    extract($_POST);
    $_SESSION['nick']=$nick;
    $pass=md5($pass);
    $uzk="select * from vartotojai where v_vardas='$nick' and slaptazodis='$pass'";
    $uzkv=mysql_query($uzk);
    $kiek=mysql_num_rows($uzkv);
    if($kiek==1) 
 //   header("Location: forumo_pavyzdys/topiclist.php ");
      header('Location:ikelimai_i_galerijas.php');
      
       else
    echo "<br> Neprisijungė"; 
 }
 if((empty($_POST['pri'])) and (empty($_POST['reg']))) {
   $forma_pri="<form method='post' action='connect_deikas.php'>
   <center><br> <strong> Užpildykite laukelius </strong> 
 <table border=0 width=40% > <tr><td width=50% > <strong> Vartotojo vardas* </strong> </td><td> <input type=\"text\" name=\"nick\" > </td></tr>
 <tr><td> <strong> Slaptažodis* </strong> </td><td> <input type=\"password\" name=\"pass\" ></td></tr></table>
  <center><input type='submit' name='pri' value='Prisijungti'></center>
  <br><center><input type='submit' name='reg' value='Registruotis'></center></form>";
 echo $forma_pri;  
 }
?>
  
