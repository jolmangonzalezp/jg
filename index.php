<?php
$page = 'Inicio';
include './_header.php';
?>
<main>
    <section class="banner">
        <div class="banner_img">
            <img src="./img/photo.jpeg" alt="">
        </div>
        <div class="banner_content">
            <h1>Jolman Gonzalez</h1>
            <h2>Desarrollador Web</h2>
            <div class="banner_social_networks">
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href=""><i class="fa-brands fa-telegram"></i></a>
                <a href=""><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </section>
    <div class="go_down">
        <a href="">
            <i class="fa-solid fa-chevron-down"></i>
            <i class="fa-solid fa-chevron-down"></i>
        </a>
    </div>

    <section class="about">
        <div class="about_content">
            <div class="about_title_info">
                <h1>Acerca de mi</h1>
                <p>Soy un estudiante de segundo semestre de Desarrollo de software, en la Corporacion Bolivariana del Norte de la ciudad donde resido, tengo 27 años, oriundo de la ciudad de Santa Marta, Colombia.
                    Desde hace cinco años empecé con esta trayectoria de manera autodidacta, en donde llegue a dominar tecnologías como HTML y CSS, y que sigo en constante aprendizaje. PHP lo domino en nivel básico-intermedio, a si mismo el microframework de Flask de Python.</p>
            </div>
            <div class="about_content_img">
                <img src="./img/photo.jpeg" alt="">
            </div>
        </div>
        <div class="skills">
            <h1>Skills</h1>
            <div class="skills_content">
                <div class="skills_item">
                    <div class="skills_item_icon">
                        <i class="fa-brands fa-html5"></i>
                    </div>
                    <div class="skills_item_info">
                        <p>HTML</p>
                    </div>
                </div>
                <div class="skills_item">
                    <div class="skills_item_icon">
                        <i class="fa-brands fa-css3-alt"></i>
                    </div>
                    <div class="skills_item_info">
                        <p>CSS</p>
                    </div>
                </div>
                <div class="skills_item">
                    <div class="skills_item_icon">
                    <i class="fa-brands fa-python"></i>
                    </div>
                    <div class="skills_item_info">
                        <p>Python</p>
                    </div>
                </div>
                <div class="skills_item">
                    <div class="skills_item_icon">
                    <i class="fa-brands fa-laravel"></i>
                    </div>
                    <div class="skills_item_info">
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="skills_item">
                    <div class="skills_item_icon">
                    <i class="fa-brands fa-vuejs"></i>
                    </div>
                    <div class="skills_item_info">
                        <p>Vue</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
include './_footer.php';
?>