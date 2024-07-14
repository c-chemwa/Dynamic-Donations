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
            <x-mary-header title="NEEDS" with-anchor separator class="text-primary"/>
            
            <div class="mb-4 flex space-x-4">
                <input wire:model.debounce.300ms="search" type="text" placeholder="Search needs..." class="form-input">
                <select wire:model="needType" class="form-select">
                    <option value="">All Categories</option>
                    @foreach($needTypes as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>

            <x-mary-table :headers="$headers" :rows="$needs" striped>
                @foreach($needs as $need)
                    <tr>
                        <td>{{ $need->id }}</td>
                        <td>{{ $need->need_name }}</td>
                        <td>{{ $need->quantity_required }}</td>
                        <td>{{ $need->unit }}</td>
                        <td>{{ $need->need_type }}</td>
                    </tr>
                @endforeach
            </x-mary-table>

            <x-mary-button label="Donate" class="btn bg-primary text-white mt-4" wire:click="redirectToDonateForm" />
        </x-slot:content>
    </x-mary-main>
</div>
