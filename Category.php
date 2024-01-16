<?php

namespace MyApp;

class Category
{
    private $categoryName;

    // Array per contenere i valori della categoria
    private $values = [];

    // Costruttore della classe per inizializzare la categoria con il nome e i valori opzionali
    //Uso l'operatore di propagazione ... per indicare che la funzione accetti un numero variabile di argomenti e li raggruppa nell'array $values
    public function __construct($categoryName, ...$values)
    {
        $this->categoryName = $categoryName;
        $this->values = $values;
    }

    // Metodo per aggiungere un valore alla categoria
    public function addValue($value)
    {
        // Aggiunta del valore all'array dei valori della categoria
        $this->values[] = $value;
    }

    // Metodi get per ottenere i valori 
    public function getValues()
    {
        return $this->values;
    }
    public function getName()
    {
        return $this->categoryName;
    }

    // Implemento il metodo magico __toString per convertire la categoria in una stringa
    public function __toString()
    {
        // Unisco i valori dell'array separati da virgola e formattazione della stringa di output
        $values = implode(', ', $this->values);
        return $this->categoryName . " [" . $values . "]";
    }
}
