#
# --Send winner notification
# 
# 			This file contains the message your customers
# 			will receive when someone sends them an auction.
#			Lines starting with # will be skipped.
#			Blank lines will be maintained.
#
#			Change the message below as needed considering the 
#			following tags to reflect your customer's personal data:
#
#		--------------------------------------------------------
#			TAG SYNTAX				EFFECT
#		--------------------------------------------------------
#
#			<#w_name#>			  Winner Name
#			<#w_nick#>			  Winner Nickname
#			<#s_name#>			  Seller Name
#			<#s_nick#>			  Seller Nickname
#			<#s_email#>			 Seller email
#			<#s_address#>		   Seller Address
#			<#s_city#>			  Seller City
#			<#s_prov#>			  Seller State/Province
#			<#s_country#>		   Seller Country
#			<#s_zip#>			   Seller Zip Code
#			<#s_phone#>			 Seller Phone
#			<#i_title#>			 auction item title 
#			<#i_description#>	   auction item description 
#			<#i_url#>			   URL to view auction 
#			<#i_ends#>			  Auction End date/time
#		   <#c_sitename#>		  Auction Site Name
#		   <#c_siteurl#>		   main URL of auction site
#		   <#c_adminemail#>		email address of Auction site webmaster
#		--------------------------------------------------------
#
#			USAGE:
#			Insert the above tags in the text of your message			
#			where you want each value to appear.			
#			Modify the message to reflect your needs.
#			Change [...] with to your correct data.
#
# 
#

<html>
 <head>
 	<style type="text/css">
 		body {
 		font-family: Verdana;
 		}
 	</style>
 </head>
 <body>
<table border="0" width="100%">
	<tr>
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Congratulations, you won the item!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Hello <b><#w_name#></b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;"><i>Congratulations</i> you committed to buying the following item:</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="<#a_picturl#>"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="<#i_url#>"><#i_title#></a></td>

			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;"># of bids:</td>
				<td align="left" style="font-size: 12px;"><#i_numbids#></td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Your bid:</td>
				<td align="left" style="font-size: 12px;"><#i_currentbid#></td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">End time:</td>
				<td align="left" style="font-size: 12px;"><#i_ends#></td>
			</tr>
			
			<tr>
				<td width="18%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="<#c_siteurl#>user_menu.php?">Goto My <#c_sitename#></a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">Check Payment Details</td>
	</tr>
	<tr>
		<td width="34%" height="90" valign="top">
		<a href="<#c_siteurl#>buying.php">
		<img border="0" src="<#c_siteurl#>images/email_alerts/Total_Due_Btn.jpg" width="120" height="32"></a></td>
	</tr>
 </table>
 
<table border="0" width="100%">
	<tr>
		<td style="font-size: 12px;"><b>Seller's Information</b></td>
	</tr>
	<tr>
		<td style="font-size: 12px;"><#s_nick#> - <a href="mailto:<#s_email#>"><#s_email#></a></td>
	</tr>
</table>
</body>
</html>