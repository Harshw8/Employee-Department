<div>       
            <label for="project_name">Project Name</label>
            <input type="text" name="project_name" id="project_name" value="{{ $project?->project_name }}">
            </div>
            <br/>
            <div>
            <label for="project_description">Project Description</label>
            <input type="text" name="project_description" id="project_description" value="{{ $project?->project_description }}">
            </div>
            <br/>
            <div>
            <label for="client_name">Client Name</label>
            <input type="text" name="client_name" id="client_name" value="{{ $project?->client_name }}">
            </div>
            <br/>
            <div>
            <label for="client_email">Client Email</label>
            <input type="text" name="client_email" id="client_email" value="{{ $project?->client_email }}">
            </div>
            <br/>
            <div>
            <button type="submit">Update</button>
            </div>