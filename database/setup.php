<?php
session_start();
const LOCK = "uqTLnhXpsLeO8Mf";
const KEY = "KhwZJ8yR7HLqEGp";
if (!(isset($_SESSION["LOCK"]) && isset($_SESSION["KEY"]) && $_SESSION["LOCK"] == LOCK && $_SESSION["KEY"] == KEY)) {
    header("Location: ../");
    die();
}
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "123456";
const DB_NAME = "test";