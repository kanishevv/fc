<?php

namespace Sprint\Migration;


class subscribeConfirm20211202120822 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.29.3";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('SUBSCRIBE_CONFIRM', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Подтверждение подписки',
  'DESCRIPTION' => '#ID# - идентификатор подписки
#EMAIL# - адрес подписки
#CONFIRM_CODE# - код подтверждения
#SUBSCR_SECTION# - раздел, где находится страница редактирования подписки (задается в настройках)
#USER_NAME# - имя подписчика (может отсутствовать)
#DATE_SUBSCR# - дата добавления/изменения адреса
',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('SUBSCRIBE_CONFIRM', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Confirmation of subscription',
  'DESCRIPTION' => '#ID# - subscription ID
#EMAIL# - subscription email
#CONFIRM_CODE# - confirmation code
#SUBSCR_SECTION# - section with subscription edit page (specifies in the settings)
#USER_NAME# - subscriber\'s name (optional)
#DATE_SUBSCR# - date of adding/change of address
',
  'SORT' => '150',
));
            $helper->Event()->saveEventMessage('SUBSCRIBE_CONFIRM', array (
  'LID' => 
  array (
    0 => 's1',
  ),
  'ACTIVE' => 'Y',
  'EMAIL_FROM' => 'service@fcoz.ru',
  'EMAIL_TO' => '#EMAIL#',
  'SUBJECT' => '#SITE_NAME#: Подтверждение подписки',
  'MESSAGE' => 'Здравствуйте, 
 
Вы получили это сообщение, так как Вы подписались на рассылку сайта
www.fcoz.ru

Дополнительная информация о подписке: 

Адрес подписки (email) #EMAIL#
Дата добавления/редактирования #DATE_SUBSCR#

Ваш код для подтверждения подписки: #CONFIRM_CODE#',
  'BODY_TYPE' => 'text',
  'BCC' => '',
  'REPLY_TO' => '',
  'CC' => '',
  'IN_REPLY_TO' => '',
  'PRIORITY' => '',
  'FIELD1_NAME' => '',
  'FIELD1_VALUE' => '',
  'FIELD2_NAME' => '',
  'FIELD2_VALUE' => '',
  'SITE_TEMPLATE_ID' => '',
  'ADDITIONAL_FIELD' => 
  array (
  ),
  'LANGUAGE_ID' => '',
  'EVENT_TYPE' => '[ SUBSCRIBE_CONFIRM ] Подтверждение подписки',
));
        }

    public function down()
    {
        //your code ...
    }
}
