
<?php
include 'header.php';
include_once ('classes/DAO.php');




$tableau = acc_categorie();
$tableau2 = plat_populaire();

?>
        <div class= "search">
                <div class="mx-3 mb-4 p-3 rouned mnb">
                    <form action = "search.php" method = "POST" role="search">
                        <div class="d-flex justify-content-center">
                            <input type="search" name="search" id="search" placeholder="Votre recherche" class="mx-3">
                            <button type="submit">Rechercher</button>
             </div>
         </form>           
 </div>
 </div>

<!-- Catégories des plats limit 6-->

<div class= "container-fluid">
    <div class="row">

             <?php foreach ($tableau as $category): ?>

                <div class="col-4 d-flex justify-content-center mx-6 my-1" style="height: 265px;">        
                                        <a href="plat_cat.php?id_categorie=<?= $category->id ?>">   
                                            <img class="p-3" style="height:265px" src="/assets/img/category/<?= $category->image ?>">
                                        </a>   
                                        <p> <?= $category->libelle?> </p>    
                </div>
            <?php endforeach; ?>

           
<!-- Plats les plus populaires limit 3-->


                <?php foreach ($tableau2 as $plat_pop): ?>


                    <div class="col-4 d-flex justify-content-center mx-6 my-1" style="height: 265px;">        
                        <a href="plat.detail.php?id=<?= $plat_pop->id ?>">
                            <img class="p-3" style="height:265px" src="/assets/img/food/<?= $plat_pop->image ?>">
                        </a>   
                        <p> <?= $plat_pop->libelle?> </p>    
                    </div>
                    
                <?php endforeach; ?>
    </div>

</div>

<?php
include 'footer.php';
?>  