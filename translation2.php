<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="language">
            <option value="en">English</option>
            <option value="id">Indonesia</option>
        </select>
        <input type="submit" name="submit">
    </form>

    <?php
    function getTranslation($lang) {
        $json = file_get_contents('translations2.json');
        $translations = json_decode($json, true);
        return $translations[$lang];
    }
    $translated = [];

    if(isset($_POST['submit'])){
        $selectedLanguage = $_POST['language'];
    }else{
        $selectedLanguage = 'en';
    }

    $translated = getTranslation($selectedLanguage);
    
    ?>

    <p><?php echo $translated['paragraph1'] ?></p>
</body>
</html>