<table class="table table-striped">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>title</th>
        <th>Count</th>
        <th style="width: 40px">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $key => $article)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$article->title}}</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td>
        <td class="d-flex">
          <a href="" class="btn btn-success mr-1 update_article_form"
            data-bs-toggle="modal" 
            data-bs-target="#updateModal"
          
            data-id="{{ $article->id }}"
            data-title="{{ $article->title }}"
            >
            <i class="fas fa-edit"></i>
          </a>
          <a href="" class="btn btn-danger delete_article"
            data-id="{{ $article->id }}"
          >
            <i class="fas fa-times"></i>
          </a>
        </td>
      </tr> 
      @endforeach                                        
    </tbody>
</table>
{!!$articles->links()!!}