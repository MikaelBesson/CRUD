<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/article.php';

class articleManager {


    /**
     * return all articles
     * @return array
     */
    function getArticles() {
        $conn =new DB();
        $articles = [];
        $req = $conn->connect()->prepare("SELECT * FROM article");
        $result = $req->execute();
        $data = $req->fetchAll();
        foreach($data as $data_article) {
            $articles[] = new article($data_article['id'],$data_article['title'], $data_article['content'],$data_article['user_fk']);
        }
        return $articles;
    }

    /**
     * add an new article
     * @param article $article
     */
    function addArticle(article $article) {
        $conn = new DB();
        $req = $conn->connect()->prepare("INSERT INTO article(title, content, user_fk) 
                                                VALUES (:title, :content, :user_fk)");
        $req->bindValue(':title',$article->getTitle());
        $req->bindValue(':content', $article->getContent());
        $req->bindValue(':user_fk',$article->getUserFk());

        if($req->execute()){
            echo 'article ajouter avec succes';
        }
    }

    /**
     * edit an article
     * @param article $article
     */
    function editArticle(article $article) {
        $conn = new DB();
        $req = $conn->connect()->prepare("UPDATE article SET title = :title, content = :content, user_fk = :user_fk WHERE id = :id");
        $req->bindValue(':title', $article->getTitle());
        $req->bindValue(':content',$article->getContent());
        $req->bindValue(':user_fk', $article->getUserFk());
        $req->bindValue(':id', $article->getId());

        if($req->execute()){
            echo 'Article modifié avec succes';
        }

    }

    /**
     * delette an article
     * @param $articleId
     */
    function deletteArticle($articleId) {
        $conn = new DB();
        $req = $conn->connect()->prepare("DELETE FROM article WHERE id = :id");
        $req->bindValue(':id', $articleId);

        if($req->execute()){
            echo 'Article supprimer avec succes';
        }

    }


}