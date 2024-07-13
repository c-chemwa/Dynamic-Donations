<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class ViewBlog extends Component
{
    use WithPagination, WithFileUploads;

    public $title, $content, $blogId, $photo;
    public $showCreateModal = false;
    public $showEditModal = false;

    public function create()
    {
        $this->resetFields();
        $this->showCreateModal = true;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $photoPath = $this->photo ? $this->photo->store('photos', 'public') : null;

        Blog::create([
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => auth()->id(),
            'photo_path' => $photoPath,
        ]);

        $this->resetFields();
        $this->showCreateModal = false;
        session()->flash('message', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $this->blogId = $id;
        $this->title = $blog->title;
        $this->content = $blog->content;
        $this->showEditModal = true;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
        ]);

        $blog = Blog::find($this->blogId);

        if ($this->photo) {
            $photoPath = $this->photo->store('photos', 'public');
            // Optionally, delete the old photo
            if ($blog->photo_path) {
                Storage::disk('public')->delete($blog->photo_path);
            }
            $blog->update(['photo_path' => $photoPath]);
        }

        $blog->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->resetFields();
        $this->showEditModal = false;
        session()->flash('message', 'Blog updated successfully.');
    }

    public function delete($id)
    {
        Blog::destroy($id);
        $this->success('Blog deleted successfully');
    }

    public function resetFields()
    {
        $this->title = '';
        $this->content = '';
        $this->blogId = null;
        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.admin.view-blog', [
            'blogs' => Blog::paginate(10),
        ]);
    }
}