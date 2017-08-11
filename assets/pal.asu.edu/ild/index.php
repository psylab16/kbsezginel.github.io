<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<?php $thisPage="demos"; ?>
<TITLE>Psychoacoustics Lab at ASU - People</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="/style.css">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<META NAME="keywords" CONTENT="">
<!--<script src="dhtmlgoodies_slider.js"></script>-->
<link
    href="slider_default.css"
    rel="stylesheet"
    type="text/css" />
<script
    language="JavaScript"
    src="slider.js" >
</script>
<STYLE TYPE="text/css">
<!--
.border1 { 
   border: 1px gray solid;
  }
.player { 
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

#horizontal_slider_1 {
	background-color: #696;
	border-color: #9c9 #363 #363 #9c9;
	}
#horizontal_track_1, #display_holder_1 {
	background-color: White;
    color: Black;
	}

-->
</STYLE>
</HEAD>
<BODY>
	<div id="outer" align="center">

  <?php include '../include_header.php'; ?>

		<div id="main">
			<p class="aleft">
				This experiment is intended for individuals who have two cochlear implants. No data will be collected about you except what you provide. Because of this, please complete the experiment only once. Feel free to pass the link on to other bilateral CI users you know. 
			</p>
			<p class="aleft">
                The experiment will test how 'lateralized' sounds can be to you. This means how far to the left or to the right they are. It should take about 5 minutes to complete. Please wear headphones, placed as comfortably as possible over the microphones of your two processors. Once the headphones are on, please try not to move them until the experiment is complete. Play the first sound below, and adjust your computer's volume until it is at a comfortable level. Then, you are ready to begin.
			</p>
			<p class="aleft">
                First, fill in the form with your information. Then, click on each of the black boxes below to listen to a voice. To the right of each is a picture of a head. Slide the slider to indicate where in your head the voice sounds. If it sounds like it is right in the middle of your head, leave the slider in the middle. If it sounds as far to the left or right as it can be, slide it all the way to the left or right. If it is to one side but not all the way over, slide the slider a little to that side. You can listen to the sounds as many times as you like. When you are done, click the button at the bottom to go to the next page. 			
            </p>
            <form action="page2.php" method="post">
			<table width="520px" cellspacing="0" cellpadding="5" class="border1"> 
			<tbody>
				<tr>
					<td class="border1" colspan="4">
                        <table>
                            <tr>
                                <td align="right">
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name="name" size="10" value="">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Age:
                                </td>
                                <td>
                                    <input type="text" name="age" size="5" value="">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Email:
                                </td>
                                <td>
                                    <input type="text" name="email" size="18" value="">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Left CI manufacturer:
                                </td>
                                <td>
                                    <SELECT name="CIl_company">
                                    <OPTION selected value="Cochlear">Cochlear Corp.</OPTION>
                                    <OPTION value="AB">Advanced Bionics</OPTION>
                                    <OPTION value="Medel">Medel</OPTION>
                                    </SELECT>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Months since left CI surgery:
                                </td>
                                <td>
                                    <input type="text" name="CIl_months" size="5" value="">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Right CI manufacturer:
                                </td>
                                <td>
                                    <SELECT name="CIr_company">
                                    <OPTION selected value="Cochlear">Cochlear Corp.</OPTION>
                                    <OPTION value="AB">Advanced Bionics</OPTION>
                                    <OPTION value="Medel">Medel</OPTION>
                                    </SELECT>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Months since right CI surgery:
                                </td>
                                <td>
                                    <input type="text" name="CIr_months" size="5" value="">
                                </td>
                            </tr>
                        </table>
					</td>
                </tr>
				<tr>
					<td class="player">
						<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="/player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=eild_demo_ild.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td class="data">
                        <table><tr><td align="right" valign="middle">
                            Talker 1: <input type="text" name="demo_1" size="1" value="0" onchange="aFunction()">
                        </td></tr></table>
					</td>
					<td class="head" align="center" valign="middle">
                        <table>
                            <tr>
                                <td>
                                    <div id="slider_target1"></div>
                                    <script type="text/javascript">
                                    form_widget_amount_slider('slider_target1',document.forms[0].demo_1,130,-10,10,"aFunction()");
                                    </script>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="desc">
                        This female should be in the middle of your head. 
					</td>
				</tr>
				<tr>
					<td class="player">
						<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="/player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=eild_demo_ild.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td class="data">
                        <table><tr><td align="right" valign="middle">
                            <div class="display_holder" id="display_holder_1" >
                                Talker 2: <input type="text" class="value_display" id="value_display_1" value="0" onfocus="blur(this);" />
                            </div>
                            <!--<input type="text" name="demo_2" size="1" value="0" onchange="aFunction()">-->
                        </td></tr></table>
					</td>
					<td class="head" align="center" valign="middle">
                        <table>
                            <tr>
                                <td>
                                    <!-- Horizontal slider 1 (green) -->
                                    <div class="horizontal_track" id="horizontal_track_1" >
                                        <div class="horizontal_slit" id="horizontal_slit_1" >&nbsp;</div>
                                        <!-- http://carpe.ambiprospect.com/slider/archive/v1.3/
                                            slide(event, '[id of the slider itself]',
                                                        ['horizontal' or 'vertical'],
                                                        [the slider length in pixels (integer)],
                                                        [the minimum display value],
                                                        [the maximum display value],
                                                        [the number of accepted values in the interval],
                                                        [number of decimals to display],
                                                        '[id of the display]')
                                        -->
                                        <div class="horizontal_slider" id="horizontal_slider_1" style="left: 50px;"
                                            onmousedown="slide(event, 'horizontal', 100, -10, 10, 21, 0, 'value_display_1');" >&nbsp;</div>
                                    </div>
<!--                                    <div id="slider_target2"></div>
                                    <script type="text/javascript">
                                    form_widget_amount_slider('slider_target2',document.forms[0].demo_2,130,-10,10,"aFunction()");
                                    </script>
-->
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="desc">
                        This male should be pretty far to the right in your head. 
					</td>
				</tr>
				<tr>
					<td class="player">
						<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="/player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=eild_demo_ild.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td class="data">
                        <table><tr><td align="right" valign="middle">
                            Talker 3: <input type="text" name="demo_3" size="1" value="0" onchange="aFunction()">
                        </td></tr></table>
					</td>
					<td class="head" align="center" valign="middle">
                        <table>
                            <tr>
                                <td>
                                    <div id="slider_target3"></div>
                                    <script type="text/javascript">
                                    form_widget_amount_slider('slider_target3',document.forms[0].demo_3,130,-10,10,"aFunction()");
                                    </script>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="desc">
                        This female should be a little bit to the left in your head. 
					</td>
				</tr>
                <tr>
                    <td class="border1" colspan="4">
                        <input type="submit" value="Go to page 2" />
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

