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
            <div class="container">
                <h1>Upcoming Volunteer Activities</h1>
            
                @if($volunteerActivities->isEmpty())
                    <p>No upcoming activities at the moment. Please check back later.</p>
                @else
                    <ul class="list-group">
                        @foreach($volunteerActivities as $activity)
                            <li class="list-group-item">
                                <h4>{{ $activity->title }}</h4>
                                <p>{{ $activity->description }}</p>
                                <p><strong>Date & Time:</strong> {{ $activity->date_time->format('F d, Y h:i A') }}</p>
                                <p><strong>Location:</strong> {{ $activity->location }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            
        </x-slot>
    </x-mary-main>
</div>