<?php
    $servername = "localhost";
    $username = "newspaper";
    $dbpassword = "newspaper";
    $dbname = "newspaper_db";

//THIS IS QUERY FUNCTION FOR ALL NEWS CONTENT
function get_news_content($number){

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);
    $conn->set_charset('utf8');
    $sql = "SELECT * FROM news_info order by id desc limit $number";
    $result = $conn->query($sql);
    return $result;
    $conn->close();
}



function get_news_content_category($category_name){

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);
    $conn->set_charset('utf8');
    $sql = "SELECT * FROM news_info where news_categorie= '$category_name' order by id desc ";
    $result = $conn->query($sql);
    return $result;
    $conn->close();
}







//THIS IS QUERY FUNCTION FOR SHOWING NEWS POSTED
function get_news_post($post_no){

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);
    $conn->set_charset('utf8');
    $sql = "SELECT * FROM news_info where id='$post_no'";
    $result = $conn->query($sql);
    return $result;
    $conn->close();
}

//THIS IS QUERY FUNCTION FOR SHOWING NEWS POST'S COMMENT
function get_news_post_comment($post_no){

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);
    $conn->set_charset('utf8');
    $sql = "SELECT * FROM public_comment, news_info WHERE public_comment.post_id = news_info.id and id='$post_no'";
    $result = $conn->query($sql);
    return $result;
    $conn->close();
}


//THIS IS QUERY FUNCTION FOR COUNT TOTAL COMMENT FOR EACH POST
function news_commnet_count_update($comment_count,$post_no){

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);
    $conn->set_charset('utf8');
    $sql = "UPDATE news_info SET total_comment = '$comment_count' WHERE id = '$post_no' ";
    $conn->query($sql);

    $conn->close();
}



//THIS IS QUERY FUNCTION FOR COMMENT SUBMIT
function news_commnet_submit($user_name,$email,$comment,$post_no){

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);
    $conn->set_charset('utf8');
    $sql = "INSERT INTO public_comment (comment_id, commenter_name, comment_email, comment, post_id, comment_date) VALUES (NULL, '$user_name', '$email', '$comment', '$post_no', CURRENT_TIMESTAMP)";
    $conn->query($sql);

    $conn->close();
}