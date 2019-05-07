<?php
    session_start();
    if(isset($_SESSION['UserID']) == '') {
        print('<nav>');
        print('<div class="container">');
        print('<div class="nav-wrapper">');
        print('<a href="#!" class="brand-logo">N-Ticket</a>');
        print('<a href="#" data-target="mobilemenu" class="sidenav-trigger"><i class="material-icons">menu</i></a>');
        print('<ul class="right hide-on-med-and-down">');
        print('<li><a href="http://n-point.pw">N-Point Webサイト</a></li>');
        print('</ul>');
        print('</div>');
        print('</div>');
        print('</nav>');
        print('<script>$(document).ready(function(){$(".sidenav").sidenav();});</script>')
    } else {

    }
?>