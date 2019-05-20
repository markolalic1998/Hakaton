
    var table = document.getElementById('table'), rIndex;

    for(var i = 1; i<table.rows.length; i++){
        table.rows[i].onclick = function(){
            rIndex = this.rowIndex;
            console.log(rIndex);
            $('username_opt').value = this.cells[3].innerHTML;
            $('username2_opt').value = this.cells[3].innerHTML;
            $('lastname_opt').value = this.cells[2].innerHTML;
        }
    }
-