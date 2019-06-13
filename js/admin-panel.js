
window.addEventListener("load", init);

function checkBanUnban(){
    var status = $('status').innerHTML;
    var ban = $('ban');

    if(status == "Banned")
        ban.innerHTML = "UNBAN";
    else
        ban.innerHTML = "BAN";
}

function $(id){
    return document.getElementById(id);
}
function init() {
    //     $('crown').addEventListener('click', giveAbs);
    //      $('addtopiccc').addEventListener('click', sendAddTopicRequest);
}
function sendAddTopicRequest() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert(xmlhttp.responseText);
        }
    };
    var title = $('title').value;
    var tag = $('tag').value;
    var desc = $('desc').value;

    var content = $('content').value;
    var content2 = content.toString();


    var cover = $('cover').value;
    var cover2 = cover.substr(12);


    xmlhttp.open("POST", "add_topic.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("title=" + title + "&tag=" + tag + "&desc=" + desc + "&content=" + content2 + "&cover=" + cover2);
}