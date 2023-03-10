<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($this->video->thumbnail)}}" class="img-thumbnail" alt="">
                    </div>
                    {{-- removed processing percentage for now --}}
                   {{-- <div class="col-md-8">
                        <p>processing ({{$this->video->processing_percentage}})</p>
                    </div>--}}
                </div>
                <form wire:submit.prevent="update">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" wire:model="video.title">
                    </div>

                    @error('video.title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror


                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea cols="30" rows="4" class="form-control" wire:model="video.description"></textarea>
                    </div>

                    @error('video.description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="form-group">
                        <label for="visibility">Visibility</label>
                        {{-- visibility options --}}
                        <select wire:model="video.visibility" class="form-control">
                            <option value="private">private</option>
                            <option value="public">public</option>
                            <option value="unlisted">unlisted</option>
                        </select>
                    </div>

                    @error('video.description')
                    <div class="alert alert-danger">
                        {{-- alert message after add if not valie--}}
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-group mt-2 mb-2">
                        {{-- update button --}}
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                    @if(session()->has('message'))
                        {{-- session message show --}}
                        <div class="alert alert-success">
                            {{ session('message')}}
                        </div>
                    @endif

                </form>

            </div>
        </div>
    </div>

</div>
