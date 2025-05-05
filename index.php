<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Prompt Generator</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, rgb(240, 240, 255), rgb(200, 225, 255), rgb(180, 255, 240));
        }

        nav.navbar {
            background-color: #0056b3;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        h1, h2 {
            text-align: center;
            margin-top: 30px;
        }

        .prompt, form {
            text-align: center;
            margin: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">PROMPT GENERATOR</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- HOME SECTION -->
    <section id="home">
        <h1>Welcome to My Website</h1>
        <h2>Random PHP Prompt Generator</h2>
        <div class="prompt">
            <strong>Prompt:</strong>
            <?php
                function generatePrompt() {
                    $actions = ["Write", "Create", "Build", "Develop", "Design"];
                    $objectives = [
                        "a function to reverse a string",
                        "a script to connect to a MySQL database",
                        "a login form with session handling",
                        "a script to upload files securely",
                        "a contact form with email sending",
                        "a pagination system for a blog",
                        "a search filter for an HTML table",
                        "a password strength validator"
                    ];
                    $complexity = ["basic", "intermediate", "advanced"];

                    return $actions[array_rand($actions)] . " " .
                        $objectives[array_rand($objectives)] . " (" .
                        $complexity[array_rand($complexity)] . ")";
                }

                echo generatePrompt();
            ?>
        </div>
        <form method="POST">
            <button type="submit">Generate New Prompt</button>
        </form>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about">
        <h2>About</h2>
        <p>This tool was built to help aspiring and experienced developers practice PHP by generating prompts similar to tasks used in AI model evaluation and training scenarios.</p>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
        <h2>Contact</h2>
        <p>We'd love to hear from you! For support or collaboration, reach us at <strong>support.center@gmail.com</strong>.</p>
    </section>

</body>
</html>
