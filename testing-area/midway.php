<?php
    include 'functions.php';

    switch ($_POST['functionname'])
    {
        case 'semester1':
            ValgSemesterOne();
            break;
    }
?>