<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?>
<div class="row contacts" itemscope itemtype="http://schema.org/Organization">
	<div class="col-md-12">
		<div class="row contacts">
			<div class="col-md-5"> 
				<div itemprop="description"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-about.php", Array(), Array("MODE" => "html", "NAME" => "Contacts about"));?></div>
			</div>
			<div class="col-md-7">
				<table cellpadding="0" cellspasing="0"> 
					<tbody> 
						<tr>
							<td align="left" valign="top"><i class="fa colored fa-map-marker"></i></td><td align="left" valign="top"><span class="dark_table">Адрес</span>
								<br />
								<span itemprop="address"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-address.php", Array(), Array("MODE" => "html", "NAME" => "Address"));?></span>
							</td>
							<td align="left" valign="top"><i class="fa colored fa-phone"></i></td><td align="left" valign="top"> <span class="dark_table">Телефон</span>
								<br />
								<span itemprop="telephone"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-phone.php", Array(), Array("MODE" => "html", "NAME" => "Phone"));?></span>
							</td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td align="left" valign="top"><i class="fa colored fa-envelope"></i></td><td align="left" valign="top"> <span class="dark_table">E-mail</span>
								<br />
								<span itemprop="email"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-email.php", Array(), Array("MODE" => "html", "NAME" => "Email"));?></span>
							</td>
							<td align="left" valign="top"><i class="fa colored fa-clock-o"></i></td><td align="left" valign="top"> <span class="dark_table">Режим работы</span>
								<br />
								<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-schedule.php", Array(), Array("MODE" => "html", "NAME" => "Schedule"));?>
							</td>
						</tr>
						<tr>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="tabs contacts_tabs">
	<ul class="nav nav-tabs">
		<li><a href="#contacts_map" data-toggle="tab">Расположение</a></li>
		<li class="active"><a href="#contacts_schema" data-toggle="tab">Как проехать</a></li>
	</ul>
</div>


		</div><?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
	</div><?// class="maxwidth-theme?>
</div><?// class=row?>


<div class="tab-content contacts_tab_content">
	<div class="tab-pane active" id="contacts_map">
		<div class="map_block">
			<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("map-block");?>
			<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:54.594618153489556;s:10:\"yandex_lon\";d:82.37214768558157;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:82.37455094485892;s:3:\"LAT\";d:54.594692912168945;s:4:\"TEXT\";s:14:\"Морской\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
			2 => "MINIMAP",
			3 => "TYPECONTROL",
			4 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"ZOOM_BLOCK" => array(
			"POSITION" => "right bottom",
		),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);
			?>
			<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("map-block", "");?>
		</div>
	</div>
	<div class="tab-pane" id="contacts_schema">
		<div class="row">
			<div class="maxwidth-theme">
				<div class="col-md-12">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-schema.php", Array(), Array("MODE" => "html", "NAME" => "Schema"));?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="color_block">
	<div class="row">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="block front">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="front-text1">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/front-text1.php",
										"EDIT_TEMPLATE" => "standard.php"
									)
								);?>
							</div>
						</div>
						<div class="col-md-7 col-sm-6">
							<div class="front-text2">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/front-text2.php",
										"EDIT_TEMPLATE" => "standard.php"
									)
								);?>
							</div>
						</div>
						<div class="col-md-2 col-sm-3">
							<div class="front-text3">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR."include/front-text3.php",
										"EDIT_TEMPLATE" => "standard.php"
									)
								);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
