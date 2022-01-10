<?php

class crud
{

    function __construct()
    {
        // $conn = mysqli_connect('localhost', 'root', '', 'hr');
    }

    function create()
    {
    }

    function update()
    {
    }

    function delete()
    {

        // $conn = mysqli_connect('localhost', 'root', '', 'hr');

        if (isset($_GET['id'])) {
            $employee_id = $_GET['id'];
        }

        $query_delete = "DELETE from employees where employee_id =$employee_id";
        mysqli_query($conn, $query_delete);

        header('location: table.php');
    }

    function show()
    {
    }
}

$crud = new crud;