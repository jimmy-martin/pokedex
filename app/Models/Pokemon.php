<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;
use Pokedex\Models\PokemonType;

class Pokemon extends CoreModel
{
    protected $pv;
    protected $attack;
    protected $defense;
    protected $spe_attack;
    protected $spe_defense;
    protected $speed;
    protected $number;

    /**
     * Return a pokemon object by its id
     *
     * @param integer $id
     * @return object pokemon object
     */
    public function find(int $id)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `pokemon` WHERE `number` = ' . $id;
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
     * Get the value of attack
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

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
     * Get the value of spe_attack
     */
    public function getSpeAttack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */
    public function setSpeAttack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of spe_defense
     */
    public function getSpeDefense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */
    public function setSpeDefense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of speed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    public function getTypes()
    {
        $pokemonTypeModel = new PokemonType();
        $pokemonTypes = $pokemonTypeModel->findAllTypes($this->number);
        return $pokemonTypes;
    }
}
