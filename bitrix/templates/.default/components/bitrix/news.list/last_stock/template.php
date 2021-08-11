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
<a href=""><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/></a>
<h4>Акция!</h4>
<h5><a href=""><?echo $arItem["NAME"]?> всего за <?= $arItem["PROPERTIES"]["COST"]["VALUE"]?></a></h5>
<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
<?endforeach;?>

