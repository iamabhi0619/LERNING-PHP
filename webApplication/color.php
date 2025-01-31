<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fav Color</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96">
        <form method="POST" class="flex flex-col space-y-4">
            <label for="favcolor" class="text-lg font-semibold">Enter Your Favorite Color:</label>
            <input type="text" name="favcolor" id="favcolor" class="border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button type="submit" name="submit" class="bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Check</button>
        </form>
        
        <p class="mt-4 text-lg font-medium">
            <?php
            if(isset($_POST["submit"])){
                $color = strtolower(trim($_POST["favcolor"]));
                switch ($color) {
                    case "blue":
                        echo "Blue is a calming and serene color.";
                        break;
                    case "red":
                        echo "Red is vibrant and full of energy.";
                        break;
                    case "green":
                        echo "Green represents nature and tranquility.";
                        break;
                    case "yellow":
                        echo "Yellow is bright and cheerful.";
                        break;
                    case "purple":
                        echo "Purple signifies royalty and creativity.";
                        break;
                    case "black":
                        echo "Black is elegant and powerful.";
                        break;
                    case "white":
                        echo "White symbolizes purity and simplicity.";
                        break;
                    case "orange":
                        echo "Orange is warm and energetic.";
                        break;
                    case "pink":
                        echo "Pink is playful and loving.";
                        break;
                    default:
                        echo "That's an interesting choice!";
                        break;
                }
            }
            ?>
        </p>
    </div>
</body>
</html>
