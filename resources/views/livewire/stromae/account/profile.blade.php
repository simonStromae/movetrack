<div>
    <div class="card-body">
        <!--<h5 class="mb-3">Profil</h5>-->

        <!--Personal Information -->
        <div class="mt-5">
            <h6 class="">Avatar</h6><hr>

            <div class="row">
                <p class="d-none d-md-block col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-8 col-sm-12">
                    <div class="my-2">
                        <img class="img-thumbnail" src="{{ show_avatar() }}" width="180">
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-9 form-group">
                            <input wire:model="avatar" class="@error('avatar') is-invalid @enderror form-control-file rounded-0" type="file">
                            @error('avatar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-sm-12 col-md-3 form-group">
                            <button wire:click="save_avatar" class="btn btn-dark rounded-0">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Personal Information -->
        <div class="mt-5">
            <h6 class="">Information Personnelle</h6><hr>

            <div class="row">
                <p class="d-none d-md-block col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 form-group">
                            <label for="firstname" class="title-label">Nom</label>
                            <input wire:model.lazy="name" type="text" id="firstname" class="@error('tel') is-invalid @enderror form-control rounded-0">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-sm-12 col-md-4 form-group">
                            <label for="tel" class="title-label">Numéro téléphone</label>
                            <input wire:model.lazy="tel" type="tel" id="tel" class="@error('tel') is-invalid @enderror form-control rounded-0">
                            @error('tel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <small id="emailHelp" class="text-xs form-text text-muted">Conserver le format a 9 chiffres sans espace, ni tirets.</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="title-label">Date d'anniversaire</label>
                        <input wire:model.lazy="birthday" class="@error('birthday') is-invalid @enderror form-control rounded-0" type="date" id="birthday">
                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button wire:click="save_personal" class="btn btn-dark rounded-0">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </div>

        <!--E-mail Address -->
        <div class="mt-5">
            <h6 class="">Adresse Email</h6><hr>

            <div class="row">
                <p class="d-none d-md-block col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form-group">
                            <label for="email" class="title-label">Email</label>
                            <input wire:model.lazy="email" type="text" id="email" class="@error('email') is-invalid @enderror form-control rounded-0">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button wire:click="save_email" class="btn btn-dark rounded-0">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Password -->
        <div class="mt-5">
            <h6 class="">Nouveau Mot de passe</h6><hr>

            <div class="row">
                <p class="d-none d-md-block col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form-group">
                            <label for="mdp" class="title-label">Mot de passe</label>
                            <input wire:model.lazy="mdp" type="password" id="mdp" class="@error('mdp') is-invalid @enderror form-control rounded-0">
                            @error('mdp')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button wire:click="save_password" class="btn btn-dark rounded-0">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
