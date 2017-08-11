<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<?php $thisPage="people"; ?>
<TITLE>Psychoacoustics Lab at ASU - People</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="style.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<META NAME="keywords" CONTENT="">
</HEAD>
<BODY>
	<div id="outer" align="center">

  <?php include 'include_header.php'; ?>

		<div id="main">
		<table width="100%" summary="Des exemples d'affichage du lecteur">
			<tbody>
				<tr>
					<td>
						<object type="application/x-shockwave-flash" data="player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=sounds/1-m-b-v0.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td>Vocoder Only.</td>
					<td>
						A simulation of cochlear implant stimulation. 
					</td>
				</tr>
				<tr>
					<td>
						<object type="application/x-shockwave-flash" data="player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=sounds/1-m-b-vs.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td>Vocoder Plus Low-Pass Speech</td>
					<td>
						Vocoder plus 500-Hz low-pass speech. Simulates electric-acoustic stimulation. 
					</td>
				</tr>
				<tr>
					<td>
						<object type="application/x-shockwave-flash" data="player/player_mp3_maxi.swf" width="25" height="20">
							<param name="movie" value="player/player_mp3_maxi.swf" />
							<param name="FlashVars" value="mp3=sounds/1-m-b-vt.mp3&amp;showslider=0&amp;width=25" />
						</object>
					</td>
					<td>Vocoder Plus Tone</td>
					<td>
						Vocoder stimulation plus a tone in the low frequency region that is modulated in frequency with F0 and in amplitude with the amplitude envelope of low-pass speech.
					</td>
				</tr>
			</tbody>
		</table>
                		</div>
  <?php include 'include_footer.php'; ?>		
	</div>
</BODY>
</HTML>

