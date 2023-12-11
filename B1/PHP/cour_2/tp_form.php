<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"
          href="https://imgs.search.brave.com/5qc7TkuIaSZkIrplnjDgC8gZQs8NPKpJh3D8odP4rxk/rs:fit:512:512:1/g:ce/aHR0cHM6Ly9pY29u/cy1mb3ItZnJlZS5j/b20vaWNvbmZpbGVz/L3BuZy81MTIvYnVs/YmFzYXVyLTEzMjA1/NjgxNzg2NTQwMTE1/NDAucG5n"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>Form</title>
</head>
<style>
    * {
        font-family: Roboto;
        color: #12ADC1;
    }

    form {
        /*display: flex;*/
        /*justify-content: center;*/
    }

    input {
        border-radius: 10px;
        padding-left: 10px;
    }

    input[type="submit"] {
        background-color: #FDD037;
        color: black;
        font-weight: bolder;
        border: 2px solid #12ADC1;
        border-radius: 5px;
    }
</style>
<body>
<h1>
    Test

    <Form method="post" action="#">
        <input type="text" id="search" name="nom" placeholder="nom" >
        <input type="text" id="search" name="prenom" placeholder="prenom" >
        <input type="text" id="search" name="commentaires" placeholder="commentaires" >
        <input type="hidden" id="search" name="txoken" value="JETON" >
        <input type="submit">
    </Form>

    <?php
    if ($_GET["password"]) {
        $password = $_GET["password"];
        $conf_password = $_GET["conf_password"];

        if ($password == $conf_password) echo "Les 2 sont identique";
        else  echo "Les 2 ne sont pas identique";
    }


    ?>
</h1>
</body>
</html>


