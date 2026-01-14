<?php
include_once("./component/header.php");
?>

<main>
    <section>
        <h1>Página não encontrada.</h1>
    </section>
    <section>
        <h3>Publicação que pode interessar</h3>
        <?

            include_once("./component/randomPost.php");

        ?>
    </section>
</main>

<?php
include_once("./component/footer.php");
?>