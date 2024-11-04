<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut a l'App de Gestió</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Comic Neue', cursive;
            overflow-x: hidden;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        /* Animaciones */
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        .float:hover {
            animation: float 0.7s ease-in-out infinite alternate;
        }
        @keyframes float {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-8px);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-500 to-blue-800 text-white">

<!-- Navbar -->
<?php include '../resources/views/layout/navbar.blade.php';?>

<main class="fade-in">
    <!-- Hero Section -->
    <section class="text-center">
        <h1 class="text-6xl font-bold mb-6 text-blue-200 drop-shadow-md pulse">Benvingut a la meva aplicació</h1>
        <p class="text-2xl mb-10 text-blue-100 pulse">Gestiona fàcilment les teves pel·lícules i cotxes en un sol lloc!</p>
        <div class="space-x-4">
            <a href="/films" class="bg-blue-300 text-blue-900 font-semibold px-10 py-4 rounded-full shadow-lg hover:bg-blue-400 transform hover:scale-110 transition duration-300 ease-in-out float inline-block">
                Pel·lícules
            </a>
            <a href="/cars" class="bg-blue-300 text-blue-900 font-semibold px-10 py-4 rounded-full shadow-lg hover:bg-blue-400 transform hover:scale-110 transition duration-300 ease-in-out float inline-block">
                Cotxes
            </a>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-900 py-6 mt-auto">
    <p class="text-center text-gray-400 hover:text-blue-300 transition duration-500">&copy; 2024 Roberto. Tots els drets reservats.</p>
</footer>

</body>
</html>
