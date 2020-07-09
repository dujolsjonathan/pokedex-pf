<?php

class Type
{
    const TABLE = 'type';

    private $id;
    private $name;
    private $color;
    

    public function findAll()
    {
        $sql = "
            SELECT *
            FROM `type`
        ";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, static::class);

        $types = $pdoStatement->fetchAll();

        return $types;
        
    }

    public function findTypesByPokemon($pokemonId)
    {
        $sql = "
            SELECT 
                pokemon.id,
                type.name,
                type.color
            FROM `type`
            INNER JOIN
                `pokemon_type`
            ON
                type.id = pokemon_type.type_id
            INNER JOIN
                `pokemon`
            ON
            pokemon_type.pokemon_numero = pokemon.numero
            WHERE
                pokemon.id = :id
        ";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(
            ':id',
            $pokemonId,
            PDO::PARAM_INT
        );

        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, static::class);

        $pdoStatement->execute();

        $response = $pdoStatement->fetchAll();

        return $response;

    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
}