
<div class="news-list">

<table width="100%" cellspacing="0" cellpadding="5">


<?foreach($arResult["ITEMS"] as $arItem):?>
	
	<a class="article-item article-list__item" href="for-individuals.html"
                                 data-anim="anim-3">
        <div class="article-item__background"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                                   data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx"
                                                   alt=""/></div>
        <div class="article-item__wrapper">
            <div class="article-item__title"><?echo $arItem["NAME"]?></div>
            <div class="article-item__content"> <?echo $arItem["PREVIEW_TEXT"]?>
            </div>
        </div>
    </a>

<?endforeach;?>

</table>

</div>
