<?php

namespace App\Entity;

use Core\Entity\Entity;

class CategorieEntity extends Entity {
        
        public function getUrl(){
            return 'index.php?p=posts.catagory&id=' . $this->id;
        }
    
    }