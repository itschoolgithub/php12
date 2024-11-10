<pre>
<?php
    // if (file_exists("test2.txt")) {
    //     echo "Файл существует";
    // } else {
    //     echo "Файла нет";
    // }

    // if (is_file("folder")) {
    //     echo "Да, это файл";
    // } else {
    //     echo "Нет, это папка";
    // }

    // if (is_dir("test.txt")) {
    //     echo "Это папка";
    // } else {
    //     echo "Это не папка";
    // }

    // if (!file_exists("test")) {
    //     mkdir("test");
    // }

    // if (file_exists("test") && is_dir("test")) {
    //     rmdir("test");
    // }

    // if (!file_exists("test2.txt")) {
    //     touch("test2.txt");
    // }

    // if (file_exists("test.txt")) {
    //     copy("test.txt", "test-copy.txt");
    // }

    // if (file_exists("test-copy.txt")) {
    //     rename("test-copy.txt", "test-old.txt");
    // }

    // if (file_exists("test-old.txt")) {
    //     rename("test-old.txt", "folder/test-old.txt");
    // }

    // if (file_exists("folder/test-old.txt")) {
    //     unlink("folder/test-old.txt");
    // }

    // echo __FILE__;

    // echo __DIR__;

    // $dir = "folder";
    // if (file_exists($dir) && is_dir($dir)) {
    //     $files = scandir($dir);
    //     unset($files[0], $files[1]);
    //     $files = array_values($files);
    //     foreach ($files as $file) {
    //         if (is_dir($dir . "/" . $file)) {
    //             echo $file . " - папка\n";
    //         } else {
    //             echo $file . " - файл\n";
    //         }
    //     }
    //     // print_r($files);
    // }

    // echo file_get_contents("test.txt");

    // file_put_contents("test.txt", "Hello World");

    // file_put_contents("test.txt", " End!", FILE_APPEND);

    // $a = [
    //     1,
    //     2,
    //     "color" => "red",
    //     [
    //         "a", "b", "c"
    //     ]
    // ];
    // $b = json_encode($a);
    // touch("array.json");
    // file_put_contents("array.json", $b);

    $content = file_get_contents("array.json");
    $array = json_decode($content, true);
    $array["user"] = "John";
    print_r($array);
?>
</pre>