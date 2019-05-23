
function $(id){
    return document.getElementById(id);
}

$('abs').addEventListener('click', giveAbs);
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
                $('reg_opt').innerHTML = this.cells[6].innerHTML;
                $('modal-photo').src = "img/profile/"+this.cells[5].innerHTML+"";


                if(this.cells[7].innerHTML == 1)
                    $('status_opt').innerHTML = "ABS - Administrator";
                else
                    $('status_opt').innerHTML = "Drina Community Member";

            }
        }
    });
    function giveAbs(){
        var xmlhttp = new XMLHttpRequest();
        var user = $('username2_opt').innerHTML;
        var x = window.confirm("Are you sure you want to change the status of users "+user);
        if(x) {
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    alert(xmlhttp.responseText);
                }
            };

            xmlhttp.open("POST", "users.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("abs="+1+"&user="+user);
        }
    }