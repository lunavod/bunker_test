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
        $this->AddEvent('gen','genKey');
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
    /**
     * Завершение работы экшена
     */
    public function EventShutdown() {

    }
}
?>
