<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz walidowany</title>
    <style>
        body {
            font-family:Cambria;
            font-size:14pt;
            color:navy;
        }
        .error {
            color:red;
        }
    </style>
</head>
<body>
    <h2>Wypełnij formularz rejestracyjny</h2>
    <p><span class="error">* pola wymagalne</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <!-- pole imię -->
    Podaj imię: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">*<?php echo $nameErr;?></span>
    <br><br>

    <!-- pole e-mail -->
    Podaj e-mail: <input type="email" name="email" value="<?php echo $email;?>">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>

    <!-- pole strona www -->
    Podaj adres strony www: <input type="url" name="website" value="<?php echo $website;?>">
    <span class="error">*<?php echo $websiteErr;?></span>
    <br><br>

    Wpisz komentarz: <textarea name="comment" rows="5" cols="40">
        <?php echo $comment;?>
    </textarea>
    <br><br>

    Wybierz płeć:
    <input type="radio" name="plec" value="kobieta" 
    <?php if(isset($plec) && $plec=="kobieta") echo "checked";?>> KOBIETA
    <input type="radio" name="plec" value="mężczyzna" 
    <?php if(isset($plec) && $plec=="mężczyzna") echo "checked";?>> MĘŻCZYZNA
    <span class="error">*<?php echo $plecErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Rejestruj">
    </form>
</body>
</html>
