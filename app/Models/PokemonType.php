<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;
use PDO;

class PokemonType
{
    protected $id;
    protected $pokemon_number;
    protected $type_id;
    protected $name;
    protected $color;

    /**
     * Return all the pokemon' types 
     *
     * @param int $number $number of the pokemon
     * @return object all pokemons types objects
     */
    public function findAllTypes($number){
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM pokemon_type INNER JOIN type ON pokemon_type.type_id = type.id WHERE pokemon_type.pokemon_number = ' . $number;
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
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
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
}
