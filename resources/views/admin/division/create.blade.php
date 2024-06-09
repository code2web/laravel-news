<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <form method="post" id="createdivisionForm">
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
            <label for="name">division Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="write name here">
          </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary create_division">Save division</button>
        </div>
      </div>
    </div>
  </form>
</div>