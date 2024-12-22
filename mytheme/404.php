<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
    <style>
        body {
            margin: 0;
            align-items: center;
            height: 100vh;
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }

        header {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .image-header {
            width: 100%;
            text-align: center;
            background-color: #85C700;
        }

        .image-header img {
            height: 100px;
        }

        nav {
            width: 100%;
        }

        nav {
            display: flex;
            flex-direction: row;
        }

        nav a {
            width: 25%;
            background-color: 	#0FB30F;
            text-align: center;
            padding: 15px;
            border: 0.5px solid black;
            font-size: 17px;
            font-weight: 540;
            color: white;
        }

        nav a:hover {
            background-color: #8BCC09;
        }

        a {
            text-decoration: none;
        }
        .volleyball-icon {
            margin-top: 17.1vh;
            font-size: 100px;
            color: #85C700;
            margin-bottom: 20px;
        }

        .container p {
            margin-bottom: 17.1vh;
        }

        footer {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: #00AB00;
        }

        footer div {
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
            padding: 15px;
        }

        footer div img{
            width: 60px;
            height: 40px;
            margin-top: 5px;
            margin: auto;
        }

        footer div a{
            color: white;
            text-align: center;
        }

        .text-foot {
            font-size: 0.7em;
        }
    </style>
</head>
<body>
<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>
    <div class="container">
        <div class="volleyball-icon">🏐</div>
        <h1>404</h1>
        <p>К сожалению, страница, которую вы ищете, не найдена.<br>Но не переживайте, мы всегда в игре!</p>
    </div>
    <?php get_footer(); ?>
</body>
</html>


