<?php
function get_user_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $user_count="";
    $query="select count(*) as user_count from userdata";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
        $user_count=$row['user_count'];
    }
    return($user_count);
    
}
function get_books_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $books_count="";
    $query="select count(*) as books_count from books";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
    $books_count=$row['books_count'];
    }
    return($books_count);
    
}
function get_cat_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $cat_count="";
    $query="select count(*) as cat_count from category";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
    $cat_count=$row['cat_count'];
    }
    return($cat_count);
    
}
function get_auth_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $authors_count="";
    $query="select count(*) as authors_count from authors";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
    $authors_count=$row['authors_count'];
    }
    return($authors_count);
    
}
function get_issued_books_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $issued_books_count="";
    $query="select count(*) as issued_books_count from issued_books";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
    $issued_books_count=$row['issued_books_count'];
    }
    return($issued_books_count);
    
}
function get_approved_books_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $approved_books_count="";
    $query="select count(*) as approved_books_count from approved_books";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
    $approved_books_count=$row['approved_books_count'];
    }
    return($approved_books_count);
    
}
function get_request_books_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $request_books_count="";
    $query="select count(*) as request_books_count from request_books";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
    $request_books_count=$row['request_books_count'];
    }
    return($request_books_count);
    
}



?>