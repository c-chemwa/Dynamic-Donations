namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminEditUser extends Component
{
    public $user;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $dob;
    public $password;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->address = $this->user->address;
        $this->dob = $this->user->dob;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->user->id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->phone = $this->phone;
        $this->user->address = $this->address;
        $this->user->dob = $this->dob;

        if (!empty($this->password)) {
            $this->user->password = Hash::make($this->password);
        }

        $this->user->save();

        session()->flash('message', 'User updated successfully.');

        return redirect()->route('admin.users');
    }

    public function render()
    {
        return view('livewire.admin.edit-user');
    }
}
