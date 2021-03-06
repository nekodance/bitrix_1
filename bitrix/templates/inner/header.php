<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID;?>-<?=strtoupper(LANGUAGE_ID);?>">
<head>
    <meta charset="UTF-8">
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="stylesheet" href="/bitrix/templates/.default/template_styles.css"/>
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="/bitrix/templates/.default/favicon.ico">

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <div class="hd_header">
            <table>
                <tr>
                    <td rowspan="2" class="hd_companyname">
                        <h1><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/logo.php"
                                )
                            );?></h1>
                    </td>
                    <td rowspan="2" class="hd_txarea">
                        <span class="tel"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/phone.php"
                                )
                            );?></span>	<br/>
                        <?= GetMessage('working time');?> <span class="workhours">?????????????????? ?? 9-00 ???? 18-00</span>
                    </td>
                    <td style="width:232px">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"search", 
	array(
		"COMPONENT_TEMPLATE" => "search",
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "Y"
	),
	false
);?><br>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 11px;">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "auth_form",
                            Array(
                                "COMPONENT_TEMPLATE" => "auth_form",
                                "FORGOT_PASSWORD_URL" => "/user/",
                                "PROFILE_URL" => "/user/profile.php",
                                "REGISTER_URL" => "/user/registration.php",
                                "SHOW_ERRORS" => "Y"
                            )
                        );?>
                    </td>
                </tr>
            </table>
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>
        </div>
    </div>

    <!--- // end header area --->
    <div class="bc_breadcrumbs">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "nav", Array(
                "PATH" => "",	// ????????, ?????? ???????????????? ?????????? ?????????????????? ?????????????????????????? ?????????????? (???? ??????????????????, ?????????????? ????????)
                "SITE_ID" => "s1",	// C?????? (?????????????????????????????? ?? ???????????? ?????????????????????????? ????????????, ?????????? DOCUMENT_ROOT ?? ???????????? ????????????)
                "START_FROM" => "0",	// ?????????? ????????????, ?????????????? ?? ???????????????? ?????????? ?????????????????? ?????????????????????????? ??????????????
            ),
                false
            );?>
        <div class="clearboth"></div>
    </div>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title">?????????????????? ????????????????</p>
                    </div>