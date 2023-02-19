<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/home.css">
    <title>My Portfolio</title>
</head>
<body>
    
    <?php include_once "./nav.php"; ?>

    <span class="bg-rect">Rectangle</span>

    <span class="bg-smiley">
        <img src="../assets/images/sunflower.png">
    </span>
    <main>
        <div class="wrapper">
            <h6>Our blog</h6>
            <h1>Stories & ideas</h1>
            <span><input type="text" placeholder="Browse"><i class="fa-solid fa-magnifying-glass fa-xl"></i></span>
            <h5>The latest news to drive business strategy</h5>

            <section>
                <article class="main-article">
                    <img src="../assets/images/main-pic-1.png" width="480px" height="400px">
                    <div class="article-header">
                        <p>Personals</p>
                        <small>5 min to read</small>
                    </div>
                    <div class="article-body">
                        <h2>The 3 Best Practice in Sales Prospecting</h2>
                    </div>
                    <div class="article-footer">
                        <img src="../assets/images/dp.png" width="50px" height="50px">
                        <div>
                            <p>Jaqueline Godoy</p>
                            <small>Feb 19 2023</small>
                        </div>
                    </div>
                </article>
                <div class="sub-wrapper">
                    <article class="sub-article">
                        <img src="../assets/images/main-pic-2.png" width="250px" height="190px">
                        <div class="wrapper">
                            <div class="article-header">
                                <p>Sales</p>
                                <small>5 min to read</small>
                            </div>
                            <div class="article-body">
                                <h2>The 3 Best Practice in Sales Prospecting</h2>
                            </div>
                            <div class="article-footer">
                                <img src="../assets/images/dp.png" width="50px" height="50px">
                                <div>
                                    <p>Jaqueline Godoy</p>
                                    <small>Feb 19 2023</small>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="sub-article">
                        <img src="../assets/images/main-pic-3.png" width="250px" height="190px">
                        <div class="wrapper">
                            <div class="article-header">
                                <p>Finance</p>
                                <small>5 min to read</small>
                            </div>
                            <div class="article-body">
                                <h2>Make your next presentation unforgettable</h2>
                            </div>
                            <div class="article-footer">
                                <img src="../assets/images/dp.png" width="50px" height="50px">
                                <div>
                                    <p>Jaqueline Godoy</p>
                                    <small>Feb 19 2023</small>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="sub-article">
                        <img src="../assets/images/main-pic-4.png" width="250px" height="190px">
                        <div class="wrapper">
                            <div class="article-header">
                                <p>Sales Ops</p>
                                <small>5 min to read</small>
                            </div>
                            <div class="article-body">
                                <h2>4 trend shaping the role of Sales Ops in 2022</h2>
                            </div>
                            <div class="article-footer">
                                <img src="../assets/images/dp.png" width="50px" height="50px">
                                <div>
                                    <p>Jaqueline Godoy</p>
                                    <small>Feb 19 2023</small>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>

    <?php include_once "./footer.php"; ?>
    
</body>
</html>