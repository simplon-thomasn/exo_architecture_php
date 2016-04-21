<?php

// Fonction qui returne tous les articles
function getArticles() {
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'root', 'siMlaTerlen801012');
    $articles = $bdd->query('select * from t_article order by art_id desc');
    return $articles;
}
