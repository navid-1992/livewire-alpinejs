<div class="customModal" style="display: none" x-data="{ isOpen: @entangle($attributes->wire('model')) }" x-show="isOpen">
    <div class="modal-dialog" x-show="isOpen">
        <div class="modal-content">
            {{$slot}}
        </div>
    </div>
</div>
