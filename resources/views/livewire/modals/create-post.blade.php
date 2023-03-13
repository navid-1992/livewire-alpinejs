<div>
    <x-base-modal wire:model="isOpen">
        <div class="modal-header">
            <h5 class="modal-title">Create Post</h5>
            <button type="button" class="close" @click="isOpen = false">&times;</button>
        </div>
        <form wire:submit.prevent="submit">
            <div class="modal-body">
                <div class="form-group">
                    <label>
                        Enter Title
                    </label>
                    <input class="form-control" type="text" name="title" wire:model="title"/>
                    @error('title') <span class="error" style="color: darkred">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>
                        Enter Post Content
                    </label>
                    <input class="form-control" type="text" name="body" wire:model="body"/>
                    @error('body') <span class="error" style="color: darkred">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>
                        Enter Posted By
                    </label>
                    <input class="form-control" type="text" name="user_by" wire:model="user_by"/>
                    @error('user_by') <span class="error" style="color: darkred">{{ $message }}</span> @enderror
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="isOpen = false">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </x-base-modal>
</div>
