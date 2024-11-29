<!-- Desenvolvido por: Marcio Tascheck -->
<!-- Data Dev: 25/11/2024 -->
<!-- E-mail: marciotascheck8@gmail.com -->

<!DOCTYPE html> <!-- Iniciando o script .php como um html -->
<html lang="pt-br">
<head> <!-- Inicia a sessão de cabeçalho do site-->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Doces Encanto</title> <!-- Nome da página (aba) -->
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Definições gerais de formatação-->
  <link href="assets/img/favicon.png" rel="icon"><!-- Ícone da página (aba) -->
  <!-- Fontes Utilizadas -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy:wght@400&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files (garantem a compatilbilidade do CSS em diferentes navegadores-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Localização do arquivo CSS principal -->
  <link href="assets/css/main.css" rel="stylesheet">
</head> <!-- encerra o cabeçalho da página-->

<body class="index-page"><!-- Inicia o corpo do site com um container na parte superior do site -->
  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-end justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-phone d-flex align-items-center d-none d-lg-block"><span>+55 49 3566-0101</span></i>
          <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Segundas à Sábados: 11:00 - 23:00</span></i>
        </div>
        <a href="#book-a-table" class="cta-btn">Reservas</a>
      </div>
    </div><!-- Encerra o container superior do site -->
    
    <div class="container"><!-- Inicia um novo container para posicionamento do menu fixado no topo da página -->
      <h1>Contato</h1>
      <div class="branding d-flex align-items-cente">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Se optar por usar uma imagem como logo ao invés de uma escrita, basta descomentar a linha abaixo e alterar o caminho para onde a imagem se encontra -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Doces Encanto</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Inicio</a></li>
            <li><a href="#about">Sobre Nós</a></li>
            <li><a href="#menu">Nossos Produtos</a></li>
            <li><a href="#contact">Contato</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header><!-- Encerra o container para o menu no topo do site -->

  <main class="main"><!-- Inicia o bloco principal da página-->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="carousel-container">
            <h2><span>Doces</span> Encanto</h2>
            <p>Doces Encanto: o sabor que derrete corações!</p>
            <div>
              <a href="#menu" class="btn-get-started">Nosso Cardápio</a>
              <a href="#book-a-table" class="btn-get-started">Fale Conosco</a>
            </div>
          </div>
        </div><!-- Finaliza a apresentação do primeiro slide -->
        <div class="carousel-item"><!-- Inicia a apresentação do segundo slide -->
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2><span>Doces</span> Encanto</h2>
            <p>Onde cada pedaço é feito com doçura e amor: a melhor fábrica de doces está aqui!</p>
            <div>
              <a href="#menu" class="btn-get-started">Nosso Cardápio</a>
              <a href="#book-a-table" class="btn-get-started">Fale Conosco</a>
            </div>
          </div>
        </div><!-- Finaliza a apresentação do segundo slide -->
        <div class="carousel-item"><!-- Inicia a apresentação do terceiro slide -->
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <h2><span>Doces</span> Encanto</h2>
            <p>Muito mais que doces, criamos momentos de felicidade.</p>
            <div>
              <a href="#menu" class="btn-get-started">Nosso Cardápio</a>
              <a href="#book-a-table" class="btn-get-started">Fale Conosco</a>
            </div>
          </div>
        </div><!-- Finaliza a apresentação do terceiro slide -->
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        <ol class="carousel-indicators"></ol>
      </div>
    </section><!-- Finaliza a sessão de apresentação de slides da parte inicial da página -->
    
    <section id="about" class="about section light-background"><!-- Inicia a sessão Sobre a empresa -->
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/54eHmcri6b4?si=3uXB8EzMPZ9an-ac" class="glightbox pulsating-play-btn"></a> <!-- Cria uma caixa para um vídeo que será reproduzido em uma poup-up linkando para o YouTube -->
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>O que faz de nossos produtos uma obra de arte.</h3>
            <p class="fst-italic">
              <br><br>
              Entrar em nossa confeitaria é como adentrar uma galeria de arte, onde cada doce é uma obra prima. Aqui, o açúcar é a tinta, e as mãos habilidosas de nossos confeiteiros, os pincéis que transformam ingredientes simples em verdadeiras esculturas de sabor.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Design Inovador</span></li><!-- Texto escrito no formato de tópico definido pelo css -->
              <li><i class="bi bi-check2-all"></i> <span>Ingredientes Selecionados</span></li><!-- Texto escrito no formato de tópico definido pelo css -->
              <li><i class="bi bi-check2-all"></i> <span>Personalização Completa</span></li><!-- Texto escrito no formato de tópico definido pelo css -->
            </ul>
            <p>
              Nossa confeitaria é mais do que um lugar para saborear doces; é um espaço onde a criatividade se encontra com o sabor, resultando em momentos inesquecíveis. Cada doce é um presente para os olhos e uma explosão de sabor para o paladar. Venha se encantar!
            </p>
          </div>
        </div>
      </div>
    </section><!-- Finaliza a sessão Sobre a empresa -->
        
    <section id="why-us" class="why-us section"><!-- Inicia o bloco de sessão Porque escolher essa empresa -->
      <div class="container section-title" data-aos="fade-up"><!-- Título da sessão -->
        <h2>Porque Nós</h2>
        <div><span>Porque escolher</span> <span class="description-title">Nossa Confeitaria</span></div>
      </div><!-- Fecha espaço para o título -->
      <div class="container"><!-- Inicia um bloco para adição de caixas de texto em formato de cartões -->
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100"><!-- Cria a primeira caixa -->
            <div class="card-item">
              <span>01</span>
              <h4><a class="stretched-link">Design Inovador</a></h4>
              <p>Cada doce é criado com um olhar minucioso para os detalhes, explorando formas, cores e texturas que encantam à primeira vista.</p>
            </div>
          </div><!-- Finaliza a primeira caixa -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200"><!-- Cria a segunda caixa -->
            <div class="card-item">
              <span>02</span>
              <h4><a class="stretched-link">Ingredientes Selecionados</a></h4>
              <p>Utilizamos apenas os melhores ingredientes, valorizando sabores naturais e frescos.</p>
            </div>
          </div><!-- Finaliza a segunda caixa  -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300"> <!-- Cria a terceira caixa -->
            <div class="card-item">
              <span>03</span>
              <h4><a class="stretched-link">Personalização Completa</a></h4>
              <p>Transformamos ideias em realidade, criando doces exclusivos para cada cliente.</p>
            </div>
          </div><!-- Finaliza a terceira caixa  -->
        </div>
      </div>
    </section><!-- Finaliza o bloco de sessão Porque escolher essa empresa -->
    
    <section id="menu" class="menu section"><!-- Cria o espaço para o menu/cardápio -->
      <div class="container section-title" data-aos="fade-up"><!-- Titulo do espaço -->
        <h2>Cardápio</h2>
        <div><span>Conheça nosso</span> <span class="description-title">Menu</span></div>
      </div><!-- Fim do espaço para o título -->
      <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order"><!-- Função para criar categorias para os produtos que aparecerão no cardápio -->
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul class="menu-filters isotope-filters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-starters">Chocolate</li>
              <li data-filter=".filter-salads">Caramelizados</li>
              <li data-filter=".filter-specialty">Frutados</li>
            </ul>
          </div>
        </div><!-- Finaliza a criação das categoruas para o cardápio -->
        <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200"><!-- Cria espaço para exibição do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-starters"><!-- Inserção do primeiro ítem do cardápio -->
            <img src="assets/img/menu/pincel_chocolate.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pincel de Chocolate</a><span>R$5.95</span>
            </div>
            <div class="menu-ingredients">
              Uma barra de chocolate decorada com traços coloridos de sabores diversos.
            </div>
          </div><!-- Finaliza o primeiro ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-specialty"><!-- Inserção do segundo ítem do cardápio -->
            <img src="assets/img/menu/esfera_encantada.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Esfera Encantada</a><span>R$6.95</span>
            </div>
            <div class="menu-ingredients">
              Um doce redondo recheado com camadas surpreendentes e cobertura brilhante.
            </div>
          </div><!-- Finaliza o segundo ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-starters"><!-- Inserção do terceiro ítem do cardápio -->
            <img src="assets/img/menu/paleta_sabores.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Paleta dos Sabores</a><span>R$7.95</span>
            </div>
            <div class="menu-ingredients">
              Um sortimento de mini doces decorados como uma paleta de pintor.
            </div>
          </div><!-- Finaliza o terceiro ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-salads"><!-- Inserção do quarto ítem do cardápio -->
            <img src="assets/img/menu/gota_arte.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Gota de Arte</a><span>R$8.95</span>
            </div>
            <div class="menu-ingredients">
              Um doce pequeno e elegante em formato de gota, com recheio cremoso.
            </div>
          </div><!-- Finaliza o quarto ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-specialty"><!-- Inserção do quinto ítem do cardápio -->
            <img src="assets/img/menu/doce_harmonia.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Doce Harmonia</a><span>R$9.95</span>
            </div>
            <div class="menu-ingredients">
              Uma combinação de texturas em um doce que parece uma obra musical.
            </div>
          </div><!-- Finaliza o quinto ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-starters"><!-- Inserção do sexto ítem do cardápio -->
            <img src="assets/img/menu/bolo_impressionista.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bolo Impressionista</a><span>R$4.95</span>
            </div>
            <div class="menu-ingredients">
              Um bolo decorado com padrões que lembram pinceladas artísticas.
            </div>
          </div><!-- Finaliza o sexto ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-salads"><!-- Inserção do sétimo ítem do cardápio -->
            <img src="assets/img/menu/coracao_aquarela.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Coração de Aquarela</a><span>R$9.95</span>
            </div>
            <div class="menu-ingredients">
              Um doce delicado, colorido como uma pintura em aquarela.
            </div>
          </div><!-- Finaliza o sétimo ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-salads"><!-- Inserção do oitavo ítem do cardápio -->
            <img src="assets/img/menu/escultura_doce.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Escultura Doce</a><span>R$9.95</span>
            </div>
            <div class="menu-ingredients">
              Um bombom artesanal com detalhes tridimensionais.
            </div>
          </div><!-- Finaliza o oitavo ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-salads"><!-- Inserção do nono ítem do cardápio -->
            <img src="assets/img/menu/galeria_caramelo.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Galeria de Caramelo</a><span>R$12.95</span>
            </div>
            <div class="menu-ingredients">
              Uma sobremesa com camadas de caramelo e crocantes decorados como joias.
            </div>
          </div><!-- Finaliza o nono ítem do cardápio -->
          <div class="col-lg-6 menu-item isotope-item filter-specialty"><!-- Inserção do décimo ítem do cardápio -->
            <img src="assets/img/menu/tela_frutas.webp" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Tela de Frutas</a><span>R$12.95</span>
            </div>
            <div class="menu-ingredients">
              Um doce fresco com frutas e coberturas dispostas como em uma tela de arte.
            </div>
          </div><<!-- Finaliza o décimo ítem do cardápio -->
        </div><!-- Finaliza a função que cria categorias para os produtos que aparecerão no cardápioo -->
      </div><!-- Finaliza o espaço de exibição do cardápio -->
    </section><!-- Finaliza o espaço do menu/cardápio -->
    
    <section id="specials" class="specials section"><!-- Espaço para o cardápio de pratos especiais -->
      <div class="container section-title" data-aos="fade-up"><!-- Título da sesão -->
        <h2>Especiais</h2>
        <div><span>Confira nosso Menu</span> <span class="description-title">Especial</span></div>
      </div><!-- Finaliza o espaço para o título -->
      <div class="container" data-aos="fade-up" data-aos-delay="100"><!-- Cria box para pratos especiais -->
        <div class="row">
          <div class="col-lg-3"><!-- Cria a coluna para inserir os nomes dos pratos especiais -->
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Flor de Açúcar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Museu de Sabores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Cristal de Mel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Sonho Marmorizado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">Aurora Doce</a>
              </li>
            </ul>
          </div><!-- Finaliza a coluna que insere os nomes dos pratos especiais -->
          <div class="col-lg-9 mt-4 mt-lg-0"> <!-- Cria a coluna para inserir as descrições do prato selecionado -->
            <div class="tab-content">
              <div class="tab-pane active show" id="specials-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Flor de Açúcar</h3>
                    <p class="fst-italic">A Flor de Açúcar é um doce que encanta pela beleza e pelo sabor. Moldada artesanalmente em formato de flor, cada pétala é criada com precisão e decorada com delicados toques de brilho. Por fora, uma fina camada de açúcar levemente crocante se destaca pelo visual encantador, enquanto o recheio interno, macio e cremoso, surpreende com um sabor harmonioso que derrete na boca. Disponível em diferentes combinações de cores e sabores, como baunilha com frutas vermelhas ou pistache com chocolate branco, este doce é uma verdadeira obra de arte comestível.
                    Mais do que um doce, a Flor de Açúcar é uma experiência sensorial. Seu design sofisticado a torna ideal para eventos especiais, como casamentos, aniversários e festas elegantes, onde cada detalhe importa. Uma criação perfeita para quem valoriza o sabor refinado e a estética impecável.</p>
                    </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/flordeacucar.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Museu de Sabores</h3>
                    <p class="fst-italic">O Museu de Sabores é uma coleção exclusiva de doces finos, cada um inspirado em uma obra de arte famosa. Pequenas esculturas de chocolate, caramelos artisticamente pintados e bombons com padrões únicos compõem essa seleção, que une estética sofisticada e sabor inesquecível. Cada peça é cuidadosamente elaborada para ser uma celebração visual e gustativa, tornando-se um verdadeiro presente para os sentidos.
                    Ideal para quem aprecia a fusão entre arte e confeitaria, o Museu de Sabores transforma qualquer evento em um momento de sofisticação. Seja para presentear alguém especial ou para compor uma mesa temática, esses doces são a escolha perfeita para impressionar. Combinando criatividade e ingredientes selecionados, cada mordida é uma viagem ao universo artístico traduzida em açúcar e textura.
                    </p>
                    </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/museudossabores.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cristal de Mel</h3>
                    <p class="fst-italic">O Cristal de Mel é um doce que encanta pela simplicidade sofisticada e pelo brilho hipnotizante. Com um exterior translúcido, que lembra um cristal lapidado, ele é adoçado com o toque natural do mel e decorado com pequenas partículas douradas. Seu interior guarda um recheio suave e aromático, que combina perfeitamente com o leve crocante da camada externa.
                    Este doce é perfeito para quem aprecia elegância em cada detalhe. Seja como parte de um café da tarde especial ou como um mimo refinado em eventos, o Cristal de Mel adiciona um toque de charme e exclusividade. Cada mordida é uma fusão de texturas e sabores, criando uma experiência doce e memorável.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/cristaldemel.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sonho Marmorizado</h3>
                    <p class="fst-italic">O Sonho Marmorizado é um doce que impressiona pela aparência única e sofisticada. Sua cobertura marmorizada combina cores e texturas em um efeito visual encantador, como se cada peça fosse uma pedra preciosa lapidada. O interior é igualmente requintado, com camadas que mesclam sabores clássicos como chocolate amargo, creme de avelã ou frutas tropicais.
                    Ideal para eventos sofisticados ou para presentear alguém especial, o Sonho Marmorizado é uma verdadeira joia da confeitaria. Seu visual refinado o torna a peça central de qualquer mesa, enquanto o sabor delicado conquista todos os paladares. Uma combinação perfeita de arte e sabor, pronta para transformar qualquer ocasião em algo extraordinário.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/sonhomarmorizado.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Aurora Doce</h3>
                    <p class="fst-italic">A Aurora Doce é um doce que traz a magia das cores do amanhecer para a confeitaria. Com uma cobertura em degradê que vai do rosa ao dourado, ele é uma obra de arte que surpreende antes mesmo da primeira mordida. O recheio combina sabores suaves e harmoniosos, como baunilha, maracujá ou mousse de limão, que encantam tanto o paladar quanto o olfato.
                    Esse doce é perfeito para celebrações que pedem um toque de delicadeza e beleza. Sua apresentação impecável faz dele uma escolha ideal para compor mesas decoradas ou servir como lembrança personalizada. A Aurora Doce não é apenas um doce; é um espetáculo em miniatura que combina visual impactante e sabor sublime.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/auroradoce.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div><!-- Finaliza a coluna que insere as descrições do prato selecionado -->
        </div>
      </div><!-- Finaliza o box para o pratos especiais -->
    </section><!-- Finaliza o espaço criado para os nomes dos pratos especiais -->
    
    <section id="events" class="events section"><!-- Inicia a sessão que mostra os tipos de eventos realizados com slides rotativos -->
      <img class="slider-bg" src="assets/img/events-bg.jpg" alt="" data-aos="fade-in">
      <div class="container">
        <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 10000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper"><!-- Box para exibição dos eventos -->
            <div class="swiper-slide"><!-- Primeiro amostra de evento -->
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/events-slider/events-slider-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Aniversários</h3>
                  <div class="price">
                    <p><span>R$1189</span></p>
                  </div>
                  <p class="fst-italic">
                    Torne seu aniversário inesquecível com nossos doces exclusivos!
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Arte comestível: Doces decorados com designs únicos que encantam os olhos e o paladar.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Variedade incrível: Sabores e formatos personalizados para combinar com o tema da sua festa.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Qualidade garantida: Ingredientes selecionados para garantir o sabor e a sofisticação.</span></li>
                  </ul>
                  <p>
                    Deixe seus convidados maravilhados com doces que transformam celebrações em momentos mágicos!
                  </p>
                </div>
              </div>
            </div><!-- Finaliza a exibição do primeiro evento -->
            <div class="swiper-slide"><!-- Segunda amostra de evento -->
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/events-slider/events-slider-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Corporativos</h3>
                  <div class="price">
                    <p><span>$690</span></p>
                  </div>
                  <p class="fst-italic">
                    Destaque seu evento corporativo com nossos doces sofisticados!
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Elegância personalizada: Doces finos adaptados à identidade visual da sua empresa.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Impacto positivo: Delícias que encantam clientes e colaboradores, tornando o evento memorável.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Qualidade premium: Ingredientes selecionados e apresentação impecável para impressionar.</span></li>
                  </ul>
                  <p>
                    Eleve a experiência do seu evento com doces que são sinônimo de bom gosto e profissionalismo!
                  </p>
                </div>
              </div>
            </div><!-- Finaliza a exibição do segundo evento -->
            <div class="swiper-slide"><!-- Terceira amostra de evento -->
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/events-slider/events-slider-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Festas Familiares</h3>
                  <div class="price">
                    <p><span>$490</span></p>
                  </div>
                  <p class="fst-italic">
                    Adicione um toque especial à sua festa familiar com nossos doces encantadores!
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Carinho em cada detalhe: Doces feitos sob medida para celebrar momentos únicos com quem você ama.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Variedade para todos: Sabores e formatos que agradam desde as crianças até os mais exigentes.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Memórias doces: Criações que unem beleza e sabor, tornando cada reunião inesquecível.</span></li>
                  </ul>
                  <p>
                    Transforme sua festa em um momento de afeto e alegria com doces que celebram a família!
                  </p>
                </div>
              </div>
            </div><!-- Finaliza a exibição do segundo evento -->
          </div><!-- Finaliza o box para exibição dos eventos -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- Finaliza a sessão que mostra os tipos de eventos realizados com slides rotativos -->
    
    <section id="book-a-table" class="book-a-table section"><!-- Inicia a sessão de reservas de enventos -->
      <div class="container section-title" data-aos="fade-up"><!-- Título da sessão reserva de eventos -->
        <h2>Reservas</h2>
        <div><span>Reserve</span> <span class="description-title">Sua Data</span></div>
      </div><!-- Encerra o espaço para finalizar os eventos -->
      <div class="container"><!-- Cria o espaço para a imagem e formulário de reservas -->
        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"></div><!-- Definição da imagem -->
          <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200"><!-- Cria o espaço para o formulário, defini o método e a ação -->
            <form action="reserva.php" method="post" role="form" class="php-email-form"> 
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required=""><!-- Campo para o nome -->
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required=""><!-- Campo para o e-mail -->
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="(xx) xxxxx-xxxx" required=""><!-- Campo para o telefone -->
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="date" name="date" class="form-control" id="date" placeholder="Data" required=""><!-- Campo para informar a data -->
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="time" class="form-control" name="time" id="time" placeholder="Hora" required=""><!-- Campo para informar a hora -->
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# N° de Pessoas" required=""><!-- Campo para a quantidade de pessoas -->
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Conte-nos sobre o seu evento e suas preferências"></textarea><!-- Campo para observações -->
              </div>
              <div class="text-center mt-3">
                <div class="loading">Carregando</div><!-- Mensagem exibida enquanto o texto é enviado para o banco de dados -->
                <div class="error-message">Não foi possível realizar sua reserva</div><!-- Mensagem que retorna em caso de erro -->
                <div class="sent-message">Reservado! Ligaremos de volta ou enviaremos um e-mail em breve. Obrigado!</div><!-- Mensagem que retorna em caso de mensagem enviada para o banco de dados -->
                <button type="submit">Fazer Reserva</button><!-- Botão para fazer a reserva -->
              </div>
            </form>
          </div><!-- Finaliza o formulário para reservas -->
        </div>
      </div><!-- Finaliza o espaço para a imagem e formulário de reservas -->
    </section><!-- Finaliza a sessão de reservas -->

    
    <section id="gallery" class="gallery section"><!-- Inicia a sessão Galeria -->
      <div class="container section-title" data-aos="fade-up"><!-- Define o título para Galeria -->
        <h2>Galeria de Fotos</h2>
        <div><span>Alguns dos registros de</span> <span class="description-title">Nossos Eventos</span></div>
      </div><!-- Finaliza o espaço para galeria -->
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0"><!-- Sequência de imagens para galeria -->
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div><!-- Finaliza o carregamento das imagens para a galeria -->
      </div>
    </section><!-- Finaliza a sessão da galeria -->
    
    <section id="chefs" class="chefs section"><!-- Cria a sessão da Equipe de trabalho -->
      <div class="container section-title" data-aos="fade-up"><!-- Título da sessão -->
        <h2>Equipe</h2>
        <div><span>Nosso time de</span> <span class="description-title">Profissionais</span></div>
      </div><!-- Finaliza a função para o título da sessão -->
      <div class="container"><!-- Cria o espaço para a exibição de imagens, nomes e especialidades de cada confeiteiro -->
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div><!-- Faz inserção da foto do profissional -->
              <div class="member-info">
                <h4>Nelson Azevedo</h4>
                <span>Chef Master</span>
                <div class="social">
                  <a href="https://x.com/?lang=pt-br"><i class="bi bi-twitter-x"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://br.linkedin.com/"><i class="bi bi-linkedin"></i></a><!-- Redes sociais do profissional -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div><!-- Faz inserção da foto do profissional -->
              <div class="member-info">
                <h4>Nathalia Alves</h4>
                <span>Confeiteira</span>
                <div class="social">
                  <a href="https://x.com/?lang=pt-br"><i class="bi bi-twitter-x"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://br.linkedin.com/"><i class="bi bi-linkedin"></i></a><!-- Redes sociais do profissional -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div><!-- Faz inserção da foto do profissional -->
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Confeiteiro</span>
                <div class="social">
                  <a href="https://x.com/?lang=pt-br"><i class="bi bi-twitter-x"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a><!-- Redes sociais do profissional -->
                  <a href="https://br.linkedin.com/"><i class="bi bi-linkedin"></i></a><!-- Redes sociais do profissional -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- Finaliza o espaço para a exibição de imagens, nomes e especialidades de cada confeiteiro -->
    </section><!-- Finaliza a sessão Equipe de trabalho-->

    <section id="testimonials" class="testimonials section dark-background"><!-- Abre sessão para testemunhais de clientes e definie o formato de exibição -->
      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 10000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper"><!-- Cria o primeiro slide para exibição do testemunhal -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>José Fernandes</h3>
                <h4>Bancário</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Cada doce é uma obra de arte! Foi o destaque da festa e todos ficaram encantados."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fecha o primeiro slide de exibição do testemunhal -->
            <div class="swiper-slide"><!-- Cria o segundo slide para exibição do testemunhal -->
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Camila Trindade</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Além de lindos, os doces são deliciosos! O cuidado com os detalhes é impressionante."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fecha o segundo slide de exibição do testemunhal -->
            <div class="swiper-slide"><!-- Cria o terceiro slide para exibição do testemunhal -->
              <div class="testimonial-item">
                <img src="assets/img/testimonials/mulher2.jpg" class="testimonial-img" alt="">
                <h3>Suzana Oliveira</h3>
                <h4>Lojista</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Nunca vi doces tão bem feitos! Fizeram toda a diferença no nosso evento."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fecha o terceiro slide de exibição do testemunhal -->
            <div class="swiper-slide"><!-- Cria o quarto slide para exibição do testemunhal -->
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matheus Silveira</h3>
                <h4>Advogado</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Os sabores são incríveis, e a apresentação deixou todos maravilhados. Super recomendo!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fecha o quarto slide de exibição do testemunhal -->
            <div class="swiper-slide"><!-- Cria o quinto slide para exibição do testemunhal -->
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Hermes Rosa</h3>
                <h4>Empresário</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Perfeição em cada detalhe! Uma experiência doce que supera todas as expectativas."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fecha o quinto slide de exibição do testemunhal -->
          </div>
          <div class="swiper-pagination"></div><!-- Finaliza a função de slides para os testemunhais -->
        </div>
      </div>
    </section><!-- Finaliza a sessão de testemunhais -->
    
    <section id="contact" class="contact section"><!-- Inicia a sessão de contato -->
      <div class="container section-title" data-aos="fade-up"><!-- Cria o título da sessão-->
        <h2>Contato</h2>
        <div><span>Nosso </span> <span class="description-title">Contato</span></div>
      </div><!-- Finaliza a titulação da função -->
      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d747.2947705919499!2d-51.153703274176436!3d-27.006361108725837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e14e46767c1621%3A0x4ab9a24a2e862538!2sSESI%20-%20Videira!5e0!3m2!1spt-BR!2sbr!4v1732659999004!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><!-- Faz exibição incorporada do Google Maps baseada nas coordenadas do endereço-->
      </div><!-- Finaliza exibição incorporada do Google Maps -->
      <div class="container" data-aos="fade">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-4">
            <div class="info"><!-- Cria o espaço para informar o endereço da confeitaria, email e telefone -->
              <h3>Entre em contato</h3>
              <p>Contate-nos para agendamentos, encomendas e para retirar suas dúvidas!</p>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Endereço:</h4>
                  <p>Saul Brandalise, 39 - Centro, Videira - SC, 89560-000</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>contato@docesencanto.com.br</p>
                </div>
              </div>
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telefone:</h4>
                  <p>+55 49 3566-0101</p>
                </div>
              </div>
            </div><!-- Finaliza o espaço para informar o endereço da confeitaria, email e telefone -->
          </div>
          <div class="col-lg-8"> <!-- Cria um formulário de contato para enviar reclamações, sugestões ou tirar dúvidas -->
            <form action="contato.php" method="post" role="form" class="php-email-form"><!-- Faz a conexão com o banco de dados e define o método de envio -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required=""><!-- Campo para informar o nome -->
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" required=""><!-- Campo para informar o email -->
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required=""><!-- Campo para informar o assunto -->
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Sua Mensagem" required=""></textarea><!-- Campo para informar a mensagem -->
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div><!-- Mensagem exibida enquanto as informações são carregadas no banco de dados -->
                <div class="error-message">Sua mensagem não foi enviada, tente novamente.</div><!-- Mensagem exibida quando ocorre erro ao carregar informações no banco de dados -->
                <div class="sent-message">Sua mensagem foi enviada, obrigado pelo contato!</div><!-- Mensagem exibida quando as informações são inseridas no banco de dados -->
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div><!-- Botão para enviar mensagem para o banco de dados -->
            </form>
          </div><!-- Finaliza formulário de contato para reclamações, sugestões ou dúvidas -->
        </div>
      </div>
    </section><!-- Finaliza a sessão contato -->
  </main><!-- Finaliza o bloco principal da página-->
  
  <footer id="footer" class="footer dark-background"><!-- Inicia o rodapé da página-->
    <div class="container"><!-- Container que exibirá as informações finais da página -->
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Endereço</h4>
            <p>Rua Saul Brandalise, 39</p>
            <p>Videira, SC 89560-000</p>
            <p></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contato</h4>
            <p>
              <strong>Telefone:</strong> <span>+55 49 3566-0101</span><br>
              <strong>Email:</strong> <span>contato@docesencanto.com.br</span><br>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horario de Atendimento</h4>
            <p>
              <strong>Seg-Sáb:</strong> <span>11:00 - 23:00</span><br>
              <strong>Domingos</strong>: <span>Fechado</span>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4>Siga-nos nas redes sociais</h4>
          <div class="social-links d-flex">
            <a href="https://x.com/?lang=pt-br"><i class="bi bi-twitter-x"></i></a><!-- Redes sociais da confeitaria -->
            <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a><!-- Redes sociais da confeitaria -->
            <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a><!-- Redes sociais da confeitaria -->
            <a href="https://br.linkedin.com/"><i class="bi bi-linkedin"></i></a><!-- Redes sociais da confeitaria -->
          </div>
        </div>
      </div>
    </div>
    <div class="container copyright text-center mt-4"><!-- Nome e Copyright do desenvolvedor -->
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Marcio Tascheck</strong> <span>Todos os direitos reservados</span></p>
      <div class="credits">
        Designed by Marcio Tascheck</a>
      </div>
    </div>
  </footer><!-- Finaliza o rodapé da página-->
  
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a><!-- Botão para rolar para o topo da página -->
  <!-- Preloader é uma animação utilizada enquanto a página é carregada -->
  <div id="preloader"></div>
  <!-- Vendor JS Files (garantem a compatilbilidade do JS em diferentes navegadores-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Arquivo principal do Java Script -->
  <script src="assets/js/main.js"></script>
</body>
</html>
