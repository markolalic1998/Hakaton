window.addEventListener('load', init);
window.addEventListener('load', showCommunities);
window.addEventListener('load', ajaxSearch);

function $(id){
    return document.getElementById(id);
}

function init(){
    $('wall-btn').addEventListener('click', wallBtn);
    $('info-btn').addEventListener('click', infoBtn);
    $('sett-btn').addEventListener('click', settBtn);
    $('click_for_more').addEventListener('click', clickForMore);
    $('members-btn').addEventListener('click', membersBtn);
    $('hideYourComm').addEventListener('click', showHideComm);
    $('findComm').addEventListener('keyup', ajaxSearch);
    $('x').addEventListener('click', function(){
        $('alone').style.display = "none";
    });
    $('clickRoleName').addEventListener('click', function(){
        var addRoleName = $('addRoleName').style.display;
        if(addRoleName == "none") {
            $('addRoleName').style.display = "block";
            $('addRoleNameHint').style.display = "block";
        }
        else {
            $('addRoleName').style.display = "none";
            $('addRoleNameHint').style.display = "none";
        }
    });
    $('createChat').addEventListener('mouseover', function(){
        var prove = $('plus').className;

        if(prove == "far fa-plus-square animated fadeIn")
            $('plus').className = "fas fa-plus-square animated fadeIn";
        else
            $('plus').className = "far fa-plus-square animated fadeIn";

    });

    $('publish2').addEventListener('click', addMess);
    $('ch').addEventListener('click', chCommName);

    $('next').addEventListener('click', function(){
        $('step1').style.display = "block";
        $('step2').style.display = "none";
        $('step3').style.display = "none";
        $('step4').style.display = "none";
        $('next').style.display = "none";

    });

    $('next1').addEventListener('click', function(){
        $('step1').style.display = 'none';
        $('step2').style.display = "block";
        $('step3').style.display = "none";
        $('step4').style.display = "none";
        $('next').style.display = "none";
        check1();

    });
    $('next1b').addEventListener('click', function(){
        $('step1').style.display = "none";
        $('step2').style.display = "none";
        $('step3').style.display = "none";
        $('step4').style.display = "none";
        $('next').style.display = "block";

    });
    $('next2').addEventListener('click', function(){
        $('step1').style.display = 'none';
        $('step2').style.display = "none";
        $('step3').style.display = "block";
        $('step4').style.display = "none";
        check2();
    });
    $('next2b').addEventListener('click', function(){
        $('step1').style.display = "block";
        $('step2').style.display = "none";
        $('step3').style.display = "none";
        $('step4').style.display = "none";
        $('next').style.display = "none";

    });

    $('next3').addEventListener('click', function(){
        $('step1').style.display = 'none';
        $('step2').style.display = "none";
        $('step3').style.display = "none";
        $('step4').style.display = "block";
        check3();

        var xio = $('logo').value;
        $('newlogo').innerHTML = '<i class="'+xio+'" style="font-size: 30px;"></i>';
        var yio = $('inputStep1').value;
        $('newname').innerHTML = yio;
    });
    $('create').addEventListener('click', createComm);

}
$('next3b').addEventListener('click', function(){
    $('step1').style.display = 'none';
    $('step2').style.display = "block";
    $('step3').style.display = "none";
    $('step4').style.display = "none";
});




/*  onClick function  */

        function check1(){
            var tu = $('inputStep1').value;
            if(tu < 5 || tu > 255)
            {
                $('inputStep1').style.borderColor = "red";
                $('step1').style.display = "block";
                $('step2').style.display = "none";
                $('error1').innerHTML = "Please fill the input field";
            }
            else
            {
                $('step1').style.display = "none";
            }

        }

        function check2(){
            var ju = $('logo').value;
            if(ju == "choose"){
                $('logo').style.borderColor = "red";
                $('step2').style.display = "block";
                $('step3').style.display = "none";
                $('error2').innerHTML = "Please choose the logo";
            }
            else
            {
                $('step2').style.display = "none";
            }
        }

        function showHideComm(){
            var showComm = $('showAllComm').style.display;
            var hideYourComm = $('hideYourComm2');
            if(showComm == "block")
            {
                $('showAllComm').style.display = "none";
                hideYourComm.className = "fas fa-sort-down";
            }
            else
            {
                $('showAllComm').style.display = "block";
                hideYourComm.className = "fas fa-sort-up";

            }
        }
        function check3(){
            var ru = $('description2').value;

            if(ru < 5 || ru > 255)
            {
                $('description2').style.borderColor = "red";
                $('step3').style.display = "block";
                $('step4').style.display = "none";
                $('error3').innerHTML = "Please fill the input field";
            }
            else
            {
                $('step3').style.display = "none";
            }
        }
        function wallBtn(){
            $('wall-btn').style.backgroundColor = 'white';
            $('info-btn').style.backgroundColor = '#f7f7f7';
            $('members-btn').style.backgroundColor = '#f7f7f7';
            $('sett-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "block";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function infoBtn(){
            $('info-btn').style.backgroundColor = 'white';
            $('wall-btn').style.backgroundColor = '#f7f7f7';
            $('members-btn').style.backgroundColor = '#f7f7f7';
            $('sett-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "none";
            $('members').style.display = "none";
            $('information').style.display = "block";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function membersBtn(){
            $('members-btn').style.backgroundColor = 'white';
            $('info-btn').style.backgroundColor = '#f7f7f7';
            $('wall-btn').style.backgroundColor = '#f7f7f7';
            $('sett-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "block";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function settBtn(){
            $('sett-btn').style.backgroundColor = 'white';
            $('info-btn').style.backgroundColor = '#f7f7f7';
            $('members-btn').style.backgroundColor = '#f7f7f7';
            $('wall-btn').style.backgroundColor = '#f7f7f7';

            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "block";
            $('allComm').style.display = "none";
            $('cr').style.display = "none";
        }
        function clickForMore(){
            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "none";
            $('allComm').style.display = "block";
            $('cr').style.display = "none";


            showCommunities();
        }

        function chatRoomOpen(crName){
            $('wall').style.display = "none";
            $('information').style.display = "none";
            $('members').style.display = "none";
            $('settings').style.display = "none";
            $('allComm').style.display = "none";
            $('cr').style.display = "block";
        }

        function setFocus(){
            document.getElementById('makeStatusComment').focus(this);
        }

        $('publish').addEventListener('click', addStatus);

        document.getElementById('button').addEventListener('click', function (){
            let x = document.getElementById('new-community');
            let y = x.style.display;
            if(y != "block")
                x.style.display = "block";
            else
                x.style.display = "none";
        });

        $('status-group').innerHTML = $('comm-name').value;
 //       document.getElementById('card-hover').addEventListener('click', openComm);

        function openComm(commID){
            var xmlhttp = new XMLHttpRequest();
            $('logo').className = "col-sm-12";
            $('c_name').className = "col-sm-12";
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('alone').style.display = "none";
                     var x = xmlhttp.responseText;
                    console.log(x);
                    var y = xmlhttp.responseText.split(",");
                    $('status-group').innerHTML = y[1];

                    if(xmlhttp.responseText != "Error with data !"){
                        $('logo').className = "col-sm-12 animated pulse";
                        $('c_name').className = "col-sm-12 animated pulse";

                        // About communities
                        $('comm-logo').className=y[0];
                        $('comm-name').innerHTML=y[1];
                        $('comm-id').innerHTML=y[2];
                        $('comm-logo').style.color = y[3];

                        // For information panel
                        $('info-title').innerHTML = y[1];
                        $('c_abs').innerHTML = y[4];
                        $('comm-abs').src= "img/profile/"+y[5];
                        $('info-comm-logo').className = y[0];
                        $('info-comm-logo').style.color = y[3];

                        //For members panel
                        $('members-title').innerHTML = y[1];
                        $('comm-members-show').innerHTML = y[6];


                        loadStatus();
                        loadCr(commID);
                    }

                }
            };

            xmlhttp.open("POST", "load_comm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("comm_id="+commID);

        }

        function addStatus(){
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                    loadStatus();
                }
            };
            var statusText = $('addStatus').value;
            var id_comm = $('comm-id').innerHTML;

            console.log(statusText+" "+id_comm);

            xmlhttp.open("POST", "add_comm_status", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send('statusText='+statusText+"&id_comm="+id_comm);
            $('addStatus').innerHTML = "";
        }

        function loadStatus(){
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('statusBlock').innerHTML = xmlhttp.responseText;
                }
            };

            var id_comm = $('comm-id').innerHTML;
            xmlhttp.open("POST", "load_comm_status.php",  true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_comm="+id_comm);
        }

        function showCommunities(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('showAllComm').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "show_communities.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
        }

        function commy(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('your').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "show_communities.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
        }

        function ajaxSearch(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    $('searchResults').innerHTML = xmlhttp.responseText;
                }
            };
            var getValue = $('findComm').value;

            xmlhttp.open("POST", "ajaxSearchComm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("value="+getValue+"&code="+1);
        }

        function ajaxShowJoinBtn(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

                }
            };

            xmlhttp.open("POST", "ajaxSearchComm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_comm="+id_comm+"&code2="+1);
        }

        function ajaxJoinComm(id_comm){

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);

                    if(xmlhttp.responseText == "You are now member of your new community !")
                        showCommunities();
                }
            };

            xmlhttp.open("POST", "ajaxSearchComm.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_comm="+id_comm+"&code="+2);
        }

        function ajaxMemberAlone(id_member)
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

                    var u = xmlhttp.responseText;
                    var j = [];
                    j = u.split(';');

                    $('alone_mem_pic').src="img/profile/"+j[2];
                    $('user_mem').innerHTML = j[0];
                    $('status_mem').innerHTML = j[1];
                    $('member-name').innerHTML = j[3];
                    $('alone').style.display = "block";
                }
            };

            xmlhttp.open("POST", "showMemberAlone.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("id_member="+id_member);
        }

        function loadCr(commID){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    $('chats').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "load_chatrooms.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("comm_id="+commID);
        }

        function openCr(crID){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    console.log(xmlhttp.responseText);

                    chatRoomOpen();
                    $('messBox').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "openChatRoom.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("cr-id="+crID);
        }

        function addMess(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                }
            };
            var com = $('comm-id').value;
            var text_mess = $('messangerText').value;
            var crID = $('cr1').value;


            xmlhttp.open("POST", "load_chatrooms.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("crID="+crID+"&code="+2+"&comm-id="+com+"&text="+text_mess);
        }

        function createComm(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                    $('step1').style.display = "none";
                    $('step2').style.display = "none";
                    $('step3').style.display = "none";
                    $('step4').style.display = "none";
                    $('next').style.display = "none";
                    $('new-community').style.display = "none";

                    $('inputStep1').innerHTML = "";
                }
            };
            var input1 = $('inputStep1').value;
            var c_logo = $('logo').value;
            var opis = $('description2').value;


            xmlhttp.open("POST", "create_community.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("input1="+input1+"&c_logo="+c_logo+"&opis="+opis);
        }