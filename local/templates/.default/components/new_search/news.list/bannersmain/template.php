<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div style="padding-bottom:30px;">
  
			  <!--  Outer wrapper for presentation only, this can be anything you like -->
			  <div id="banner">
				<!-- start Basic Jquery Slider -->
				<ul class="bjqs">
<?foreach($arResult["ITEMS"] as $arItem):?>

				  <li>

<?if ($arItem['PROPERTIES']['URL']['VALUE']):?><a href="<?=$arItem['PROPERTIES']['URL']['VALUE']?>"><?endif;?>

<img src="<?=$arItem['PHOTO']['src']?>" title="<?=$arItem['NAME']?>"><?if ($arItem['PROPERTIES']['URL']['VALUE']):?></a>
<p class="bjqs-caption"><?=$arItem['NAME']?><br/><?echo $arItem["PREVIEW_TEXT"]?></p>
<?/*<div class="bjqs-news"><?echo $arItem["PREVIEW_TEXT"]?></div>*/?>
 </li>

<?endif;?>

<?endforeach;?>

				</ul> 
				<!-- end Basic jQuery Slider -->
			  </div>
			  <!-- End outer wrapper -->

</div>
    <script src="js/basic-jquery-slider.js"></script>

    <!--  Attach the plug-in to the slider parent element and adjust the settings as required -->
    <script>
      $(document).ready(function() {
        
        $('#banner').bjqs({
          'animation' : 'slide',
          'width' : 500,
          'height' : 298,
		'usecaptions' : true,
        });
        
      });
    </script>




