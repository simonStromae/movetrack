<div>
    <div class="row">
        <div class="col-md-6 col-sm-12 form-group">
            <label for="name_product" class="title-label">Nom du produit</label>
            <input wire:model.lazy="designation" type="text" id="name_product" class="@error('designation') is-invalid @enderror form-control rounded-0">
            @error('designation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6 col-sm-12 form-group">
            <label for="mark_product" class="title-label">Marque</label>
            <input type="text" wire:model.lazy="marque" id="mark_product" class="@error('marque') is-invalid @enderror form-control rounded-0">
            @error('marque')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12 form-group">
            <label for="category_product" class="title-label">Catégorie</label>
            <select wire:model.lazy="categorie" id="category_product" class="@error('categorie') is-invalid @enderror form-control rounded-0">
                <option>Sélectionnez une catégorie...</option>
                @forelse($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                    <option disabled>Aucune catégorie de produit disponible</option>
                @endforelse
            </select>
            @error('categorie')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-md-6 col-sm-12 form-group">
            <label for="budget_product" class="title-label">Budget (Fcfa)</label>
            <input wire:model.lazy="budget" type="text" id="budget_product" class="@error('budget') is-invalid @enderror form-control rounded-0">
            @error('budget')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="Description" class="title-label">Description</label>
        <textarea wire:model.lazy="description" class="@error('description') is-invalid @enderror form-control rounded-0"></textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="image" class="title-label">Image <small>(facultatif)</small></label>
        <input type="file" multiple wire:model.lazy="image[]" id="image" class="form-control-file">
        <small id="emailHelp" class="text-xs form-text text-muted">Vous pouvez insérer une ou plusieurs images.</small>
    </div>

    <div class="form-group">
        <button wire:click="save" wire:loading.attr="disabled" class="btn btn-primary rounded-0 shadow-sm mt-3 float-right">Suivant</button>
    </div>
</div>
