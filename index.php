<?php
include_once __DIR__ . "/component/header.php";
?>

<main>
    <div>
        <h1>The Mind - Mergulhando a complexidade humana</h1>
        <p>A mente humana, as relações sociais, como se comunicam?</p>
        <div>
            <section>
                <article id="card-article">
                    <?php
                    include_once("./component/card.php");
                    ?>
                </article>
                <div>
                    <h2>Tópicos em destaques</h2>
                </div>
                <article id="post-article">
                    <?php
                    include_once("./component/randomPost.php");
                    ?>
                </article>
            </section>
        </div>
    </div>
</main>

<?php
include_once __DIR__ . "/component/footer.php";
?>