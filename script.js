const { createApp } = Vue;

createApp({
  data() {
    return {
      ArrSong: [],
    };
  },

  methods: {
    requestAlbums() {
      axios
        .get("http://localhost:8888/php-dischi-json/server.php")
        .then(response => (this.arr_Song = response.data));
    },
  },
}).mount("#app");
