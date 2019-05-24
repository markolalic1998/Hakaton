
function $(id){
    return document.getElementById(id);
}

$('abs').addEventListener('click', giveAbs);
$('ban').addEventListener('click', banUser);

    document.getElementById('crown').addEventListener('click', function() {

        var table = document.getElementById('table'), rIndex;

        for (var i = 0; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex + " "+this.cells[5]);

                $('username_opt').innerHTML = this.cells[3].innerHTML;
                $('username2_opt').innerHTML = this.cells[3].innerHTML;
                $('firstname_opt').innerHTML = this.cells[1].innerHTML;
                $('lastname_opt').innerHTML = this.cells[2].innerHTML;
                $('reg_opt').innerHTML = this.cells[7].innerHTML;
                $('modal-photo').src = "img/profile/"+this.cells[6].innerHTML+"";


                if(this.cells[8].innerHTML == 1)
                    $('status_opt').innerHTML = "ABS - Administrator";
                else
                    $('status_opt').innerHTML = "Drina Community Member";

                if(this.cells[9].innerHTML == 1)
                    $('status_opt').innerHTML = "Banned";
            }
        }
    });
    function giveAbs(){
        var xmlhttp = new XMLHttpRequest();
        var user = $('username2_opt').innerHTML;
        var x = window.confirm("Are you sure you want to change the status of user "+user);
        if(x) {
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var y = confirm(xmlhttp.responseText);
                    if(y || !y)
                        sendAjax();
                }
            };

            xmlhttp.open("POST", "users.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("abs="+1+"&user="+user);
        }
    }

    function banUser(){
        var xmlhttp = new XMLHttpRequest();
        var user = $('username2_opt').innerHTML;
        var status = $('status_opt').innerHTML;
        var banned = "BAN";
        if(status == "Banned")
            banned = "UNBAN";
        else
            banned = "BAN";
        var x = window.confirm("Are you sure you want to "+banned+" user "+ user);
        if(x){
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                   var y = confirm(xmlhttp.responseText);
                   if(y || !y)
                       sendAjax();
                }
            };

            xmlhttp.open("POST", "users.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("ban="+1+"&abs="+0+"&user="+user);
        }
    }

function sendAjax(){

    //    document.getElementById("table_mess").innerHTML = '<img src="img/ajax_loader.gif" alt="loader">';


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function (){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            $('table_mess').innerHTML = "";
        }
    };


    xmlhttp.open("POST", "admin-panel.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("table="+1);

}







