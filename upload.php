<?php
    if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
        move_uploaded_file($_FILES["avatar"]["tmp_name"], $_FILES["avatar"]["name"]);
    }