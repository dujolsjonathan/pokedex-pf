<?php

class Pokemon
{
    const TABLE = 'pokemon';

    private $id;
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;

    public function findAll()
    {
        $sql = "
            SELECT *
            FROM `pokemon`
        ";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, static::class);

        $pokemons = $pdoStatement->fetchAll();
        return $pokemons;
        
    }

    public function find($pokemonId)
    {
        $sql = "
            SELECT *
            FROM `pokemon`
            WHERE `id` = :id
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
        $response = $pdoStatement->fetch();
        return $response;
    }

    public function findPokemonsbyType($typeId)
    {
        $sql = "
            SELECT 
                pokemon.id,
                pokemon.nom,
                pokemon.numero,
                type.name
            FROM `pokemon`
            INNER JOIN
                `pokemon_type`
            ON
                pokemon_type.pokemon_numero = pokemon.numero
            INNER JOIN
                `type`
            ON
                type.id = pokemon_type.type_id
            WHERE
                type.id = :id
        ";

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->prepare($sql);

        $pdoStatement->bindValue(
            ':id',
            $typeId,
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefense_spe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }
}