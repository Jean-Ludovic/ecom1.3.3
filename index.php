<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Vos informations </title>
</head>
<body>
    <fieldset>
        <legend>Enquete</legend>


<form action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="age">Âge :</label>
    <input type="number" id="age" name="age" min="18" max="100" required><br><br>

    <input type="submit" value="Soumettre">



</form>
</fieldset>
    <?php
    
    ?>
</body>
</html>
