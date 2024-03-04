<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*echo $arResult['DATE'];*/
/*$APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="/bitrix/templates/furniture_blue/css/style.css">', true);*/

$_SESSION["special_version"] = "Y";
if( $_SESSION["special_version"] == "Y")
{
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/style.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi-font.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi.min.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi-font.min.css", true);
$APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/style.css", true);
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.min.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi-init.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.min.js");
$APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.min.js");}
$assetManager = new Local\Util\Assets();
?>

<p>
<a href="#" class="bvi-open" title="<?=GetMessage("ALIN_VISION_MESSAGE");?>">
    <svg class="header__links-icon icon">
        <use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#show_dark"></use>
    </svg>
    <?=GetMessage("ALIN_VISION_MESSAGE");?>
</a>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> <script src="/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.min.js"></script> 
	<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.js"></script> 
	<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/bvi-init.js"></script> 
	<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.min.js"></script> 
<?if( isset( $_POST['old_version'] ) )
{$APPLICATION->SetAdditionalCSS($old_css, true);
$_SESSION["special_version"] = "N";
}
?>


<!--<div class="container-fluid">

        <div class="navbar navbar-default" role="navigation">

            <div class="row ">

                <div class="col-md-2 col-centered">

                    <p><?=GetMessage("ALIN_VISION_RAZMER_SRIFTA1")?></p>

                    <br/>

                    <div class="btn-group">

                        <button type="button" id="a2" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-minus"></span>
   
                     </button>
             
           <button type="button" id="a1" class="btn btn-default btn-sm">
           <span class="glyphicon glyphicon-plus"></span>
               
         </button>
                 
   </div>
               
 </div>
             
   <div class="col-md-2 col-centered">
   
                 <p><?=GetMessage("ALIN_VISION_SRIFT")?></p>
             
       <br/>
                  
    <div class="btn-group">
         
               <button type="button" class="btn btn-default btn-sm nop"  id="font1">
                        <span style="font-family:'Times New Roman';font-size:14px;"><?=GetMessage("ALIN_VISION_S_ZASECKAMI")?></span>
  
                        </button>
                        
                        <button type="button" class="btn btn-default btn-sm nop" id="font2">
                        <span style="font-family:'Arial';font-size:14px;"><?=GetMessage("ALIN_VISION_BEZ_ZASECEK")?></span>

                        </button>
                  
   </div>
                    
                    
                    
                    
             
   </div>
             
   <div class="col-md-3 col-centered">
     
               <p>
                  
      <span><?=GetMessage("ALIN_VISION_CVETA_SAYTA")?></span>
   
                 </p>
              
                 <br/>
              
      <div class="btn-group">

                        <button type="button" class="btn btn-default btn-sm" id="c1">
                        <span class="glyphicon glyphicon-font"></span>
            
            </button>
  
                      <button type="button" class="btn btn-default btn-sm" id="c2">
                      <span class="glyphicon glyphicon-font"></span>
              
          </button>
                   
     <button type="button" class="btn btn-default btn-sm" id="c3">
     <span class="glyphicon glyphicon-font"></span>
                
        </button>
                   
     <button type="button" class="btn btn-default btn-sm" id="c4">
<span class="glyphicon glyphicon-font"></span>
               
         </button>
                      
  <button type="button" class="btn btn-default btn-sm" id="c5">
<span class="glyphicon glyphicon-font"></span>
                 
       </button>
                
    </div>
           
     </div>
           
     <div class="col-md-2 col-centered">

                    <p><?=GetMessage("ALIN_VISION_IZOBRAJENIA")?></p>
  
                  <br/>
    
                <div class="btn-group" data-toggle="buttons">

                        <label class="btn btn-default  btn-sm redis">
  
                          <input type="radio" id="q156" name="imgvis" value="1" />
                          <span class="glyphicon glyphicon-eye-open"></span>

    
                         </label>

                        <label class="btn btn-default  btn-sm redis">

                        <input type="radio" id="q157" name="imgvis" value="2" />
                        <span class="glyphicon glyphicon-eye-close"></span>

                        </label>
                    
                        </div>
 
                        </div>
          
                        <div class="col-md-1 col-centered">
 
                   <p><span class="glyphicon glyphicon-resize-horizontal"><?=GetMessage("ALIN_VISION_INT")?></span>
 
                   </p>
 
                   <br/>

                   <div class="btn-group">

                        <button type="button" id="i2" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-minus"></span>

                        </button>

                        <button type="button" id="i1" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-plus"></span>
 
                       </button>


                    </div>

                </div>

                <div class="col-md-1 col-centered">

                <p><span class="glyphicon glyphicon-resize-vertical"><?=GetMessage("ALIN_VISION_INT")?></span>

                </p>
                    <br/>
                    
                <div class="btn-group">
 
                <div class="btn-group" data-toggle="buttons">

                            <label class="btn btn-default  btn-sm ol1">

                                <input type="radio" id="yr1" name="inter" value="1" /><span class="glyphicon glyphicon-resize-small"></span>


                            </label>
 
                    <label class="btn btn-default btn-sm ol1">

                    <input type="radio" id="yr2" name="inter" value="2" />
      <span class="glyphicon glyphicon-resize-full"></span>
 
      </label>
                        
</div>
                    
</div>
                
</div>
                
<div class="col-md-1 col-centered">
                    
<p></p>
                    
<br/>
                    
<div class="btn-group">
                        
<button class="btn btn-default btn-sm" id="reset"> 
<i class="glyphicon glyphicon-refresh"></i> 
<?=GetMessage("ALIN_VISION_SBROS")?></button>
                    
</div>
                
</div>
            
</div>
        
</div>
    
</div>-->