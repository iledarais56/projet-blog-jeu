<?php ob_start(); ?>

<?php  $name = $getJeuCategorieName->fetch(); ?>
<?php  $commentaire = $getAllcommentaires->fetch(); ?>
<section>
<div class="newImg">
        <h2>les commentaires sur le jeu <?php echo $name['title'] ?></h2>
            <br>
            <div class="all-articles">
                <?php foreach($getAllcommentaires as $commentaire){ ?>
                   
                    
                        <a  class="article" href="index.php?action=getCommentaire&id=<?=$commentaire['id'] ?>">
                        <p>posté par: <?=  htmlspecialchars($commentaire['pseudo']) ?></p>
                        <br>
                        <p><?=  htmlspecialchars($commentaire['content']) ?></p>
                        </a>
                    
                    <br>

                <?php } ?>
                <br>
            </div><br><br>
            <br>
        <br>
        <div class="all-articles" >
            <div >
                <a class="btn " href="index.php?action=jeuFiche&id=<?=$commentaire['id_jeu'] ?>&categorie=<?=$commentaire['categorieJeu'] ?>">retour au jeu</a>
            </div>
                       
        </div> 
    </div>
            
    
</section>

 <?php $content = ob_get_clean(); ?><!--fonction PHP pour injecter le template  -->
<?php require 'templates/template.php' ?>