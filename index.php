<?php
require_once('config.php');
include('admin_aroundme/conf/config.php');
include('inc/header.php');


if (isset($_SESSION['msg_status'])) {
    $msg_status = $_SESSION['msg_status'];
    unset($_SESSION['msg_status']);
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = '';
    foreach ($_POST as $k => $v) {
        if (!empty($data)) $data .= " , ";
        $data .= " `{$k}` = '{$v}' ";
    }
    $sql  = "INSERT INTO `messages` set {$data}";
    $save = $conn->query($sql);
    if ($save) {
        $msg_status = "success";
        foreach ($_POST as $k => $v) {
            unset($_POST[$k]);
        }
        $_SESSION['msg_status'] = $msg_status;
        header('location:' . $_SERVER['HTTP_REFERER']);
    } else {
        $msg_status = "failed";
        echo "<script>console.log('" . $conn->error . "')</script>";
        echo "<script>console.log('Query','" . $sql . "')</script>";
    }
}

include('Gallery.php');
