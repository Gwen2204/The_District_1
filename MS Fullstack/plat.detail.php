<?php
include 'header.php';
include_once ('classes/DAO.php');


//var_dump($_GET);
if(isset($_GET["id"])) {
    $id= $_GET["id"];
}
//var_dump ($_GET["id"]);


$tableau = plat_detail($id);

?>

<div class= "container-fluid">
    <div class="row">

             <?php foreach ($tableau as $plat_detail): ?>

                <div class="col-2">         
                <img class="p-3" style="height:265px" src="/assets/img/food/<?= $plat_detail->image ?>">
             </div>

                <div class="col-3">
                                        <br>
                                        <p> <?= $plat_detail->libelle?> </p>
                                        <p> <?= $plat_detail->description?> </p>
                                        <p> <?= $plat_detail->prix?> </p>
                                        
                                        <input type= "number" name="quantity" id="quantity" min="0" max="100">
                                        <input id="button" name="ajouer" title="Ajouter au panier" class="text-dark a-button-input" type="submit" value="Ajouter au panier" >

                </div>

            <?php endforeach; ?>
        
    </div>

</div>

<?php
include 'footer.php';
?>  