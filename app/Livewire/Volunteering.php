<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VolunteerActivity;
use App\Models\VolunteerApplication;

class Volunteering extends Component
{
    public $name, $email, $phone, $message;
    public $activities;
    public $selectedActivity;
    public $showModal = false;
    public $showJoinTeamModal = false;

    public function mount()
    {
        $this->activities = VolunteerActivity::orderBy('date_time', 'asc')->get();
    }

    public function showActivityDetails($id)
    {
        $this->selectedActivity = $this->activities->find($id);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedActivity = null;
    }
    public function openJoinTeamModal()
    {
        $this->showJoinTeamModal = true;
    }
    public function closeJoinTeamModal()
    {
        $this->showJoinTeamModal = false;
        $this->resetJoinTeamForm();
    }

    public function submitJoinTeamForm()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'nullable|string',
        ]);

        VolunteerApplication::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        $this->closeJoinTeamModal();
        session()->flash('message', 'Thank you for your interest! We will contact you soon.');
    }

    private function resetJoinTeamForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.volunteering');
    }
}