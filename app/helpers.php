<?php


// Ceci est une fonction PHP qui définit le titre d'une page web. Elle vérifie si une fonction appelée `page_title()` existe déjà, et si ce n'est pas le cas, la définit.

// La fonction accepte un paramètre optionnel de type chaîne de caractères appelé `$title`, qui a une valeur par défaut de `null`. Si une valeur est passée en tant que `$title`, la fonction retourne la concaténation de `$title` et du nom de l'application, séparés par un symbole de barre verticale (`|`). Si aucun titre n'est passé en paramètre, la fonction retourne simplement le nom de l'application.

if(!function_exists('page_title')){
    function page_title(?string $title = null): string{
        return $title
        ?$title. ' | '. config('app.name')
        : config('app.name')
        ;
    }
}