<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\VolunteerActivity;

class VolunteerActivities extends Component
{
    public $title, $description, $activityId, $date_time, $location;
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
            'title' => 'required|string',
            'description' => 'required',
            'date_time' => 'required|date',
            'location' => 'required|string',
        ]);

        VolunteerActivity::create([
            'title' => $this->title,
            'description' => $this->description,
            'date_time' => $this->date_time,
            'location' => $this->location,
        ]);

        $this->resetFields();
        $this->showCreateModal = false;
        session()->flash('message', 'Volunteer activity created successfully.');
    }
    public function edit($id)
    {
        $activity = VolunteerActivity::find($id);
        $this->activityId = $id;
        $this->title = $activity->title;
        $this->description = $activity->description;
        $this->date_time = $activity->date_time;
        $this->location = $activity->location;
        $this->showEditModal = true;
    }
    public function update()
    {
        $this->validate([
            'title' => 'required|string',
            'description' => 'required',
            'date_time' => 'required|date',
            'location' => 'required|string',
        ]);

        $activity = VolunteerActivity::find($this->activityId);
        $activity->update([
            'title' => $this->title,
            'description' => $this->description,
            'date_time' => $this->date_time,
            'location' => $this->location,
        ]);

        $this->resetFields();
        $this->showEditModal = false;
        session()->flash('message', 'Volunteer activity updated successfully.');
    }
    public function delete($id)
    {
        VolunteerActivity::destroy($id);
        $this->success('Volunteer activity deleted successfully');
    }
    public function resetFields()
    {
        $this->title = '';
        $this->description = '';
        $this->activityId = null;
        $this->date_time = null;
        $this->location = '';
    }
    public function render()
    {
        $activities = VolunteerActivity::paginate(10);
        return view('livewire.admin.volunteer-activities', compact('activities'));
    }
}