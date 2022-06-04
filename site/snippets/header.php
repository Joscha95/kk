<!doctype html>
<html lang="de">

	<head>
		<title>	<?= $site->title() ?> | <?= $page->title() ?>	</title>
		<meta charset="UTF-8">
		<meta name="description" content="<?= $site->description() ?>">
		<meta name="author" content="<?= $site->author() ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<?= css(['assets/css/normalize.css','assets/css/index.css','@auto']) ?>

	</head>
	<body class="<?=$page->template()?>">

  <nav>
  </nav>
	<main>
