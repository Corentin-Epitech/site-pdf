require 'vendor / autoload . php ';
use Dompdf \ Dompdf ;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_POST["nom"]; ?>
    <?php echo $_POST["prenom"]; ?>
    <?php echo $_POST["title"]; ?>
    <?php echo $_POST["mail"]; ?>
    <?php echo $_POST["phone"]; ?>
    <?php echo $_POST["desc"]; ?>

    <?php $competences = $_POST["comp"] ?? [];
    var_dump( $competences );
    foreach ($competences as $item) {
        echo $item;
    }
    ?>

</body>
</html>