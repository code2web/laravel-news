<table class="table table-striped">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>Name</th>
        <th>Count</th>
        <th style="width: 40px">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($divisions as $key => $division)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$division->name}}</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td>
        <td class="d-flex">
          <a href="" class="btn btn-success mr-1 update_division_form"
            data-bs-toggle="modal" 
            data-bs-target="#updateModal"
          
            data-id="{{ $division->id }}"
            data-name="{{ $division->name }}"
            >
            <i class="fas fa-edit"></i>
          </a>
          <a href="" class="btn btn-danger delete_division"
            data-id="{{ $division->id }}"
          >
            <i class="fas fa-times"></i>
          </a>
        </td>
      </tr> 
      @endforeach                                        
    </tbody>
</table>
{!!$divisions->links()!!}