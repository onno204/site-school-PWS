<?php
    $currentPage = strtolower(pathinfo(basename($_SERVER['SCRIPT_NAME']), PATHINFO_FILENAME));
?>

<head>
    <title>qbus-management | <?php echo $currentPage; ?></title>
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="qbus-management">
    <meta name="author" content="Onno204">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/content.css">
    <link rel="stylesheet" href="assets/css/tables.css">
    <link rel="stylesheet" href="assets/css/<?php echo $currentPage; ?>.css">

    <script src="assets/js/main.js"></script>

</head>
<body>