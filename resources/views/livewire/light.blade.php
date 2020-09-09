<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <h1>&#128161; {{ $brightness }}%</h1>

    <div class="progress" style="height: 25px">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar"
             style="width: {{ $brightness }}%"
             aria-valuenow="{{ $brightness }}"
             aria-valuemin="0" aria-valuemax="100">

        </div>
    </div>
    <div class="mt-3">
        <button class="btn btn-danger" wire:click="empty_progress" @if($brightness === 0) disabled @endif>Off</button>
        <button class="btn btn-dark" wire:click="decrement_progress" @if($brightness === 0) disabled @endif>-</button>
        <button class="btn btn-dark" wire:click="increment_progress" @if($brightness === 100) disabled @endif>+</button>
        <button class="btn btn-primary" wire:click="fill_progress" @if($brightness === 100) disabled @endif>On</button>
    </div>
</div>
