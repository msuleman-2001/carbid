<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .profile-container {
            margin-top: 50px;
        }
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #007bff;
        }
        .profile-info h3 {
            font-size: 24px;
            margin-top: 15px;
        }
        .profile-info p {
            font-size: 18px;
            color: #555;
        }
        .edit-button {
            margin-top: 20px;
        }
        .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }
        .modal-body .form-group {
            margin-bottom: 15px;
        }
        .modal-footer {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <h1 class="text-center">Admin Profile</h1>

        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset('storage/' . $admin->admin_image) }}" alt="Avatar" class="avatar mb-3">
                <div class="profile-info">
                    <h3>{{ $admin->admin_name }}</h3>
                    <p><strong>Email:</strong> {{ $admin->admin_email }}</p>
                    <p><strong>City:</strong> {{ $admin->admin_city }}</p>
                    <p><strong>Phone Number:</strong> {{ $admin->admin_number }}</p>
                    <p><strong>Address:</strong> {{ $admin->admin_address }}</p>
                </div>
                <button class="btn btn-primary edit-button" onclick="document.getElementById('editProfileModal').style.display='block'">Edit Profile</button>
            </div>
        </div>

        <!-- Edit Profile Modal -->
        <div id="editProfileModal" class="modal" tabindex="-1" role="dialog" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Profile</h5>
                        <button type="button" class="close" onclick="document.getElementById('editProfileModal').style.display='none'" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.updateProfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="admin_name">Name</label>
                                <input type="text" class="form-control" id="admin_name" name="admin_name" value="{{ $admin->admin_name }}">
                            </div>
                            <div class="form-group">
                                <label for="admin_email">Email</label>
                                <input type="email" class="form-control" id="admin_email" name="admin_email" value="{{ $admin->admin_email }}">
                            </div>
                            <div class="form-group">
                                <label for="admin_city">City</label>
                                <input type="text" class="form-control" id="admin_city" name="admin_city" value="{{ $admin->admin_city }}">
                            </div>
                            <div class="form-group">
                                <label for="admin_number">Phone Number</label>
                                <input type="text" class="form-control" id="admin_number" name="admin_number" value="{{ $admin->admin_number }}">
                            </div>
                            <div class="form-group">
                                <label for="admin_address">Address</label>
                                <input type="text" class="form-control" id="admin_address" name="admin_address" value="{{ $admin->admin_address }}">
                            </div>
                            <div class="form-group">
                                <label for="admin_image">Profile Image</label>
                                <input type="file" class="form-control-file" id="admin_image" name="admin_image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="document.getElementById('editProfileModal').style.display='none'">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
