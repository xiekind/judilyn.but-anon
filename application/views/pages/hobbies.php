<!-- <h1>this is hobbies page</h1> -->
<link icon="assets/images/logo2.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo $this->config->base_url(); ?>" />
</head>

<body>

    <div class="container">

        <div class="card shadow-lg p-3 mb-5 rounded">
            <div class="card-body">
                <img draggable="false" class="hobbies" src="assets/images/2guitar.png" alt="guitar logo">
                <h1>Playing Guitar</h1>
                <hr>
                <p>When I want to be alone, I play guitar to calm my heart and mind. And if I have time, I play with my siblings.</p>
            </div>
        </div>
        
        <div class="card shadow-lg p-3 mb-5 rounded">
            <div class="card-body">
                <img draggable="false" class="hobbies" src="assets/images/3badminton.png" alt="">
                <h1>Playing Badminton</h1>
                <hr>
                <p></p>
            </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 rounded">
            <div class="card-body">
                <img draggable="false" class="hobbies" src="assets/images/1book.png" alt="">
                <h1>Reading Books</h1>
                <hr>
                <p>Everyday, I always make sometime to read a book.</p>
            </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 rounded">
            <div class="card-body">
                <img draggable="false" class="hobbies" src="assets/images/6volleyball.png" alt="">
                <h1>Playing Volleyball</h1>
                <hr>
            </div>
        </div>

        <!-- <div class="card shadow-lg p-3 mb-5 rounded">
        <div class="card-body">
            <img draggable="false" class="hobbies" src="assets/images/code.png" alt="">
            <h1>Coding</h1>
            <hr>
        </div>
    </div> -->
    </div>

</body>

</html>
<style>
    body {
        color: #F73AC8;
        /* background-image: linear-gradient(to bottom, #9b0b76, #a60752, #a32434, #963b1b, #834d08); */
        background-image: linear-gradient(to top, #580360, #55002f, #3d070f, #240c00, #040302);
        font-family: 'Poppins', sans-serif;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }


    ::selection {
        color: #F73AC8;
        background: black;
        border-radius: 100px;
    }

    nav {
        position: fixed;
    }

    .container {
        margin-top: 5rem;
        height: 32rem;
        padding: 20px;
        width: 50rem;
        overflow: auto;
        color: black;
    }

    .container::-webkit-scrollbar {
        width: 1em;
    }

    .container::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .container::-webkit-scrollbar-thumb {
        /* background-color: darkgrey; */
        background-image: linear-gradient(to bottom, #580360, #55002f, #3d070f, #240c00, #040302);
        border-radius: 10px;
        /* outline: 1px solid slategrey; */
    }

    .card {
        padding: 20px;
        margin: 50px;
        background-color: #fff5e7;
    }

    .hobbies {
        width: 20rem;
        height: 20rem;
        float: left;
    }
</style>