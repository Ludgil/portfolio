<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700&display=swap" rel="stylesheet">
    <title>Gilotaux - Ludivic - Portfolio</title>
</head>
<body>
    <div id="container">
        <nav>
            <ul>
                <li><a alt="Home" href="#">Home</a></li>
                <li><a alt="About-me" href="#">About-me</a></li>
                <li><img src="#" alt="logo"></li>
                <li><a alt="My Work" href="#">My Work</a></li>
                <li><a alt="Contact-me" href="#">Contact-me</a></li>
            </ul>
        </nav>
        <header>
            <div id="header-content">
                <h1>Gilotaux Ludivic</h1>
                <h2>Junior Developper</h2>
                <img src="assets/img/petitephoto.jpg" alt="photo">
            </div>
            <div class='btn'>
                <a href="#about"><img src="assets/img/arrow.png" alt="bouton down"></a>
            </div>
        </header>
        <section id="about">
            <div class="flex">
                <div id="left-about">
                    <h2>About Me</h2>
                </div>
                <div id=right-about>
                    <p>Young Web developper, looking for an internship rather in back-end PHP. 
                        I worked for 2 years in a bank but i'm passionate with technologies since my childhood and 
                        i really want work in a domain that i find attractive.
                    </p>
                </div>
            </div>
            <div class='btn'>
                <a href="#work"><img src="assets/img/arrow.png" alt="bouton down"></a>
                <a href="#container"><img src="assets/img/arrow-up.png" alt="bouton up"></a>
            </div>
        </section>
        <section id="work">
            <div id="work-content">
                <h2>My work</h2>
                <div id="workcard">
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard">
                            <h2>title</h2>
                            <a alt="link" href="#">Link</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    <div class="card">
                        <img src="assets/img/photo.jpg" alt="">
                        <div class="infocard"></div>
                    </div>
                    
                </div>
            </div>
            <div class='btn'>
                <a href="#contact"><img src="assets/img/arrow.png" alt="bouton down"></a>
                <a href="#about"><img src="assets/img/arrow-up.png" alt="bouton up"></a>
            </div>
        </section>
        <section id="contact">
            <div id="contact-content">
                <div id="right-contact">
                    <h2>Contact</h2>
                </div>
                <div id="left-contact">
                    <form action="getContact.php" method="POST">
                        <div>
                            <label for="firstname">FirstName :</label>
                            <input type="text" name="firstname">
                        </div>
                        <div>
                            <label for="lastname">LastName :</label>
                            <input type="text" name="lastname">
                        </div>
                        <div>
                            <label for="mail">Mail :</label>
                            <input type="text" name="mail">
                        </div>
                        <div>
                            <label for="message">Message :</label>
                            <textarea name="message"></textarea>
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class='btn'>
                <a href="#work"><img src="assets/img/arrow-up.png" alt="bouton up"></a>
            </div>
        </section>
        <footer>

        </footer>
    </div>
</body>
</html>