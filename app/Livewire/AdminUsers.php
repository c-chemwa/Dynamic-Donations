namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AdminUsers extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::select('id', 'name', 'phone', 'email', 'address', 'dob')->get();
    }

    public function render()
    {
        return view('livewire.admin-users');
    }
}
