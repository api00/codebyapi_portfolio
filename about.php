<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png" />
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/line.css" />



    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            border-radius: 50px;
            text-align: center;
            z-index: 1000;
            overflow: hidden;
            /* Ensure content inside the icon doesn't overflow */
        }

        .my-float {
            margin: 6px;
            width: 48px;
            height: 50px;
        }

        /* Base styles */
        .navlink a {
            position: relative;
            color: inherit;
            text-decoration: none;
            padding-right: 1.7rem;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 20px;
        }

        /* Hover effect styles */
        .navlink a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            /* Adjust as needed */
            width: 0;
            height: 1px;
            background-color: #4CE09D;
            transition: width 0.3s ease-out;
        }

        .navlink a:hover {
            color: #4CE09D;

        }

        /* Hover state */
        .navlink a:hover::after {
            width: 100%;
        }


        /* Media query for tablets and mobile devices */
        @media (max-width: 768px) {
            .navlink {
                display: none;
            }
        }

        .header {
            margin-block-start: 40px;
            margin-block-end: 35px;
        }
    </style>
    <title>API ALAM | Programmer</title>
</head>

<body>
    <header class="header">
        <h2 class="visually-hidden">Header</h2>
        <div class="wrapper">
            <nav class="header__nav">
                <h2 class="visually-hidden">Navigation</h2>
                <a href="./index.php" class="header__home">
                    codebyapi
                    <span class="visually-hidden">(to home page)</span>
                </a>
                <div class="navlink ">
                    <a style="color: #4CE09D;" href="./about.php">My Story</a>
                    <a href="./coaching.php">Coaching</a>
                    <a href="./services.php">What I Offer</a>
                    <a href="./resume.php">Resume</a>
                    <a href="">Projects</a>
                </div>

                <a href="https://github.com/api00" target="_blank" class="header__social">
                    <svg xmlns="https://github.com/api00" width="25" height="24" aria-labelledby="socialGitHub" role="img">
                        <title id="socialGitHub">GitHub</title>
                        <path fill="#FFF" fill-rule="evenodd" d="M12.304 0C5.506 0 0 5.506 0 12.304c0 5.444 3.522 10.042 8.413 11.672.615.108.845-.261.845-.584 0-.292-.015-1.261-.015-2.291-3.091.569-3.891-.754-4.137-1.446-.138-.354-.738-1.446-1.261-1.738-.43-.23-1.046-.8-.016-.815.97-.015 1.661.892 1.892 1.261 1.107 1.86 2.876 1.338 3.584 1.015.107-.8.43-1.338.784-1.646-2.738-.307-5.598-1.368-5.598-6.074 0-1.338.477-2.446 1.26-3.307-.122-.308-.553-1.569.124-3.26 0 0 1.03-.323 3.383 1.26.985-.276 2.03-.415 3.076-.415 1.046 0 2.092.139 3.076.416 2.353-1.6 3.384-1.261 3.384-1.261.676 1.691.246 2.952.123 3.26.784.861 1.26 1.953 1.26 3.307 0 4.721-2.875 5.767-5.613 6.074.446.385.83 1.123.83 2.277 0 1.645-.015 2.968-.015 3.383 0 .323.231.708.846.584a12.324 12.324 0 0 0 8.382-11.672C24.607 5.506 19.101 0 12.304 0Z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/codebyapi/" target="_blank" class="header__social">
                    <svg xmlns="https://www.instagram.com/codebyapi/" width="24" height="24" aria-labelledby="socialInstagram" role="img">
                        <title id="socialInstagram">Instagram</title>
                        <path fill="#FFF" d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.428.405a4.92 4.92 0 0 1 1.769 1.141 4.92 4.92 0 0 1 1.141 1.769c.165.458.349 1.258.405 2.428.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.405 2.428a4.92 4.92 0 0 1-1.141 1.769 4.92 4.92 0 0 1-1.769 1.141c-.458.165-1.258.349-2.428.405-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.428-.405a4.92 4.92 0 0 1-1.769-1.141 4.92 4.92 0 0 1-1.141-1.769c-.165-.458-.349-1.258-.405-2.428C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.405-2.428A4.92 4.92 0 0 1 3.779 3.063a4.92 4.92 0 0 1 1.769-1.141c.458-.165 1.258-.349 2.428-.405 1.266-.058 1.646-.07 4.85-.07m0-2.163C8.736 0 8.332.014 7.052.072 5.78.13 4.802.326 3.964.692 3.156 1.043 2.439 1.563 1.782 2.22c-.657.657-1.177 1.374-1.528 2.182-.366.838-.562 1.816-.62 3.088C.014 8.332 0 8.736 0 12s.014 3.668.072 4.948c.058 1.272.254 2.25.62 3.088.351.808.871 1.525 1.528 2.182.657.657 1.374 1.177 2.182 1.528.838.366 1.816.562 3.088.62C8.332 23.986 8.736 24 12 24s3.668-.014 4.948-.072c1.272-.058 2.25-.254 3.088-.62.808-.351 1.525-.871 2.182-1.528.657-.657 1.177-1.374 1.528-2.182.366-.838.562-1.816.62-3.088.058-1.28.072-1.684.072-4.948s-.014-3.668-.072-4.948c-.058-1.272-.254-2.25-.62-3.088-.351-.808-.871-1.525-1.528-2.182-.657-.657-1.374-1.177-2.182-1.528-.838-.366-1.816-.562-3.088-.62C15.668.014 15.264 0 12 0z" />
                        <circle cx="18.406" cy="5.594" r="1.44" fill="#FFF" />
                        <path fill="#FFF" d="M12 5.838a6.162 6.162 0 1 0 6.162 6.162A6.17 6.17 0 0 0 12 5.838zm0 10.163a3.99 3.99 0 1 1 3.99-3.99 3.994 3.994 0 0 1-3.99 3.99z" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/api-alam/" target="_blank" class="header__social">
                    <svg xmlns="https://www.linkedin.com/in/api-alam/" width="25" height="24" aria-labelledby="socialLinkedIn" role="img">
                        <title id="socialLinkedIn">LinkedIn</title>
                        <path fill="#FFF" fill-rule="evenodd" d="M5.551 3.304c-1.14 0-2.067.926-2.067 2.064 0 1.14.928 2.066 2.067 2.066a2.066 2.066 0 0 0 0-4.13ZM3.767 8.998v11.453h3.562L7.33 8.998H3.767Zm5.798 0V20.45l3.554.002.002-5.668c0-1.454.253-2.941 2.132-2.941 1.851 0 1.851 1.755 1.851 3.036v5.571l3.559-.001v-6.28c0-2.834-.517-5.457-4.27-5.457-1.763 0-2.916.997-3.368 1.85h-.05V8.997h-3.41ZM22.435 24H1.982c-.976 0-1.77-.777-1.77-1.732V1.731C.212.776 1.006 0 1.982 0h20.453c.98 0 1.777.776 1.777 1.73v20.538c0 .955-.797 1.732-1.777 1.732Z" />
                    </svg>
                </a>
                <a href="https://www.facebook.com/apialamapu/" target="_blank" class="header__social">
                    <svg xmlns="https://www.facebook.com/apialamapu/" width="24" height="24" aria-labelledby="socialFacebook" role="img">
                        <title id="socialFacebook">Facebook</title>
                        <path fill="#FFF" d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24H12.82v-9.294H9.692V11.01h3.128V8.353c0-3.1 1.892-4.788 4.659-4.788 1.325 0 2.463.098 2.794.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.312h3.587l-.467 3.696h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                    </svg>
                </a>

            </nav>
        </div>
    </header>

    <main id="main">



        <div style="padding-top: 3rem; padding-bottom: 4rem;" class="resume bg-less-dark">
            <section class="wrapper">
                <section id="resume" class="resume">
                    <div class="container">
                        <div style="margin-bottom: 2.5rem;" class="section-title">
                            <h2 class="projects__headline header-xl">My Story</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-12" data-aos="fade-up">

                                <div class="resume-item">
                                    <h4>Early Childhood</h4>
                                    <p>
                                        Growing up, I was not the brightest student in the classroom. I was often found in the middle rows, striving to sit next to the top performers in hopes that their excellence might rub off on me. My hometown was a small, close-knit community where technology wasn't prevalent. Despite not having a computer, I developed a deep fascination with the stars and the universe, which sparked my interest in astronomy. This early curiosity made me ponder the depths of anything I encountered. When I finally saw a computer, I wasn’t captivated by games or its immediate functions. Instead, I was intrigued by its construction and inner workings, constantly questioning how it was built and operated. This analytical thinking became a hallmark of my early days.
                                    </p>
                                </div>

                                <div class="resume-item">
                                    <h4>Adulthood</h4>
                                    <p>
                                        Transitioning into my college years, I chose the science stream, which turned out to be a challenging period. The immense pressure from subjects like chemistry, biology, and physics was overwhelming, and I struggled to stay afloat. However, one subject, ICT (Information and Communications Technology), stood out and resonated with me. It felt philosophical, delving into computers and programming, areas that seemed to align with my intrinsic interests. Upon entering university, I pursued a degree in computer science. My first semester was a tough ride, as I failed in both physics and C++. This failure fueled my anger and determination. I delved deeper into C++ and programming, reminiscent of my childhood curiosity. Programming became an integral part of my life, and I thrived in it, securing A+ grades in all subsequent programming subjects. I graduated with a commendable GPA of 3.57/4.00.
                                    </p>
                                </div>

                                <div class="resume-item">
                                    <h4>Current Situation</h4>
                                    <p>
                                        After university, I co-founded a startup (<a target="_blank" href="https://ilearnx.live/">IlearnX.live</a>), driven by my newfound passion for creating solutions that address real-world problems. This entrepreneurial journey was a natural progression from my university projects. Today, I am thriving in my startup, constantly innovating and solving problems. Alongside this, I have ventured into coaching, teaching programming and web development to help others simplify their lives and achieve their goals.
                                    </p>
                                </div>

                                <div class="resume-item">
                                    <h4>Future Moves</h4>
                                    <p>
                                        Looking ahead, my aspirations are to scale my startup, making a significant impact in the tech industry by developing innovative solutions that improve people's lives. I aim to expand my coaching efforts, fostering a new generation of programmers who are not only skilled but also passionate about solving problems. My ultimate goal is to continue growing both professionally and personally, contributing to the tech community and making a difference in the world.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </section><img class="skills__rings" src="./assets/images/pattern-rings.svg" alt="" width="530" height="129" />
            </section>
        </div>

    </main>


    <a href="https://wa.me/+8801745815676" class="float" target="_blank">
        <img src="./assets/images/whatsapp-svgrepo-com (2).png" class="my-float" alt="WhatsApp">
    </a>

    <footer class="footer bg-less-dark">
        <h2 class="visually-hidden">Footer</h2>
        <div class="wrapper">
            <nav class="header__nav">
                <h2 class="visually-hidden">Navigation</h2>
                <a href="/index.php" class="header__home">
                    codebyapi
                    <span class="visually-hidden">(to home page)</span>
                </a>

                <a href="https://github.com/api00" target="_blank" class="header__social">
                    <svg xmlns="https://github.com/api00" width="25" height="24" aria-labelledby="socialGitHub" role="img">
                        <title id="socialGitHub">GitHub</title>
                        <path fill="#FFF" fill-rule="evenodd" d="M12.304 0C5.506 0 0 5.506 0 12.304c0 5.444 3.522 10.042 8.413 11.672.615.108.845-.261.845-.584 0-.292-.015-1.261-.015-2.291-3.091.569-3.891-.754-4.137-1.446-.138-.354-.738-1.446-1.261-1.738-.43-.23-1.046-.8-.016-.815.97-.015 1.661.892 1.892 1.261 1.107 1.86 2.876 1.338 3.584 1.015.107-.8.43-1.338.784-1.646-2.738-.307-5.598-1.368-5.598-6.074 0-1.338.477-2.446 1.26-3.307-.122-.308-.553-1.569.124-3.26 0 0 1.03-.323 3.383 1.26.985-.276 2.03-.415 3.076-.415 1.046 0 2.092.139 3.076.416 2.353-1.6 3.384-1.261 3.384-1.261.676 1.691.246 2.952.123 3.26.784.861 1.26 1.953 1.26 3.307 0 4.721-2.875 5.767-5.613 6.074.446.385.83 1.123.83 2.277 0 1.645-.015 2.968-.015 3.383 0 .323.231.708.846.584a12.324 12.324 0 0 0 8.382-11.672C24.607 5.506 19.101 0 12.304 0Z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/codebyapi/" target="_blank" class="header__social">
                    <svg xmlns="https://www.instagram.com/codebyapi/" width="24" height="24" aria-labelledby="socialInstagram" role="img">
                        <title id="socialInstagram">Instagram</title>
                        <path fill="#FFF" d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.428.405a4.92 4.92 0 0 1 1.769 1.141 4.92 4.92 0 0 1 1.141 1.769c.165.458.349 1.258.405 2.428.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.405 2.428a4.92 4.92 0 0 1-1.141 1.769 4.92 4.92 0 0 1-1.769 1.141c-.458.165-1.258.349-2.428.405-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.428-.405a4.92 4.92 0 0 1-1.769-1.141 4.92 4.92 0 0 1-1.141-1.769c-.165-.458-.349-1.258-.405-2.428C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.405-2.428A4.92 4.92 0 0 1 3.779 3.063a4.92 4.92 0 0 1 1.769-1.141c.458-.165 1.258-.349 2.428-.405 1.266-.058 1.646-.07 4.85-.07m0-2.163C8.736 0 8.332.014 7.052.072 5.78.13 4.802.326 3.964.692 3.156 1.043 2.439 1.563 1.782 2.22c-.657.657-1.177 1.374-1.528 2.182-.366.838-.562 1.816-.62 3.088C.014 8.332 0 8.736 0 12s.014 3.668.072 4.948c.058 1.272.254 2.25.62 3.088.351.808.871 1.525 1.528 2.182.657.657 1.374 1.177 2.182 1.528.838.366 1.816.562 3.088.62C8.332 23.986 8.736 24 12 24s3.668-.014 4.948-.072c1.272-.058 2.25-.254 3.088-.62.808-.351 1.525-.871 2.182-1.528.657-.657 1.177-1.374 1.528-2.182.366-.838.562-1.816.62-3.088.058-1.28.072-1.684.072-4.948s-.014-3.668-.072-4.948c-.058-1.272-.254-2.25-.62-3.088-.351-.808-.871-1.525-1.528-2.182-.657-.657-1.374-1.177-2.182-1.528-.838-.366-1.816-.562-3.088-.62C15.668.014 15.264 0 12 0z" />
                        <circle cx="18.406" cy="5.594" r="1.44" fill="#FFF" />
                        <path fill="#FFF" d="M12 5.838a6.162 6.162 0 1 0 6.162 6.162A6.17 6.17 0 0 0 12 5.838zm0 10.163a3.99 3.99 0 1 1 3.99-3.99 3.994 3.994 0 0 1-3.99 3.99z" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/api-alam/" target="_blank" class="header__social">
                    <svg xmlns="https://www.linkedin.com/in/api-alam/" width="25" height="24" aria-labelledby="socialLinkedIn" role="img">
                        <title id="socialLinkedIn">LinkedIn</title>
                        <path fill="#FFF" fill-rule="evenodd" d="M5.551 3.304c-1.14 0-2.067.926-2.067 2.064 0 1.14.928 2.066 2.067 2.066a2.066 2.066 0 0 0 0-4.13ZM3.767 8.998v11.453h3.562L7.33 8.998H3.767Zm5.798 0V20.45l3.554.002.002-5.668c0-1.454.253-2.941 2.132-2.941 1.851 0 1.851 1.755 1.851 3.036v5.571l3.559-.001v-6.28c0-2.834-.517-5.457-4.27-5.457-1.763 0-2.916.997-3.368 1.85h-.05V8.997h-3.41ZM22.435 24H1.982c-.976 0-1.77-.777-1.77-1.732V1.731C.212.776 1.006 0 1.982 0h20.453c.98 0 1.777.776 1.777 1.73v20.538c0 .955-.797 1.732-1.777 1.732Z" />
                    </svg>
                </a>
                <a href="https://www.facebook.com/apialamapu/" target="_blank" class="header__social">
                    <svg xmlns="https://www.facebook.com/apialamapu/" width="24" height="24" aria-labelledby="socialFacebook" role="img">
                        <title id="socialFacebook">Facebook</title>
                        <path fill="#FFF" d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24H12.82v-9.294H9.692V11.01h3.128V8.353c0-3.1 1.892-4.788 4.659-4.788 1.325 0 2.463.098 2.794.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.312h3.587l-.467 3.696h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                    </svg>
                </a>
            </nav>
        </div>
    </footer>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</body>

</html>