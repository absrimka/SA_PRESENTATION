
<?php
    //Inclusion du fichier header
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
  

<div class="gencontain">

    <div class="headitem">
        <h1>CRÉER ET PARAMÉRTER VOS QUIZZ</h1>
        <a class="deconn" href="<?=WEB_ROOT."?controller=security&action=deconnexion"?>"> <button class="deconnexion">DECONNEXION</button></a>
    </div>
    <div class="item">
        <div class="item1">
            <div class="ava">
                <img class="av" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."logo.webp" ?>" alt="">
                <p>
                    AAA <br>
                    BBB
                </p>
            </div>

            <div class="icones">
            
                <div class="icon1">
                    <a class="span" href="<?=WEB_ROOT."?controller=user&action=liste.question"?>">Liste Questions</a>
                    <img class="ad1" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>" alt="">
                </div>

                <div class="icon2">
                    <a class="span" href="<?=WEB_ROOT."?controller=user&action=creer.admin"?>">Créer Admin</a>
                    <img class="" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="">

                </div>
                <?php if(is_admin()): ?>
                <div class="icon3">
                    
                    <a class="span" href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>">Liste Joueur</a> 
                    <img class="" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png" ?>" alt="">
                </div>
                <?php endif ?>
                <div class="icon4">
                    <a class="span" href="<?=WEB_ROOT."?controller=user&action=creer.question"?>">Créer Question</a>
                    <img class="" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" alt="">
                </div>

            </div>

        </div>

        <div class="item2">
            
            <div class="listjoueurs">
            
                <?php echo $content_for_views  ?>
                
            </div>
        </div>

    </div>
</div>


<?php
    require_once(PATH_VIEW."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>