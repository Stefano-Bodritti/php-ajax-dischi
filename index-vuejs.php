<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Vue dischi</title>
  </head>
  <body>
    <div id="app">
      <!-- intestazione -->
      <header>
        <img src="img/download.png" alt="Spotify logo">
      </header>
      <!-- fine intestazione -->
      <!-- corpo -->
      <main>
        <div class="container">
          <!-- singolo box album -->
          <div class="box_disc" v-for="album in albums">
            <img :src="album.poster" :alt="album.title">
            <h3>{{ album.title }}</h3>
            <div class="author">{{ album.author }}</div>
            <div class="year">{{ album.year }}</div>
          </div>
          <!-- fine singolo box album -->
        </div>
      </main>
      <!-- fine corpo -->
    </div>
    <script src="js/scripts.js" charset="utf-8"></script>
  </body>
</html>