<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> <?= $this->e($title);?> </title>
	<link rel="stylesheet" href="../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../components/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<?= $this->section('content') ?>
		</div>
	</div>
	<script src="../../../components/jquery/jquery.min.js"></script>
	<script src="../../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>