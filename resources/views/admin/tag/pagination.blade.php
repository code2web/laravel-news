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
      @foreach ($tags as $key => $tag)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$tag->name}}</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td>
        <td class="d-flex">
          <a href="" class="btn btn-success mr-1 update_tag_form"
            data-bs-toggle="modal" 
            data-bs-target="#updateModal"
          
            data-id="{{ $tag->id }}"
            data-name="{{ $tag->name }}"
            >
            <i class="fas fa-edit"></i>
          </a>
          <a href="" class="btn btn-danger delete_tag"
            data-id="{{ $tag->id }}"
          >
            <i class="fas fa-times"></i>
          </a>
        </td>
      </tr> 
      @endforeach                                        
    </tbody>
</table>
{!!$tags->links()!!}