@extends('layouts.adminDashboardContent')
@section('content') 
            <!-- MAIN CONTENT-->
             
            <div class="main-content">
                        <div class="form-group" >
              <input type="text" name="search" id="searchi">
              

            </div>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">                           
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Mobile No.</th>
                                                <th class="text-right">DOJ</th>
                                            </tr>
                                        </thead>
                                       

                                       
                                        <tbody>
                                            
                                        </tbody>
                                       
                                    </table>
                                    <script type="text/javascript">
                                    $(document).ready(function(){

                                      alert('jnkjnjk');
                                           $('#searchi').on('keyup',function(){
                                                $value=$(this).val();
                                                 $.ajax({
                                                     type : 'get',
                                                     url  :  '{{URL::to('searchU')}}',
                                                     data : {'search':$value},
                                                     success : function(data){
                                                       $('tbody').html(data);
                                                     }
                                                });
                                           })
                                    })
                                    
                                     </script>
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
        <!-- END PAGE CONTAINER-->           
@endsection