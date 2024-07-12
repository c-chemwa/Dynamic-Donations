namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notification;

class AdminNotifications extends Component
{
    public $notifications;

    public function mount()
    {
        $this->notifications = Notification::where('status', 'pending')->get();
    }

    public function approve($id)
    {
        $notification = Notification::find($id);
        $notification->status = 'approved';
        $notification->save();

        $this->notifications = Notification::where('status', 'pending')->get();
    }

    public function render()
    {
        return view('livewire.admin-notifications');
    }
}
