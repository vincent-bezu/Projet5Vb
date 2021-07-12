<?php

namespace App\Entity;

use Core\Entity\Entity;

class BookEntity extends Entity {
        
        public function getUrl(){
            return 'index.php?p=book&id=' . $this->id;
        }
    
        public function getResume(){
            $html = '<p>' . substr($this->resume, 0, 200) . '...</p>';
            return $html;
        }
    }
