<?php

namespace App\Entity;

use Core\Entity\Entity;

class ArticleEntity extends Entity {
        
    public function getUrl(){
        return 'index.php?p=posts.view&id=' . $this->id;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->content, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">voir la suite</a></p>';
        return $html;
    }
    }