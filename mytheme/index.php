<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Смотри новости волейбола онлайн!">
    <meta name="keywords" content="новости волейбола,волейбол последние новости,новости волейбола россии,новости спорта волейбол,новости волейбола мужчины,новости волейбола россии сегодня,волейбол новости сегодня мужчины,волейбол женщины новости,новости волейбола последние новости на сегодня,волейбол новости мира,новости волейбола россии и мира,бо новости волейбол,спорт бо волейбол новости,новости волейбола россии мужчины,новости волейбола онлайн,бизнес новости волейбола,волейбол 2024 новости,бизнес онлайн волейбол новости волейбола,новости волейбола россии и мира сегодня,спорт бизнес волейбол новости">
    <link rel="stylesheet" href="style.css">
    <title>Новости волейбола</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/istockphoto-153075177-1024x1024.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
</head>
<body>
    <?php get_header(); ?>
    <main>
        <article class = 'news-section'>
            <section class = 'news-sport'>
                <p>Последние результаты матчей Лиги чемпионов.</p>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/i.webp" alt="news_photo"></a>
            </section>
            <section class = 'news-sport'>
                <p>Интервью с лучшими игроками недели.</p>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/i (1).webp" alt="news_photo"></a>
            </section>
            <section class = 'news-sport'>
                <p>Анализ предстоящих турниров и прогнозы.</p>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/us-volleyball.webp" alt="news_photo"></a>
            </section>
        </article>
        <div class = 'bg-img'></div>
        <article class="about-us">
            <section>
                <form action="malito:example@gmail.com" method="post">
                    <fieldset>
                        <input type="text" placeholder="Ваше имя">
                        <br>
                        <input type="number" placeholder="Ваш номер телефона">
                        <br>
                        <textarea name="text-fedb" placeholder="Ваш отзыв"></textarea>
                        <br>
                        <input type="submit" value="Оставьте отзыв!" formmethod="post">
                    </fieldset>
                </form>
            </section>
            <section>
                <p>Мы следим за каждым матчем, чтобы вы всегда оставались в курсе самых свежих и захватывающих событий из мира волейбола. Мы рассказываем истории лучших игроков, их путь к успеху, трудности, которые они преодолевали, и моменты триумфа, которые вдохновляют миллионы. Кроме того, мы делимся детальными прогнозами на турниры, анализируем результаты матчей и даём профессиональный взгляд на предстоящие игры. Оставайтесь с нами, чтобы всегда быть в центре волейбольной жизни и стать частью большого сообщества, объединённого любовью к этому удивительному виду спорта!</p>
            </section>
        </article>
    </main>
    <?php get_footer(); ?>
</body>
</html>