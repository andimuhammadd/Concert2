<?php include 'nav.php'; ?>

<div class="container">
    <section class="pb-3">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 col-12 mb-4">
                    <h5>Billing Details</h5>
                    <div class="input-group flex-nowrap my-4">
                        <input type="text" class="form-control" placeholder="Firstname" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap my-4">
                        <input type="text" class="form-control" placeholder="Lastname" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap my-4">
                        <input type="text" class="form-control" placeholder="House number and street name" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap my-4">
                        <input type="text" class="form-control" placeholder="City/Town" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap my-4">
                        <input type="text" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap my-4">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                    <h5>Order Details</h5>
                    <table class="table table-bordered table-primary table-striped table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VIP Experience × 1</td>
                                <td>$25.00</td>
                            </tr>
                            <tr>
                                <th>Subtotal</th>
                                <td>$25.00</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>$25.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col text-center my-3">
                    <button type="button" class="btn btn-primary mx-auto">Place Order</button>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>