<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<?php $thisPage="contact"; ?>
<TITLE>Psychoacoustics Lab at ASU - People</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="style.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<META NAME="keywords" CONTENT="">

<script language="JavaScript" type="text/javascript">
function isValid() {
 if (document.forms['mailform'].elements['sendto'].value=='')
 {
   if (document.forms['mailform'].elements['email_address'].value=='')
   {
  	 alert ('Please select a recipient and enter your email address!')
  	 return false;
    } else {
  	 alert ('Please select a recipient!')
  	 return false;
    }
 } else {
   if (document.forms['mailform'].elements['email_address'].value=='')
   {
  	 alert ('Please enter your email address!')
  	 return false;
    } else {
     	return true;
    }
 }
}
</script>
</HEAD>
<BODY onload="process()">
	<div id="outer" align="center">
  <?php include 'include_header.php'; ?>

		<div id="main">
   <table><TR><TD>
<?php 
  if (!isset($_REQUEST['email_address'])) {
    ?>
     <span id="pagecontent">
      You can fill in the following form to send an email to a lab member. If you just want the person's
      email addresses, it can be obtained by adding '@asu.edu' to the value in parentheses next to the name (eg., 'george.w.bush@asu.edu').
      </span>
      </TD>
      </TR>
      </TABLE>
  
      <form method="post" action="contact.php" name="mailform" onSubmit="return isValid()">
      <table width="150px" border="0" cellspacing="0" bgcolor="#EEEEEE" cellpadding="5" align="center">
        <tr>
        <td>
        Recipient
        </td>
        </tr>
        <tr>
          <td>
            <SELECT NAME="sendto" SIZE="5">
            <OPTION VALUE="spb" <?php if ($_GET["to"]=="spb") echo " selected=\"true\""; ?>>Sid P. Bacon (spb)
            <OPTION VALUE="William.Yost" <?php if ($_GET["to"]=="William.Yost") echo " selected=\"true\""; ?>>William A. Yost (William.Yost)
            <OPTION VALUE="c-b" <?php if ($_GET["to"]=="c-b") echo " selected=\"true\""; ?>>Christopher A. Brown (c-b)
            <OPTION VALUE="Nicole.Scherrer" <?php if ($_GET["to"]=="Nicole.Scherrer") echo " selected=\"true\""; ?>>Nicole Scherrer (Nicole.Scherrer)
            <OPTION VALUE="Kate.Helms-Tillery" <?php if ($_GET["to"]=="Kate.Helms-Tillery") echo " selected=\"true\""; ?>>Kate Helms-Tillery (Kate.Helms-Tillery)
            <OPTION VALUE="Farris.Walling" <?php if ($_GET["to"]=="Farris.Walling") echo " selected=\"true\""; ?>>Farris Walling (Farris.Walling)
            <OPTION VALUE="jranweil" <?php if ($_GET["to"]=="jranweil") echo " selected=\"true\""; ?>>Joseph Ranweiler (jranweil)
            </select>
          </td>
        </tr>
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
          Subject<BR>
          <input size=30 name="subject">
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
    </span>
    <?
  } else {
    $sendto = $_REQUEST['sendto'];
    $name = $_REQUEST['name'] ;
    $email = $_REQUEST['email_address'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['comments'] ;
    mail( $sendto . '@asu.edu', $subject,
      "$message\n",
      "From: $name <$email>" );
    ?>
   <span id="pagecontent">
      <P>Thank you for taking the time to contact us! We will do our best to reply as promptly as possible.</P>
      <P>Here is the information you submitted:<BR><BR>
      <?php 
        print "Name: $name<BR>Email: $email<BR>Recipient: $sendto<BR>Subject: $subject<BR>Message:<BR>$message<BR>";
      ?>
      </P>
   </span>
    <?
  }
?>
   </TD>
   </TR>
   </TABLE>
		</div>
  <?php include 'include_footer.php'; ?>		
	</div>
</BODY>
</HTML>

