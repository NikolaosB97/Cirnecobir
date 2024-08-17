
<x-layout>
  {{-- pop-up --}}
  <div id="age-verification-popup" class="age-popup">
    <div class="age-popup-content">
      <h2>Sei maggiorenne?</h2>
      <p>Devi avere almeno 18 anni per accedere a questo sito.</p>
      <div class="age-popup-buttons">
        <button id="yes-button">Sì, ho almeno 18 anni</button>
        <button id="no-button">No, non ho 18 anni</button>
      </div>
    </div>
  </div>
    <!-- Video di sfondo -->
    <div class="video-container">
        <video playsinline autoplay muted preload="auto" loop class="video-background">
            <source src="{{ asset('img/cirneco.mp4') }}" type="video/mp4">
            Il tuo browser non supporta i video HTML5.
        </video>
        <!-- Barra nera con il testo -->
        <div class="black-bar">
            <h1>CIRNECOBIR</h1>
            <p>
                QUESTO PROGETTO INIZIA TUTTO DOPO L'INCONTRO FORTUITO TRA ALDO BALDARO E DELFIO FARACI PROPRIETARIO DI UN MICRO BIRRIFICIO ALLE PENDICI DELL'ETNA. L'IDEA È DI UNIRE LE DUE PASSIONI, QUELLA DEL VINO LA MIA E QUELLA DELLA BIRRA LA SUA, PER FARE UN PROGETTO INSIEME. PRODURRE UNA BIRRA CON IL MOSTO D'UVA DI CARRICANTE DELLA MIA PRIMA VENDEMMIA CHE FARÒ CON ROBERTO ASMUNDO CHE MI HA COINVOLTO IN UNA AVVENTURA NEL MONDO AGRICOLO PER PRODURRE UN VINO SULL'ETNA A PIEMONTE ETNEO. DURANTE GLI INCONTRI CON DELFIO ABBIAMO FATTO VARI ASSAGGI DI ALTRE RICETTE CHE HANNO DATO VITA A ALTRE QUATTRO BIRRE CHE NELL'ATTESA DELLA VENDEMMIA ANTICIPERANNO L'USCITA DELLA BIRRA DEDICATA AL MOSTO. CIRNECOBIR È PRODOTTA ARTIGIANALMENTE CON INGREDIENTI NATURALI SELEZIONATI CON CURA PER UN SAPORE UNICO E QUALITÀ ECCELLENTE. AD OGNI SORSO TUTTA LA FRESCHEZZA DELLE NOTE AGRUMATE E DELLE ERBE AROMATICHE CHE IN MANIERA INCONFONDIBILE RICORDANO I PROFUMI TIPICI DELLA SICILIA.
            </p>
        </div>
    </div>
    <section id="collarino-section" class="collarino-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <h2 id="collarino-title" class="hidden">IL NOSTRO LOGO</h2>
            <p id="collarino-description" class="typing-effect hidden"></p>
          </div>
          <div class="col-lg-6">
            <img id="collarino-image" src="/img/Collarino.png" alt="Collarino Vulcan Sicily" class="hidden">
          </div>
        </div>
      </div>
    </section>
<!-- Sezione: Le Nostre Etichette -->
<section class="product-section-eti">
    <div class="container-fluid">
      <h2 class="text-center my-5 back-h2">LE NOSTRE ETICHETTE</h2>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card-container">
            <div class="card">
              <img src="/img/torre-del-f.png" alt="Torre del Filosofo" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Torre del Filosofo</h5>
                <p class="card-text hidden-description">Come il filosofo Empedocle, che sfidò il vulcano per scoprire i suoi segreti, la nostra India Pale Ale affronta con audacia il palato, offrendo un’esperienza ricca di intensi aromi agrumati e un amaro persistente. Questa IPA rende omaggio alla leggenda siciliana, combinando la forza della natura vulcanica con l’equilibrio perfetto dei luppoli selezionati, per una birra che invita alla scoperta e all’avventura.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card-container">
            <div class="card">
              <img src="/img/grotta-dei-l.png" alt="Grotta dei Ladroni" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Grotta dei Ladroni</h5>
                <p class="card-text hidden-description">Come i ladroni che cercarono rifugio nella Grotta dei Ladroni, la nostra Belgian Dubbel nasconde un’anima ricca e complessa sotto la sua superficie scura e invitante. Questa birra, con le sue note di caramello, frutta secca e spezie, offre un’esperienza profonda e avvolgente, un rifugio sicuro per chi cerca un sapore pieno e misterioso, proprio come la grotta che un tempo accolse i banditi in fuga.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card-container">
            <div class="card">
              <img src="/img/Grotta-del-g.png" alt="Grotta del Gelo" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Grotta del Gelo</h5>
                <p class="card-text hidden-description">Come la Grotta del Gelo, che custodisce il suo freddo perenne nelle viscere dell’Etna, la nostra Blanche offre un’esperienza rinfrescante e cristallina, perfetta per chi cerca una pausa rigenerante. Con i suoi delicati aromi di agrumi e coriandolo, questa birra leggera e frizzante cattura la freschezza intrinseca della grotta, rendendola ideale per dissetarsi dopo una giornata sotto il sole siciliano.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card-container">
            <div class="card">
              <img src="/img/valle-del-b.png" alt="Valle del Bove" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Valle del Bove</h5>
                <p class="card-text hidden-description">Come la Valle del Bove, che si distingue per la sua vastità e storia antica, la nostra American Pale Ale si presenta con un carattere deciso e avvolgente. Le origini complesse di questa birra, ricca di note agrumate e resinose, evocano la forza e la profondità di una caldera antica, formata dalla potenza naturale dell’Etna. Con ogni sorso, la nostra APA porta l’intensità e la vitalità di questa terra vulcanica, offrendo un’esperienza che rimane impressa come il paesaggio desertico della Valle del Bove.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Banner Section -->
   <section class="banner-section">
    <div class="container-fluid text-center">
        <div class="banner-content">
            <div class="paws-left">
                <img src="/img/img-zampe-navbar.png" alt="Left Paws" class="paws-img">
            </div>
            <div class="text-container">
              <h1 class="banner-title">CIRNECOBIR</h1>
              <h2 class="subtitle my-5">Birra Artigianale</h2>
          </div>
            <div class="logo">
                <img src="/img/logo-removebg-preview.png" alt="Cirnecobir Logo" class="logo-img">
            </div>
        </div>
        <div class="producer-info">
          <p>Prodotta da L’Uva sas di Aldo Baldaro e c. 
            Via Mons. D. Orlando 19
            95126 Catania 
            </p>
            <p>Distributore per la Sicilia Vinori Group Srl, Catania</p>
      </div>
    </div>
</section>


  <!-- Sezione Prodotti -->
  <!-- Sezione Prodotti -->
<div class="container-fluid">

    <div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <div class="card-image">
        <img src="/img/torre-del-filosofo.png" alt="Beer 1">
        <div class="details">
          <h2>Birra artigianale</h2>
          <p>Birra artigianale rifermentata in bottiglia, non filtrata e non pastorizzata.
            Un carattere delineato da note erbacee, floreali, agrumati di pompelmo e di frutta tropicale</p>
        </div>
      </div>
      
      <div class="extra-info">
        <p><strong>Ingredienti:</strong> acqua, malto d'orzo, frumento fioccato, luppolo, zucchero, lievito.
          Può contenere frutta a guscio: mandorle, nocciole, noci, pistacchi. Contiene Glutine.</p>
        <p><strong>Grado alcolico:</strong> 6% vol.</p>
        <p><strong>Temp. di servizio:</strong> 6°- 8°C</p>
        <p><strong>Unità di vendita:</strong> 50cl - 1 pack / 12 pz</p>
      </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <div class="card-image">
        <img src="/img/valle-del-bove.png" alt="Beer 2">
        <div class="details">
          <h2>Birra artigianale</h2>
          <p>Birra artigianale rifermentata in bottiglia, non filtrata e non pastorizzata.
            Un carattere fruttato che si esprime attraverso suggestioni di agrumi e frutta tropicale.</p>
        </div>
      </div>
      <div class="extra-info">
        <p><strong>Ingredienti:</strong> acqua, malto d'orzo, malto di frumento, luppolo, zucchero, lievito.
          Può contenere frutta a guscio: mandorle, nocciole, noci, pistacchi. Contiene Glutine.</p>
        <p><strong>Grado alcolico:</strong> 5.5% vol.</p>
        <p><strong>Temp. di servizio:</strong> 7°- 8°C</p>
        <p><strong>Unità di vendita:</strong> 50cl - 1 pack / 12 pz</p>
      </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <div class="card-image">
        <img src="/img/grotta-dei-ladri.png" alt="Beer 3">
        <div class="details">
          <h2>Birra artigianale</h2>
          <p>Birra artigianale rifermentata in bottiglia, non filtrata e non pastorizzata.
            Un carattere aromatico deciso con sentori di nocciola, dolciumi, arancia candita e un tocco di speziatura.</p>
        </div>
      </div>
      <div class="extra-info">
        <p><strong>Ingredienti:</strong> acqua, malto d'orzo, zucchero, luppolo, lievito.
          puci piteci contiene diti mandorle, nocciole,</p>
        <p><strong>Grado alcolico:</strong> 6% vol.</p>
        <p><strong>Temp. di servizio:</strong> 9°- 11°C</p>
        <p><strong>Unità di vendita:</strong> 50cl - 1 pack / 12 pz</p>
      </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <div class="card-image">
        <img src="/img/grotta-del-gelo.png" alt="Beer 3">
        <div class="details">
          <h2>Birra artigianale</h2>
          <p>Birra artigianale rifermentata in bottiglia, non filtrata e non pastorizzata.
            Un carattere tratto da agrumati di lime, floreali di rosa e geranio, fruttati di pesca e speziati di coriandolo.</p>
        </div>
      </div>
      <div class="extra-info">
        <p><strong>Ingredienti:</strong>acqua, malto d'orzo, malto di frumento, frumento fioccato, malto di segale, zucchero, luppolo, spezie, scorze di agrumi, lievito.
          Può contenere frutta a guscio: mandorle, nocciole, noci, pistacchi. Contiene Glutine.
          </p>
        <p><strong>Grado alcolico:</strong> 5% vol.</p>
        <p><strong>Temp. di servizio:</strong> 6°- 8°C</p>
        <p><strong>Unità di vendita:</strong> 50cl - 1 pack / 12 pz</p>
      </div>
    </div>
  </div>
  </div>

</div>
<!-- Sezione Social Media -->
<section class="social-section">
  <div class="container text-center">
    <h2 class="mb-4 back-h2">SEGUICI SUI SOCIAL</h2>
    <div class="row justify-content-center my-5">
      <div class="col-lg-2 col-md-3 col-4 mb-3">
        <a href="https://www.facebook.com" target="_blank">
          <i class="fab fa-facebook-f social-icon social-hidden" data-animation="slide-in-left"></i>
        </a>
      </div>
      <div class="col-lg-2 col-md-3 col-4 mb-3">
        <a href="https://www.instagram.com" target="_blank">
          <i class="fab fa-instagram social-icon social-hidden" data-animation="slide-in-bottom"></i>
        </a>
      </div>
    </div>
  </div>
</section>
            
      
</x-layout>