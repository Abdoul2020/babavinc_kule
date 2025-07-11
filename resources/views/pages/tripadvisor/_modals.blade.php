
<!--begin::Modal - Create Comment-->
<div class="modal fade" id="kt_modal_create_comment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Create Comment</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <!-- SVG icon content -->
                    </span>
                </div>
            </div>
            <div class="modal-body py-lg-10 px-lg-10">
                <form class="form" id="create_tripadvisor_form" action="{{ route('admin.tripadvisor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Place input-->
                    <div class="mb-7">
                        <label for="place_id" class="form-label">Place</label>
                        <select class="form-select" id="place_id" name="place_id" required>
                            <option value="">Select Place</option>
                            @foreach ($placeData as $place)
                                <option value="{{ $place['id'] }}">{{ $place['title'] }}</option>
                            @endforeach
                        </select>

                    </div>




                    <!--begin::Name input-->
                    <div class="mb-7">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                    <!--end::Name input-->
                    <!--begin::Comment input-->
                    <div class="mb-7">
                        <label for="comment" class="form-label">Comment</label>
                        <input type="text" class="form-control" id="comments" name="comments" placeholder="Enter comment" required>
                    </div>
                    <!--end::Comment input-->
                    <!--begin::Image input-->
                   <!--begin::Image input-->
                        <div class="mb-7">
                            <label for="images" class="form-label">Image (Optional)</label>
                            <input type="file" class="form-control" id="images" name="images" accept=".png, .jpg, .jpeg, .webp">
                        </div>
                        <!--end::Image input-->

                    <!--end::Image input-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Create Comment-->
