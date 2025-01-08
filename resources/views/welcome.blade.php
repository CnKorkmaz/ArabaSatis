<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahibinden</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e53935;  /* Red background */
            color: white;  /* White text for better contrast */
        }
        a {
            color: inherit;  /* Inherit white text color for links */
        }
        a:hover {
            color: #f58282;  /* Lighter red for hover effect on links */
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">
<div class="w-full max-w-md mx-auto">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden flex flex-col items-center p-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Sahibinden</h1>
        <div class="space-y-4 w-full">
            <!-- Log In Button -->
            <a href="{{ route('login') }}" class="w-full block py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300 text-center text-lg font-semibold shadow-md">
                Log In
            </a>

            <br>
            <!-- Create Account Button -->
            <a href="{{ route('register') }}" class="w-full block py-3 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300 text-center text-lg font-semibold shadow-md">
                Create Account
            </a>
        </div>
    </div>
</div>
</body>
</html>
