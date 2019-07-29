<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>function</title>
    </head>
    <body>
        <h1>function</h1>
        <?php
            $str = "Computer programming is the process of designing and building an executable computer program for accomplishing a specific computing task.Programming involves tasks
            such as: analysis,generating algorithms,profiling algorithms accuracy and resource consumption, and the implementation of algorithms in a chosen programming language";
            echo $str;
            ?>
        <h2>strlen()</h2>
        <?php
            echo strlen($str); ?>
            <h2>nl2br</h2>
            <?php
                echo nl2br($str); ?>
    </body>
</html>
