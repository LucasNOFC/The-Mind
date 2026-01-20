<?php
include_once __DIR__ . "/../data/data.php";
?>


<?php if (!isset($_GET['search'])): ?>
    <?php foreach ($topics as $topic): ?>
        <div id="card">
            <img id="card-img" src="<?= BASE_URL ?>/public/img/<?= $topic['img'] ?>" alt="<?= $topic['description'] ?>">
            <a id="card-title" href="<?= BASE_URL ?>/topic.php/?id=<?= $topic['id'] ?>"><?= $topic['title'] ?></a>
            <p id="card-description"><?= $topic['description'] ?></p>

            <div id="card-tag-list">
                <p>Tags:</p>
                <?php foreach ($topic['tags'] as $tag): ?>
                    <p><?= $tag ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

<?php elseif (isset($_GET['search'])): ?>

    <?php

    $cards = [];
    $searchTag = $_GET['search'];

    foreach ($topics as $topic) {
        if (in_array($searchTag, $topic['tags'])) {
            array_push($cards, $topic);
        }
    }

    ?>

    <?php if (count($cards) > 0): ?>
        <main>
            <div>
                <section>
                    <article id="card-article">
                        <?php foreach ($cards as $card): ?>
                            <div id="card">
                                <img id="card-img" src="<?= BASE_URL ?>/public/img/<?= $card['img'] ?>" alt="<?= $card['description'] ?>">
                                <a id="card-title" href="<?= BASE_URL ?>/topic.php/?id=<?= $card['id'] ?>"><?= $card['title'] ?></a>
                                <p id="card-description"><?= $card['description'] ?></p>
                                <div id="card-tag-list">
                                    <p>Tags:</p>
                                    <?php foreach ($card['tags'] as $tag): ?>
                                        <p><?= $tag ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </article>
                </section>
            </div>
        </main>

    <?php else: ?>
        <? 

            include_once __DIR__ . "./404.php";        

        ?>

    <?php endif ?>

<?php endif ?>