<div class="main-panel">
    <div class="content-wrapper">

        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Your Complains</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                     
                                        <th>Your Name</th>
                                        <th>Your ID</th>
                                        <th>Complain Type</th>
                                        <th>Complain Section</th>
                                        <th>Detail Messages</th>
                                        <th>Status</th>
                                        <th>Remove Complain</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Complain as $Complains)
                                        <tr>
                                            <td>{{ $Complains->StudentName }}</td>
                                            <td>{{ $Complains->StudentId }}</td>
                                            <td>{{ $Complains->ComplainType }}</td>
                                            <td>{{ $Complains->ComplainSection }}</td>
                                            <td>{{ $Complains->Description }}</td>
                                            <td>{{ $Complains->ComplainStatus }}</td>
                                            <td> <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                                                    onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
                                                    href="{{ url('RemoveComplainButton', $Complains->id) }} ">Remove</a>
                            
                            
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
{{-- <table class="table mt-5">

    <tr>
        <th scope="col">Your Name</th>
        <th scope="col">Your ID</th>
        <th scope="col">Your Complain Type</th>
        <th scope="col">Complain Section</th>
        <th scope="col">Detail Messages</th>
        <th scope="col">Status</th>
    </tr>

    <tbody>
        @foreach ($Complain as $Complains)
            <tr>
                <td>{{ $Complains->StudentName }}</td>
                <td>{{ $Complains->StudentId }}</td>
                <td>{{ $Complains->ComplainType }}</td>
                <td>{{ $Complains->ComplainSection }}</td>
                <td>{{ $Complains->Description }}</td>
                <td>{{ $Complains->ComplainStatus }}</td>
                <td> <a type="button" style="color:rgb(0, 6, 0); background-color:rgb(223, 92, 65)"
                        onClick="return confirm('Are you sure')" class="btn btn-danger  m-2"
                        href="{{ url('RemoveComplainButton', $Complains->id) }} ">Remove Complain</a>


                </td>




            </tr>
        @endforeach
    </tbody>
</table> --}}
