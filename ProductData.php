<?php

// Includo le classi necessarie
require_once("Product.php");
require_once("Category.php");
require_once("User.php");

// semplifico l'utilizzo delle classi
use MyApp\Product;
use MyApp\Category;
use MyApp\User;

// Creo istanze di utenti
$userGuest = new User('guest');
$userRegistered = new User('registered');

// Creo istanze di categorie
$category1 = new Category("Gatti", "Cibo");
$category2 = new Category("Cani", "Giocattoli");
$category3 = new Category("Pesci", "Decorazioni", "Acquari");
$category4 = new Category("Uccelli", "Cibo");
$category5 = new Category("Rettili", "Accessori", "Lampade Riscaldanti");
$category6 = new Category("Animali Esotici", "Oggetti di Arricchimento", "Recinti");

// Array di oggetti Product
$products = [

    new Product(
        "Cibo Premium per Gatti",
        "Cibo per gatti di alta qualità con nutrienti essenziali.",
        $productPrice = 20,
        $category1,
        "immagine_cibo_gatti.jpg",
        $userRegistered
    ),


    new Product(
        "Giocattolo Interattivo per Cani",
        "Giocattolo interattivo per tenere il tuo cane intrattenuto.",
        $productPrice = 15,
        $category2,
        "immagine_giocattolo_cani.jpg",
        $userGuest
    ),


    new Product(
        "Decorazioni Colorate per Acquari",
        "Decorazioni vivaci per il tuo acquario.",
        $productPrice = 8,
        $category3,
        "immagine_decorazioni_acquario.jpg",
        $userRegistered
    ),


    new Product(
        "Cibo Nutriente per Uccelli",
        "Cibo ricco di nutrienti per una dieta aviare sana.",
        $productPrice = 12,
        $category4,
        "immagine_cibo_uccelli.jpg",
        $userRegistered
    ),


    new Product(
        "Lampada Riscaldante per Rettili",
        "Lampada riscaldante per creare un ambiente confortevole per i rettili.",
        $productPrice = 25,
        $category5,
        "immagine_lampada_riscaldante_rettili.jpg",
        $userRegistered
    ),


    new Product(
        "Giocattolo di Arricchimento per Animali Esotici",
        "Giocattolo speciale per fornire stimolazione mentale agli animali esotici.",
        $productPrice = 18,
        $category6,
        "immagine_giocattolo_esotico.jpg",
        $userRegistered
    )
];
