<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<?php $thisPage="demos"; ?>
<TITLE>Psychoacoustics Lab at ASU - People</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="/style.css">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<META NAME="keywords" CONTENT="">
<script src="dhtmlgoodies_slider.js"></script>
<STYLE TYPE="text/css">
<!--
.border1 { 
   border: 1px gray solid;
  }
.aleft {
  text-align: left;
  }
TD.head {
   background-image: url('head_small.png');
   background-repeat: no-repeat; 
   background-position:center; 
   border-top:1px solid gray;
   border-bottom:1px solid gray;
   border-right:1px solid gray;
   height:147px;
   width:150px;
   vertical-align: middle;
}
TD.data {
   border-top:1px solid gray;
   border-bottom:1px solid gray;
   border-left:1px solid gray;
   text-align:right;
   width:90px;
}
TD.desc {
   border: 1px gray solid;
   height:132px;
   width:210px;
   vertical-align:top;
}
.form_widget_amount_slider{
		border-top:1px solid #9d9c99;
		border-left:1px solid #9d9c99;
		//border-bottom:1px solid #eee;
		//border-right:1px solid #eee;
		background-color:#f0ede0;
		height:3px;
		position:absolute;
		bottom:7px;
}
-->
</STYLE>
</HEAD>
<BODY>
	<div id="outer" align="center">

  <?php include '../include_header.php'; ?>

		<div id="main">
			<p class="aleft">
				Your data have been recorded. 
			</p>
			<p class="aleft">
				Thank you for completing the experiment!
			</p>
   		</div>
        <?php 
        $ToEmail = 'Christopher Brown <c-b@asu.edu>'; 
        $EmailSubject = 'ILD Experiment: '.$_POST["name"];
        $mailheader = "From: c-b@asu.edu\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
        $MESSAGE_BODY .= "Age: ".$_POST["age"]."<br>"; 
        $MESSAGE_BODY .= "CI L Co.: ".$_POST["CIl_company"]."<br>"; 
        $MESSAGE_BODY .= "CI L months: ".$_POST["CIl_months"]."<br>"; 
        $MESSAGE_BODY .= "CI R Co.: ".$_POST["CIr_company"]."<br>"; 
        $MESSAGE_BODY .= "CI R months: ".$_POST["CIr_months"]."<br>"; 
        $MESSAGE_BODY .= "Demo 1 [0]: ".$_POST["demo_1"]."<br>"; 
        $MESSAGE_BODY .= "Demo 2 [10]: ".$_POST["demo_2"]."<br>"; 
        $MESSAGE_BODY .= "Demo 3 [-5]: ".$_POST["demo_3"]."<br>";
        $MESSAGE_BODY .= "ILD 1: ".$_POST["ild_t1"]."<br>"; 
        $MESSAGE_BODY .= "ILD 2: ".$_POST["ild_t2"]."<br>"; 
        $MESSAGE_BODY .= "EILD 1: ".$_POST["eild_t1"]."<br>"; 
        $MESSAGE_BODY .= "EILD 2: ".$_POST["eild_t2"]."<br>"; 
        $MESSAGE_BODY .= "Comments:<br>".$_POST["comments"]."<br>"; 
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
        ?>
  <?php include '../include_footer.php'; ?>		
	</div>
</BODY>
</HTML>

