<?php
if (!isset($_COOKIE["NAMEUSER"])); {
    header("location:./");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app - dashboard</title>
</head>
<body>
    <main>
        <header>
            <h1>Escritorio de aplicacion</h1>
        </header>
        <section>
            <article>
                <p>estoy en el escritorio de mi aplicacion</p>
                <p>Usuario: <?php echo $_COOKIE["NAMEUSER"]; ?></p>
                <hr>
                <div>
                    <a href="./logout.php">Salir de mi app</a>
                </div>
            </article>
        </section>
        <hr>
        <footer>
        Derechos reservados &copy; 2024 
        </footer>
    </main>
</body>
</html>