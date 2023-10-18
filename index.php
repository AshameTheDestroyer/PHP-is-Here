<?php

$theme = isset($_POST["theme"]) && !empty($_POST["theme"]) ? $_POST["theme"] : "light";

$inputFields = array("firstName", "middleName", "lastName");
$isRequiredInputFields = array(true, false, true);

$pages = array("Profile", "Feed", "Preferences", "About");
if (isset($_POST["pageName"]) && !empty($_POST["pageName"])) {
    array_push($pages, (string) $_POST["pageName"]);
}

?>

<!DOCTYPE html>
<html lang="en" class="<?php echo $theme . "-theme" ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="robots" content="index, follow" />

    <link rel="icon" type="image/svg+xml" href="" />
    <link rel="stylesheet" href="./css/globals.css" />
    <link rel="stylesheet" href="./css/style.css" />

    <title>PHP is here!</title>
</head>

<body>
    <?php include("./view/header.php") ?>

    <main>
        <?php include("./view/main.php") ?>
    </main>

    <?php include("./view/footer.php") ?>
    <section id="modal-container"></section>
</body>

</html>