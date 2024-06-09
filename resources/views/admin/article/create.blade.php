<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <form action="{{ route('article.store') }}" method="post" id="createarticleForm" enctype="multipart/form-data">
    @csrf
    
    <div class="modal-dialog">
      <div class="modal-content ml-5">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Creating Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="errMsgContainer mb-2"></div>
          <div class="form-group">
            <label for="title" class="text-capitalize">article title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="write title here">
          </div>
          <div class="form-group">
            <label for="content" class="text-capitalize">article content</label>
            <input type="text" class="form-control" id="content" name="content" placeholder="write content here">
          </div>
          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>            
            <div class="custom-file">
              <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
              <label class="custom-file-label" for="thumbnail">Choose file</label>
            </div>
          </div>           
          <div class="form-group">
            <label for="category_id">Article Category</label>
            <select id="category_id" name="category_id" class="form-control">
            <option value="" selected style="display: none;">Select Category</option>
              @foreach($categories as $c)
              <option value="{{$c->id}}">{{$c->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="district_id">Article District</label>
            <select id="district_id" name="district_id" class="form-control">
              <option value="" selected style="display: none;">Select District</option>            
              @foreach($districts as $d)
              <option value="{{$d->id}}">{{$d->name}}</option>
              @endforeach
            </select>
          </div> 
          <div class="form-group">
            <label for="tag_id">Select Tag (OPTIONAL)</label>
            <select id="tag_id" name="tag_id" class="form-control">
              <option value="" selected style="display: none;">Select Tag</option>
              @foreach($tags as $t)
              <option value="{{$t->id}}">{{$t->name}}</option>
              @endforeach
            </select>
          </div>             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary create_article text-capitalize">Save article</button>
        </div>
      </div>
    </div>
  </form>
</div>