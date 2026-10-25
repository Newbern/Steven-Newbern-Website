<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- SEO Meta Tags -->
        <?php if (file_exists($seo)) {include($seo);} ?>
        <meta name="author" content="Steven Newbern">
        <meta name="keywords" content="Steven Newbern, Full-Stack Developer, Freelance, Web Developer, Backend Developer, Frontend Developer, Resume, Projects, Contact">
        <meta name="robots" content="index, follow">
        <meta name="theme-color" content="#af4428">

        <!-- Icon -->
        <link rel="icon" type="image/png" href="/favicon.png">

        <!-- Importing Fonts from Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">

        <!-- base CSS -->
        <link rel="stylesheet" href="app/templates/css/base.css">
        <!-- header CSS -->
        <link rel="stylesheet" href="app/templates/css/header.css">
        <!-- navigation CSS -->
        <link rel="stylesheet" href="app/templates/css/nav.css">
        <!-- footer CSS -->
        <link rel="stylesheet" href="app/templates/css/footer.css">

        <!-- Page-specific CSS -->
        <?php echo "<link rel='stylesheet' href='$css'>" ?>
        
        
    </head>
    <body>
        <div class="left-div">
            <!-- Header -->
            <header><?php if(file_exists($header)) {include($header);}?></header>

            <!-- Navigation -->
            <nav><?php if(file_exists($nav)) {include($nav);}?></nav>

            <!-- Footer -->
            <footer><?php if (file_exists($footer)) {include($footer);} ?></footer>

        </div>
        <!-- Main Content Area -->
            <main><?php if (file_exists($content)) {include($content);} ?></main>
    </body>
        
    <!-- Base JavaScript -->
    <script src="app/templates/js/base.js"></script>

    <!-- Page-specific JavaScript -->
    <?php echo "<script src='$js'></script>" ?>
</html>