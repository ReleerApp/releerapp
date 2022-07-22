<?php

namespace App\Controllers;

use __PHP_Incomplete_Class;
use App\Models\Book;
use App\Core\View;

class BooksController
{

    public function __construct()
    {
        var_dump($_GET);

        if (isset($_GET['action']) && $_GET['action'] == 'delete') {
            $this->delete($_GET['id']);
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'store') {
            $this->store($_POST);
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'edit') {
            $this->edit($_GET['id']);
            return;
        }

        if (isset($_GET['action']) && $_GET['action'] == 'create') {
            $this->create();
            return;
        }

        $this->index();
    }

    public function index()
    {
        $model = new Book();
        $books = $model->allBook();
        new View('booksList', ['books' => $books]);
    }

    public function create()
    {
        new View('vencedor', ["action" => 'store']);
    }

    public function store(array $request)
    {
        $model = new Book(
            id: null,
            bookname: $request["bookname"],
            author: $request["author"],
            gender: $request["gender"],
            isbn: $request["isbn"],
            price: $request["price"],
            bookstate: $request["bookstate"]

            
        );

        $model->saveBook();
        $this->index();
    }

    public function edit(int $id)
    {
        $model = new Book();
        $book = $model->findById($id);

        new View("form", ["books" => $book, "action" => 'update']);
    }

    public function delete(int $id)
    {
        $model = new Book();
        $book = $model->findById($id);
        $book->destroy();

        $this->index();
    }
}
