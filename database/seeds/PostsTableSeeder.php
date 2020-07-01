<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->title = 'Interface là gì ?';
        $post->content_post = 'Interface hiểu nôm na ra nó là một bản thiết kế các phương thức (hàm) hoặc có thể hiểu dễ hơn nữa nó là một khuôn mẫu cố định mà khi nhìn vào nó chúng ta có thể biết được những hằng, phương thức mà class implements nó chắc chắn phải triển khai
Các tính chất quan trọng của interface :
-Interface không phải là một lớp
-Trong interface chỉ được khai báo hằng không khai báo biến
-Các phương thức trong interface chỉ được gọi tên chứ không được định nghĩa
-Không thể khởi tạo đối tượng từ interface
-Các interface có thể kế thừa lẫn nhau
-Một class có thể implements nhiều interface';
        $post->description = 'Interface in PHP';
        $post->save();

        $post = new \App\Post();
        $post->title = 'Kiến thức module càng nặng càng khó';
        $post->content_post = 'Kiến thức học càng ngày càng khó, đọc lý thuyết như mù chữ vậy. Phải cố gắng lên thôi còn vài ba tuần nữa là kết thúc module rồi phải cố gắng nhiều hơn thôi';
        $post->description = 'Interface in PHP';
        $post->save();

    }
}
