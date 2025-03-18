<?php
header('Content-Type: text/css');
?>
<style>


    /* --- Importer Google Fonts --- */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fa !important;
        color: #333;
        margin: 0;
        padding: 0;
    }

    /* --- HEADER & NAVBAR GLOBALE --- */
    .navbar {
        background-color: #ffffff !important;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 60px; /* Évite que la navbar soit trop fine */
        max-height: 100px; /* Évite que la navbar soit trop haute */
    }

    /* Style du logo */
    .navbar-brand {
        display: flex;
        align-items: center;
        font-weight: bold;
        font-size: 20px;
        color: #333;
        transition: color 0.3s;
    }

    .navbar-brand img {
        height: 40px;
        width: auto;
        margin-right: 10px;
    }

    /* Style des liens */
    .navbar-nav {
        display: flex;
        gap: 20px;
    }

    .navbar-nav .nav-item {
        list-style: none;
    }

    .navbar-nav .nav-link {
        font-weight: 600;
        color: #333;
        transition: color 0.3s ease-in-out;
        padding: 10px 15px;
        border-radius: 5px;
    }

    .navbar-nav .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
        color: #8e8987;
    }

    /* Ajout d'icônes aux liens */
    .navbar-nav .nav-link i {
        margin-right: 5px;
    }

    /* --- NAVBAR SPÉCIALE POUR LA PAGE INSCRIPTION --- */
    .navbar-inscription {
        min-height: 50px;
        padding: 5px 20px;
        background-color: white;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        height: auto
    }

    /* Icône de retour dans la Navbar Inscription */
    .navbar-inscription .navbar-brand i {
        font-size: 18px;
        color: #007bff;
    }

    /* --- IMAGE FULL WIDTH SOUS LE HEADER --- */
    .header-banner {
        width: 100%;
        height: 450px; /* Ajuste la hauteur ici */
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .header-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ajuste l'image pour qu'elle prenne tout l'espace */
    }

    /* --- CONTAINER GLOBAL --- */
    .main-container {
        max-width: 1200px;
    }

    /* --- STYLE DES CARTES PRODUITS --- */
    .card-produits {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        background-color: white;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* --- STYLE DES IMAGES DANS LES CARTES --- */
    .card img {
        height: 280px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    /* --- CONTENU DES CARTES --- */
    .card-body {
        text-align: center;
        padding: 20px;
    }

    .card-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 14px;
        color: #666;
    }

    .card-price {
        font-size: 16px;
        font-weight: bold;
        color: #545251;
        margin-top: 10px;
    }

    /* --- GRILLE DES PRODUITS POUR DIFFÉRENTS ÉCRANS --- */
    @media (min-width: 992px) {
        .col-md-4 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }
    }

    @media (max-width: 768px) {
        .col-md-4 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 576px) {
        .col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }



    .container-form {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .card {
      width: 600px !important;
      max-width: 90%;
      border: none;
      border-radius: 12px;
      padding: 30px;
      background: #ffffff;
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.15);
      margin-left: 10px;
      margin-top: 50px;
    }
    .card h2 {
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-label {
      font-weight: 600;
      color: #555;
      display: block;
      margin-bottom: 8px;
    }
    .form-control {
      width: 95%;
      border-radius: 8px;
      border: 1px solid #ddd;
      padding: 14px;
      font-size: 15px;
      transition: border 0.3s ease-in-out;
    }
    .form-control:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 12px;
      border-radius: 8px;
      width: 100%;
      font-size: 16px;
      transition: 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>