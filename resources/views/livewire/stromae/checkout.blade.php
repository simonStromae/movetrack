<div>
    <div class="mt-5 rounded-0">
        <div class="card-body">
            @guest
                <div class="py-2 w-100 badge badge-light text-sm">Déjà Client ? <a class="ml-1" href="{{ route('login') }}">S'identifier</a></div>
            @endguest
            <h5 class="card-title mt-3 text-dark">Détails livraison</h5>
            <hr>


            <div class="form-group">
                <label for="firstname" class="title-label">Nom</label>
                <input wire:model.lazy="name" type="text" id="firstname" class="@error('tel') is-invalid @enderror form-control rounded-0">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 form-group">
                    <label for="email" class="title-label">Email</label>
                    <input wire:model.lazy="email" type="text" id="email" class="@error('email') is-invalid @enderror form-control rounded-0">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6 col-sm-12 form-group">
                    <label for="tel" class="title-label">Numéro téléphone</label>
                    <input wire:model.lazy="tel" type="tel" id="tel" class="@error('tel') is-invalid @enderror form-control rounded-0">
                    @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 form-group">
                    <label for="country" class="title-label">Pays</label>
                    <select wire:model.lazy="pays" id="country" class="@error('pays') is-invalid @enderror form-control rounded-0">
                        <option>Sélectionnez un pays...</option>
                        @forelse($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @empty
                            <option disabled>Aucun pays disponible</option>
                        @endforelse
                    </select>
                    @error('pays')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4 col-sm-12 form-group">
                    <label for="city" class="title-label">Ville</label>
                    <select wire:model.lazy="ville" id="city" class="@error('ville') is-invalid @enderror form-control rounded-0">
                        <option>Sélectionnez une ville...</option>
                        @forelse($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @empty
                            <option disabled>Aucun ville disponible</option>
                        @endforelse
                    </select>
                    @error('ville')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 col-sm-12 form-group">
                    <label for="quater" class="title-label">Quartier</label>
                    <input type="text" wire:model.lazy="quartier" id="quater" class="@error('quartier') is-invalid @enderror form-control rounded-0">
                    @error('quartier')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="landmark" class="title-label">Repère</label>
                <input wire:model.lazy="repere" type="text" id="landmark" class="@error('repere') is-invalid @enderror form-control rounded-0">
                @error('repere')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="particlar_landmark" class="title-label">Repère particulier</label>
                <input wire:model.lazy="repere_particulier" type="text" id="particlar_landmark" class="@error('repere_particulier') is-invalid @enderror form-control rounded-0">
                @error('repere_particulier')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-4 custom-control custom-checkbox">
                <input type="checkbox" id="term" class="custom-control-input" checked>
                <label for="term" class="custom-control-label title-label">J'ai lu et j'accepte les <a href="#">termes et conditions</a></label>
            </div>

            @guest
                <div class="mt-1 custom-control custom-checkbox">
                    <input type="checkbox" wire:model="register" id="register" class="custom-control-input" disabled>
                    <label for="register" class="custom-control-label title-label">Créer un compte ?</label>
                </div>
            @endguest

            <div class="form-group float-right">
                    <a href="{{ route('edit-track', $track_id) }}" class="btn btn-outline-dark rounded-0 shadow-sm mt-3">
                        Modifier mon besoin
                    </a>

                    <button wire:click="save" class="btn btn-primary rounded-0 shadow-sm mt-3">
                        Suivant
                    </button>
                </div>
        </div>
    </div>
</div>
