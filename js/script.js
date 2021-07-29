const app = new Vue({
    el: "#app",
    data: {
        url: window.location.href + '/api/api_albums.php',
        albums: [],
        loading: true
    },
    mounted(){
        axios
            .get(this.url)
            .then(response => {
                this.albums = response.data;
                this.loading = false;
            })
    },
    /* watch: {
        loading: function() {
            console.log(this.albums);
        }
    } */
    
});