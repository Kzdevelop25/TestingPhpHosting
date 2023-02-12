<?php
require_once "./model/anime.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        h1 {
            margin: 3rem;
            margin-top: 1rem;
            padding: .6rem;
        }


        img {
            display: block;
            width: 100%;
            object-fit: cover;
            object-position: center;
            transform: scale(1);
            transition: all .5s ease;
            height: 300px;
        }

        .img {
            border-radius: .1em;
            overflow: hidden;
            width: 250px;
            height: 250px;
            background-color: grey;
            /* height: 500px; */
            transition: all .5s ease-in;

        }

        .container {
            gap: 1.5rem;
            width: 90%;
            margin: auto;
            /* background-color: black; */
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            place-content: center;
            place-items: center;
        }

        @media screen and (max-width: 1200px) {
            .container {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media screen and (max-width: 968px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media screen and (max-width: 768px) {
            .container {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .judul {
            position: relative;
            font-size: 20px;
            color: black;
            /* background-color: white; */
            font-weight: medium;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: black;
            font-weight: bold;
            text-transform: uppercase;

        }

        .back {
            background-color: #236bce;
            padding: 12px 16px;
            border-radius: .5em;
            position: fixed;
            top: 10%;
            right: 10%;
            font-size: 16px;
            color: white;
            text-decoration: none;
        }
        
        .back:last-of-type {
            right: 20%;
        }


        .items {
            overflow: hidden;
            /* background: grey; */
            padding: 1rem;
        }

        .img:hover img {
            transform: scale(1.1) ;
        }



        .judulitems {
            margin-top: 20px;
            display: block;
            min-width: 300px;
        }.cati {
            caret-color: blue;
            color: blue;
            display: block;
            border-radius: 1rem;
            outline: none;
            border: 1px solid blue;
            box-shadow: none;
            width: 200px;
            margin: auto;
            padding: 5px 20px;
            height: 30px;
            transition: all ease .5s;
        }::placeholder {
            color: blue;
            text-transform: capitalize;
        }.cati:focus{
            width: 500px;
        }



    </style>

</head>

<body>

    <h1>Daftar Anime</h1>

    <input class="cati" type="text" name="search" placeholder="cari anime mu!!">

    <div class="container">
        <?php foreach ($animes as $anime) : ?>
            <div class="items">
                <div class="img">
                    <a href="detail.php?title=<?= $anime['judul'] ?>">
                        <img src="<?= $anime["gambar"] ?>" alt="<?= $anime["judul"] ?>">
                    </a>
                </div>
                <div class="judulitems">

                    <a class="judul" href="detail.php?title=<?= $anime['judul'] ?>">
                        <span class="title">Title</span> : <?= $anime["judul"] ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="input.php" class="back">POST</a>

</body>

</html>