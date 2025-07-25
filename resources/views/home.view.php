<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Test</title>
    <link rel="stylesheet" href="/css/tailwind.css">
</head>
<body>
    <h1 class="text-6xl mt-10 text-green-500 font-bold underline">Database Connection Test</h1>
    <p class="text-lg text-red-500"><?= htmlspecialchars($dbStatus ?? 'No status') ?></p>
</body>
</html>