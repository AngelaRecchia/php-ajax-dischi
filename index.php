<!-- Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Albums</title>
</head>
<body>

    <div id="app">

        <header class="py-3">
        <h2 class="text-center">Albums</h2>
        </header>

        <main>

        <div class="container">

            <div v-if="!loading" class="row row-cols-6 row-cols-md-4 row-cols-lg-5">

                <div v-for="album in albums" class="col album text-center text-white my-3">

                        <img class="poster mb-2" :src="album.poster" :alt="album.title">

                        <div class="title">{{album.title}}</div>
                        <span class="year">{{album.year}}</span>
                        <span> &#9679; </span>
                        <span class="author">{{album.author}}</span>
                </div>
                
            </div>

            <div v-else>Loading</div>
        </div>

        </main>
    </div>

    <script src="js/script.js"></script>

</body>
</html>
