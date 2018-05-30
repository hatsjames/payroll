
<?php require('classes/class.process.php');
if(isset($_GET['sub_cat'])){
$s_id=$_GET['sub_cat'];
$data=new Process;$tbl="tbl_location";$options="s_id=".$s_id."";
$loc=$data->getData($tbl,$options);foreach( $loc as $value){
	echo"<option value=".$value['l_id'].">".$value['l_name']."</option>";
}

}elseif(isset($_GET['sub_cat1'])){
	$c_id=$_GET['sub_cat1'];
$data=new Process;$tbl="tbl_cashier";$options="c_id=".$c_id."";
$option="tbl_location INNER JOIN tbl_cashier ON tbl_cashier.l_id=tbl_location.l_id WHERE tbl_cashier.c_id=".$c_id."";
$loc=$data->getExtras($option);foreach( $loc as $value){
	echo"<option value=".$value['l_id'].">".$value['l_name']."</option>";
}

}
?>