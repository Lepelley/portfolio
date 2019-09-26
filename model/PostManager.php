<?php

namespace Model;

require_once('model/Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, name, content, author, categories, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr, DATE_FORMAT(modification_date, \'%d/%m/%Y\') AS modification_date_fr 
        FROM posts ORDER BY creation_date DESC');

        return $query;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, name, content, author, categories, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr, DATE_FORMAT(modification_date, \'%d/%m/%Y\') AS modification_date_fr
        FROM posts WHERE id = ?');
        $query->execute(array($postId));
        $post = $query->fetch();

        return $post;
    }
}