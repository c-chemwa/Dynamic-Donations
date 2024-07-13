<div>
    <x-mary-main full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
            {{-- MENU --}}
            <x-mary-menu activate-by-route>
                {{-- User --}}
                @if($user = auth()->user())
                    <x-mary-menu-separator />
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded"></x-mary-list-item>
                    <x-mary-menu-separator />
                @endif
                <x-mary-menu-item title="Profile" icon="o-eye" link="/dash-profile" />
                <x-mary-menu-item title="History" icon="o-clock" link="/history" />
                <x-mary-menu-item title="Notifications" icon="o-bell" link="/notifications" />
                <x-mary-menu-item title="Donate" icon="o-gift" link="/donate-form" />
                <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-mary-menu-item title="Log out" icon="o-power" link="/logout" />
                    <x-mary-menu-item title="Change Theme" icon="o-moon">
                        <x-mary-theme-toggle darkTheme="coffee" lightTheme="bumblebee" />
                    </x-mary-menu-item>
                </x-mary-menu-sub>
            </x-mary-menu>
        </x-slot:sidebar>

        {{-- CONTENT --}}
        <x-slot name="content">
            @php
            $donations = \App\Models\Donation::with(['user', 'need'])
                ->where('user_id', auth()->id())
                ->get();
        
            $headers = [
                // ['key' => 'user.name', 'label' => 'Name'],
                ['key' => 'need.need_name', 'label' => 'Need'],
                ['key' => 'donation_date', 'label' => 'Date'],
                ['key' => 'quantity', 'label' => 'Quantity'],
                ['key' => 'unit', 'label' => 'Unit'],
                ['key' => 'status', 'label' => 'Status'],
                ['key' => 'receipt_sent', 'label' => 'Receipt Sent'],
                ['key' => 'comments', 'label' => 'Comments'],
                // ['key' => 'admin_approved', 'label' => 'Approval'],
            ];
            @endphp
        
            <x-mary-header title="DONATIONS" with-anchor separator />
            <x-mary-table :headers="$headers" :rows="$donations" striped>
                @foreach($donations as $donation)
                    <tr>
                        <td>{{ $donation->user->name }}</td>
                        <td>{{ $donation->need->need_name }}</td>
                        <td>{{ $donation->donation_date }}</td>
                        <td>{{ $donation->quantity }}</td>
                        <td>{{ $donation->unit }}</td>
                        <td>{{ $donation->status }}</td>
                        <td>{{ $donation->receipt_sent ? 'Yes' : 'No' }}</td>
                        <td>{{ $donation->comments }}</td>
                       // <td>{{ $donation->admin_approved ? 'Approved' : 'Pending' }}</td>
                    </tr>
                @endforeach
            </x-mary-table>
        </x-slot>
    </x-mary-main>
</div>
