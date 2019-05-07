<?php
    session_start();
    if(isset($_SESSION['UserID']) == '') {
        print('<nav>');
        print('<div class="container">');
        print('<div class="nav-wrapper">');
        print('<a href="#" class="brand-logo">N-Ticket</a>');
    }