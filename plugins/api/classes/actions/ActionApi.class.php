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
        $this->AddEvent('auth','EventAuth');
        $this->AddEvent('index','EventIndex');
        $this->AddEvent('comments','EventComments');
        $this->AddEvent('gen','fLogger');
        $this->AddEvent('test','EventIgnoreBlog');
    }

    protected function EventIndex() {
        $vk = new VK\VK('256841728', '8AQg2xCA02QwrvEM7u3A', 'e251a352edf8a4dc3b614951a2d18942f273640f58995dce8aaaeb235b1858fcde644803580c23e8b4b37');
        $vk->setApiVersion(3.0);
        $wallpost = $vk->api('wall.post', array(
            'owner_id'    => '256841728',
            'message'     => 'New post on group wall via API.console.'
        ));
        $this->Viewer_Assign('aBooks',$wallpost['error']['error_code']);
    }
    protected function EventAuth() {
        $vk = new VK\VK('4925305', '8AQg2xCA02QwrvEM7u3A');
        $iId = $this->GetParam(0);
        if (!isset($_REQUEST['code'])){
            $this->Viewer_Assign('aBooks',$vk->getAuthorizeURL('wall,groups, offline', 'http://reboot.lunavod.ru/api/auth'));
        } else {
            $vk_status = $vk->getAccessToken($_REQUEST['code'], 'http://reboot.lunavod.ru/api/auth');
            $this->Viewer_Assign('aBooks',$vk_status['access_token']);
        }
    }
    protected function EventComments() {
        $iId = $this->GetParam(0);
        if (!$iId) {
            $this->Viewer_Assign('aBooks','Index');
        } else {
            $eComment = $this->Comment_GetCommentById($iId);
            if ($eComment) {
                $json = array();
                $json['id'] = $eComment->getText();
                $json['date'] = $eComment->getDate();
                $json['user'] = $eComment->getUser()->getLogin();
                $json['userId'] = $eComment->getuserId();
                $json['rating'] = $eComment->getRating();
                $json['favourite'] = $eComment->getCountFavourite();
                $json['text'] = $eComment->getText();
                $json['parent'] = $eComment->getPid();
                $json['level'] = $eComment->getLevel();
                $json['delited'] = $eComment->getDelete();
                $this->Viewer_Assign('aBooks', json_encode($json));
            } else {
                $json = array();
                $json['error'] = '404';
                $this->Viewer_Assign('aBooks', json_encode($json));
            }
        }

    }
    protected function genKey() {
        $this->oUserCurrent=$this->User_GetUserCurrent();
        $key = $this->oUserCurrent->getLogin() . $this->oUserCurrent->getId() + $this->oUserCurrent->getRating() . $this->oUserCurrent->getPassword() . strval(rand(1, 100000));
        $key_md5 = md5($key);
        $result = keySet($this->oUserCurrent, $key_md5);
    }
    protected function fLogger(){
        $this->Logger_Notice("Test");
        $this->Viewer_Assign('aBooks', $this->Logger_GetFileName());
    }
    protected function EventIgnoreBlog()
    {
        $ab = $this->Blog_GetAccessibleBlogsByUser($this->User_GetUserCurrent());
        $this->Viewer_Assign('aBooks', implode(", ", $this->Blog_GetAccessibleBlogsByUser($this->User_GetUserCurrent())));
    }
    /**
     * Завершение работы экшена
     */
    public function EventShutdown() {

    }
}
?>
