@extends('layouts.front')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="container">
        <h1 class="mt-5">Welcome to My New Page</h1>
        <p>This is a new page added to the application.</p>
        <p>You can add any content you like here, such as text, images, or links.</p>
      <div class="row">
        <div class="col-md-3">
              <form id="emailForm">
            <div class="form-group mb-3">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPhone">Name</label>
                <input type="tel" class="form-control" id="exampleInputPhone" placeholder="Enter phone number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="responseMessage" class="mt-3"></div>


        <script>
            $(document).ready(function () {



                
                // Set up CSRF token for AJAX requests
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#emailForm').on('submit', function (e) {
                    e.preventDefault(); // Prevent default form submission

                    let email = $('#exampleInputEmail1').val();
                    let name = $('#exampleInputName').val();
                    let phone = $('#exampleInputPhone').val();

                    // Basic client-side validation
                    if (!email) {
                        $('#responseMessage').html('<div class="alert alert-danger">Please enter an email address.</div>');
                        return;
                    }

                    $.ajax({
                        url: '/store-email', // Adjust this URL to match your Laravel route
                        type: 'POST',
                        data: {
                            user_email: email,
                            user_name: name,
                            phone: phone // Include phone if needed
                        },
                        success: function (response) {
                            $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                            $('#emailForm')[0].reset(); // Clear form
                        },
                        error: function (xhr) {
                            let errorMessage = xhr.responseJSON?.message || 'An error occurred while submitting the form.';
                            $('#responseMessage').html('<div class="alert alert-danger">' + errorMessage + '</div>');
                        }
                    });
                });
            });
        </script>


        </div>


        <div class="col-md-3">
            <h6>Form 2 with Another TRIGGER / Events</h6>
            <form>
                <label>Name</label>
                <input type="text" class="form-control mb-3" id="form2Name" placeholder="Enter name">
            </form>
            <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS (optional, for Bootstrap components) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Log to confirm jQuery is loaded
            console.log("jQuery is ready!");

            // Change background color on focus
            $('input').on('focus', function () {
                console.log("Input focused");

                let myNewName = $('#form2Name').val();
                console.log("Input value: " + myNewName);
            });

            // Reset background color on blur
            $('input').on('blur', function () {
                console.log("Input blurred");
                // myNewName variable should be empty
            });
        });
    </script>

        </div>

        
        <div class="col-md-3">
            <h6>Form 3 with Another TRIGGER / Events</h6>
            form>
                <label>Name</label>
                <input type="text" class="form-control mb-3" placeholder="Enter name">
            </form>
            <script>

            </script>


        </div>
        <div class="col-md-3">
            <h6>Form 4 with Another TRIGGER / Events</h6>
            form>
                <label>Name</label>
                <input type="text" class="form-control mb-3" placeholder="Enter name">
            </form>
            <script>

            </script>


        </div>

      </div>
        <!-- Bootstrap JS (Optional, for alert styling) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection