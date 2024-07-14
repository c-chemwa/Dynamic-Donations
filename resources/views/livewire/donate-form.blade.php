<div>
    <x-mary-main full-width>
        {{-- SIDEBAR --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
            {{-- MENU --}}
            <x-mary-menu activate-by-route>
                @if($user = auth()->user())
                    <x-mary-menu-separator />
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded">
                    </x-mary-list-item>
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
        <x-slot:content>
            @if (session()->has('message'))
                <div class="alert alert-success mb-4">
                    {{ session('message') }}
                </div>
            @endif

            @php
            $headers = [
                ['key' => 'need_name', 'label' => 'Name'],
                ['key' => 'quantity_required', 'label' => 'Need'],
                ['key' => 'unit', 'label' => 'Unit'],
                ['key' => 'need_type', 'label' => 'Type'],
                ['key' => 'fulfilled', 'label' => 'Fulfilled'],
                ['key' => 'actions', 'label' => 'Actions'],
            ];
            @endphp

            <x-mary-header title="DONATE" with-anchor separator />
            <x-mary-table :headers="$headers" :rows="$needs" striped>
                @foreach($needs as $need)
                    @scope('actions', $need)
                    <div class="flex">
                        @if(!$need->fulfilled)
                            <input type="checkbox" wire:model="selectedNeeds" value="{{ $need->id }}">
                        @endif
                    </div>
                    @endscope
                @endforeach
            </x-mary-table>

            <x-mary-button label="Donate" icon="o-gift" wire:click="openDonationModal" class="btn bg-primary text-white" /> 
      

            <x-mary-modal title="Donate" wire:model="showDonationModal">
                <x-mary-form wire:submit.prevent="makeDonation">
                    @foreach($selectedNeeds as $needId)
                        <h3 class="text-lg font-semibold mb-2">{{ $needs->firstWhere('id', $needId)->need_name }}</h3>
                        <x-mary-input label="Donation Date" type="date" wire:model="donations.{{ $needId }}.donation_date" />
                        <x-mary-input label="Quantity" type="number" wire:model="donations.{{ $needId }}.quantity" />
                        <x-mary-input label="Unit" wire:model="donations.{{ $needId }}.unit" />
                        <x-mary-input label="Comments" type="textarea" wire:model="donations.{{ $needId }}.comments" />
                        <hr class="my-4">
                    @endforeach

                    <x-slot:actions>
                        <x-mary-button wire:click="closeDonationModal" class="btn btn-primary" spinner label="Cancel" />
                        <x-mary-button type="submit" class="btn btn-success" label="Donate" />
                    </x-slot:actions>
                </x-mary-form>
            </x-mary-modal>
        </x-slot:content>
    </x-mary-main>

</div>
