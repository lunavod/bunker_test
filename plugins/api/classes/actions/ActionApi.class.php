<?php

require_once(Plugin::GetPath('api') . 'src/VK/VK.php');
require_once(Plugin::GetPath('api') . 'src/VK/VKException.php');

class PluginApi_ActionApi extends ActionPlugin {
    /**
     * Инициализация экшена
     */
    protected $oUserCurrent=null;

    public function Init() {
        $this->SetDefaultEvent('index');
    }
    /**
     * Регистрируем евенты
     */
    protected function RegisterEvent() {
        $this->AddEvent('index','EventIndex');
    }

    protected function EventIndex() {
        if (isPost('submit_settings')) {
            if (in_array(getRequestStr('settings_general_timezone'),$aTimezoneList)) {
                $this->oUserCurrent->setSettingsTimezone(getRequestStr('settings_general_timezone'));
            }
            $this->oUserCurrent->setSettingsNoticeNewTopic( getRequest('settings_notice_new_topic') ? 1 : 0 );
        }
    }
    public function EventShutdown() {

    }
}
?>
