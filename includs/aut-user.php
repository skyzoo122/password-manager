<?php
if (!$_SESSION["user_logged"]) {
    header("location: ../Log-in/");
}
