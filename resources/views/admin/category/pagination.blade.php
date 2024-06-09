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
      @foreach ($categories as $key => $category)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$category->name}}</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td>
        <td class="d-flex">
          <a href="" class="btn btn-success mr-1 update_category_form"
            data-bs-toggle="modal" 
            data-bs-target="#updateModal"
          
            data-id="{{ $category->id }}"
            data-name="{{ $category->name }}"
            >
            <i class="fas fa-edit"></i>
          </a>
          <a href="" class="btn btn-danger delete_category"
            data-id="{{ $category->id }}"
          >
            <i class="fas fa-times"></i>
          </a>
        </td>
      </tr> 
      @endforeach                                        
    </tbody>
</table>
{!!$categories->links()!!}