<?php
require_once"connect.php";
$polaczenie=@new mysqli($host,$db_user,$db_password,$db_name);
if($polaczenie->connect_errno!=0)
{
	echo "error:".$polaczenie->connect_errno; 
}
else
{
$login=$_POST['login'];
$haslo=$_POST['haslo'];
$sql="select*from uzytkownicy where user='$login' and pass='$haslo'";
if ($rezultat=@$polaczenie->query($sql))
{
	$ilu_userow=$rezultat->num_rows;
	if($ilu_userow>0)
	{
		$wiersz=$rezultat->fetch_assoc();
		$user=$wiersz['user'];
		
		$rezultat->free_result();
	echo $user;
	}
else
{
	echo "brak użytkownika";
}
}

$polaczenie->close();

}
?>