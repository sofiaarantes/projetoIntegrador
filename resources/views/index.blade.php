<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Prevenção Inteligente</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" type="text/css">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet" type="text/css">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Prevenção Inteligente</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Página Inicial</a></li>
                    <li><a class="nav-link scrollto" href="#metodos">Métodos</a></li>
                    <li><a class="nav-link scrollto" href="#quiz">Quiz</a></li>
                    <li><a class="nav-link scrollto" href="#saiba">Saiba Mais</a></li>
                    <li><a class="getstarted scrollto" href="#app">App</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Prevenção Inteligente</h1>
                    <h2>Segurança e tranquilidade em suas escolhas contraceptivas, guiamos você por uma jornada informada e consciente.</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="metodos" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Métodos Contraceptivos</h2>
                    <p>Métodos contraceptivos são técnicas ou dispositivos usados para prevenir a gravidez. Eles funcionam de várias maneiras, como prevenir a ovulação, bloquear o esperma ou alterar o revestimento do útero. <br> Saiba mais sobre eles aqui
                        conosco.
                    </p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a class="nav-link scrollto" href="{{ url('/metodos-barreira') }}">Métodos de Barreira</a></h4>
                            <p>Preservativo masculino e feminino, e diafragma.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a class="nav-link scrollto" href="{{ url('/metodos-hormonais') }}">Métodos hormonais</a></h4>
                            <p>Anticoncepcionais em pílula e injetáveis, implantes e pílula do dia seguinte.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a class="nav-link scrollto" href="{{ url('/metodos-intrauterinos') }}">Método intrauterino</a></h4>
                            <p>DIU</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a class="nav-link scrollto" href="{{ url('/metodos-definitivos') }}">Métodos definitivos</a></h4>
                            <p>laqueadura e vasectomia.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="ranking" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="img/skills.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Métodos com maior eficácia no mercado</h3>
                        <p class="fst-italic">
                            Para saber mais sobre métodos, clique <a href="#metodos">aqui.</a>
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">Implanon <i class="val">99,95%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="99.5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Vasectomia<i class="val">99,9%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Diu com Hormônios  <i class="val">99,8%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Injeção, pílula e anel vaginal<i class="val">99,7%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Cta Section ======= -->
        <section id="quiz" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Em dúvida sobre qual método é o mais adequado para você?</h3>
                        <p> Faça o nosso quiz e descubra!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ url('/quiz') }}">Faça o quiz!</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="saiba" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Saiba Mais</h2>
                    <p>Se informe conosco!</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-bemEstar">Saúde e Bem-Estar</li>
                    <li data-filter=".filter-saudeIntima">Saúde Íntima</li>
                    <li data-filter=".filter-outros">Outros</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-1.png" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Humor e Autoestima</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-1')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Alimentação Saudável</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-2')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Como se Estressar Menos</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-3')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Esportes e atividade física: por onde começar</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-4')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Bons Hábitos para Dormir Melhor</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-5')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Como Lidar com Mudanças no Corpo</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-6')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>A Importância da Autoaceitação na Saúde Mental</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-7')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Práticas para Reduzir a Ansiedade</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-8')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-bemEstar">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Como Lidar com a Pressão Social</h4>
                            <p>Saúde e Bem-Estar</p>
                            <a href="{{ url('/artigo-9')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

            <!-- ====== Saúde Íntima ======-->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-10.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Secreção Vaginal</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-10')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-11.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Bolinhas na Região Vaginal</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-11')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-12.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Guia Completo de Cuidados com a Saúde Íntima</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-12')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-13.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Prevenção de Infecções Vaginais: Dicas Essenciais</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-13')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-14.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Guia Rápido sobre Infecções Sexualmente Transmissíveis (ISTs)</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-14')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-15.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Como Escolher os Produtos Íntimos Certos</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-15')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-16.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Entendendo o Ciclo Menstrual e Seus Efeitos</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-16')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-17.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>A Importância das Consultas Ginecológicas Regulares</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-17')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-saudeIntima">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-18.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Dicas para Manter o Equilíbrio do pH Vaginal</h4>
                            <p>Saúde Íntima</p>
                            <a href="{{ url('/artigo-18')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                <!-- ====== Outros ======-->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-19.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Planejamento Familiar: Métodos e Escolhas</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-19')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-20.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Construindo Relações Saudáveis</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-20')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-21.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Dicas para o Equilíbrio entre Vida Pessoal e Profissional</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-21')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-22.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>A Importância do Autocuidado</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-22')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-23.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Explorando Novos Hobbies e Paixões</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-23')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-24.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Como Lidar com Críticas</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-24')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-25.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Crescimento Pessoal e Desenvolvimento de Carreira</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-25')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-26.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Entendendo e Superando a Procrastinação</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-26')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-outros">
                        <div class="portfolio-img"><img src="img/portfolio/portfolio-27.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Educação Financeira para Mulheres: Dicas Práticas</h4>
                            <p>Outros</p>
                            <a href="{{ url('/artigo-27')}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="app" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Baixe nosso app!!</h2>
                    <p>Gostou da página? Então venha conhecer o nosso app!</p>
                    <a href="#about" class="btn-get-started scrollto">Link Play Store</a>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Prevenção Inteligente</h3>
                        <p>
                            Trabalho integrador realizado no Instituto Federal de Minas Gerais <br> Campus Formiga - 2024. <br><br> Desenvolvido pela estudante Sofia Arantes da Mata.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Página Inicial</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#metodos">Métodos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#quiz">Quiz</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#saiba">Saiba Mais</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#app">App</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>