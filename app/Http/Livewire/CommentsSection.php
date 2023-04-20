<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentsSection extends Component
{
    public $post;
    public $content;
    public $author;
    public $successMessage;
    protected $rules = [
        'author' => '',
        'content' => 'required|min:4'
    ];

    public function render()
    {
        return view('livewire.comments-section');
    }

    public function publishComment()
    {
        $this->validate($this->rules);

        Comment::create([
            'content' => $this->content,
            'author' => $this->author ?? 'Anonymous',
            'post_id' => $this->post->id
        ]);

        $this->successMessage = 'Comment successfully published';
        $this->reset('content', 'author');
        $this->post->refresh();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
