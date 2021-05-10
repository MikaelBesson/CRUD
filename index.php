<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/article.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/role.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/user.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/userManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/roleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/articleManager.php';


/**
 * insertion d'un user
 */
/*
$user = new user(null,'mika','bob',1);
$userManager = new userManager();
$userManager->addUser($user);
*/


/**
 * modifier un user
 */
/*
$user = new user(3, 'bob', 'tom',2);
$usermanager = new userManager();
$usermanager->editUser($user);
*/


/**
 * afficher les users
 */
/*
$userManager = new userManager();
echo '<pre>';
print_r($userManager->getUsers());
echo '</pre>';
*/

/**
 * supprimer un user
 */
/*
$userManager = new userManager();
$userManager->deletteUser(3);
*/


/**
 * ajouter un article
 */
/*
$article = new article(null,'mon premier article','ici du lorem ipsum',12);
$articleManager = new articleManager();
$articleManager->addArticle($article);
*/

/**
 * modifier un article
 */
/*
$article = new article(5,'nouveaux titre','nouveaux contenu',12);
$articleManager = new articleManager();
$articleManager->editArticle($article);
*/

/**
 * afficher les articles
 */
/*
$articleManager = new articleManager();
echo '<pre>';
print_r($articleManager->getArticles());
echo '</pre>';
*/

/**
 * supprimer un article
 */
/*
$articleManager = new articleManager();
$articleManager->deletteArticle(5);
*/





