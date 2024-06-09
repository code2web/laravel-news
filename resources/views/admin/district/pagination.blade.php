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
      @foreach ($districts as $key => $district)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$district->name}}</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td>
        <td class="d-flex">
          <a href="" class="btn btn-success mr-1 update_district_form"
            data-bs-toggle="modal" 
            data-bs-target="#updateModal"
          
            data-id="{{ $district->id }}"
            data-name="{{ $district->name }}"
            >
            <i class="fas fa-edit"></i>
          </a>
          <a href="" class="btn btn-danger delete_district"
            data-id="{{ $district->id }}"
          >
            <i class="fas fa-times"></i>
          </a>
        </td>
      </tr> 
      @endforeach                                        
    </tbody>
</table>
{!!$districts->links()!!}