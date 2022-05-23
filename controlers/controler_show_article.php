<?php
    include './utils/connect_bdd.php';
    include './models/model_article.php';
    include './views/view_show_all_articles.php';

    $article = New Article(null, null);
    $array = $article->showArticle($bdd);

    if(isset($_SESSION['connected']=true)){
        foreach($array as $value){
            echo '<p>article : '.$value->nom_art.' contenu : '.$value->content_art.'</p>';
        }
    }