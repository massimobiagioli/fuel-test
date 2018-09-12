<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?=$title?></title>
</head>
<body>
    Questo è un primo modulo<br>
    <?php echo $k1; ?><br>
    <?php echo $kcfg; ?>
    <?php echo $footer ?>
    <?php foreach ($soggetti as $soggetto): ?>
        <?= $soggetto['nominativo'] ?>
        <br>
    <?php endforeach; ?>
</body>
