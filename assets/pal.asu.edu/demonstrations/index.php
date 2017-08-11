<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<?php $thisPage="demos"; ?>
<TITLE>Psychoacoustics Lab at ASU - People</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="/style.css">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<META NAME="keywords" CONTENT="">
<STYLE TYPE="text/css">
<!--
.border1 { 
   border: 1px gray solid;
  }
.aleft {
  text-align: left;
  }
-->
</STYLE>
</HEAD>
<BODY>
	<div id="outer" align="center">

  <?php include '../include_header.php'; ?>

		<div id="main">
			<P class="aleft">
				The following sounds are a demonstration of the cues responsible for the benefits observed in combined electric-acoustic stimulation, or EAS. The first soundfile is simply a 4-channel vocoder, which simulates electric stimulation. The second is the vocoder combined with 500-Hz low-pass speech, which is the EAS simulation. For the third soundfile, we replaced the low-pass speech with a tone modulated in frequency with the talker's F0, and in amplitude with the amplitude envelope of the low-pass target speech. The fourth sound is the modulated tone alone. 
			</P>
			<P class="aleft">
				This demonstration shows that F0 and the amplitude envelope are important cues for EAS are. 
			</P>
			<table width="100%" cellspacing="0" cellpadding="5" class="border1"> 
			<tbody>
				<tr>
					<td class="border1">
						<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="/player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=/sounds/1-m-b-v0.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td class="border1">
						Vocoder Only.
					</td>
					<td class="border1">
						A simulation of cochlear implant stimulation. 
					</td>
				</tr>
				<tr>
					<td class="border1">
						<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="/player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=/sounds/1-m-b-vs.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td class="border1">
						Vocoder Plus Low-Pass Speech
					</td>
					<td class="border1">
						Vocoder plus 500-Hz low-pass speech. Simulates electric-acoustic stimulation. 
					</td>
				</tr>
				<tr>
					<td class="border1">
						<object type="application/x-shockwave-flash" data="/player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="/player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=/sounds/1-m-b-vt.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td class="border1">
						Vocoder Plus Tone
					</td>
					<td class="border1">
						Vocoder stimulation plus a tone in the low frequency region that is modulated in frequency with F0 and in amplitude with the amplitude envelope of low-pass speech.
					</td>
				</tr>
			</tbody>
		</table>
                		</div>
  <?php include '../include_footer.php'; ?>		
	</div>
</BODY>
</HTML>

