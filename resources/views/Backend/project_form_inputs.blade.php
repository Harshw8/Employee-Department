<div class="col-md-6">       
            <label for="project_name" class="form-label">Project Name</label>
            <input type="text" class="form-control" name="project_name" id="project_name" value="{{ $project?->project_name }}">
            </div>
            <br/>
            <div class="col-md-6">
            <label for="project_description" class="form-label">Project Description</label>
            <input type="text" class="form-control" name="project_description" id="project_description" value="{{ $project?->project_description }}">
            </div>
            <br/>
            <div class="col-md-6">
            <label for="client_name" class="form-label">Client Name</label>
            <input type="text" class="form-control" name="client_name" id="client_name" value="{{ $project?->client_name }}">
            </div>
            <br/>
            <div class="col-md-6">
            <label for="client_email" class="form-label">Client Email</label>
            <input type="text" class="form-control" name="client_email" id="client_email" value="{{ $project?->client_email }}">
            </div>
            <br/>
            <div class="col-md-6">
            <button type="submit" class="btn btn-primary px-5">Update</button>
            </div>