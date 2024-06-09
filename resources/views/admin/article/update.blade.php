<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <form method="post" id="updatearticleForm" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <input type="hidden" id="up_id"> --}}
    
    <div class="modal-dialog">
      <div class="modal-content ml-5">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Updating Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="errMsgContainer mb-2"></div>
          {{-- @foreach($articles as $article) --}}
          <input type="hidden" id="up_id" name="id">          
          <div class="form-group">
            <label for="title" class="text-capitalize">article title</label>
            <input type="text" class="form-control" id="up_title" name="title" placeholder="write title here">
          </div>
          <div class="form-group">
            <label for="content" class="text-capitalize">article content</label>
            <input type="text" class="form-control" id="up_content" name="content" placeholder="write content here">
          </div>

          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>            
            <div class="custom-file">
              <img src="{{asset('storage/article/'.$article->thumbnail)}}" class="thumbnail img-fluid img-preview" style="height: 100px; object-fit: contain;">
              {{-- <img src="{{ asset('img/logo.jpg') }}" alt=""> --}}
              {{-- <div>
                @foreach ($articles as $article)
                <img src="{{asset($article->thumbnail)}}" class="img-fluid" alt="">
                @endforeach
              </div> --}}
              {{-- <input type="file" name="thumbnail" class="custom-file-input" id="up_thumbnail"> --}}
              <input type="file" name="thumbnail" class="custom-file-input">
              <label class="custom-file-label" for="thumbnail">Choose file</label>
            </div>
          </div>   
          {{-- @endforeach         --}}
          <div class="form-group">
            <label for="category_id">Article Category</label>
            <select id="up_category_id" name="category_id" class="form-control">
            <option value="" selected style="display: none;">Select Category</option>
              @foreach($categories as $c)
              <option value="{{$c->id}}">{{$c->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="district_id">Article District</label>
            <select id="up_district_id" name="district_id" class="form-control">
              <option value="" selected style="display: none;">Select District</option>            
              @foreach($districts as $d)
              <option value="{{$d->id}}">{{$d->name}}</option>
              @endforeach
            </select>
          </div> 
          <div class="form-group">
            <label for="tag_id">Select Tag (OPTIONAL)</label>
            <select id="up_tag_id" name="tag_id" class="form-control">
              <option value="" selected style="display: none;">Select Tag</option>
              @foreach($tags as $t)
              <option value="{{$t->id}}">{{$t->name}}</option>
              @endforeach
            </select>
          </div>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary update_article">Update article</button>
        </div>
      </div>
    </div>
  </form>
</div>