<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Default Title'; ?></title>
    <!-- <link rel="stylesheet" href="../../../public/assets/css/style.css"> -->
    <link rel="stylesheet" href="../public/assets/css/style.css">

    <!-- <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        header ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        header ul li {
            margin-right: 20px;
        }

        header ul li a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            display: flex;
            margin-top: 60px;
            /* Height of the header */
            flex: 1;
        }

        aside {
            width: 200px;
            background-color: #f4f4f4;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 60px;
            /* Adjust for header */
            left: 0;
            overflow-y: auto;
        }

        main {
            margin-left: 220px;
            /* Width of the sidebar */
            padding: 20px;
            flex: 1;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style> -->

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>