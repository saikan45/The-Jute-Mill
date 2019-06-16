@extends('layouts.app')

@section('Header')

<title>Drop Page</title>

@section('content')

<h2>Drop Anything</h2>

<?php

$servername='localhost';
$dbname='jutemills';
$username='root';
$password='';

$conn= new mysqli($servername,$username,$password,$dbname);

$sql="DELETE FROM employee WHERE Name='$name' AND Gender='$gender'";

if($conn->query($sql)===TRUE)
{
    echo "Record deleted from the table<br>";
} else {
    die("Connection Error: ".$conn->error);
}




?>


@stop

@section('footer')

    <script>alert('Warning:<br>Something is going to be erased!')</script>