<?php
function get_user_issue_book_count()
{
    $con = mysqli_connect('localhost','root',);
    mysqli_select_db($con,'library');
    $issue_book_count= 0;
    $query="select count(*) as issue_book_count from issued_books where student_name='$_SESSION[name]'";
    $query_run = mysqli_query($con,$query);
    while ($row=mysqli_fetch_assoc($query_run)) {
        $issue_book_count=$row['issue_book_count'];
    }
    return($issue_book_count);
    
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
?>