<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use App\Notifications\NewPostNotification;

class AddPost extends Component
{

    public $title = '';
    public $comment = '';
    public function addpost(){

        $post = new Post();
        $post->title = $this->title;
        $post->comment = $this->comment;
        $post->save();

        $users = User::all(); // Notify all users

        foreach ($users as $user) {
            $user->notify(new NewPostNotification($post));
        }
    }
    public function render()
    {
        return view('livewire.add-post');
    }
}
