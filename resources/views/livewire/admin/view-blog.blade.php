<div>
    <x-mary-main full-width>
    <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
        <x-mary-menu activate-by-route>
            {{-- User --}}
            @if($user = auth()->user())
                <x-mary-menu-separator />
                <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded"></x-mary-list-item>
                <x-mary-menu-separator />
            @endif
            <x-mary-menu-item title="Manage Users" icon="o-eye" link="/admin/view-users" />
                <x-mary-menu-item title="Manage Donations" icon="o-gift" link="/admin/view-donations" /> <!-- Corrected typo in link -->
                <x-mary-menu-item title="Manage Needs" icon="o-list-bullet" link="/admin/view-needs" />
                <x-mary-menu-item title="Manage Blog" icon="o-newspaper" link="/admin/view-blog" />
                <x-mary-menu-item title="Notifications" icon="o-bell" link="/admin/admin-notifications" />
            <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                <x-mary-menu-item title="Log out" icon="o-power" link="/logout" />
                <x-mary-menu-item title="Change Theme" icon="o-moon">
                    <x-mary-theme-toggle darkTheme="coffee" lightTheme="bumblebee" />
                </x-mary-menu-item>
            </x-mary-menu-sub>
        </x-mary-menu>
    </x-slot:sidebar>

    <x-slot name="content">

        <x-mary-header title="BLOGS" with-anchor separator class="text-primary"/>
        <x-mary-button label="Add Blog" icon="o-plus" wire:click="create" class="btn bg-primary text-white" /> 

            <div class="grid gap-6 ">
                @foreach($blogs as $blog)
                    <div class="shadow-md rounded-lg p-6 w-full flex flex-col">
                        <h2 class="text-4xl text-primary font-bold mb-4">{{ $blog->title }}</h2>
                        @if($blog->photo_path)
                            <img src="{{ Storage::url($blog->photo_path) }}" alt="{{ $blog->title }}" class="w-full h-auto object-cover mb-4 rounded-lg">
                        @endif
                        <div class="flex-grow overflow-auto">
                            <!-- Use nl2br and e for preserving spaces and line breaks -->
                            <p class="text-gray">{!! nl2br(e($blog->content)) !!}</p>
                        </div>
                        <div class="mt-auto flex justify-end gap-2">
                            <x-mary-button wire:click="edit({{ $blog->id }})" label="Edit" class="btn bg-primary text-white" />
                            <x-mary-button wire:click="delete({{ $blog->id }})" label="Delete" class="btn btn-warning" />
                        </div>
                        {{-- <a href="{{ route('blog-name', $blog->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold mt-auto">Read more</a> --}}
                    </div>
                @endforeach
            </div>

            {{ $blogs->links() }}
        
            <x-mary-modal title="Add Blog" wire:model="showCreateModal">
                <x-mary-form wire:submit.prevent="store">
                    <x-mary-input wire:model="title" label="Add Blog" />
                    <x-mary-textarea wire:model="content" label="Content" />
                    <x-mary-file wire:model="photo" label="Photo" />
        
                    <x-slot:actions>
                        <x-mary-button wire:click="$set('showCreateModal', false)" label="Cancel" class="btn btn-primary" />
                        <x-mary-button type="submit" label="Save" class="btn btn-success" />
                    </x-slot:actions>
                </x-mary-form>
            </x-mary-modal>
        
            <x-mary-modal title="Edit Blog" wire:model="showEditModal">
                <x-mary-form wire:submit.prevent="update">
                    <x-mary-input wire:model="title" label="Title" />
                    <x-mary-textarea wire:model="content" label="Content" />
                    <x-mary-file wire:model="photo" label="Photo" />
        
                    <x-slot:actions>
                        <x-mary-button wire:click="$set('showEditModal', false)" label="Cancel" class="btn btn-primary" />
                        <x-mary-button type="submit" label="Save" class="btn btn-success" />
                    </x-slot:actions>
                </x-mary-form>
            </x-mary-modal>
    </x-slot>
    
    </x-mary-main>
</div>
