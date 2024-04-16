<div>
    <x-slot name="title">New Event Module</x-slot>

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">New Event Schedule</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Event Schedule</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <form name="new-event" id="new-event" wire:submit.prevent="newEvent(Object.fromEntries(new FormData($event.target)))" enctype="multipart/form-data">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label">Event Title</label>
                                    <input class="form-control" wire:model="title" type="text" placeholder="">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Event date</label>
                                            <input class="form-control" wire:model="event_date" type="date" placeholder="">
                                            @error('event_date')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Event time</label>
                                            <input class="form-control" wire:model="event_time" type="time" placeholder="">
                                            @error('event_time')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Type of Event</label>
                                    <select class="form-select" aria-label="Default select example" wire:model="type_of_event">
                                        <option selected="">Select</option>
                                        <option value="Confrence">Confrence</option>
                                        <option value="Workshop">Workshop</option>
                                        <option value="Webinar">Webinar</option>
                                    </select>
                                    @error('type_of_event')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Location</label>
                                    <input class="form-control" wire:model="event_location" type="text" placeholder="">
                                    @error('event_location')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Image</label>
                                    <div class="custom-file">
                                        <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false; progress = 5"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <input id="croped_image" name="croped_image" type="text" hidden>
                                            <input class="form-control" id="post_image" wire:model="photo" type="file"
                                                accept="image/*,video/*">
                                            <div class="progress mt-1" x-show.transition="isUploading">
                                                <div class="progress-bar bg-success progress-bar-striped"
                                                    aria-valuenow="5" aria-valuemin="5" aria-valuemax="100"
                                                    x-bind:style="`width:${progress}%`" role="progressbar">
                                                    <span class="sr-only">100% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('photo')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3" @if(!$isVideo) style="display: none" @endif>
                                    <label class="form-label">Video Thumbnaial</label>
                                    <div class="custom-file">
                                        <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false; progress = 5"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <input id="croped_thumbnail" name="croped_thumbnail" type="text" hidden>
                                            <input class="form-control" id="thumbnail_image" wire:model="thumbnail" type="file"
                                                accept="image/*">
                                            <div class="progress mt-1" x-show.transition="isUploading">
                                                <div class="progress-bar bg-success progress-bar-striped"
                                                    aria-valuenow="5" aria-valuemin="5" aria-valuemax="100"
                                                    x-bind:style="`width:${progress}%`" role="progressbar">
                                                    <span class="sr-only">100% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('thumbnail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="description">Event Description</label>
                                    <div wire:ignore>
                                        <textarea id="message" wire:model="description" class="form-control tinymce-basic" name="description"></textarea>
                                    </div>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    <i wire:loading wire:target="newEvent"
                                        class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Submit
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div>@include('livewire.superadmin.crop-image-modal.image_croper')</div>
<div>@include('livewire.superadmin.events.crop-image-modal.thumbnail_croper')</div>
</div>
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/cvjfkxqlo8ylwqn3xgo15h2bd4xl6n7m6k5d0avjcq93c1i7/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#message',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('description', editor.getContent());
                });
            }
        });


        window.addEventListener('feedback', event => {
            tinyMCE.activeEditor.setContent("");
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        window.addEventListener('feedback', event => {
            document.getElementById('croped_image').value = "";
            document.getElementById('previewImage').innerHTML = '<img src=""/>';
        });
    </script>
    <script>
        $(document).ready(function() {
            //start cover photo
            let cropper;
            var finalCropWidth = 1250;
            var finalCropHeight = 850;
            var finalAspectRatio = finalCropWidth / finalCropHeight;

            // Initialize the Cropper.js instance when the modal is shown
            $('#image_modal').on('shown.bs.modal', function() {
                cropper = new Cropper($('#ImageToCrop')[0], {
                    aspectRatio: finalAspectRatio,
                    viewMode: 1,
                    autoCropArea: 0.8,
                    dragMode: 'move',
                    zoomable: true,
                });
            });

            // Destroy the Cropper.js instance when the modal is hidden
            $('#image_modal').on('hidden.bs.modal', function() {
                cropper.destroy();
                cropper = null;
            });

            // Show the image cropping modal when an image is selected
            $('#post_image').on('change', function(event) {
                const file = event.target.files[0];
                const fileReader = new FileReader();

                fileReader.onload = function(e) {
                    $('#ImageToCrop').attr('src', e.target.result);
                    window.addEventListener('image_file', event => {
                        $('#image_modal').modal('show');
                    });
                };

                fileReader.readAsDataURL(file);
            });

            // Handle the "Crop and Upload" button click
            $('#cropImage').on('click', function(ev) {
                var imgurl = cropper.getCroppedCanvas({
                    width: 1250,
                    height: 850
                }).toDataURL();
                $('#image_modal').modal('hide');
                document.getElementById('croped_image').value = imgurl;
            });
            //end event image image

            let Thumbnailcropper;
            var ThumbnailfinalCropWidth = 1250;
            var ThumbnailfinalCropHeight = 850;
            var ThumbnailfinalAspectRatio = ThumbnailfinalCropWidth / ThumbnailfinalCropHeight;

            // Initialize the Cropper.js instance when the modal is shown
            $('#thumnailModal').on('shown.bs.modal', function() {
                Thumbnailcropper = new Cropper($('#ThumbnailToCrop')[0], {
                    aspectRatio: ThumbnailfinalAspectRatio,
                    viewMode: 1,
                    autoCropArea: 0.8,
                    dragMode: 'move',
                    zoomable: true,
                });
            });

            // Destroy the Cropper.js instance when the modal is hidden
            $('#thumnailModal').on('hidden.bs.modal', function() {
                Thumbnailcropper.destroy();
                Thumbnailcropper = null;
            });

            // Show the image cropping modal when an image is selected
            $('#thumbnail_image').on('change', function(event) {
                const file = event.target.files[0];
                const fileReader = new FileReader();

                fileReader.onload = function(e) {
                    $('#ThumbnailToCrop').attr('src', e.target.result);
                    $('#thumnailModal').modal('show');
                };

                fileReader.readAsDataURL(file);
            });

            // Handle the "Crop and Upload" button click
            $('#cropThumbnail').on('click', function(ev) {
                var imgurl = Thumbnailcropper.getCroppedCanvas({
                    width: 765,
                    height: 850
                }).toDataURL();
                $('#thumnailModal').modal('hide');
                document.getElementById('croped_thumbnail').value = imgurl;
                // document.getElementById('Thumbnail').innerHTML = '<img src="'+imgurl+'"/>';
            });
            //end product image one
        });
    </script>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
        <style>
            .img-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: auto;
                height: 400px;
                background-color: #f7f7f7;
                overflow: hidden;
            }
        </style>
    @endpush
@endpush
