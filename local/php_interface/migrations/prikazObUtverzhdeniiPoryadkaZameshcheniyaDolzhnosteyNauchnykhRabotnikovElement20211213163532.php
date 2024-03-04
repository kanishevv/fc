<?php

namespace Sprint\Migration;


class prikazObUtverzhdeniiPoryadkaZameshcheniyaDolzhnosteyNauchnykhRabotnikovElement20211213163532 extends Version
{
    protected $description = "Элемент prikaz-ob-utverzhdenii-poryadka-zameshcheniya-dolzhnostey-nauchnykh-rabotnikov";

    protected $moduleVersion = "3.29.3";

    /**
     * @throws Exceptions\ExchangeException
     * @throws Exceptions\RestartException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
            ->IblockElementsImport()
            ->setExchangeResource('iblock_elements.xml')
            ->setLimit(20)
            ->execute(function ($item) {
                $this->getHelperManager()
                    ->Iblock()
                    ->saveElement(
                        $item['iblock_id'],
                        $item['fields'],
                        $item['properties']
                    );
            });
    }

    public function down()
    {
        //your code ...
    }
}
