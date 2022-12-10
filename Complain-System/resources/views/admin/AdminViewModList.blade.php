
<!DOCTYPE html>
<html lang="en">



<body id="bodycolor">
    <div class="container-scroller">
        @include('admin.AdminLinks')
        <!-- partial:partials/_sidebar.html -->
        @include('admin.AdminSideNav')
        <!-- partial -->
        @include('sweetalert::alert')
        <!-- partial:partials/_headNavbar.html -->
        @include('admin.AdminHeaderNav')
        <!-- partial -->
        {{-- body --}}
        <div class="main-panel">
            <div class="content-wrapper">
        
                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title " style="text-align:center;">Moderators List</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                             
                                                <th>Moderators Name</th>
                                                <th>Moderators Email</th>
                                                <th>Moderators Number</th>
                                                <th>Remove Moderator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Moderators as $Moderators)
                                                <tr>
                                                    <td>{{ $Moderators->name }}</td>
                                                    <td>{{ $Moderators->email }}</td>
                                                    <td>{{ $Moderators->phone }}</td>
                                               
                                                    <td> <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                                                            onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
                                                            href="{{ url('RemoveMod', $Moderators->id) }} ">Remove</a>
                                    
                                    
                                                    </td>
                                    
                                    
                                    
                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        
        
            </div>
        </div>
        </div>
        
        </div>
        </div>
        </div>
        {{-- body --}}
        <!-- plugins:js -->
    </div>
</body>

</html>









