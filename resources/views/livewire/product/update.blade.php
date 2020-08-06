<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="update" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" wire:model="title">
                                @error('title')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" wire:model="price">
                                @error('price')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description" wire:model="description">
                                @error('description')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control-file" id="image" wire:model="image">
                                    @error('description')
                                        <span class="invalid-feedback">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                    @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" alt="" height="200">
                                    @else
                                        <img src="{{$imageOld}}" alt="" height="200">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-group" role="group" aria-label="Button Form">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button type="button" class="btn btn-sm btn-secondary" wire:click="$emit('formClose')">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
