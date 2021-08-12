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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>


<div class="mn_content">
    <div class="main_post">
        <div class="main_title">
            <p class="title">Отзывы</p>
        </div>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="review-block">
            <div class="review-text">

                <div class="review-block-title"><span class="review-block-name"><a href="#"><?echo $arItem["NAME"]?></a></span><span class="review-block-description"><? echo $arItem["PROPERTIES"]["POSITION"]["VALUE"]?><?= " " . $arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></span></div>

                <div class="review-text-cont">
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </div>
            </div>
            <div class="review-img-wrap"><a href="#"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"></a></div>
        </div>
        </div>
        <?endforeach;?>

        <div class="review-feedback-form-wrap">
            <div class="review-feedback-form-title">Оставьте свой отзыв</div>
            <form class="review-feedback-form">
                <div class="review-feedback-field-wrap">
									<span class="review-feedback-field">
										<span class="review-feedback-field-title">Имя и фамилия</span>
										<input class="review-feedback-inp" type="text"/></span><span
                            class="review-feedback-field">
											<span class="review-feedback-field-title">Должность/компания</span>
											<input class="review-feedback-inp" type="text"/>
									</span>
                </div>

                <div class="review-feedback-text">
                    <div class="review-feedback-text-title">Текст отзыва</div>
                    <textarea class="review-feedback-text-field"></textarea>
                </div>
                <div class="review-feedback-btn-block">
                    <input class="review-feedback-btn" value="Оставить свой отзыв" type="submit"/>
                </div>
            </form>
        </div>

    </div>
</div>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
