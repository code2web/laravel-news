<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <form method="post" id="updateCategoryForm">
    @csrf
    @method('PUT')
    <input type="hidden" id="up_id">
    
    <div class="modal-dialog">
      <div class="modal-content ml-5">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Updating Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="errMsgContainer mb-2"></div>
          <div class="form-group">
            <label for="up_name">Category Name</label>
            <input type="text" class="form-control" id="up_name" name="up_name">
          </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_category">Update Category</button>
        </div>
      </div>
    </div>
  </form>
</div>