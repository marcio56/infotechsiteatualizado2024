<?php
$selected_action = 'list-all';
require_once 'app/routes.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infotech Sistemas | Cursos Online & Gerenciamento Estudantil</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/images/logo/Favicon.svg" type="image/x-icon">

    <!-- fonts link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&display=swap" rel="stylesheet">
    <link -rel="manifest" href="manifest.json">
    <!-- css  -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Infotech Sistemas</title>

    <script>
        if (typeof navigator.serviceworker !== 'undefine') {
            navigator.serviceworker.register('pwabuilder-sw.js')
        }
    </script>
</head>

<body>
    <div id="preloadder">

    </div>
    <header class="header" id="header">
        <div class="logo">
            <img src="public/images/logo/logo.svg" alt="">
        </div>
        <div class="menu-hamburger" id="toggle">

        </div>
        <nav class="navbar" id="navbar">
            <ul class="navbar-list" id="primary-navbar" data-visiable="false">
                <li><a href="#banner" class="navbar-links">Inicio</a></li>
                <li><a href="/mural/index.html" class="navbar-links">Mural</a></li>
                <li><a href="/biblioteca/index.html" class="navbar-links">Biblioteca</a></li>
                <li><a href="/portilofio/index.html" class="navbar-links">Portifolio</a></li>
                <li><a href="app/views/auth/login.php" class="btn btn-get-courses"><span>Acessar</span></a></li>
            </ul>
        </nav>
    </header>
    <main>

        <!-- --------------------------------
            banner section 
        -------------------------------- -->
        <section class="banner column-4" id="banner">
            <div class="text-area">
                <div class="text-part">
                    <h1>Problemas de <span>INFORMAÇÕES?</span> Infotech Sistemas é a Solução!</h1>
                    <p>Obtenha certificação credenciada pela escola além de está inteirado sobre tudo que acontece.</p>
                </div>
                <div class="button-group">
                    <a href="/tabelacursos/courses.html" class="btn btn-start-course">Cursos</a>
                </div>
            </div>
            <div class="image-area">
                <img src="public/images/causal.png" alt="">
                <!-- <img src="public/images/ba1.png" alt=""> -->
                <div class="circle"></div>
                <a href="/professor/professor.html" class="info info-expert">
                    <ion-icon name="people-circle-outline"></ion-icon><span>Professores
                        </span>
                </a>
                <a href="/live/index.html" class="info info-live">
                    <ion-icon name="videocam-outline"></ion-icon><span>Aulas ao Vivo</span>
                </a>
                <a href="/papo/papo.html" class="info info-chat">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon><span>Bate Papo</span>
                </a>
            </div>

        </section>
        <!-- -------------------------------- -->
        <!-- features section  -->
        <!-- -------------------------------- -->

        <section class="features" id="features">
            <div class="custom-shape-divider-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <div class="main-container column-2">
                <div class="text-part">
                    <h1>Video aulas de qualidade, aulas ao vivo e muito +!.</h1>
                    <p>Moldamos um website que será capaz de sanar as dificuldade dos alunos em conseguir as informações
                        fornecidas pela escola
                        através de cursos grátis e gerenciamento das informações fornecidas.</p>
                    <div class="feature-card column-2">
                        <div class="card card1">
                            <ion-icon name="person-sharp"></ion-icon>
                            <h3>Mural</h3>
                            <p>Aqui o aluno terá todas as infomações concernentes á seu respeito e de suas tarefas.
                            </p>
                        </div>
                        <div class="card card2">
                            <ion-icon name="timer-sharp"></ion-icon>
                            <h3>Biblioteca</h3>
                            <p>O maior acervo de livros a disposição do aluno.
                            </p>
                        </div>
                        <div class="card card3">
                            <ion-icon name="bookmark-sharp"></ion-icon>
                            <h3>Portifolio</h3>
                            <p>Aqui o estudante terá uma compilação das suas competências profissionais das quais é gabaritado e poderá fazer download.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="image-part">
                    <div class="overlay-text">
                        <h1>
                            Porque<br />Nós<br />Escolher?
                        </h1>
                    </div>
                    <div class="overlay-color"></div>
                </div>
            </div>
        </section>
        <!-- -------------------------------- -->
        <!-- courses  -->
        <!-- -------------------------------- -->

        <section id="courses" class="courses">
            <div class="text-part">
                <h1>Cursos Adcionados</h1>
                <div class="overlay-text">
                    <h2>CURSOS</h2>
                </div>
                <hr class="line">
            </div>
            <div class="main-container">
                <!-- card 1 -->
                <?php foreach ($courses as $course) { ?>
                    <div class="card">
                        <div class="card_info">
                            <div class="card_info_text">
                                <a href="#"><?= $course['name'] ?></a>
                            </div>
                            <div class="card-text">
                                <?= $course['description'] ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
            </div>


        <section id="expert" class="expert">
            <div class="circle blur-neon expert_circle"></div>
            <div class="expert_text">
                <h1>Conheça nossos profissionais especialistas</h1>
            </div>
            <div class="expert_main">
                <!-- card-1  -->
                <div class="card card-1">
                    <div class="card_image">
                        <div class="overlay-gradient"></div>
                        <img src="https://images.unsplash.com/photo-1688073759576-2969254e13cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="Alex Suprun">
                    </div>
                    <div class="card_name">
                        <h1>João Paulo</h1>
                    </div>
                    <div class="card_job">
                        <p>Desenvolvedor</p>
                    </div>
                    <div class="card_social">
                        <a href="#">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card card-2">
                    <div class="card_image">
                        <div class="overlay-gradient"></div>
                        <img src="https://images.unsplash.com/photo-1688073945482-866fa1784672?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=718&q=80" alt="Julian Wan">
                    </div>
                    <div class="card_name">
                        <h1>Marcio Champola</h1>
                    </div>
                    <div class="card_job">
                        <p>Desenvolvedor Chefe</p>
                    </div>
                    <div class="card_social">
                        <a href="https://www.linkedin.com/feed/?trk=onboarding-landing">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                        <a href="https://github.com/">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                        <a href="https://twitter.com/a81681207">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="card card-3">
                    <div class="card_image">
                        <div class="overlay-gradient"></div>
                        <img src="https://images.unsplash.com/photo-1699294876944-910eca21318d?q=80&w=1946&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Romina Farías">
                    </div>
                    <div class="card_name">
                        <h1>Müller Costa</h1>
                    </div>
                    <div class="card_job">
                        <p>Desenvolvedor</p>
                    </div>
                    <div class="card_social">
                        <a href="#">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                        <a href="#">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lowerpart">

                <button class="btn btn-viewall">
                    Ver Tudo
                </button>
            </div>
        </section>

        <!-- -------------------------------- -->
        <!-- about section  -->
        <!-- -------------------------------- -->

        <section class="about" id="about">
            <div class="about_content">
                <div class="text">
                    <h2>Mais Sobre Nós</h1>
                        <p>A Infotech é um site de cursos online que prioriza a prática sobre a teoria, Além de dispor de
                            gerenciamento de notas e lembretes,
                            fornece aos estudantes as melhores ferramentas para guiar os alunos e mentores nas tarefas
                            escolares e cursos.
                        </p>
                        <h1>Sobre</h1>
                </div>
                <div class="image">

                    <img src="https://images.unsplash.com/photo-1688159354415-781b775ddd27?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" alt="">
                </div>
            </div>
            <div class="about_stats">
                <div class="card card-1">
                    <h1>8000</h1>
                    <p>Estudantes</p>
                </div>
                <div class="card card-1">
                    <h1>6</h1>
                    <p>Mentores</p>
                </div>
                <div class="card card-1">
                    <h1>5</h1>
                    <p>Cursos</p>
                </div>
                <div class="card card-1">
                    <h1>1</h1>
                    <p>Região</p>
                </div>
            </div>
        </section>

        <!-- -------------------------------- -->
        <!-- feedback -->
        <!-- -------------------------------- -->
        <section class="faq" id="faq">
            <div class="faq_text">
                <h1>FAQ</h1>
                <hr class="line">
            </div>
            <div class="faq_main">
                <div class="accordian">
                    <div class="accordian_item">
                        <a href="#q1" class="link">
                            <p>Quem deve fazer um curso online?</p>
                            <ion-icon class="down" name="caret-down-outline"></ion-icon>
                            <ion-icon class="up" name="caret-up-outline"></ion-icon>
                        </a>
                        <div class="answer">
                            <p>
                                Os alunos participam de nossos cursos on-line por uma variedade de razões e vêm de
                                diversas origens, profissões, idades e grupos.
                                Com cursos online, você pode desenvolver seu conjunto de habilidades ou começar
                                uma mudança de carreira. dê o próximo passo em sua educação formal. Facilite a transição
                                Antes de entrar em um programa acadêmico em tempo integral. Aproveite para aprender um
                                novo tópico. Seja qual for o motivo, nossos cursos online são uma maneira
                                Flexível de aprender sobre a arte do mundo sem atrapalhar o seu dia a dia.

                            </p>
                        </div>
                    </div>
                    <div class="accordian_item">
                        <a href="#q2" class="link">
                            <p>Existe algum requisito para participar?</p>
                            <ion-icon class="down" name="caret-down-outline"></ion-icon>
                            <ion-icon class="up" name="caret-up-outline"></ion-icon>
                        </a>
                        <div class="answer">
                            <p>
                                Não há requisito. Os cursos são voltados para qualquer pessoa interessada e maiores de
                                18 anos de idade.

                            </p>
                        </div>
                    </div>
                    <div class="accordian_item">
                        <a href="#q3" class="link">
                            <p>Posso fazer mais de um curso?</p>
                            <ion-icon class="down" name="caret-down-outline"></ion-icon>
                            <ion-icon class="up" name="caret-up-outline"></ion-icon>
                        </a>
                        <div class="answer">
                            <p>
                                Se você é novo no aprendizado on-line, recomendamos que você comece com um curso.
                            </p>
                        </div>
                    </div>
                    <div class="accordian_item">
                        <a href="#q4" class="link">
                            <p>Os lembretes podem ser acessados offline?</p>
                            <ion-icon class="down" name="caret-down-outline"></ion-icon>
                            <ion-icon class="up" name="caret-up-outline"></ion-icon>
                        </a>
                        <div class="answer">
                            <p>
                                Sim!, nosso sistema poderá ser acessado sem internet. bastar o aluno está logado.

                            </p>
                        </div>
                    </div>
                    <div class="accordian_item" id="#q5">
                        <a href="#q5" class="link">
                            <p>As notas poderam ser compartilhadas com outros alunos?</p>
                            <ion-icon class="down" name="caret-down-outline"></ion-icon>
                            <ion-icon class="up" name="caret-up-outline"></ion-icon>
                        </a>
                        <div class="answer">
                            <p>
                                Sim!, os alunos poderam compartilhar suas notas com outras unidades ETEs do estado.

                            </p>
                        </div>
                    </div>
                    <div class="accordian_item">
                        <a href="#q6" class="link">
                            <p>Poderei interagir com outros alunos de outras escolas?</p>
                            <ion-icon class="down" name="caret-down-outline"></ion-icon>
                            <ion-icon class="up" name="caret-up-outline"></ion-icon>
                        </a>
                        <div class="answer">
                            <p>
                                Claro!, além das videaulas em tempo real, os estudantes poderam se conectar com outros
                                – menbros de escolas
                                diferentes!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------------------------------- -->
        <!-- contact -->
        <!-- -------------------------------- -->
        <section class="contact" id="contact">
            <div class="contact_text">
                <h1>Contato</h1>
            </div>
            <div class="contact_main">
                <div class="input">
                    <form action="contact">
                        <div class="name">
                            <label for="username">Nome</label>
                            <input type="text" placeholder="Pietra Maria" id="username">
                        </div>
                        <div class="email">
                            <label for="useremail">Email</label>
                            <input type="email" placeholder="Pietra@gmail.com" id="useremail">
                        </div>
                        <div class="textarea">
                            <label for="usertext">Mensagem</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="submit">
                            <button class="button-86">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="details">
                    <div class="details_text">
                        <h1>Entre em contato</h1>
                        <p>20 alunos aprendem diariamente com conosco. Inscreva-se para receber novas atualizações.</p>
                    </div>
                    <ul>
                        <li>
                            <p>81 99784-1403</p>
                            <a href="https://api.whatsapp.com/send/?phone=5581997841403&text&type=phone_number&app_absent=0">
                                <ion-icon name="call"></ion-icon>

                        </li>
                        <li>
                            <p>info@tech.com</p>
                            <ion-icon name="mail"></ion-icon>
                        </li>
                        <li>
                            <p>Santo amaro, recife</p>
                            <a href="https://aprimoramente.com/info/escola-tecnica-estadual-ginasio-pernambucano/562441">
                                <ion-icon name="location"></ion-icon>
                        </li>
                    </ul>
                    <div class="social">
                        <div class="box">
                            <a href="#">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </div>
                        <div class="box">
                            <a href="#">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </div>
                        <div class="box">
                            <a href="#">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                        <div class="box">
                            <a href="#">
                                <ion-icon name="logo-github"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -------------------------------- -->
        <!-- subscribe -->
        <div class="subscribe">
            <div class="text">
                <h1>Se inscreva</h1>
                <p>Para o nosso boletim informativo por e-mail</p>
            </div>
            <div class="input">
                <input type="email" placeholder="marcio@gmail.com" name="subscribe_email" class="input_email">
                <button type="submit" class="btn">Enviar</button>
            </div>
        </div>

    </main>
    <footer class="footer" id="footer">
        <div class="footer_main">
            <div class="logo">
                <img src="public/images/logo/logo.svg" alt="Webook logo">
                <p>Obtenha certificação credenciada pelo setor e avance nossos cursos on-line de alta qualidade.</p>
            </div>
            <div class="company">
                <h1>
                    Companhia
                </h1>
                <ul>
                    <li>
                        <a href="https://infotechsistemasbymestrechampoleiro.netlify.app/">Sobre</a>
                    </li>
                    <li>
                        <a href="#">Sustentabilidade</a>
                    </li>
                    <li>
                        <a href="#">Termos de serviço</a>
                    </li>
                    <li>
                        <a href="#">Política de privacidade</a>
                    </li>
                </ul>
            </div>
            <div class="resources">
                <h1>
                    Ferramentas
                </h1>
                <ul>
                    <li>
                        <a href="/mural/index.html">Mural</a>
                    </li>
                    <li>
                        <a href="/biblioteca/index.html">Biblioteca</a>
                    </li>
                    <li>
                        <a href="/portilofio/index.html">Portifolio</a>
                    </li>
                    <li>
                        <a href="#">Feedback</a>
                    </li>
                </ul>
            </div>
            <div class="quick">
                <h1>
                    +Infotech
                </h1>
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <h1>2023 <span>©</span> Copyright <span>Infotech Sistemas</span> Idealizado por <a href="https://github.com/SM8UTI">Marcio/João/Matheus & Müller 😃</a>
            </h1>
        </div>
    </footer>
    <script src="public/js/script.js" defer></script>
</body>

</html>