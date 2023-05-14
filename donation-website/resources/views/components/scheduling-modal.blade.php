<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Scheduling</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('add_scheduling') }}" method="post" id="addScheduling" autocomplete="on" class="needs-validation" novalidate>
                    @csrf
                    <div id="questions">

                        <div class="row justify-content-center">
                            <label for="food_name" class="col-md-3 col-form-label mt-3">Food Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control mt-3" id="food_name" name="food_name" placeholder="Food Name" required>
                                <label for="food_name" class="error fail-alert"></label>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <label for="food_category" class="col-md-3 col-form-label mt-3">Food Category</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control mt-3" id="food_category" name="food_category" placeholder="Category" required>
                                <label for="food_category" class="error fail-alert"></label>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <label for="expiration_date" class="col-md-3 col-form-label mt-3">Scheduling Date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control mt-3" id="expiration_date" name="expiration_date" placeholder="" required>
                                <label for="expiration_date" class="error fail-alert"></label>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <label for="quantity" class="col-md-3 col-form-label mt-3">Quantity</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control mt-3" id="quantity" name="quantity" placeholder="" required>
                                <label for="quantity" class="error fail-alert"></label>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <label for="pickup_date_date" class="col-md-3 col-form-label mt-3">pickup_date</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control mt-3" id="pickup_date" name="pickup_date" placeholder="" required>
                                <label for="pickup_date" class="error fail-alert"></label>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <label for="pickup_time" class="col-md-3 col-form-label mt-3">pickup_time</label>
                            <div class="col-sm-6">
                                <input type="time" class="form-control mt-3" id="pickup_time" name="pickup_time" placeholder="" required>
                                <label for="pickup_time" class="error fail-alert"></label>
                            </div>
                        </div>
                        

                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gunmetal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-orange" id="submitForm">Add Items</button>
            </div>
        </div>
    </div>
</div>
