var $ = function (id) {
    return document.getElementById(id);
};

window.addEventListener('load', init);

function init() {
    $("id").addEventListener('click', loadData);
    $('my').addEventListener('click', loadMyProfile);
    $('settings').addEventListener('click', loadSettings);
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
            $("info").innerHTML = xmlhttp.responseText;
        }
    };
    var name = $('username').value;

    xmlhttp.open("POST", "ajaxProfile.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // *
    xmlhttp.send("name=" + name);
    $('username').value = "";
}

function loadjson(){
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
            var jsonData = JSON.parse(xmlhttp.responseText);

            for(var i=0; i<jsonData.users.length; i++) {
                var user = jsonData.users[i];
                console.log(user.username);
                $("readjson").innerHTML += user.username+"<br>";
            }
        }
    };
    xmlhttp.open("POST", "jsonread.php", true);
    xmlhttp.send();
}
addEventListener('load',loadjson);

function loadMyProfile() {
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
            $("info").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("POST", "ajaxProfile.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // *
    xmlhttp.send("my=" + true);
}

function loadSettings(){
    let x = $('sett');
    let y = x.style.display;
    if(y != "block")
        x.style.display = "block";
    else
        x.style.display = "none";
}