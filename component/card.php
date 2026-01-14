<?php

include_once("./data/data.php");

?>

<? if (!isset($_GET['search'])): ?>
    <? foreach ($topics as $topic): ?>
        <div id="card">
            <img id="card-img" src="img/<?= $topic['img'] ?>" alt="<?= $topic['description'] ?>">
            <a id="card-title" href="/topic.php/?id=<?= $topic['id'] ?>"><?= $topic['title'] ?></a>
            <p id="card-description"><?= $topic['description'] ?></p>

            <div id="card-tag-list">
                <p>Tags:</p>
                <? foreach ($topic['tags'] as $tag): ?>
                    <p><?= $tag ?></p>
                <? endforeach; ?>
            </div>
        </div>
    <? endforeach; ?>

<? elseif (isset($_GET['search'])): ?>

    <?

    $cards = [];
    $searchTag = $_GET['search'];

    foreach ($topics as $topic) {
        if (in_array($searchTag, $topic['tags'])) {
            array_push($cards, $topic);
        }
    }

    ?>

    <? if (count($cards) > 0): ?>
        <main>
            <div>
                <section>
                    <article id="card-article">
                        <? foreach ($cards as $card): ?>
                            <div id="card">
                                <img id="card-img" src="../img/<?= $card['img'] ?>" alt="<?= $card['description'] ?>">
                                <a id="card-title" href="/topic.php/?id=<?= $card['id'] ?>"><?= $card['title'] ?></a>
                                <p id="card-description"><?= $card['description'] ?></p>
                                <div id="card-tag-list">
                                    <p>Tags:</p>
                                    <? foreach ($card['tags'] as $tag): ?>
                                        <p><?= $tag ?></p>
                                    <? endforeach; ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </article>
                </section>
            </div>
        </main>

    <? else: ?>
        <? 

            include_once("./404.php");        

        ?>

    <? endif ?>

<? endif ?>