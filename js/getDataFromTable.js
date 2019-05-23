
function $(id){
    return document.getElementById(id);
}


    document.getElementById('crown').addEventListener('click', function() {

        var table = document.getElementById('table'), rIndex;

        for (var i = 0; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex + " "+this.cells[3]);

                $('username_opt').innerHTML = this.cells[3].innerHTML;
                $('username2_opt').innerHTML = this.cells[3].innerHTML;
                $('lastname_opt').innerHTML = this.cells[2].innerHTML;
            }
        }
    });
    function giveAbs(user){
        var xmlhttp = new XMLHttpRequest();
        var x = window.confirm("Are you sure ?");
        if(x) {
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    window.alert("ABS");
                }
            };
            xmlhttp.open("POST", "users.php", true);
            xmlhttp.send("abs="+1+"&user="+user);
        }
    }