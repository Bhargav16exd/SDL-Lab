<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application - Inheritance Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Blog Application</h1>

        <!-- Display Menu -->
        <form method="POST" class="mb-4">
            <label class="flex items-center mb-2">
                <input type="radio" name="category" value="tech" class="mr-2" required> 
                <span class="text-gray-700">Tech Blogs</span>
            </label>
            <label class="flex items-center mb-4">
                <input type="radio" name="category" value="food" class="mr-2"> 
                <span class="text-gray-700">Food Blogs</span>
            </label>
            <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg">
                Show Blogs
            </button>
        </form>

        <?php
        // Base Class
        class Blog {
            public $title;
            public $author;
            public $content;

            public function __construct($title, $author, $content) {
                $this->title = $title;
                $this->author = $author;
                $this->content = $content;
            }

            public function displayBlog() {
                echo "<div class='p-4 border border-gray-200 rounded-lg mb-4'>";
                echo "<h2 class='text-xl font-semibold text-gray-800'>{$this->title}</h2>";
                echo "<p class='text-gray-600'>By: {$this->author}</p>";
                echo "<p class='text-gray-700 mt-2'>{$this->content}</p>";
                echo "</div>";
            }
        }

        // Derived Class 1: Tech Blog
        class TechBlog extends Blog {
            public function __construct($title, $author, $content) {
                parent::__construct($title, $author, $content);
            }
        }

        // Derived Class 2: Food Blog
        class FoodBlog extends Blog {
            public function __construct($title, $author, $content) {
                parent::__construct($title, $author, $content);
            }
        }

        // Blog Data
        $techBlogs = [
            new TechBlog("Understanding PHP", "John Doe", "PHP is a server-side scripting language used for dynamic web development."),
            new TechBlog("Getting Started with Laravel", "Alice Johnson", "Laravel is a powerful PHP framework that simplifies web development."),
            new TechBlog("Mastering JavaScript", "Bob Brown", "JavaScript is essential for interactive web pages."),
        ];

        $foodBlogs = [
            new FoodBlog("The Best Pasta Recipes", "Jane Smith", "Learn how to make authentic Italian pasta dishes at home."),
            new FoodBlog("Healthy Eating Tips", "Chris Evans", "Discover simple ways to eat healthy and stay fit."),
            new FoodBlog("Ultimate Guide to Baking", "Emma Watson", "Master the art of baking delicious cakes and pastries."),
        ];

        // Display Selected Category
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['category'])) {
            $selectedCategory = $_POST['category'];

            echo "<h2 class='text-2xl font-bold mt-6'>" . ucfirst($selectedCategory) . " Blogs</h2>";

            if ($selectedCategory == "tech") {
                foreach ($techBlogs as $blog) {
                    $blog->displayBlog();
                }
            } elseif ($selectedCategory == "food") {
                foreach ($foodBlogs as $blog) {
                    $blog->displayBlog();
                }
            }
        }
        ?>

    </div>
</body>
</html>

