<?php

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
        $this->AddEvent('comments','EventComments');
        $this->AddEvent('gen','fLogger');
        $this->AddEvent('test','EventIgnoreBlog');
    }

    protected function EventIndex() {
        $this->Viewer_Assign('aBooks',"Done!");
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
        PluginIgnore_ModuleUser_User_IgnoreBlogByUser('0', '1', 'blogs');
        $this->Viewer_Assign('aBooks', GetIgnoredBlogsByUser('0'));
    }
    /**
     * Завершение работы экшена
     */
    public function EventShutdown() {

    }
}
?>
