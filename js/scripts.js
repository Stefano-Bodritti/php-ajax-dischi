var app = new Vue(
  {
    el: "#app",
    data: {
      albums: [],
    },
    mounted: function () {
      axios.get("http://localhost:8888/php-ajax-dischi/api.php")
      .then( (risposta) => {
        this.albums = risposta.data;
      });
    },
  }
);
