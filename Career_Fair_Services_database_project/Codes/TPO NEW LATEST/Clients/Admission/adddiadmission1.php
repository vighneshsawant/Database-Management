<?php
session_start();
require"../../config.php";

$VIIIMYP = $_POST['VIIIMYP'];
$VIIISCN = $_POST['VIIISCN'];
$VIIID = $_POST['VIIID'];
$VIIIB = $_POST['VIIIB'];


$IXMYP = $_POST['IXMYP'];
$IXSCN = $_POST['IXSCN'];
$IXD = $_POST['IXD'];
$IXB = $_POST['IXB'];

$SSCMYP = $_POST['SSCMYP'];
$SSCSCN = $_POST['SSCSCN'];
$SSCD = $_POST['SSCD'];
$SSCB = $_POST['SSCB'];

$HSCMYP = $_POST['HSCMYP'];
$HSCSCN = $_POST['HSCSCN'];
$HSCD = $_POST['HSCD'];
$HSCB = $_POST['HSCB'];

$SSCE = $_POST['SSCE'];
$SSCM = $_POST['SSCM'];
$SSCO = $_POST['SSCO'];
$HSCE = $_POST['HSCE'];
$HSCM = $_POST['HSCM'];
$HSCO = $_POST['HSCO'];

$SSCEM = $_POST['SSCEM'];
$SSCMM = $_POST['SSCMM'];
$SSCOM = $_POST['SSCOM'];
$HSCEM = $_POST['HSCEM'];
$HSCMM = $_POST['HSCMM'];
$HSCOM = $_POST['HSCOM'];

$SSCES = $_POST['SSCES'];
$SSCMS = $_POST['SSCMS'];
$SSCOS = $_POST['SSCOS'];
$HSCES = $_POST['HSCES'];
$HSCMS = $_POST['HSCMS'];
$HSCOS = $_POST['HSCOS'];

$SSCEV = $_POST['SSCEV'];
$SSCMV = $_POST['SSCMV'];
$SSCOV = $_POST['SSCOV'];
$HSCEV = $_POST['HSCEV'];
$HSCMV = $_POST['HSCMV'];
$HSCOV = $_POST['HSCOV'];

$SSCVT = $_POST['SSCVT'];
$HSCVT = $_POST['HSCVT'];
$HSCMCVC = $_POST['HSCMCVC'];
$GDE = $_POST['GDE'];
$GAP = $_POST['GAP'];
$GAPCER = $_POST['GAPCER'];

$LOCATED = $_POST['LOCATED'];
$FROM = $_POST['FROM'];
$WORK = $_POST['WORK'];
$TRANSFER = $_POST['TRANSFER'];

$sname = $_POST['sname'];
$pname = $_POST['pname'];
$ssign = $_POST['ssign'];
$psign = $_POST['psign'];

$date=date("jS  F Y");

$_SESSION['VIIIMYP']=$VIIIMYP; 
$_SESSION['VIIISCN']=$VIIISCN;
$_SESSION['VIIID']=$VIIID;
$_SESSION['VIIIB']=$VIIIB;


$_SESSION['IXMYP']=$IXMYP;
$_SESSION['IXSCN']=$IXSCN;
$_SESSION['IXD']=$IXD;
$_SESSION['IXB']=$IXB;

$_SESSION['SSCMYP']=$SSCMYP;
$_SESSION['SSCSCN']=$SSCSCN;
$_SESSION['SSCD']=$SSCD;
$_SESSION['SSCB']=$SSCB;

$_SESSION['HSCMYP']=$HSCMYP;
$_SESSION['HSCSCN']=$HSCSCN;
$_SESSION['HSCD']=$HSCD;
$_SESSION['HSCB']=$HSCB;

$_SESSION['SSCE']=$SSCE;
$_SESSION['SSCM']=$SSCM;
$_SESSION['SSCO']=$SSCO;
$_SESSION['HSCE']=$HSCE;
$_SESSION['HSCM']=$HSCM;
$_SESSION['HSCO']=$HSCO;

$_SESSION['SSCEM']=$SSCEM;
$_SESSION['SSCMM']=$SSCMM;
$_SESSION['SSCOM']=$SSCOM;
$_SESSION['HSCEM']=$HSCEM;
$_SESSION['HSCMM']=$HSCMM;
$_SESSION['HSCOM']=$HSCOM;

$_SESSION['SSCES']=$SSCES;
$_SESSION['SSCMS']=$SSCMS;
$_SESSION['SSCOS']=$SSCOS;
$_SESSION['HSCES']=$HSCES;
$_SESSION['HSCMS']=$HSCMS;
$_SESSION['HSCOS']=$HSCOS;

$_SESSION['SSCEV']=$SSCEV;
$_SESSION['SSCMV']=$SSCMV;
$_SESSION['SSCOV']=$SSCOV;
$_SESSION['HSCEV']=$HSCEV;
$_SESSION['HSCMV']=$HSCMV;
$_SESSION['HSCOV']=$HSCOV;

$_SESSION['SSCVTSSCVT']=$SSCVT;
$_SESSION['HSCVT']=$HSCVT;
$_SESSION['HSCMCVC']=$HSCMCVC;
$_SESSION['GDE']=$GDE ;
$_SESSION['GAP']=$GAP;
$_SESSION['GAPCER']=$GAPCER ;

$_SESSION['LOCATED']=$LOCATED;
$_SESSION['FROM']=$FROM;
$_SESSION['WORK']=$WORK;
$_SESSION['TRANSFER']=$TRANSFER;

$_SESSION['sname']=$sname;
$_SESSION['pname']=$pname;
$_SESSION['ssign']=$ssign;
$_SESSION['psign']=$psign;


	$sql = "INSERT INTO admission2(VIIIMYP, VIIISCN, VIIID, VIIIB,IXMYP, IXSCN, IXD, IXB,SSCMYP, SSCSCN, SSCD, SSCB, HSCMYP, HSCSCN, HSCD,HSCB, SSCE, SSCM, SSCO, HSCE, HSCM, HSCO, SSCEM, SSCMM, SSCOM, HSCEM, HSCMM, HSCOM, SSCES,SSCMS, SSCOS, HSCES, HSCMS,HSCOS, SSCEV, SSCMV, SSCOV,HSCEV, HSCMV, HSCOV, SSCVT, HSCVT, HSCMCVC, GDE, GAP, GAPCER, LOCATED, FROMVAL, WORK, TRANSFER, sname, pname, ssign, psign)
		VALUES ('$VIIIMYP', '$VIIISCN', '$VIIID', '$VIIIB','$IXMYP', '$IXSCN', '$IXD', '$IXB','$SSCMYP', '$SSCSCN', '$SSCD', '$SSCB', '$HSCMYP', '$HSCSCN', '$HSCD','$HSCB', '$SSCE', '$SSCM', '$SSCO', '$HSCE', '$HSCM', '$HSCO', '$SSCEM', '$SSCMM', '$SSCOM','$HSCEM', '$HSCMM', '$HSCOM', '$SSCES','$SSCMS', '$SSCOS', '$HSCES', '$HSCMS','$HSCOS', '$SSCEV', '$SSCMV', '$SSCOV','$HSCEV', '$HSCMV', '$HSCOV', '$SSCVT', '$HSCVT', '$HSCMCVC', '$GDE', '$GAP', '$GAPCER', '$LOCATED', '$FROM', '$WORK', '$TRANSFER', '$sname', '$pname', '$ssign', '$psign')";
	$result=mysql_query($sql);
		if (!$result)
		{
			die('Error - '.mysql_error());
		}
		else
		{	

			header('location:frmAdmission2.php');
		}	


?>