namespace App\Http\Livewire;

use Livewire\Component;

class AdminSettings extends Component
{
    public $theme;

    public function mount()
    {
        $this->theme = session('theme', 'light');
    }

    public function updateTheme()
    {
        session(['theme' => $this->theme]);
    }

    public function render()
    {
        return view('livewire.admin-settings');
    }
}
