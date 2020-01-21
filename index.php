<?php 
    
    session_start();

    if(!isset($_SESSION['sent']) && !isset($_SESSION['error'])){
        $_SESSION['sent'] = false;
        $_SESSION['error']=false;
    }
    

?>

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
                <h2>Junior Web Developper</h2>
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
                    <p>I'm passionate with technologies since my childhood
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
                            <a alt="link" href="pageWork.php?index=0">Link</a>
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
        <?php if(!$_SESSION['sent']){
           echo '<div id="contact-content">';
           echo     '<div id="right-contact">';
           echo         '<h2>Contact</h2>';
           echo     '</div>';
           echo     '<div id="left-contact">';
           echo         '<form action="getContact.php" method="POST">';
           echo             '<div>';
           echo                 '<label for="firstname">FirstName :</label>';
           echo                 '<input type="text" name="firstname"';
           if(isset($_SESSION['firstname'])){ 
               echo 'value="'.$_SESSION['firstname'];
               unset($_SESSION['firstname']);
            }
               echo '">';
           if(isset($_SESSION['firstnameError'])){
               echo $_SESSION['firstnameError'];
               unset($_SESSION['firstnameError']);
           }
           echo             '</div>';
           echo             '<div>';
           echo                 '<label for="lastname">LastName :</label>';
           echo                 '<input type="text" name="lastname"';
           if(isset($_SESSION['lastname'])){ 
            echo 'value="'.$_SESSION['lastname'];
            unset($_SESSION['lastname']);
         }
            echo '">';
           if(isset($_SESSION['lastnameError'])){
            echo $_SESSION['lastnameError'];
            unset($_SESSION['lastnameError']);

        }
           echo             '</div>';
           echo             '<div>';
           echo                 '<label for="mail">Mail :</label>';
           echo                 '<input type="text" name="mail"';
           if(isset($_SESSION['mail'])){ 
            echo 'value="'.$_SESSION['mail'];
            unset($_SESSION['mail']);
         }
            echo '">';
           if(isset($_SESSION['mailError'])){
            echo $_SESSION['mailError'];
            unset($_SESSION['mailError']);
        }
           echo             '</div>';
           echo             '<div>';
           echo                 '<label for="message">Message :</label>';
           echo                 '<textarea name="message">';
           if(isset($_SESSION['message'])){ 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
         }
            echo '</textarea>';
           if(isset($_SESSION['messageError'])){
            echo $_SESSION['messageError'];
            unset($_SESSION['messageError']);
        }
           echo             '</div>';
           echo             '<input type="submit" name="submit">';
           echo         '</form>';
           echo     '</div>';
           echo '</div>';
        }else if($_SESSION['sent']){
            echo '<div id="contact-content">';
            echo     '<div id="right-contact">';
            echo         '<h2>Contact</h2>';
            echo     '</div>';
            echo     '<div id="left-contact">';
            echo        '<img src="" alt="sent">';
            echo        '<h2>Sent</h2>';
            echo     '</div>';
            echo '</div>';
        }else{
            echo 'error';
        }
        ?>
            <div class='btn'>
                <a href="#work"><img src="assets/img/arrow-up.png" alt="bouton up"></a>
            </div>
        </section>
        <footer>

        </footer>
    </div>
</body>
</html>