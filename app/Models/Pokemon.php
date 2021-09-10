<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;

class Pokemon
{
    protected $id;
    protected $nom;
    protected $pv;
    protected $attaque;
    protected $defense;
    protected $attaque_spe;
    protected $defense_spe;
    protected $vitesse;
    protected $numero;

    /**
     * Return a pokemon object by its id
     *
     * @param integer $id
     * @return object pokemon object
     */
    public function find($id)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon` WHERE `id` = ' . $id;
        $statement = $pdo->query($sql);
        return $statement->fetchObject(self::class);
    }

    /**
     * Return all pokemons
     *
     * @return object pokemons objects
     */
    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon`';
        $statement = $pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getName()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setName($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttack()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttack($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getSpecAttaque()
    {
        return $this->attaque_spe;
    }

    /**
     * Set the value of attaque_spe
     *
     * @return  self
     */ 
    public function setSpecAttaque($attaque_spe)
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getSpecDefense()
    {
        return $this->defense_spe;
    }

    /**
     * Set the value of defense_spe
     *
     * @return  self
     */ 
    public function setSpecDefense($defense_spe)
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->numero;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}
