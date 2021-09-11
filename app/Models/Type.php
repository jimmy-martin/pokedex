<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;

class Type extends CoreModel
{
    protected $color;

    public function find($id)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `type` WHERE `id` = ' . $id;
        $statement = $pdo->query($sql);
        return $statement->fetchObject(self::class);
    }
    
    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `type`';
        $statement = $pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return '#' . $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}