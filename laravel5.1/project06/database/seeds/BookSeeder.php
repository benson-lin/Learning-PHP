<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\User;
use App\Phone;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $this->getPhone();
    	// $this->getPhoneUser();
        // $this->getBorrowUser();
        $this->getBorrowBooks();
        // $this->getBookCategories();
        // $this->getBorrowBooksThenWhere();
    }

    // 一对一
    public function getPhone()
    {
    	$phone = User::find(1)->phone;
    	echo $phone;
    }


    // 一对一
    public function getPhoneUser()
    {
    	$user = Phone::find(1)->phoneUser;
    	echo $user;
    }

    // 一对多
    public function getBorrowBooks()
    {
    	$books = User::find(1)->borrowBooks;
    	echo $books;
    	var_dump($books);
    }

    // 一对多 belongsTo
    public function getBorrowUser()
    {
    	$user = Book::find(2)->borrowUser;
    	echo $user;
    }

    // 多对多
    public function getBookCategories()
    {
    	$categories = Book::find(2);
    	// echo $categories->bookCategories;
    	//[{"id":3,"name":"Java","created_at":"2016-11-21 02:57:04","updated_at":"2016-11-21 02:57:04","pivot":{"book_id":2,"category_id":3}},{"id":9,"name":"\u7f16\u7a0b\u76f8\u5173","created_at":"0000-00-00 00:00:00","updated_at":"0000-00-00 00:00:00","pivot":{"book_id":2,"category_id":9}}]
    	foreach ($categories->bookCategories as $category) {
    		 echo $category->pivot;
    	}
    	//{"book_id":2,"category_id":3}{"book_id":2,"category_id":9}
  
    }

    // 一对多再筛选
    public function getBorrowBooksThenWhere()
    {
    	$books = User::find(1)->borrowBooks()->where('id',3)->get();
    	echo $books;
    }
}
