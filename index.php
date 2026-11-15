<html>
<head>
<title>Práctica 1 - Despliegue de aplicaciones web</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
echo "<h1>Servidor DAW</h1>";
echo "<p> Nombre Apellidos – Pr&aacute;ctica 1 DAW</p>";
echo "<p>Fecha: " . date("d/m/Y H:i:s") . "</p>";
echo "<p>PHP: " . PHP_VERSION . "</p>";
echo "<p>Servidor: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>IP cliente: " . $_SERVER['REMOTE_ADDR'] . "</p>";
echo "<p>Protocolo: " .
((!empty($_SERVER['HTTPS'])) ? "HTTPS" : "HTTP")
. "</p>";
?>
<?php
echo "Provocando error de sintaxis"
</body>
</html>