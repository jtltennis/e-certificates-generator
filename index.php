<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/83d21097d6.js" crossorigin="anonymous"></script>
    <title>2020 Digital Graduation</title>
    

</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
        </header>
        <main role="main" class="inner cover">
            <h1 class="cover-heading">Huntington High School</h1>
            <h2 class="cover-heading">2020 Digital Graduation</h2>
            <p>Please enter your name in the input below and click on the download button to download your e-diploma.</p>
            <form action="generate.php" method="POST">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" name="name" required="required">
                </div>
                <input type="submit" class="btn btn-lg btn-primary mb-2" value="Download" >



                <div class="song">
	<div class="pause" onClick="togglePlay()">🔇</div>
	<div class="player">
        <audio class="audio" src="music\Beethoven.mp3" autoplay type="audio" loop=""></audio>
        <script src="script.js" async defer></script>

	</div>

</div>

        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
              <p class="joke"><a href="https://jbrkids.com/wp-content/uploads/2015/03/april-fool.jpg" class="fool">This is intended for April 1st, 2020</p>

            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<canvas>    
</canvas>
</body>
</html>