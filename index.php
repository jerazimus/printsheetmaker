<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Sheet Maker</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="print.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>

</head>
<body>

<div class="no-print">
    <?php include "callToAction.php"; ?>
</div>

<div class="no-print">
    <?php include "csvImporter.php"; ?>
</div>

<?php include "cardList.php"; ?>

<script type="text/javascript" src="main.js"></script>

<script async defer src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
<noscript><img src="https://queue.simpleanalyticscdn.com/noscript.gif" alt="" referrerpolicy="no-referrer-when-downgrade" /></noscript>
</body>
</html>
