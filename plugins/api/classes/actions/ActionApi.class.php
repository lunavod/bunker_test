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
        $this->AddEvent('dir','EventDir');
    }

    protected function EventIndex() {
	$a = $_POST["to"];
	$oUserCurrent = $this->ModuleUser_GetUserCurrent();
	$oBlog = $this->ModuleBlog_GetBlogById($_POST["blog"]);
	$this->ModuleTalk_SendTalk("Просьба об инвайте", "Пользователь <a href='" . "/profile/" . $oUserCurrent->getLogin() . "/' class='user'>" . "<i class='icon-user'></i>" . $oUserCurrent->getLogin() . "</a> просит пригласить его в блог <a href='" . $oBlog->getUrlFull() . "'>" . $oBlog->getTitle() . "</a>.", $oUserCurrent->getId(), $a);
    }
    protected function EventDir() {
        $dir = scandir("/var/www/static/uploads/images/");
        $files = '';
        foreach($dir as $file) {
            if ($file != '.' && $file != '..' && $file == end($dir)){
                $files = substr($file, 0, strrpos($file, '.'))+1;
            }
        }
//        while($file = readdir($dir)) {
           // if (true){
                $this->Viewer_Assign('dir',$files);
           //	 }
  //      }
    }
    public function EventShutdown() {

    }
}
?>
