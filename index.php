<?php
// Main entry point that handles routing
$page = isset($_GET['page']) ? $_GET['page'] : 'film';

// Include header
include_once 'assets/data/films.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamFlix - <?php echo ucfirst($page); ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">StreamFlix</div>
            <ul>
                <li><a href="/film" class="<?php echo $page == 'film' ? 'active' : ''; ?>">Films</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Trending</a></li>
            </ul>
            <div class="search-box">
                <input type="text" placeholder="Search films...">
                <button><i class="fas fa-search"></i></button>
            </div>
        </nav>

        <main>
            <?php
            // Load the appropriate page based on the route
            switch ($page) {
                case 'film':
                    include 'film.php';
                    break;
                case 'watch':
                    include 'watch.php';
                    break;
                default:
                    echo '<div class="error">Page not found</div>';
                    break;
            }
            ?>
        </main>

        <footer>
            <div>&copy; 2025 StreamFlix - Modern Streaming Platform</div>
            <div class="footer-links">
                <a href="#">About</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Contact</a>
            </div>
        </footer>
    </div>

    <script src="/assets/js/script.js"></script>
</body>
</html>
