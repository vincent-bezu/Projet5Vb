<?php

namespace App\Table;

use Core\Table\Table;

class ArticleTable extends Table{

    protected $table = 'content';
    
    public function last(){
        return $this->query("
            SELECT content.id, content.title, content.content, categories.title as categories 
            FROM content 
            LEFT JOIN categories
            ON category_id = categories.id
            ");
    
}

public function lastByCategory($category_id){
    return $this->query("
        SELECT content.id, content.title, content.content, categories.title as categories 
        FROM content 
        LEFT JOIN categories
        ON category_id = categories.id
        WHERE content.category_id = ?
        ORDER BY content.content_date DESC
        ", [$category_id]);

}

}