<?php
include_once __DIR__ . "/component/header.php";
include_once __DIR__ . "/data/database.php";

if (isset($_GET['id'])) {
    $actualId = $_GET['id'];

    $sql = "SELECT id, title, descriptiontext, tags from tbPost where id = $actualId";
    $result = $conn->query($sql);

    $actualTopic = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($actualTopic, $row);
        }
    }
}

if (isset($_POST['id'])) {
    echo $_POST['id'];

    $title = $_POST['title'];
    $description = $_POST['descriptionText'];
    $imagePost = $_POST['imagePost'];
    $tags = $_POST['tags'];
    $id = $_POST['id'];

    $sql = "UPDATE tbPost SET title = $title, descriptionText = $description, imagePost = $imagePost, tags = $tags where id $";

    if ($conn->query($sql) === TRUE) {
        echo $_POST['id'];
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<main id="create-post">
    <form method="POST" action="<?= BASE_URL ?>/component/edited.php/?id=<?= $_GET['id'] ?>" enctype="multipart/form-data">
        <div>
            <label for="post-create-title">Título do post</label>
            <input name="title" required id="post-create-title" type="text" value=<?= $actualTopic[0]['title'] ?>>
        </div>
        <div>
            <label for="description-new-post">Descrição do post</label>
            <input name="description" required id="description-new-post" type="text" value=<?= $actualTopic[0]['descriptiontext']  ?>>
        </div>
        <div>
            <label for="tags-new-post">Tags do post</label>
            <input name="newtags" required id="tags-new-post" type="text" value=<?= $actualTopic[0]['tags'] ?>>
        </div>
        <div>
            <label for="image-new-post">Tags do post</label>
            <input name="imagenewpost" required id="image-new-post" type="file" accept="image/* ">
        </div>
        <input type="submit" value="Publique" id="create-post-submit">
    </form>
</main>

<?php
include_once __DIR__ . "/component/footer.php";
