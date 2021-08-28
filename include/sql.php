<?php
require_once('config.php');
require_once('database.php');

function find_by_sql($sql)
{
    global $db;
    $result = $db->query($sql);
    $result_set = $db->while_loop($result);
    return $result_set;
}

function find_by_id($table, $id)
{
    global $db;
    $sql = $db->query("SELECT * FROM $table WHERE id = '{$id}' LIMIT 1");
    if ($result = $db->fetch_assoc($sql)) {
        return $result;
    } else null;
}

function get_postid_from_div($table){
    global $db;
    $sql = "SELECT post.id FROM $table, post ";
    $sql .= "WHERE $table.FK_post = post.id ";
    return find_by_sql($sql);
}

function find_post_by_category($category)
{
    global $db;
    $sql = "SELECT post.* FROM category, post ";
    $sql .= "WHERE category.id = post.FK_category ";
    $sql .= "AND category.cateCode= '$category'";
    return find_by_sql($sql);
}

function get_post($id)
{
    global $db;
    $sql = "SELECT * FROM post ";
    $sql .= "WHERE post.id = $id";
    return find_by_sql($sql);
}

function get_img_by_postid($id)
{
    global $db;
    $sql = "SELECT image.* FROM image, post ";
    $sql .= "WHERE image.FK_post = post.id ";
    $sql .= "AND post.id = $id";
    return find_by_sql($sql);
}

function get_imgvideo_by_postid($id)
{
    global $db;
    $sql = "SELECT video.* FROM video, post ";
    $sql .= "WHERE video.FK_post = post.id ";
    $sql .= "AND post.id = $id";
    return find_by_sql($sql);
}

function get_video_by_postid($id)
{
    global $db;
    $sql = "SELECT video.videourl FROM video, post ";
    $sql .= "WHERE post.id = video.FK_post ";
    $sql .= "AND post.id = $id";
    return find_by_sql($sql);
}

function get_post_by_div($div, $id){
    global $db;
    $sql = "SELECT post.* FROM post, $div ";
    $sql .= "WHERE post.id = $div.FK_post ";
    $sql .= "AND $div.id = $id";
    return find_by_sql($sql);
}

function get_category_by_postid($id)
{
    global $db;
    $sql = "SELECT category.title FROM category, post ";
    $sql .= "WHERE category.id = post.FK_category AND post.id = $id";
    return find_by_sql($sql);
}

function get_postid_from_catenewsid($id){
    global $db;
    $sql = "SELECT categorynews.FK_post FROM categorynews ";
    $sql .= "WHERE categorynews.FK_category = $id LIMIT 2";
    return find_by_sql($sql);
}

function get_categorynews($id){
    global $db;
    $sql = "SELECT * FROM categorynews ";
    $sql = "WHERE categorynews.id = $id";
    return find_by_sql($sql);
}