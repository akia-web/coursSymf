<?php

namespace MesEntity;

class Post
{
    public $id;
    public $userId;
    public $title;
    public $contenu;

    public function __construct($id, $userId, $title, $contenu)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->contenu = $contenu;
    }

}

?>