<?php
session_start();

// Verifica si hay una sesión iniciada
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirige al login si no hay sesión
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoreo Simulado de Red WiFi</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h1>Monitoreo Simulado de Red WiFi</h1>

    <div class="container">
        <div id="latencyPanel" class="panel">Latencia promedio: calculando...</div>
        <div class="panel"><canvas id="protocolChart"></canvas></div>
        <div class="panel"><canvas id="domainChart"></canvas></div>
    </div>

    <div id="inputPanel">
        <input type="text" id="nuevaURL" placeholder="https://ejemplo.com">
        <button onclick="agregarNuevaURL()">Agregar URL al monitoreo</button>
    </div>

    <p>Bienvenido, <?= htmlspecialchars($_SESSION['username']) ?> | 
        <a href="logout.php">Cerrar sesión</a>
    </p>

    <script src="script.js"></script>
</body>
</html>
