<?php include 'header.php'; ?>

<div class="col-md-9">
    <form action="info.php" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="nom" placeholder="Entrer le nom" id="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" name="prenom" placeholder="Entrer le prenom" id="prenom">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" placeholder="Entrer email" id="email">
        </div>
        <div class="form-group">
            <label for="tel">Telephone:</label>
            <input type="text" class="form-control" name="tel" placeholder="Entrer telephone" id="tel">
        </div>
        <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
    </form>     
</div>

<?php include 'footer.php'; 