<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<?php $thisPage="participate"; ?>
<TITLE>Psychoacoustics Lab at ASU - People</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="style.css">
<META NAME="keywords" CONTENT="">
</HEAD>
<BODY onload="process()">
	<div id="outer" align="center">
  <?php include 'include_header.php'; ?>

	<div id="main">
    <table>
      <TR>
        <TD>
          <img src="images/participant1.jpg" align="right" valign="top" height="170" width="256" hspace="12">
          <span id="pagecontent">
            <?php 
              if (isset($_REQUEST['email_address'])) {
                $name = $_REQUEST['name'] ;
                $email = $_REQUEST['email_address'] ;
                $phone = $_REQUEST['phone_number'] ;
                $hear = $_REQUEST['hearing'] ;
                $language = $_REQUEST['nativelanguage'] ;
                $message = $_REQUEST['comments'] ;
            //    mail( "palab.asu@gmail.com", "*Potential Participant*",
                mail( "c-b@asu.edu", "*Potential Participant*",
                  "Name: $name\nPhone Number: $phone\nEmail: $email\nHearing: $hear\nEnglish: $language\nMessage:\n$comments\n",
                  "From: $name <$email>" );
                ?>
                 <P>
                  Thank you for taking the time to contact us! We will do our best to reply as promptly as possible.<BR><BR>
                  Here is the information you submitted:<BR><BR>
                  <?php 
                    print "Name: $name<BR>Phone Number: $phone<BR>Email: $email<BR>Hearing: $hear<BR>English: $language<BR>Message:<BR>$comments<BR>";
                  ?>
                 </P>
                <?
              } else {
                ?>
                  Are you interested in participating in research? If so, contact us. We are always looking for good listeners!<BR><BR>
                  Our experiments generally involve sitting in a sound booth, listening to sounds over headphones, and making
                  judgments about what you hear. Participation can be as few as 2 hours in a single session, or as many as 30-40 hours over 
                  the course of a semester. We are interested in listeners with both normal hearing, and hearing impairment. 
                  </span>
                  </TD>
                  </TR>
                  </TABLE>
              
                  <form method="post" action="participate_.php">
                  <table width="150px" border="0" cellspacing="0" bgcolor="#EEEEEE" cellpadding="5" align="center">
                    <tr>
                    <td>
                      Name<BR>
                      <input size=30 name="name">
                    </td>
                    </tr>
                    <tr>
                    <td>
                      E-Mail Address<BR>
                      <input size=30 name="email_address">
                    </td>
                    </tr>
                    <tr>
                    <td>
                      Phone Number<BR>
                      <input size=30 name="phone_number">
                    </td>
                    </tr>
                    <tr>
                    <td>
                      As far as I know, my hearing is:<BR>
                      <input type="radio" name="hearing" value="normal" checked> Normal<BR>
                      <input type="radio" name="hearing" value="impaired"> Impaired<BR>
                      <input type="radio" name="hearing" value="notsure"> I'm not sure<BR>
                    </td>
                    </tr>
                    <tr>
                    <td>
                      My native language is:<BR>
                      <input type="radio" name="nativelanguage" value="english" checked> English<BR>
                      <input type="radio" name="nativelanguage" value="fluent"> Non-English, but I am a fluent English Speaker<BR>
                      <input type="radio" name="nativelanguage" value="nonfluent"> Non-English and I am not fluent in English<BR>
                    </td>
                    </tr>
                    <tr>
                    <td>
                      Message<BR>
                      <textarea name="comments" rows=8 cols=45 wrap=Physical></textarea>
                    </td>
                    </tr>
                    <tr>
                    <td>
                      <input type="submit" value="Submit" name="submit">
                    </td>
                    </tr>
                  </table>
                  </form>
                <?
              }
            ?>
            </span>
          </TD>
        </TR>
      </TABLE>
  	</div>
    <?php include 'include_footer.php'; ?>		
	</div>
</BODY>
</HTML>

