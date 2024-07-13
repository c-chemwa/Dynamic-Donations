<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class BlogName extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.blog-name', [
            'blogs' => Blog::paginate(10),
        ]);
    }
}