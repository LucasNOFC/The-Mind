<?php

include_once("./data/data.php");

?>

<? foreach ($topics as $topic): ?>
    <div id="card">
        <img id="card-img" src="img/<?= $topic['img'] ?>" alt="">
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