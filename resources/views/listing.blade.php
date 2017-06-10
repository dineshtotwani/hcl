@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List</div>
              
                    <table class="table table-bordered table-hover specialCollapse">
                        
                        <thead>
                        <th>First Name</th>

                        <th>Last Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Message</th>


                        </thead>

                        <tbody>
                        <?php
                        foreach ($users as $user) {
                       ?>

                        <tr>
                            <td><?php echo $user->first_name; ?></td>
                            <td><?php echo $user->last_name; ?></td>
                            <td><?php echo $user->mobile; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->message; ?></td>
                       </tr>
                       
                      <?php }?>
                        </tbody>    

                      </table>
               
            </div>
        </div>
    </div>
</div>
@endsection
