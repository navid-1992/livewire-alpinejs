<?php

namespace App\Http\Livewire\Modals;

use App\Models\Post;
use Livewire\Component;

class UpdatePost extends BaseModal
{
    public $title,$body,$user_by,$postid,$isOpen = false;

    protected $listeners = [
        'update-post'=>'updatePost'
    ];

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'user_by' => 'required'
    ];

    public function updatePost($id)
    {
        $post = Post::where('id',$id)->first();
        $this->postid = $id;
        $this->body = $post->body;
        $this->user_by = $post->user_by;
        $this->title = $post->title;
        $this->isOpen = !$this->isOpen;

    }

    public function updated($property){
        $this->validateOnly($property);
    }

    public function submit()
    {
        $post = Post::where('id',$this->postid)->update([
            'title'=>$this->title,
            'body'=>$this->body,
            'user_by'=>$this->user_by,
        ]);

        $this->toggleCreatePost();
        $this->emit('postUpdated');
    }

    public function render()
    {
        return view('livewire.modals.update-post');
    }
}
