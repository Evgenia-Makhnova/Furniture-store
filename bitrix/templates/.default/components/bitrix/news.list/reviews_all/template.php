<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
<div class="review-block">
    <div class="review-text">
        <div class="review-block-title"><span class="review-block-name"><a href="#"><?=$arItem["NAME"]?></a></span><span class="review-block-description"><?=$arItem["PROPERTIES"]['DOLG']['VALUE']?> <?=$arItem["PROPERTIES"]['NAME']['VALUE']?></span></div>

        <div class="review-text-cont">
            <?echo $arItem["PREVIEW_TEXT"];?>
        </div>
    </div>
    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
    <div class="review-img-wrap"><a href="#"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></a></div>
    <?endif;?>
</div>
<?endforeach;?>

