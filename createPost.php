<?php
include_once __DIR__ . "./component/header.php";
?>

<main id="create-post">
    <form method="POST" action="./component/create.php/" enctype="multipart/form-data">
        <div>
            <label for="post-create-title">Título do post</label>
            <input name="title" id="post-create-title" type="text">
        </div>
        <div>
            <label for="description-new-post">Descrição do post</label>
            <input name="description" id="description-new-post" type="text">
        </div>
        <div>
            <label for="tags-new-post">Tags do post</label>
            <input name="newtags" id="tags-new-post" type="text">
        </div>
        <div>
            <label for="image-new-post">Tags do post</label>
            <input name="imagenewpost" id="image-new-post" type="file" accept="image/*">
        </div>
        <input type="submit" value="Publique" id="create-post-submit">
    </form>
</main>

<?php
include_once __DIR__ . "./component/footer.php";
?>