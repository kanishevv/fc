<?php

namespace Sprint\Migration;


class ResetRubricProp20211111102141 extends Version
{
    protected $description = "!!! Сбрасывает рубрики в инфоблоках prav_base, sudebnaya-praktika, content_faq !!!";

    protected $moduleVersion = "3.29.3";

    public function up()
    {
		$this->setRubricProp("content_faq", "content");
        $this->setRubricProp("prav_base", "law_about_education");
        $this->setRubricProp("sudebnaya-praktika", "practice");
    }

    public function down()
    {
        //your code ...
    }

    private function setRubricProp($iblockCode, $iblockType)
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists($iblockCode, $iblockType);
        $aElements = $helper->Iblock()->getElements(
            $iblockId,
            [],
            [
                "ID",
                "PROPERTY_RUBRIC"
            ]
        );

        foreach ($aElements as $aElement) {
            $helper->Iblock()->updateElementIfExists(
                $iblockId,
                [
                    "CODE" => [
                        "ID" => $aElement["ID"]
                    ]
                ],
                [
                    "RUBRIC" => false
                ]
            );
            echo $aElement["ID"] . PHP_EOL;
        }
    }
}
