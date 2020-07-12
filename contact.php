<?php include 'header.php'; ?>

<div class="col-md-9">
    <form action="info.php">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" placeholder="Entrer le nom" id="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" placeholder="Entrer le prenom" id="prenom">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Entrer email" id="email">
        </div>
        <div class="form-group">
            <label for="tel">Telephone:</label>
            <input type="text" class="form-control" placeholder="Entrer telephone" id="tel">
        </div>
        <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
    </form>     
</div>

<?php include 'footer.php'; 