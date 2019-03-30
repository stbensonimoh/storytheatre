<?php
$emailBody = "<p>&nbsp;</p>
<div class='cardWrap' style='color: #fff; font-family: sans-serif; margin: 3em auto; width: 27em;'>
<p style='text-align: center;'><img src='https://proudafricanroots.com/storytheatre/img/grandmawura_logo.png' width='200' /></p>
<div class='card cardLeft' style='background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%); float: left; height: 11em; margin-top: 10px; padding: 1em; position: relative; border-bottom-left-radius: 8px; border-top-left-radius: 8px; width: 16em;'>
<h1 style='font-size: 1.1em; margin-top: 0;'>Proud African Roots</h1>
<div class='title' style='font-weight: normal; text-transform: uppercase; margin: 2em 0 0 0;'>
<h2 style='color: #525252; font-size: 0.9em; margin: 0;'>Adio - OMO Iya Alakara</h2>
<span style='color: #a2aeae; font-size: 0.7em;'>The Musical</span></div>
<div class='name' style='font-weight: normal; text-transform: uppercase; margin: 0.7em 0 0 0;'>
<h2 style='color: #525252; font-size: 0.9em; margin: 0;'>{$firstName} {$lastName}</h2>
<span style='color: #a2aeae; font-size: 0.7em;'>name</span></div>
<div class='seat' style='font-weight: normal; text-transform: uppercase; margin: 0.7em 0 0 0; float: left;'>
<h2 style='color: #525252; font-size: 0.9em; margin: 0;'>24th - 27th May</h2>
<span style='color: #a2aeae; font-size: 0.7em;'>Date</span></div>
<div class='time' style='font-weight: normal; text-transform: uppercase; margin: 0.7em 0 0 1em; float: left;'>
<h2 style='color: #525252; font-size: 0.9em; margin: 0;'>09:00</h2>
<span style='color: #a2aeae; font-size: 0.7em;'>time</span></div>
</div>
<div class='card cardRight' style='background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%); float: left; height: 11em; margin-top: 10px; padding: 1em; position: relative; border-bottom-right-radius: 8px; border-left: 0.18em dashed #fff; border-top-right-radius: 8px; width: 6.5em;'>
<div class='eye' style='background: #fff; border-radius: 1em/0.6em; height: 1.5em; margin: 0 auto; position: relative; width: 2em; z-index: 1;'>&nbsp;</div>
<div class='number' style='text-align: center; text-transform: uppercase;' align='center'>
<h3 style='color: #e84c3d; font-size: 2.5em; margin: 0.9em 0 0 0;'>{$ticketQty}</h3>
<span style='color: #a2aeae; display: block;'>{$people}</span></div>
<div class='barcode' style='box-shadow: 1px 0 0 1px #343434, 5px 0 0 1px #343434, 10px 0 0 1px #343434, 11px 0 0 1px #343434, 15px 0 0 1px #343434, 18px 0 0 1px #343434, 22px 0 0 1px #343434, 23px 0 0 1px #343434, 26px 0 0 1px #343434, 30px 0 0 1px #343434, 35px 0 0 1px #343434, 37px 0 0 1px #343434, 41px 0 0 1px #343434, 44px 0 0 1px #343434, 47px 0 0 1px #343434, 51px 0 0 1px #343434, 56px 0 0 1px #343434, 59px 0 0 1px #343434, 64px 0 0 1px #343434, 68px 0 0 1px #343434, 72px 0 0 1px #343434, 74px 0 0 1px #343434, 77px 0 0 1px #343434, 81px 0 0 1px #343434; height: 2em; margin: 1.2em 0 0 0.8em; width: 0;'>&nbsp;</div>
</div>
</div>";
$emailBodyAdmin = "<table style='background-color: #d5d5d5;' border='0' width='100%' cellspacing='0'>
<tbody>
<tr>
<td>
<table style='font-family: Helvetica,Arial,sans-serif; background-color: #fff; margin-top: 40px; margin-bottom: 40px;' border='0' width='600' cellspacing='0' cellpadding='0' align='center'>
<tbody>
<tr>
<td style='padding-top: 40px; padding-right: 40px; padding-bottom: 15px;' colspan='2'>
<p style='text-align: right;'><a href='https://proudafricanroots.com'><img src='https://proudafricanroots.com/storytheatre/img/grandmawura_logo.png' alt='Proud African Roots' width='30%' border='0' /></a></p>
</td>
</tr>
<tr>
<td style='padding-right: 40px; text-align: right;' colspan='2'>&nbsp;</td>
</tr>
<tr>
<td style='color: #000; font-size: 12pt; font-family: Helvetica; font-weight: normal; line-height: 15pt; padding: 40px 40px 80px 40px;' colspan='2' valign='top'>Dear Admin,
<p>Someone just bought tickets for Story Theatre with Grandma Wura.</p>
<p>Below are the details:</p>
<p><strong>First Name: {$firstName}</strong>&nbsp;<br /><strong>Last Name:</strong> {$lastName}<br /><strong>Email:</strong> {$email}<br /><strong>Phone Number:</strong>&nbsp; {$phone}<br /><strong>Location:</strong> {$location}<br /><strong>How they found out about us:</strong>&nbsp;{$referringChannel}<br /><strong>Ticket Quantity:</strong> {$ticketQty}</p>
<p>&nbsp;</p>
<p>Regards,</p>
</td>
</tr>
<tr>
<td style='border-top: 5px solid #f10f11; height: 10px; font-size: 7pt;' colspan='2' valign='top'><span>&nbsp;</span></td>
</tr>
<tr style='text-align: center;'>
<td id='s1' style='padding-left: 20px;' valign='top'><span style='text-align: center; color: #333; font-size: 12pt;'><strong>Correspondence Team</strong></span><span style='color: #cccccc; font-size: x-large;'>&nbsp;|&nbsp;</span><span style='text-align: left; color: #333; font-size: 11pt; font-weight: normal;'>Proud African Roots</span></td>
</tr>
<tr style='text-align: center; padding-left: 40px; padding-right: 40px; padding-bottom: 0;'>
<td colspan='2' valign='top'><span style='color: #333; font-size: 8pt; font-weight: normal; line-height: 17pt; padding-left: 40px; padding-right: 40px;'>Proud African Roots Limited<br /><strong>Office Address:</strong>&nbsp;Cactus Street, Block 194 LSPDC Medium Estate Phase IV,<br />Oba Ogunji Road, Ikeja, Lagos - Nigeria<br />tel: +2348175039643&nbsp; |&nbsp; mobile: +2348034025880&nbsp;<br /><strong>email:&nbsp;</strong>info@proudafricanroots.com&nbsp; |&nbsp; <strong>www.proudafricanroots.com</strong></span>
<p><a href='https://twitter.com/Proudafriroots'><img src='http://awlo.org/email/social/twitter_circle_color-20.png' width='20px' height='20px' /></a><a href='https://www.facebook.com/proudafricanroots/'><img src='http://awlo.org/email/social/facebook_circle_color-20.png' width='20px' height='20px' /></a><a href='https://www.instagram.com/proud_african_roots/'><img src='http://awlo.org/email/social/instagram_circle_color-20.png' width='20px' height='20px' /></a><a href='https://www.youtube.com/channel/UCcyYYMGQH0efvJ7XQsuwS1A'><img src='http://awlo.org/email/social/youtube_circle_color-20.png' width='20px' height='20px' /></a></p>
</td>
</tr>
<tr>
<td id='s3' style='padding-left: 20px; padding-right: 20px;' colspan='2' valign='bottom'>
<p style='font-family: Helvetica, sans-serif; text-align: center; font-size: 12px; line-height: 21px; color: #333;'><span style='margin-left: 4px;'><span style='opacity: 0.4; color: #333; font-size: 9px;'>Disclaimer: This message and any files transmitted with it are confidential and privileged. If you have received it in error, please notify the sender by return e-mail and delete this message from your system. If you are not the intended recipient you are hereby notified that any dissemination, copy or disclosure of this e-mail is strictly prohibited.</span></span></p>
</td>
</tr>
<tr>
<td style='border-bottom: 5px solid #000000; height: 5px; font-size: 7pt;' colspan='2' valign='top'>&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>";