<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Contacta"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Contacta"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Contacta"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Contacta"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Contacta"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<script src="js/common-bundle.js?ts=20241011192407" type="text/javascript"></script>
	<script src="js/a188dd9d16c7016d2ce8f99155e393b6-bundle.js?ts=20241011192407" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20241011192407" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9d16c7016d2ce8f99155e393b6-bundle.css?ts=20241011192407" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><link rel="icon" href="/gallery/LOGOZONA-6.fw.png" type="image/png" />
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9d16c7016d2ce8f99155e393b6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_header_a188dd9d16c7016d2ce8f99155e393b6_video_background" class="wb_video_background" data-video="gallery/07161.mp4" data-start="" data-end=""></div><div id="a188dd9cfba30eaa4770d9892a5ca2bf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9cfba30fa9a8b576a5c0257e06" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191330021a4004d0e00625d424535e9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/42a86a1840d8fa94956b452f977e44c5_fit.png?ts=1728663847"></div></div></div></div></div><div id="a18b6160465300e1dae786a5dc7fac1e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a19147e75ef800b97eef1570fe0db12c" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">INICIO</a></li><li class=""><a href="Servidores/">SERVIDORES</a></li><li class=""><a href="Staff/">STAFF</a></li><li class="wb_this_page_menu_item"><a href="Contacta/">CONTACTO</a></li><li class=""><a href="https://discord.gg/gbqGe4CGvv" target="_blank">DISCORD</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a188dd9d16c7016d2ce8f99155e393b6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9cfba30208fef1af600b6f3d41" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9cfba303280d24c6ed5bf32e1f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a192354d570b00863de7cddd734a6bec" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-custom19">Contacto</h4>
</div><div id="a188dd9cfba3058e88d10f4b83707352" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;">Aqui podrás ponerte en contacto con nosotros en caso de no utilizar Discord. ¡Responderemos lo antes posible! Muchas gracias.</p>
</div><div id="a188dd9cfba306143ab6d04cf7480cbc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1917c16785e0059de8d2a3668f912af" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1917c16785e01ff3e8a4b7abe27e0ea" class="wb_element" data-plugin="Form"><form id="a1917c16785e01ff3e8a4b7abe27e0ea_form" class="wb_form wb_vertical_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="ab8d969f"><input type="hidden" name="wb_form_uuid" value="2662994c"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Nombre<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Nombre"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr class="area-row"><th>Descripción<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Descripción"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_1" required="required"></textarea></div></td></tr><tr><th>Categoría<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Categoría"><div><select class="form-control form-field" name="wb_input_2" required="required"><option disabled selected></option><option value="0">ZONA RUST</option><option value="1">ZONA VIEJUNA</option><option value="2">ZONA CUBE</option><option value="3">ZONA Z</option></select></div></td></tr><tr><th>Adjunto</th><td><div><div class="form-file-wrapper"><input class="form-field form-control" type="file" onchange="errors = {};
						for (var i in this.files) { 
							if (this.files[i].size / 1024 / 1024 &gt; 2) 
								errors['File %s is too big'.replace('%s', this.files[i].name) + ' (Max file size (Mb): 2)'] = true; 
						}
						if (this.files.length &gt; 1) errors['You exceeded number of files' + ': ' + this.files.length + ' (Max number of files: 1)'] = true; 
						 if (Object.keys(errors).length &gt; 0) { alert(Object.keys(errors).join('\n')); this.value = null }" name="wb_input_3[]"><p>Max file size (Mb): 2</p><p>Max number of files: 1</p></div></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Enviar</span></button></td></tr></table><input type="hidden" name="MAX_FILE_SIZE" value="2097152"><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "ab8d969f") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("ab8d969f", formValues, formErrors);
			<?php } ?>
			</script></div></div></div></div></div></div></div></div></div></div></div><div id="wb_footer_a188dd9d16c7016d2ce8f99155e393b6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9cfba3294ba4ce6065bc8cfc14" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9cfba32a95cfd03246eb1e1b38" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="{{base_url}}"><img loading="lazy" alt="" src="gallery_gen/42a86a1840d8fa94956b452f977e44c5_346x324_fit.png?ts=1728663847"></a></div></div></div><div id="a188dd9cfba32c507cf5e3b3ec509bcb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9cfba32dc0b6c98f4c520b6ec3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191343a9828008711c4e26e7a15146d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/6e3cf4875a6242b2832a693fd4b1a899_692x432_fit.png?ts=1728663847"></div></div></div><div id="a188dd9cfba32f109735b15b95ffca39" class="wb_element wb-prevent-layout-click" data-plugin="LinkExchangeBadge"><div class="wb-stl-footer">Member of <i class="icon-wb-logo"></i><a href="https://site.pro/" target="_blank" title="Site.pro Website builder">Site.pro</a></div></div><div id="a188dd9cfba330704f0ae3c502280804" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2024 <a href="http://zonagamer.kesug.com">zonagamer.kesug.com</a></p>
</div></div></div><div id="a188dd9cfba3318a42d8a5df23cfc24c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191481d5a700056320b2a9ab4819f9e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><strong>Redes Sociales</strong></h2>
</div><div id="a191481cffb200443dae35e7f7347ef6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481cffb4009f83c9b58a3d625d6e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481cffb700fae53c118fb44db9ab" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.facebook.com/groups/comunidadzonagamer/" title="Facebook" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="385.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191481cffbd002c1d30774c6bc58f00" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481cffbf004c3d703c95d50767c1" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.youtube.com/@ZONAGAMER-ES" title="YouTube" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191481cffc400db44621517743c80e3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481cffc6001537f3b643bff05ec8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.twitch.tv/zonagamer_pc" title="Twitch" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div></div></div><div id="a191481e15f400547bfed92427ab3e96" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481e15f700c37a135557a7fe07e4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481e15f90019df814f0c0bd50d41" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a191481e160000a9b071c4e44e364f30" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481e16010036b3e70df52067e5f3" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.tiktok.com/@zonagamer_comunidad" title="TikTok" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="0" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></a></div></div></div></div></div><div id="a191481e1606002ae22c5e027591f869" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191481e1608009f31c672abc7ab93d7" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="{{base_url}}"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="65.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div></div></div></div></div><div id="a188dd9cfba334d20fd8a2461ee8550a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191484178a000ca261974cea6168888" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#3c9cc2"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9cfba3350734a876066f29198a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><strong>E-mail</strong></h2>
</div><div id="a188dd9cfba336e28fa7082091c91252" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: center;">zonagamerstaff@gmail.com</p>

<p class="wb-stl-normal" style="text-align: center;"> </p>
</div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
