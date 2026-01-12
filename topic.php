<?php
include_once("./component/header.php");
?>

<?php
if (isset($_GET['id'])) {

    $actualTopic = $_GET['id'];

    foreach ($topics as $topic) {
        if ($topic['id'] == $actualTopic) {
            $actualTopic = $topic;
        }
    }
}
?>


<div id="post-container">
    <div id="post-topics">
        <div id="post-apresentation">
            <h1 id="post-title"><?= $actualTopic['title'] ?></h1>
            <h3 id="post-description"><?= $actualTopic['description'] ?></h3>
        </div>
        <div id="post-image-container">
            <img id="post-img" src="/img/<?= $actualTopic['img'] ?>" alt="<?= $actualTopic['description'] ?>">
        </div>
        <div id="post-text-container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi recusandae velit voluptates optio. Minima eveniet nesciunt beatae esse quisquam aut, dignissimos cum! Repellendus at deleniti consectetur, magnam sapiente distinctio nihil?
                Quaerat inventore tempore, officiis, ex ducimus dignissimos voluptate quia omnis recusandae consequuntur rem debitis commodi facilis modi minima magni earum! Quia dignissimos perspiciatis voluptates fugiat amet aperiam fuga quidem reprehenderit.
                Maxime eveniet ad, aliquam mollitia dignissimos ducimus sunt fugiat error at dolores vero ipsam veritatis, hic cumque perferendis ratione deserunt. Recusandae pariatur hic magnam quisquam ipsa enim totam vitae possimus?
                At temporibus neque placeat quas similique dolores voluptatem modi aliquid alias, excepturi magni inventore beatae obcaecati totam perspiciatis aspernatur facere aut harum nam dolor deserunt, laboriosam, repudiandae asperiores. Eveniet, consectetur.
                Voluptatem reiciendis libero molestias odio nihil itaque deleniti eveniet aperiam similique vitae ipsum maxime minima, quidem eos dolor? Facilis rerum perspiciatis blanditiis inventore iure tempore. Nemo eveniet corrupti distinctio fuga.
                Cupiditate quas consectetur consequuntur? Accusamus deleniti officia quod omnis doloremque quaerat in, labore tempore doloribus modi ab, fugit pariatur beatae. Corporis error, aut aspernatur alias facere unde earum sint omnis?
                Blanditiis fugit odit impedit inventore suscipit quasi excepturi dolore maiores quae nobis? Nemo doloremque eos dolorem accusamus distinctio repellat commodi. Eaque beatae veniam vitae mollitia, ducimus tempore voluptatem rerum quis?
                Repudiandae ex atque modi tenetur, consequatur nisi laudantium recusandae mollitia eius et aspernatur libero cum numquam ab ea sed dolore commodi unde dolorem iste error excepturi iure? Ratione, sunt necessitatibus.
                Quasi optio ea id ipsum corrupti ut molestiae, dolorum voluptates debitis in voluptas earum, consequuntur nisi non numquam provident quod nemo quo assumenda cumque, maxime sequi suscipit reiciendis! Perferendis, esse.
                Necessitatibus consequatur aperiam quasi cupiditate, sed temporibus exercitationem nam. Beatae dignissimos perspiciatis error in nulla officiis. Veniam saepe nulla sequi quis repellat, amet sed voluptas repudiandae ducimus eveniet illo voluptatum!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi recusandae velit voluptates optio. Minima eveniet nesciunt beatae esse quisquam aut, dignissimos cum! Repellendus at deleniti consectetur, magnam sapiente distinctio nihil?
                Quaerat inventore tempore, officiis, ex ducimus dignissimos voluptate quia omnis recusandae consequuntur rem debitis commodi facilis modi minima magni earum! Quia dignissimos perspiciatis voluptates fugiat amet aperiam fuga quidem reprehenderit.
                Maxime eveniet ad, aliquam mollitia dignissimos ducimus sunt fugiat error at dolores vero ipsam veritatis, hic cumque perferendis ratione deserunt. Recusandae pariatur hic magnam quisquam ipsa enim totam vitae possimus?
                At temporibus neque placeat quas similique dolores voluptatem modi aliquid alias, excepturi magni inventore beatae obcaecati totam perspiciatis aspernatur facere aut harum nam dolor deserunt, laboriosam, repudiandae asperiores. Eveniet, consectetur.
                Voluptatem reiciendis libero molestias odio nihil itaque deleniti eveniet aperiam similique vitae ipsum maxime minima, quidem eos dolor? Facilis rerum perspiciatis blanditiis inventore iure tempore. Nemo eveniet corrupti distinctio fuga.
                Cupiditate quas consectetur consequuntur? Accusamus deleniti officia quod omnis doloremque quaerat in, labore tempore doloribus modi ab, fugit pariatur beatae. Corporis error, aut aspernatur alias facere unde earum sint omnis?
                Blanditiis fugit odit impedit inventore suscipit quasi excepturi dolore maiores quae nobis? Nemo doloremque eos dolorem accusamus distinctio repellat commodi. Eaque beatae veniam vitae mollitia, ducimus tempore voluptatem rerum quis?
                Repudiandae ex atque modi tenetur, consequatur nisi laudantium recusandae mollitia eius et aspernatur libero cum numquam ab ea sed dolore commodi unde dolorem iste error excepturi iure? Ratione, sunt necessitatibus.
                Quasi optio ea id ipsum corrupti ut molestiae, dolorum voluptates debitis in voluptas earum, consequuntur nisi non numquam provident quod nemo quo assumenda cumque, maxime sequi suscipit reiciendis! Perferendis, esse.
                Necessitatibus consequatur aperiam quasi cupiditate, sed temporibus exercitationem nam. Beatae dignissimos perspiciatis error in nulla officiis. Veniam saepe nulla sequi quis repellat, amet sed voluptas repudiandae ducimus eveniet illo voluptatum!</p>

        </div>
    </div>
    <aside id="side-menu">
        <div id="side-tag-container">
            <p>Tags:</p>
            <? foreach ($actualTopic['tags'] as $tag): ?>
                <div id="side-tag">
                    <p><?= $tag ?></p>
                </div>
            <? endforeach; ?>
        </div>
    </aside>
</div>

<?php
include_once("./component/footer.php");
?>