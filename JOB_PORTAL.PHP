
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Craigs - Directory Listing
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-black text-white">
   <div class="container mx-auto flex justify-between items-center py-2">
    <div class="flex items-center">
     <img alt="Envato Market Logo" class="h-8" height="50" src="https://storage.googleapis.com/a1aa/image/I20o0SutZ0aZiYOhkJ_bNHVspocpY3lRwA5UVHO5iFU.jpg" width="150"/>
     <img alt="Envato Market Logo" class="h-8 ml-4" height="50" src="https://storage.googleapis.com/a1aa/image/I20o0SutZ0aZiYOhkJ_bNHVspocpY3lRwA5UVHO5iFU.jpg" width="150"/>
    </div>
    <button class="bg-green-500 text-white px-4 py-2 rounded">
     Buy now
    </button>
   </div>
  </header>
  <?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected option value from the dropdown
    $selectedOption = $_POST['job_type']; // 'job_type' is the name of the select element

    // Show the selected value
    echo "<h3>You selected: " . htmlspecialchars($selectedOption) . "</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Type Selection</title>
    <style>
        /* Simple styling for the form and dropdown */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: auto;
        }
        select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Select Job Type</h2>
        <form action="" method="POST">
            <label for="job_type">Choose your job type:</label>
            <select name="job_type" id="job_type" required>
                <option value="" disabled selected>Select a job type</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Freelance">Freelance</option>
                <option value="Internship">Internship</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST['job_type']; // 'job_type' is the name of the radio input
    echo "<h3>You selected: " . htmlspecialchars($selectedOption) . "</h3>";
}
?>
<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST['job_type']; // 'job_type' is the name of the radio input
    echo "<h3>You selected: " . htmlspecialchars($selectedOption) . "</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Type Selection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Select Job Type</h2>
        <form action="" method="POST">
            <div class="option-bar">
                <!-- Button Bar with Labels (Radio buttons styled as buttons) -->
                <label class="option-label" for="full-time">
                    <input type="radio" id="full-time" name="job_type" value="Full-time" required>
                    Full-time
                </label>
                <label class="option-label" for="part-time">
                    <input type="radio" id="part-time" name="job_type" value="Part-time">
                    Part-time
                </label>
                <label class="option-label" for="freelance">
                    <input type="radio" id="freelance" name="job_type" value="Freelance">
                    Freelance
                </label>
                <label class="option-label" for="internship">
                    <input type="radio" id="internship" name="job_type" value="Internship">
                    Internship
                </label>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Type Selection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Select Job Type</h2>
        <form action="" method="POST">
            <div class="option-bar">
                <!-- Button Bar with Labels (Radio buttons styled as buttons) -->
                <label class="option-label" for="full-time">
                    <input type="radio" id="full-time" name="job_type" value="Full-time" required>
                    Full-time
                </label>
                <label class="option-label" for="part-time">
                    <input type="radio" id="part-time" name="job_type" value="Part-time">
                    Part-time
                </label>
                <label class="option-label" for="freelance">
                    <input type="radio" id="freelance" name="job_type" value="Freelance">
                    Freelance
                </label>
                <label class="option-label" for="internship">
                    <input type="radio" id="internship" name="job_type" value="Internship">
                    Internship
                </label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>


  <!-- Navigation -->
  <nav class="bg-white shadow">
   <div class="container mx-auto flex justify-between items-center py-4">
    <div class="flex items-center">
     <img alt="Craigs Logo" class="h-12" height="50" src="https://storage.googleapis.com/a1aa/image/uTtw2RQLYjvkwp0f-qXjoZ9-ISgXEg6i5PcW7BL0O3E.jpg" width="50"/>
     <span class="text-2xl font-bold ml-2">
      Craigs
     </span>
    </div>
    <ul class="flex space-x-6">
     <li class="relative group">
      <a class="text-gray-700" href="#">
       Home
      </a>
      <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg hidden group-hover:block">
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 1
        </a>
       </li>
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 2
        </a>
       </li>
      </ul>
     </li>
     <li class="relative group">
      <a class="text-gray-700" href="#">
       Listing
      </a>
      <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg hidden group-hover:block">
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 1
        </a>
       </li>
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 2
        </a>
       </li>
      </ul>
     </li>
     <li class="relative group">
      <a class="text-gray-700" href="#">
       Pages
      </a>
      <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg hidden group-hover:block">
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 1
        </a>
       </li>
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 2
        </a>
       </li>
      </ul>
     </li>
     <li class="relative group">
      <a class="text-gray-700" href="#">
       Extras
      </a>
      <ul class="absolute left-0 mt-2 w-48 bg-white shadow-lg hidden group-hover:block">
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 1
        </a>
       </li>
       <li>
        <a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">
         Submenu 2
        </a>
       </li>
      </ul>
     </li>
     <li>
      <a class="text-gray-700" href="#">
       Contact
      </a>
     </li>
    </ul>
    <button class="bg-red-500 text-white px-4 py-2 rounded">
     SUBMIT AD
    </button>
   </div>
  </nav>
  <!-- Main Content -->
  <main class="container mx-auto py-16">
   <div class="text-center">
    <h1 class="text-4xl font-light">
     Buy,
     <span class="font-bold">
      Sell
     </span>
     or
     <span class="font-bold">
      Find
     </span>
     What You need
    </h1>
   </div>
   <div class="mt-8 flex justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl">
     <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 md:space-x-4">
      <div class="flex-1">
       <label class="block text-red-500 font-bold mb-2">
        What?
       </label>
       <input class="w-full border border-gray-300 rounded px-4 py-2" placeholder="What are you looking for?" type="text"/>
      </div>
      <div class="flex-1">
       <label class="block text-red-500 font-bold mb-2">
        Where?
       </label>
       <div class="relative">
        <input class="w-full border border-gray-300 rounded px-4 py-2" placeholder="Enter Location" type="text"/>
        <i class="fas fa-map-marker-alt absolute right-3 top-3 text-gray-400">
        </i>
       </div>
      </div>
      <div class="flex-1">
       <label class="block text-red-500 font-bold mb-2">
        Category?
       </label>
       <select class="w-full border border-gray-300 rounded px-4 py-2">
        <option>
         Select Category
        </option>
       </select>
      </div>
      <button class="bg-red-500 text-white px-8 py-2 rounded">
       Search
      </button>
     </div>
     <div class="mt-4 text-red-500">
      <a class="flex items-center" href="#">
       <i class="fas fa-plus mr-2">
       </i>
       More Options
      </a>
     </div>
    </div>
   </div>
  </main>
  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4">
   <div class="container mx-auto text-center">
    <p>
     © 2023 Craigs. All rights reserved.
    </p>
   </div>
  </footer>
 </body>
</html>
