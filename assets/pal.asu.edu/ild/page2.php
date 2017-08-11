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
				Last page. Now it gets a little harder. There will be two voices at the same time. Hopefully, Hopefully, one of them will sound off to the left, and the other will sound off to the right. You can see that there are now two sliders for each sound, one for each voice. Some of the sounds may be a little noisy, please try to ignore that and just listen for the voices and where they are in your head. 
			</p>
			<form action="done.php" method="post">
				<input type="hidden" name="name" value="<?php echo $_REQUEST['name']; ?>">
				<input type="hidden" name="age" value="<?php echo $_REQUEST['age']; ?>">
				<input type="hidden" name="email" value="<?php echo $_REQUEST['email']; ?>">
				<input type="hidden" name="CIl_company" value="<?php echo $_REQUEST['CIl_company']; ?>">
				<input type="hidden" name="CIl_months" value="<?php echo $_REQUEST['CIl_months']; ?>">
				<input type="hidden" name="CIr_company" value="<?php echo $_REQUEST['CIr_company']; ?>">
				<input type="hidden" name="CIr_months" value="<?php echo $_REQUEST['CIr_months']; ?>">
				<input type="hidden" name="demo_1" value="<?php echo $_REQUEST['demo_1']; ?>">
				<input type="hidden" name="demo_2" value="<?php echo $_REQUEST['demo_2']; ?>">
				<input type="hidden" name="demo_3" value="<?php echo $_REQUEST['demo_3']; ?>">
				<table width="520px" cellspacing="0" cellpadding="5" class="border1"> 
					<tbody>
						<tr>
							<td class="border1">
								<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
								<param name="movie" value="/player/player_mp3_maxi.swf" />
								<param name="FlashVars" value="mp3=eild_demo_ild.mp3&amp;showslider=0&amp;width=25" />
								</object>
							</td>
							<td class="data">
								<table>
									<tr>
										<td align="right" valign="middle">
											Talker 1 <input type="text" name="ild_t1" size="1" value="0" onchange="aFunction()">
										</td>
									</tr>
									<tr>
										<td align="right" valign="middle">
											Talker 2 <input type="text" name="ild_t2" size="1" value="0" onchange="aFunction()">
										</td>
									</tr>
								</table>
							</td>
							<td align="center" valign="middle" class="head">
								<table>
									<tr>
										<td>
											<div id="slider_ild_t1"></div>
											<script type="text/javascript">
											form_widget_amount_slider('slider_ild_t1',document.forms[0].ild_t1,130,-10,10,"aFunction()");
											</script>
										</td>
									</tr>
									<tr height="14px">
										<td>
										</td>
									</tr>
									<tr>
										<td>
											<div id="slider_ild_t2"></div>
											<script type="text/javascript">
											form_widget_amount_slider('slider_ild_t2',document.forms[0].ild_t2,130,-10,10,"aFunction()");
											</script>
										</td>
									</tr>
								</table>
							</td>
							<td class="desc">
								There are two female talkers.
							</td>
						</tr>
						<tr>
							<td class="border1">
								<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
								<param name="movie" value="/player/player_mp3_maxi.swf" />
								<param name="FlashVars" value="mp3=eild_demo_ild.mp3&amp;showslider=0&amp;width=25" />
								</object>
							</td>
							<td class="data">
								<table>
									<tr>
										<td align="right" valign="middle">
											Talker 1 <input type="text" name="eild_t1" size="1" value="0" onchange="aFunction()">
										</td>
									</tr>
									<tr>
										<td align="right" valign="middle">
											Talker 2 <input type="text" name="eild_t2" size="1" value="0" onchange="aFunction()">
										</td>
									</tr>
								</table>
							</td>
							<td align="center" valign="middle" class="head">
								<table>
									<tr>
										<td>
											<div id="slider_eild_t1"></div>
											<script type="text/javascript">
											form_widget_amount_slider('slider_eild_t1',document.forms[0].eild_t1,130,-10,10,"aFunction()");
											</script>
										</td>
									</tr>
									<tr height="14px">
										<td>
										</td>
									</tr>
									<tr>
										<td>
											<div id="slider_eild_t2"></div>
											<script type="text/javascript">
											form_widget_amount_slider('slider_eild_t2',document.forms[0].eild_t2,130,-10,10,"aFunction()");
											</script>
										</td>
									</tr>
								</table>
							</td>
							<td class="desc">
								This one is noisy. Please try to ignore the noise and just listen for the two female talkers.
							</td>
						</tr>
						<tr>
							<td colspan="4" class="border1">
								Is there any additional information you would like us to know? Please enter it here:<br />
								<textarea name="comments" rows="4" cols="40">
								</textarea>
							</td>
						</tr>
						<tr>
							<td class="border1" colspan="4">
								<input type="submit" value="All done!" />
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
		<?php include '../include_footer.php'; ?>		
	</div>
</BODY>
</HTML>

