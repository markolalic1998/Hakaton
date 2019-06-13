<?php
session_start();
include "database.php";

//$post = $_SESSION['id_of_topic'];
$post = '';
if(isset($_POST['id_topic']))
    $post = mysqli_real_escape_string($connection, $_POST['id_topic']);

$sql = "SELECT * FROM topic_comments WHERE id_topics = '$post' ORDER BY id_comment DESC;";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if(mysqli_num_rows($result)>0){
    while($record = mysqli_fetch_array($result)){
        $_SESSION['text'] = $record['text'];
        $_SESSION['datetime'] = $record['posted'];

        $id_user = $record['id_user'];
        $sqlName = "SELECT username from users where id_user = '$id_user';";
        $resultName = mysqli_query($connection, $sqlName) or die(mysqli_error($connection));
        $res2 = mysqli_fetch_array($resultName);
        $_SESSION['name'] = $res2['username'];

        $sqlPicture = "SELECT picture from users where id_user = '$id_user';";
        $resultPicture = mysqli_query($connection, $sqlPicture) or die(mysqli_error($connection));
        $res = mysqli_fetch_array($resultPicture);
        $_SESSION['photo'] = $res['picture'];
?>

    <div class="comment-box" id="comment-box">
        <div class="comment-author">
            <img src="img/profile/<?php echo $_SESSION['photo']; ?>" alt="Comment Author" width="60px" height="60px">
        </div>
        <div class="comment-info">
            <p class="author-name"><a href="#"><?php echo $_SESSION['name']; ?></a></p>
            <span class="comment-date"><?php echo $_SESSION['datetime']; ?></span>
            <p><?php echo $_SESSION['text']; ?></p>
        <!--    <a class="reply-link" id="reply" title="Reply">reply</a> -->
        </div>
        <!-- replys -->
        <div class="row" id="reply_form" style="display: none">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="comment-form-area">

                <p>Reply to comment</p>
                <input type="hidden" value="<?php echo $post; ?>" name="id_reply" id="id_reply">
                <input type="hidden" value="<?php echo $_SESSION['username']; ?>" name="userReply" id="userReply">
                <textarea placeholder="reply" name="reply" id="replyText"></textarea>
                <button type="submit" id="replyID" class="submit-btn" name="reply">Reply</button>

                </div>
            </div>
        </div>
        <hr>
    </div><!-- /.single-comment -->



<?php

    }
}

?>

<script type="text/javascript">
    setInterval(loadData2, 1000);

    var $ = function (id) {
        return document.getElementById(id);
    };

    window.addEventListener('load', init);
/*
    function init() {
        $("reply").addEventListener('click',openReplay);
    }


    function openReplay(){
        $('reply_form').style.display="block";
    }
*/
</script>

