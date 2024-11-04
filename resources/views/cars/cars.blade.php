<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotxes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comic Neue', cursive;
            background: linear-gradient(to bottom right, #3b82f6, #1e3a8a);
            color: white;
        }
        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
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
                transform: translateY(-6px);
            }
        }
    </style>
</head>
<body class="fade-in">

<!-- Navbar -->
<?php include '../resources/views/layout/navbar.blade.php';?>

<div class="max-w-4xl mx-auto bg-blue-100 shadow-lg rounded-lg p-8 mt-12">
    <h1 class="text-4xl font-bold mb-6 text-blue-900 text-center">Gestió de Cotxes</h1>
    <div class="text-center mb-6">
        <a href="/cars/create" class="bg-blue-500 text-white px-6 py-3 rounded-full shadow-md hover:bg-blue-700 transition-transform transform hover:scale-105 inline-block float">
            Afegir Nou Cotxe
        </a>
    </div>
    <table class="min-w-full bg-white border border-gray-300 rounded-md">
        <thead>
        <tr class="bg-blue-200 text-blue-900 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Marca</th>
            <th class="py-3 px-6 text-left">Model</th>
            <th class="py-3 px-6 text-left">Any</th>
            <th class="py-3 px-6 text-left">Caballs</th>
            <th class="py-3 px-6 text-center">Accions</th>
        </tr>
        </thead>
        <tbody class="text-blue-900 text-sm font-light">
        <?php if (isset($cars) && !empty($cars)): ?>
            <?php foreach ($cars as $car): ?>
        <tr class="border-b border-gray-300 hover:bg-blue-100">
            <td class="py-3 px-6"><?= htmlspecialchars($car->id) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($car->make) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($car->model) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($car->year) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($car->horsepower) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/cars/edit/<?= htmlspecialchars($car->id) ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/cars/delete/<?= htmlspecialchars($car->id) ?>" class="text-red-500 hover:text-red-700">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
            <td colspan="6" class="py-3 px-6 text-center">No cars found</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
