<?php

class PluginApi_HookApi extends Hook {

    /*
     * Регистрация событий на хуки
     */
	public function RegisterHook() {
                $this->AddHook('viewer_init_start', 'ViewerInitStart');
	}
	public function ViewerInitStart($aParams) {
//		Config::Set('view.skin','developer');
		if (getRequest('set-theme',false,'get')=='on') {
//                        setcookie('theme',1,time()+60*60*24*30,Config::Get('sys.cookie.path'),Config::Get('sys.cookie.host'),false);
                        $this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/dark.css"); // Добавление своего CSS
         }
        }

}
?>
