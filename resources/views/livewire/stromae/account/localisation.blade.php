<div>
    <div class="card-body">
        <!--Personal Information -->
        <div class="mt-5">
            <h6 class="">Localisation</h6><hr>

            <div class="row">
                <p class="d-none d-md-block col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                            <div class="col-sm-12 col-md-6 form-group">
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
                            <div class="col-sm-12 col-md-6 form-group">
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
                        <button wire:click="save_position"  class="btn btn-dark rounded-0">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!--E-mail Address -->
        <div class="mt-5">
            <h6 class="">Repère</h6><hr>

            <div class="row">
                <p class="d-none d-md-block col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form-group">
                            <label for="landmark" class="title-label">Repère</label>
                            <input wire:model.lazy="repere" type="text" id="landmark" class="@error('repere') is-invalid @enderror form-control rounded-0">
                            @error('repere')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-8 form-group">
                            <label for="particlar_landmark" class="title-label">Repère particulier</label>
                            <input wire:model.lazy="repere_particulier" type="text" id="particlar_landmark" class="@error('repere_particulier') is-invalid @enderror form-control rounded-0">
                            @error('repere_particulier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button wire:click="save_landmark"  class="btn btn-dark rounded-0">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
