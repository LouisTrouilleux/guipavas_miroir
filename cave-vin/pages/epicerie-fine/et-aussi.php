



<?php ob_start(); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="index.php">accueil</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="index?page=thes-cafes">Epicerie Fine</a></li>
        <li class="breadcrumb__item"><a class="breadcrumb__link breadcrumb__link--active" href="index?page=et-aussi">Et aussi..</a></li>
    </ul>
    
<?php $breadcrumb = ob_get_clean(); ?>


<?php ob_start(); ?>
La Cave ne serait pas complète sans une jolie gamme d’Epicerie Fine.
<?php $art_2__title = ob_get_clean(); ?>


<?php ob_start(); ?>
    <p>
        La volonté est de mettre en avant des produits élaborés par de véritables artisans. La qualité, l’originalité et la diversité sont les maîtres mots de notre sélection.
    </p>
    <p>
        <strong class="mise-en-avant">D'un côté l'esprit Salé</strong> : Foie Gras, Terrines, Pâtés, Rillettes de la Mer, Tapenades..
    </p>
    <p>
        <strong class="mise-en-avant">De l'autre nous retrouvons l'esprit Sucré</strong>
        Chocolats, Pâtes de Fruits, Confitures, Caramel au Beurre Salé, Sablés Bretons..
    </p>
    <p>
        Vous retrouverez donc, une large gamme de gourmandises diverses et variées pour un maximum de plaisirs..
    </p>
<?php $art_2__txt = ob_get_clean(); ?>


<?php ob_start(); ?>
    images/img10
<?php $art_2__img = ob_get_clean(); ?>
