<?php


namespace MyApp;

class Product
{
    // Proprietà private della classe
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productCategory;
    private $productImage;
    private $user;

    // Costruttore della classe per inizializzare le proprietà
    public function __construct($productName, $productDescription, $productPrice, $productCategory, $productImage, User $user)
    {
        // Inizializzazione delle proprietà con i valori passati al costruttore
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productPrice = $productPrice;
        $this->productCategory = $productCategory;
        $this->productImage = $productImage;
        $this->user = $user;
    }

    // Metodi get per prendere i valori 
    public function getProductName()
    {
        return $this->productName;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    // public function getProductPrice()
    // {
    //     return $this->productPrice;
    // }

    public function calculateDiscountedPrice()
    {
        $discount = 0;

        // Stampa del tipo di cliente per debug
        // echo "Tipo di cliente: " . $this->user->getUserType() . "<br>";

        // Applico lo sconto del 20% per gli utenti registrati
        if ($this->user->getUserType() === 'registered') {
            $discount = 0.20;
        }

        // Calcolo il prezzo scontato
        $discountedPrice = $this->productPrice - ($this->productPrice * $discount);

        return $discountedPrice;
    }
    public function getProductPrice()
    {
        $customerType = $this->user->getUserType();

        // Se il cliente è registrato, restituisco il prezzo scontato
        if ($customerType === 'registered') {
            return $this->calculateDiscountedPrice();
        }

        // Altrimenti, restituisco il prezzo normale
        return $this->productPrice;
    }

    public function getProductCategory()
    {
        return $this->productCategory;
    }

    public function getProductImage()
    {
        return $this->productImage;
    }

    // Implemento il metodo magico __toString per convertire l'oggetto in una stringa
    // public function __toString()
    // {
    //     // Restituisco una stringa con i dettagli del prodotto
    //     return "Nome: " . $this->productName . " | Descrizione: " . $this->productDescription . " | Prezzo: " . $this->productPrice . " | Categoria: " . $this->productCategory . " | Immagine: " . $this->productImage;
    // }



}