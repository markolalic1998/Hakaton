<?php
include "database.php";
$sql = "SELECT * from topics ORDER BY created DESC";
$result = mysqli_query($connection, $sql) or (mysqli_error($connection));

if(mysqli_fetch_array($result)>0) {
    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $_SESSION['title'] = $record['title'];
        $_SESSION['cover'] = $record['cover'];
        $_SESSION['content'] = $record['content'];
        $_SESSION['tag'] = $record['tag'];
        $_SESSION['id'] = $record['id_topics'];
        $_SESSION['created'] = $record['created'];
        $_SESSION['t_creator'] = $record['creator'];
        ?>

        <div class="col-md-4 col-sm-6">
        <div class="single-featured-post">
            <div class="post-img">
                <a href="single-blog.php?post=<?php echo $_SESSION['id']; ?>"><img src="img/blog/<?php echo $_SESSION['cover'] ?>" alt="Post"></a>
                <a href="#" class="post-tag"><?php echo $_SESSION['tag'] ?></a>
                <div class="post-info">
                    <p>
                        <span class="post-date"><a href="#"><?php echo $_SESSION['created']; ?></a></span>
                        <span class="post-date"><a href="#">by <?php echo $_SESSION['t_creator']; ?></a></span>

                    </p>
                </div>
            </div>
            <div class="post-content">
                <h6 class="post-title"><a href="#"><?php echo $_SESSION['title'] ?></a></h6>
                <p class="post-short-desc"> <?php echo $_SESSION['content'] ?> </p>
                <a href="single-blog.php?post=<?php echo $_SESSION['id']; ?>" class="continue-link">Continue Reading...</a>
                <hr>


                    <i class="fas fa-fire" style="display: block; color: red; font-size: 20px;" title="More then 5 comments"></i>

            </div>
        </div><!-- /.single-blog-post -->
        </div>

        <?php
    }
}