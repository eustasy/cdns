<!DocType html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title><?php
			if (!empty($Title)) echo $Title . ' &nbsp;&#8212;&nbsp; ';
			echo 'CDN Advisory &nbsp;&#8212;&nbsp; eustasy';
			?></title>
	<?php
	if (!empty($Canonical)) echo '
	<link rel="canonical" href="https://labs.eustasy.org/cdns/' . $Canonical . '">';
	?>

	<link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Lusitana|Roboto:400,500,400italic|Source+Code+Pro" data-noprefix>
	<link rel="stylesheet prefetch" href="https://cdn.jsdelivr.net/combine/gh/eustasy/Colors.css@2/colors.min.css,gh/necolas/normalize.css@8/normalize.min.css">
	<link rel="stylesheet prefetch" href="styles.css">
</head>