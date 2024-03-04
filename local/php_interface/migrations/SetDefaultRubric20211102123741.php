<?php

namespace Sprint\Migration;


class SetDefaultRubric20211102123741 extends Version
{
    protected $description = "Устанавливает свойство рубрики, если не заполено";

    protected $moduleVersion = "3.29.3";

    public function up()
    {
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
            if (!$aElement["PROPERTY_RUBRIC_VALUE"]) {
                $helper->Iblock()->updateElementIfExists(
                    $iblockId,
                    [
                        "CODE" => [
                            "ID" => $aElement["ID"]
                        ]
                    ],
                    [
                        "RUBRIC" => ["uncategorized"]
                    ]
                );
                echo $aElement["ID"] . PHP_EOL;
            }
        }
    }
}
