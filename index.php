<?php
include 'header.php';
?>

<style>
    .welcome-section {
        background: white;
        border-radius: 8px;
        padding: 3rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 2rem;
    }
    .welcome-section h1 {
        color: #333;
        margin-bottom: 1rem;
    }
    .welcome-section p {
        color: #666;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    .categories-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    .category-card {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
    .category-card h3 {
        color: #667eea;
        margin-bottom: 1rem;
    }
    .btn-cta {
        background-color: #667eea;
        color: white;
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s;
    }
    .btn-cta:hover {
        background-color: #764ba2;
    }
</style>

<section class="welcome-section">
    <?php
    if (isset($_SESSION['useruid'])) {
        echo "<h1>Welcome back, " . htmlspecialchars($_SESSION['useruid']) . "!</h1>";
        echo "<p>You have successfully logged in. Enjoy exploring our platform.</p>";
    } else {
        echo "<h1>Welcome to MyApp</h1>";
        echo "<p>Please <a href='login.php' style='color: #667eea; text-decoration: none;'>log in</a> or <a href='signup.php' style='color: #667eea; text-decoration: none;'>sign up</a> to get started.</p>";
    }
    ?>
</section>

<section class="categories-section">
    <div class="category-card">
        <h3>Fun Stuff</h3>
        <p>Explore entertaining content and features.</p>
        
    </div>
    <div class="category-card">
        <h3>Serious Stuff</h3>
        <p>Professional resources and documentation.</p>
        
    </div>
    <div class="category-card">
        <h3>Exciting Stuff</h3>
        <p>Discover new and trending features.</p>
        
    </div>
</section>

<?php
include 'footer.php';
?>