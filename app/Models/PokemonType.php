<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;

class PokemonType extends Pokemon
{
    protected $id;
    protected $name;
    
    protected $pokemon_number;
    protected $type_id;
    protected $color;

    /**
     * Return all pokemon' types 
     *
     * @param int $number $number of the pokemon
     * @return object all pokemons types objects
     */
    public function findAllTypes(int $pokemon_number)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM pokemon_type INNER JOIN type ON pokemon_type.type_id = type.id WHERE pokemon_type.pokemon_number = ' . $pokemon_number;
        $statement = $pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Return all types' pokemon
     *
     * @return void
     */
    public function findAllPokemons(int $type_id)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM pokemon_type INNER JOIN pokemon ON pokemon_type.pokemon_number = pokemon.number WHERE pokemon_type.type_id = ' . $type_id;
        $statement = $pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Get the value of pokemon_number
     */ 
    public function getPokemonNumber()
    {
        return $this->pokemon_number;
    }

    /**
     * Set the value of pokemon_number
     *
     * @return  self
     */ 
    public function setPokemonNumber($pokemon_number)
    {
        $this->pokemon_number = $pokemon_number;

        return $this;
    }
    
    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
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
}
