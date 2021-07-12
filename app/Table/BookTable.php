<?php

namespace App\Table;

use Core\Table\Table;

class BookTable extends Table{
    
    public function Book(){
        return $this->query('SELECT * FROM book');
    }
}