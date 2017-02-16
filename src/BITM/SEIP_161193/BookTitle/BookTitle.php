<?php
namespace App\BookTitle;

use App\Message\Message;
use App\Model\Database as DB;
use App\Utility\Utility;
use PDO;

class BookTitle extends DB
{
    private $id;
    private $book_name;
    private $author_name;

    public function setData($allPostData=null){

        if(array_key_exists("id",$allPostData)){
            $this->id= $allPostData['id'];
        }

        if(array_key_exists("bookName",$allPostData)){
            $this->book_name= $allPostData['bookName'];
        }

        if(array_key_exists("authorName",$allPostData)){
            $this->author_name= $allPostData['authorName'];
        }
    }

    public function store(){
       $arrData  =  array($this->book_name,$this->author_name);

       $query= 'INSERT INTO book_title (book_name, author_name) VALUES (?,?)';

       $STH = $this->DBH->prepare($query);
       $result = $STH->execute($arrData);

       if($result){
           Message::setMessage("Success! Data has been stored successfully!");
       }
       else{
           Message::setMessage("Failed! Data has not been stored!");
       }

        Utility::redirect('index.php');
    }

    public function view(){
        $sql = "Select * from book_title where id=".$this->id;
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetch();
    }

    public function index(){
        $sql = "Select * from book_title where soft_deleted='No'";
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetchAll();
    }

    public function trashed(){
        $sql = "Select * from book_title where soft_deleted='Yes'";
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetchAll();
    }
}
