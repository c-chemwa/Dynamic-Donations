namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Need;
use App\Models\Donation;

class AdminAnalytics extends Component
{
    public $totalUsers;
    public $totalDonations;
    public $totalNeeds;

    public function mount()
    {
        $this->totalUsers = User::count();
        $this->totalDonations = Donation::sum('quantity');
        $this->totalNeeds = Need::count();
    }

    public function render()
    {
        return view('livewire.admin-analytics');
    }
}
