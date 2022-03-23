<?php
if (!empty($_GET['q'])) {

    if ($_GET['q']) {
        $mx = str_replace(" ", "-", $_GET['q']);
        $mx = strtolower($mx);
        $url = '/cari/' . $mx . '';
    } else {
        $url = '/';
    }
}
header('location:' . $url . '');
