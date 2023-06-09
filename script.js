const { createApp } = Vue;

createApp({
  data() {
    return {};
  },

  methods: {
    requestAlbums() {
      axios
        .get("http://localhost/progetti-boolean/PHP/server.php")
        .then(response => (this.arr_Song = response.data));
    },
  },
}).mount("#app");
