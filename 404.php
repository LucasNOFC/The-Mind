<?php
include_once __DIR__ . "/component/header.php";
?>
<main>
    <section>
        <h1>Página não encontrada.</h1>
    </section>
    <section>
        <h3>Publicação que pode interessar</h3>
        <?php

            include_once __DIR__ . "/component/randomPost.php";

        ?>
    </section>
</main>

<?php
include_once __DIR__ . "/component/footer.php";
?>