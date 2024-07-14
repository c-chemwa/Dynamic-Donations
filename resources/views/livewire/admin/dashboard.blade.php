<div>
    <x-mary-main full-width>
        <x-slot name="sidebar" drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
            <x-mary-menu activate-by-route>
                {{-- User --}}
                @if($user = auth()->user())
                    <x-mary-menu-separator />
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded"></x-mary-list-item>
                    <x-mary-menu-separator />
                @endif
                <x-mary-menu-item title="Manage Users" icon="o-eye" link="{{ route('admin.view-users') }}" />
                <x-mary-menu-item title="Manage Donations" icon="o-gift" link="{{ route('admin.view-donations') }}" />
                <x-mary-menu-item title="Manage Needs" icon="o-list-bullet" link="{{ route('admin.view-needs') }}" />
                <x-mary-menu-item title="Manage Blog" icon="o-newspaper" link="{{ route('admin.view-blog') }}" />
                <x-mary-menu-item title="Notifications" icon="o-bell" link="{{ route('admin.admin-notifications') }}" />
                <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-mary-menu-item title="Log out" icon="o-power" link="{{ route('logout') }}" />
                    <x-mary-menu-item title="Change Theme" icon="o-moon">
                        <x-mary-theme-toggle darkTheme="coffee" lightTheme="bumblebee" />
                    </x-mary-menu-item>
                </x-mary-menu-sub>
            </x-mary-menu>
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <x-mary-header title="Donations" separator />
                    <livewire:chart.admin.bar />
                </div>
                <div>
                    <x-mary-header title="Users" separator />
                    <livewire:chart.admin.pie />
                </div>
            </div>
        </x-slot>
    </x-mary-main>
</div>

