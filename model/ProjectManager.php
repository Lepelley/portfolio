<?php

namespace Leyzou\Portfolio\Model;

require_once('model/Manager.php');

class ProjectManager extends Manager
{
    public function getProjects()
    {
        $db = $this->dbConnect();
        $query = $db->query('SELECT id, name, preview FROM projects ORDER BY creation_date DESC');

        return $query;
    }

    public function getProject($projectId)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT id, name, website, role, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr, technologies, features, images 
        FROM projects WHERE id = ?');
        $query->execute(array($projectId));
        $project = $query->fetch();

        return $project;
    }
}