		<div style="width:25%; float:left;">
			<div style="margin-left:auto; margin-right:auto;">
				<!-- INCLUDE sidebar-{CURRENT_PAGE}.tpl -->
			</div>
		</div>
		<div style="width:75%; float:right;">
			<div class="container">
				<h4 class="rounded-top rounded-bottom">{L_25_0023}&nbsp;&gt;&gt;&nbsp;{L_5318}</h4>
				<div style="font-size: 16px; font-weight: bold; text-align: center;" class="centre">
					{L_5438}<i>{SITENAME}</i><br>
					{STATSMONTH}
				</div>
				<div style="text-align: center;" class="centre">
					<a href="viewaccessstats.php">{L_5143}</a> | <a href="viewbrowserstats.php">{L_5165}</a>
				</div>

				<table class="table table-striped table-bordered">
					<tr>
						<th align="center" width="80"><b>{L_5156}</b></td>
						<th height="21" style="text-align:right;">&nbsp;</td>
					</tr>
<!-- BEGIN sitestats -->
					<tr class="bg">
						<td align="center" height="45"><b>{sitestats.PLATFORM}</b></td>
						<td>
	<!-- IF sitestats.NUM eq 0 -->
							<div style="height:15px;"><b>0</b></div>
	<!-- ELSE -->
							<div style="height:15px; width:{sitestats.WIDTH}%; background-color:#006699; color:#FFFFFF;"><b>{sitestats.PERCENTAGE}%</b></div>
	<!-- ENDIF -->
						</td>
					</tr>
<!-- END sitestats -->
				</table>
			</div>
		</div>
