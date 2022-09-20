@extends('template.template')
@section('content')
  <main>  
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
     
      <div class="row p-lg-5 mx-auto my-5">
        <div class="col-md-6">
            <video class="video-home" autoplay muted loop>
              <source src="{{ asset("/video/logo.mp4") }}" type="video/mp4">
            </video>
        </div>
        <div class="col-md-6">
          <h1 class="display-4 font-weight-normal">Essential Skin</h1>
          <p class="lead font-weight-normal">A missão da Essential Skin é realçar a beleza que existe em você. <br> Lembre-se Pensar e cuidar de si mesma, não é egoísmo mas sim um ator de amor próprio.
          </p>
        </div>
        
      </div>
    </div>
  </main>
  <div class="container marketing">

    <!-- START THE FEATURETTES -->
    <h2 class="text-center mt-5">Serviços</h2>
    <hr class="mb-5">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"> Alongamento de unhas<span class="text-muted"></span></h2>
        <p class="lead">
          <ul>
             <li>Alongamento de fibra de vidro </li>
              <li>Alongamento de fibra de seda</li>
              <li>Alongamento em gel</li>
              <li>Alongamento em acrigel</li>
              <li>Alongamento em acrílico</li>
              <li>Alongamento em porcelana</li>
              <li>Alongamento em acrilfix/Nova York</li>
          </ul>
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset("/img/unhas.jpeg") }}"  class="img-home" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Preenchimento Labial <span class="text-muted"></span></h2>
        <p class="lead">
          <ul>
            <li>Preenchimento dérmico</li>
            <li>Preenchimento semipermanente</li>
            <li>Preenchimento definitivo</li>
            <li>Preenchimento provisório</li>
          </ul>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset("/img/preenchimento_labial.jpeg") }}"   class="img-home" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Maquiagem <span class="text-muted"></span></h2>
        <p class="lead">
          <ul>
            <li> Maquiagem natural</li>
            <li> Maquiagem para trabalho</li>    
            <li> Maquiagem monocromática</li>    
            <Li> Maquiagem colorida</li>            
            <li> Maquiagem para festas</li>    
            <li> Maquiagem “olho tudo e boca nada”</li>
          </ul>
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset("/img/make_up.jpeg") }}"  class="img-home" alt="">
      </div>
    </div>

    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Extensão de Cilios <span class="text-muted"></span></h2>
        <p class="lead"> 
          <ul>
            <li> Fio a fio </li>
            <li> Volume Russo </li>
            <li> Hibrido </li>
            <Li> Volume Brasileiro </li>
            <li> Volume Russo </li>
            <li> Efeito Rimel </li>
            <li> Volume Light </li>
            <li> Cilios Molhado </li>
          </ul>
      </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset("/img/técnica_cilios.jpeg") }}"  class="img-home" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Design de Sobrancelhas<span class="text-muted"></span></h2>
        <p class="lead">
          <ul>
            <li>Fio a fio</li>
            <li>Henna </li>
            <li>Brow lamination</li>
            <li>Micropigmentação esfumada</li>
            <li>Ombré shadow</li> 
            <li>Mapeamento geométrico</li>
            <li>Despigmentação</li>
          </ul>
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset("/img/design_sobrancelhas.jpeg") }}"  class="img-home" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Limpeza de pele <span class="text-muted"></span></h2>
        <p class="lead">
          <ul>
            <li>Convencional</li>
            <li> Peeling de cristal</li> 
            <li> Peeling de diamante</li>
            <li> Peeling químico</li>
            <li> Peeling ultrassônico</li> 
            <li> Peeling de porcelana</li>
          </ul>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset("/img/limpeza_pele.jpeg") }}" class="img-home" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection 
