<?php
    include_once("header.php");
?>
<div class="container" id="view-contact-container">
    <h1 id="main-title"> <?= $onlyContato["nome"]?></h1>
    <p class="bold">Fone:</p>
    <p><?= $onlyContato["telefone"]?></p>
    <p class="bold">Observação:</p>
    <p><?= $onlyContato["observacao"]?></p>
    <?php include_once("backbtn.php"); ?>
</div>


<?php
    include_once("footer.php");
?>
