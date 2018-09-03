@extends('layouts.backend')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Booking
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">
          <!-- <div class="col-12 col-lg-4">
              <div class="box">
                <div class="box-header">
                    <h4 class="box-title"><strong>Simple Editable</strong> table</h4>
                    <h6 class="subtitle">Just click on word which you want to change and enter</h6>
                </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                        <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Cost</th>
                                    <th>Profit</th>
                                    <th>Fun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Car</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Bike</td>
                                    <td>330</td>
                                    <td>240</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Plane</td>
                                    <td>430</td>
                                    <td>540</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Yacht</td>
                                    <td>100</td>
                                    <td>200</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Segway</td>
                                    <td>330</td>
                                    <td>240</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><strong>TOTAL</strong></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div> -->
          <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Booking <strong>Datatable</strong>&nbsp &nbsp
                    <a href="{{route('createBooking')}}" class="btn btn-default label-success">+ Add New</a>
                    </h3> 
                </div>
               
                <div class="box-body">
              <div class="table-responsive">
                 
                <table id="example1" class="table editable-table table-bordered table-striped table-responsive">
                    <form action="{{route('updateBooking')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                    <thead>
                        <tr>
                           <th>S.N.</th>
                            <th>Bus Name</th>
                            <th>Traveller</th>
                            <th>Subject</th>
                            <th>Guest</th>
                            <th>Profile</th>
                            <th>update</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($bookings as $count => $key)
                            <tr>
                                <td>{{++$count}}</td>
                                <td>{{$key->buses->title}}</td>
                                <td>Edinburgh</td>
                                <td>{{$key->travellers->email}}</td>
                                <td>{{$key->guests->contact}}</td>
                                <td><span class="label label-warning">{{$key->profile}} </span></td>
                                <td>   

                                    <button  onclick=" return ConfirmUpdate()" type="submit" class="btn btn-info btn-xs">
                                        update
                                    </button>
                                </td>
                            </tr>
                       
                        @endforeach
                    </tbody>
                    </form>
                  </table>
                    <form action="{{route('updateBooking')."/".$key->bookings_id}}" method="get">
                                                <button type="submit" class="btn btn-success btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </form> 
              </div>
          </div>
            </div>
          </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
    <!-- jQuery 3 -->
    <script src="{{ url('public/backend/assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>
    
    <!-- popper -->
    <script src="{{ url('public/backend/assets/vendor_components/popper/dist/popper.min.js')}}"></script>
    
    <!-- Bootstrap 4.0-->
    <script src="{{ url('public/backend/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <!-- SlimScroll -->
    <script src="{{ url('public/backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    
    <!-- FastClick -->
    <script src="{{ url('public/backend/assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>
    
    <!-- DataTables -->
    <script src="{{ url('public/backend/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('public/backend/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    
    <!-- This is data table -->
    <script src="{{ url('public/backend/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>
    
    <!-- Editable -->
    <script src="{{ url('public/backend/assets/vendor_components/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{ url('public/backend/assets/vendor_components/tiny-editable/numeric-input-example.js')}}"></script>
    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#example1').editableTableWidget().numericInputExample().find('td:first').focus();
    </script>
    
    <!-- Lion_admin App -->
    <script src="{{ url('public/backend/js/template.js')}}"></script>
    
    <!-- Lion_admin for demo purposes -->
    <script src="{{ url('public/backend/js/demo.js')}}"></script>
    
    <!-- Lion_admin for Data Table -->
    <script src="{{ url('public/backend/js/pages/data-table.js')}}"></script>

     <script>
        function ConfirmUpdate()
        {
            var x = confirm("Do You Really Want To Update");
            if (x)
                return true;
            else
                return false;
        }
    </script>
    
    
@endsection
