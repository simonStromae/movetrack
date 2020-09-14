




<div>
    <span>
        <i class="fas fa-spinner fa-spin text-primary" wire:loading wire:target="statusmodel" ></i>
        <select name="statusmodel" id="" wire:model="statusmodel" class="form-control @if($statusmodel == 'success') is-valid @endif">
            <option value="{{$track->status}}">{{get_status($track->status)}}</option>
            <option value="emit">Recherche du besoin passée</option>
            <option value="in pending">En cours de recherche</option>
            <option value="success">Validé</option>
            <option value="decline">Annulé</option>
        </select>
     </span>
</div>
