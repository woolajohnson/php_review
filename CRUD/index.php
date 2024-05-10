<?php include('includes/header.php'); ?>
        <!-- Modal -->
        <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST" id="insertUser">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Phone number</label>
                                    <input type="text" class="form-control" id="number" aria-describedby="numberHelp">
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST" id="insertUser">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit User Info</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="mb-3">
                                    <label for="editName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="editName" aria-describedby="nameHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="editEmail" class="form-label">Email address</label>
                                    <input type="text" class="form-control" id="editEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="editNumber" class="form-label">Phone number</label>
                                    <input type="text" class="form-control" id="editNumber" aria-describedby="numberHelp">
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn-update" class="btn btn-dark">Save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Edit Modal -->

        <!-- Main -->
        <main class="container">
            <h1 class="text-dark text-center my-3">PHP CRUD with AJAX!</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formModal">
            Add New User
            </button>

            <!-- Table -->
            <div class="row my-5">
                <div class="col-8 offset-md-2">
                    <!-- Alert Message -->
                    <div class="message">
                    </div>
                    
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableData">
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
<?php include('includes/footer.php'); ?>