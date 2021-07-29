const app = new Vue({
    el: "#app",
    data: {
        url: window.location.href + '/api/api_albums.php',
        albums: [],
        genres: ['all'],
        loading: true
    },
    mounted(){
        axios
            .get(this.url)
            .then(response => {
                this.albums = response.data;
                this.loading = false;
            });
    },
    watch: {
        loading: function(){
            if(!this.loading){
                this.albums.forEach(album => {
                    album.genres.forEach(genre => {
                        if (!this.genres.includes(genre)) this.genres.push(genre);
                    });
                });
            }
        }
    },
    methods: {
        filterGenre: function(e) {
            this.albums = [];

            axios
                .get(this.url)
                .then(response => {
                    if (e.target.value == 'all') this.albums = response.data;
                    else{
                        response.data.forEach(album => {
                            if(album.genres.includes(e.target.value)) this.albums.push(album);
                        });
                    }
                });
        },
    }
    
});