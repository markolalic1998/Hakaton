//   setInterval(loadData2, 1000);
setInterval(loadLikes, 1000);

/*
var y = $('like_mess').className;
if(y == "fas fa-thumbs-up")
    $('like').className = "far fa-thumbs-up";
else
    $('like').className = "fas fa-thumbs-up";
*/
var $ = function (id) {
    return document.getElementById(id);
};

window.addEventListener('load', init);
window.addEventListener('load', loadData2);

function init() {
    $("submit").addEventListener('click', loadData);
    $("like").addEventListener('click', addLike);
    $("reply").addEventListener('click',openReplay);
}


function loadData() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            $("comment_message").innerHTML = xmlhttp.responseText;
            loadData2();
        }
    };
    var mess = $('message').value;
    var id_topic = $('id_topic').value;
    var user = $('user').value;

    xmlhttp.open("POST", "add_comment.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id_topic=" + id_topic + "&user=" + user +"&message="+mess);
    $('message').value = "";
}

function loadData2(){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            $("response_comment").innerHTML = xmlhttp.responseText;
        }
    };
    var id_topic = $('id_topic').value;

    xmlhttp.open("POST", "topic_comment.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id_topic=" + id_topic);
}

function addLike(){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            $("like_mess").innerHTML = xmlhttp.responseText;

            var y = $('like_mess').className;
            if(y == "fas fa-thumbs-up")
                $('like').className = "far fa-thumbs-up";
            else
                $('like').className = "fas fa-thumbs-up";
            /*
            if($("like_mess").value == true)
                $('like').className = "far fa-thumbs-up";
            else
                $('like').className = "fas fa-thumbs-up";
*/
        }
    };
    var id_topic = $('id_topic').value;

    xmlhttp.open("POST", "add_like.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id_topic=" + id_topic);
}

function loadLikes(){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            $("showLikes").innerHTML = xmlhttp.responseText;
        }
    };
    var id_topic = $('id_topic').value;

    xmlhttp.open("POST", "show_likes.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("show_like_topic_id=" + id_topic);
}

function openReplay(){
    $('reply').style.display="block";
}