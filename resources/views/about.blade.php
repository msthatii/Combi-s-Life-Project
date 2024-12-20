<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mingkai's Life (About)</title>
        <!-- STYLE LINK -->
        <link rel="stylesheet" type="text/css" href="/assets/css/about.css">
    </head>

    <body>

        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="/
                assets/images/logo.png" alt="Logo">
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('homepage', ['username' => request('username', 'guest')]) }}" class="button">Home</a></li>
                    <li><a href="{{ route('about', ['username' => request('username', 'guest')]) }}" class="button">About</a></li>
                    <li><a href="{{ route('content', ['username' => request('username', 'guest')]) }}" class="button">Content</a></li>
                    <li><a href="{{ route('contact', ['username' => request('username', 'guest')]) }}" class="button">Contact</a></li>
                </ul>
            </nav>
            
            <div class="welcome-message">
                <h1>{{ $message }}</h1>
            </div>
        </header>
        <!-- END OF HEADER -->

        <!--SECTION OF MEET THE FAM-->
        <section id="hero">
            <div class="hero-content"><br><br>
                <a href="#mingkai_and_friends" class="cta-button">Meet the Fam</a>
            </div>
        </section>

        <section id="mingkai_and_friends"> <br>
            <h4 style="background-color: #ff9fbf; color: white; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">Meet the Fam</h4>
                <div class="profile-grid">
                    <div class="profile-card">

                        <div class="image-container">
                            <img src="/assets/images/mk1.jfif" alt="Member 1">
                        </div>
                        <h3>Mingkai</h3>
                    </div>
                    
                    <div class="profile-card">
                        <div class="image-container">
                            <img src="/assets/images/nimb.jpg" alt="Member 1">
                        </div>
                        <h3>Nimble</h3>
                    </div>
                    
                    <div class="profile-card">
                        <div class="image-container">
                            <img src="/assets/images/7.jpg" alt="Member 1">
                        </div>
                        <h3>Sevenleven</h3>
                    </div>
        
                    <div class="profile-card">
                        <div class="image-container">
                            <img src="/assets/images/potpot1.jfif" alt="Member 2">
                        </div>
                        <h3>Potpot</h3>
                    </div>
        
                    <div class="profile-card">
                        <div class="image-container">
                            <img src="/assets/images/ruff0.jpg" alt="Member 3">
                        </div>
                        <h3>Ruff</h3>
                    </div>
        
                    <div class="profile-card">
                        <div class="image-container">
                            <img src="/assets/images/luna1.jfif" alt="Member 4">
                        </div>
                        <h3>Luna</h3>
                    </div>
        
                    <div class="profile-card">
                        <div class="image-container">
                            <img src="/assets/images/cindy0.jpg" alt="Member 5">
                        </div>
                        <h3>Cindy</h3>
                    </div>
                </div>
            </section>
            <!--END SECTION OF MEET THE FAM-->

            <!--SECTION OF ABOUT MINGKAI-->
            <section id="about-myself">
                <div class="about-container">
                    <h2>About Mingkai</h2>
                    <p>Hi, I’m Mingkai! I’m a sun-loving kitty who enjoys lounging around and soaking up the rays. I’m not a fan of baths, but don’t worry—I’m not stinky! I absolutely love to eat fish and chicken, and my favorite cat food is Princess. I get a kick out of midnight zoomies and really love the toy Sarah made for me—a stick with a plastic end. I also love bringing Sarah little gifts. I’m 5 years old, born on October 30, 2019. <br> Paws and purrs make life purrfect!</p>
                </div>
            </section>
            <!--END SECTION OF ABOUT MINGKAI-->

            <!--SECTION OF MINGKAI SIMULATION -->
            <section id="carousel">
                <h4 style="margin-right: 300px; margin-left: 300px; background-color: #ffe6f3; color: #d470a4; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); text-align: center; border-radius: 10px;">♡♡ Mingkai ♡♡</h4>
                    <div class="carousel-container">
                        <button class="carousel-button prev" onclick="changeSlide(-1)">&#10094;</button>
                            <div class="carousel-slide">
            
                            <div class="carousel-content">
                                <img src="/assets/images/mkbby0.jpg" alt="Slide 1">
                                <p><b>˚ʚ♡ɞ˚ Baby Mingkai (2019) ˚ʚ♡ɞ˚: </b><br> A Glimpse into Her Early Years</p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/mkdrama.jfif" alt="Slide 2">
                                <p><b> ˚ʚ♡ɞ˚ Mingkai watching kdrama ˚ʚ♡ɞ˚ </b></p> 
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/bg.jfif" alt="Slide 3">
                                <p><b>Spay Day ˚ʚ♡ɞ˚:</b> <br> April 05 2024: Spay Neuter Project</p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/mkpotpot1.jfif" alt="Slide 4">
                                <p><b>Mingkai with Potpot˚ʚ♡ɞ˚:</b> <br>A tender moment between mother and son.</p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/cindymk.jfif" alt="Slide 5">
                                <p><b>Mingkai with Cindy ˚ʚ♡ɞ˚:</b> <br>Sharing love and happiness in every cuddle. </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/sevmk.jfif" alt="Slide 6">
                                <p><b>Mingkai with Sevenleven ˚ʚ♡ɞ˚:</b> <br>Sissy </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/mingkaiwithsnoopy.jpg" alt="Slide 7"> 
                                <p><b>Mingkai with Snoopy ˚ʚ♡ɞ˚:</b> <br>Nap time buddies </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/sleep.jfif" alt="Slide 8"> 
                                <p><b> Sleepy ˚ʚ♡ɞ˚</b> </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/sleep1.jfif" alt="Slide 9"> 
                                <p><b>Sleepy ˚ʚ♡ɞ˚</b> </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/sleep2.jfif" alt="Slide 9"> 
                                <p><b>Sleepy ˚ʚ♡ɞ˚</b> </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/sleep4.jfif" alt="Slide 9"> 
                                <p><b>Sleepy ˚ʚ♡ɞ˚</b> </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/sleep5.jfif" alt="Slide 9"> 
                                <p><b>Sleepy ˚ʚ♡ɞ˚</b> </p>
                            </div>
            
                            <div class="carousel-content">
                                <img src="/assets/images/qt.jfif" alt="Slide 9"> 
                                <p><b>Peakabooo ˚ʚ♡ɞ˚</b> </p>
                            </div>
                        </div>
                        <button class="carousel-button next" onclick="changeSlide(1)">&#10095;</button>
                    </div>
        </section>
        <!--END SECTION OF MINGKAI SIMULATION -->
        
        <!-- FOOTER -->
        <footer>
            <p>&copy; Mingkai's Life Website.</p>
        </footer>
        <!-- END OF FOOTER -->

        <!-- BACKGROUND MUSIC -->   
        <audio id="background-music" src="/css/assets/audio/Cats_sped_up.mp3" preload="auto" loop></audio>

        <!-- JAVASCRIPT for (Background Music and Show slides) -->
        <script>

            document.addEventListener('DOMContentLoaded', function() {
                var audio = document.getElementById('background-music');
                audio.play();
            });

            let slideIndex = 0;
            showSlides(slideIndex);

            function changeSlide(n) {
                showSlides(slideIndex += n);
            }

            function showSlides(n) {
                let slides = document.getElementsByClassName("carousel-content");
                if (n >= slides.length) { slideIndex = 0; }
                if (n < 0) { slideIndex = slides.length - 1; }
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex].style.display = "block";
            }
        </script>

    </body>
</html>
