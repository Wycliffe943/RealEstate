@extends('admin.admin_dashboard')
@section('admin') 


<div class="page-content">



				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Roles and Their Permissions</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S1</th>
                        <th>Role Name</th>
                        <th>Role Permissions</th>
                        <th>Action</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name }}</td>

                        <td>
                            @foreach($item->permissions as $perm)
                            <span class="badge bg-danger">{{ $perm->name }}</span> 
                            @endforeach
                        </td>
                        
                        <td>
                            <a href="{{ route('admin.edit.roles', $item->id) }}" class="btn btn-inverse-warning"> Edit </a>
        
                            <a href="{{ route('admin.delete.roles', $item->id) }}" class="btn btn-inverse-danger" id="delete"> Delete </a>
                        </td>
                      </tr>
                       @endforeach()
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>











@endsection