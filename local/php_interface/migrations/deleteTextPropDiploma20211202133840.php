<?php

namespace Sprint\Migration;


class deleteTextPropDiploma20211202133840 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.29.3";

    public function up()
    {
	    $helper = $this->getHelperManager();
	    $iblockId = $helper->Iblock()->getIblockIdIfExists('recognition_of_education', 'law_about_education');
	    if ($helper->Iblock()->deletePropertyIfExists($iblockId, "NEED_TEXT")) {
			echo "Текст \"Нужно\" удалён" . PHP_EOL;
	    }
	    if ($helper->Iblock()->deletePropertyIfExists($iblockId, "NO_NEED_TEXT")) {
		    echo "Текст \"Не нужно\" удалён" . PHP_EOL;
	    }
    }

    public function down()
    {
        //your code ...
    }
}
