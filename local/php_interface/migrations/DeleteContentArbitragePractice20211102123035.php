<?php

namespace Sprint\Migration;


class DeleteContentArbitragePractice20211102123035 extends Version
{
    protected $description = "Удаляет дубль инфоблока Судебная практика из Контент";

    protected $moduleVersion = "3.29.3";

    public function up()
    {
        $helper = $this->getHelperManager();
        $ok = $helper->Iblock()->deleteIblockIfExists('content_arbitrage_practice');

        if ($ok) {
            $this->outSuccess('Инфоблок удален');
        } else {
            $this->outError('Ошибка удаления инфоблока');
        }
    }

    public function down()
    {

    }
}
