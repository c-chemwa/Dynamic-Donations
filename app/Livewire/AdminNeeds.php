namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Need;

class AdminNeeds extends Component
{
    public $needs;

    public function mount()
    {
        $this->needs = Need::all();
    }

    public function render()
    {
        return view('livewire.admin-needs');
    }
}
