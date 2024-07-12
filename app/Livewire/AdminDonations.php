namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Donation;

class AdminDonations extends Component
{
    public $donations;

    public function mount()
    {
        $this->donations = Donation::select('id', 'user_id', 'item', 'date', 'quantity')->get();
    }

    public function render()
    {
        return view('livewire.admin-donations');
    }
}
