<?php

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
$counter=0;
foreach ($result as $value) {
    $counter++;
    if ($counter % 6 == 0 || $counter == 1) {?>
<div class="main-section__content__post mainpost"
    style="background-image:linear-gradient(to right bottom, rgba(0, 191, 255, 0.6), rgba(135, 206, 250, 0.459)), url(images/b.jpg)">
    <h3 class="main-section__content__post__title">
        <?php echo $value["title"]; ?>
    </h3>
    <span class="main-section__content__post__category">
        <?php echo  $value["categoty_id"]; ?>
    </span>
    <span class="main-section__content__post__status">
        status
    </span>
    <div class="main-section__content__post__info">
        <span class="main-section__content__post__info__author">author</span>
        <span class="main-section__content__post__info__date">date</span>
        <span class="main-section__content__post__info__commentsCount">commentsCount</span>
    </div>
    <div class="main-section__content__post__content-preview">
        sdf sdfs sdf sdf sdf sdf sdf sdf sdf sdfs sdf sdf sdf sdf sdf sdf
    </div>
    <div class="main-section__content__post__tags">
        <ul class="main-section__content__post__tags__ul">
            <li class="main-section__content__post__tags__li">
                sdf
            </li>
            <li class="main-section__content__post__tags__li">
                sdf
            </li>
            <li class="main-section__content__post__tags__li">
                sdf
            </li>
        </ul>
    </div>
</div>
<?php
    } else {?>
<div class="main-section__content__post"
    style="background-image:linear-gradient(to right bottom, rgba(0, 191, 255, 0.6), rgba(135, 206, 250, 0.459)), url(images/b.jpg)">
    <h3 class="main-section__content__post__title">
    <?php echo $value["title"]; ?>
    </h3>
    <span class="main-section__content__post__category">
        category
    </span>
    <div class="main-section__content__post__info">
        <span class="main-section__content__post__info__author">author</span>
        <span class="main-section__content__post__info__date">date</span>
        <span class="main-section__content__post__info__commentsCount">commentsCount</span>
    </div>
</div>
<?php
}
}?>