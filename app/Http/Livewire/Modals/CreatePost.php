<?php

namespace App\Http\Livewire\Modals;

use App\Http\Livewire\Modals\BaseModal;
use App\Models\Post;

class CreatePost extends BaseModal
{
    public $title, $body, $user_by,$isOpen = false;

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'user_by' => 'required'
    ];

    protected $listeners = [
        'createPost' => 'createPost'
    ];

    public function createPost()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function submit()
    {
        $this->validate();
        $post = Post::create([
           'title'=>$this->title,
           'body'=>$this->body,
           'user_by'=>$this->user_by,
        ]);

        $this->toggleCreatePost();
        $this->emit('postCreated',$post);
    }

    public function render()
    {
        return view('livewire.modals.create-post');
    }
}
