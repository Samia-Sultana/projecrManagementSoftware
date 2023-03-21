@extends('master')
@section('project')
<div class="page-wrapper">

      <div class="content container-fluid">

        <div class="page-header">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="page-title">Projects</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Projects</li>
              </ul>
            </div>
            <div class="col-auto float-end ms-auto">
              <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#create_project"><i
                  class="fa fa-plus"></i> Create Project</a>

            </div>
          </div>
        </div>

        <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
              <input type="text" class="form-control floating">
              <label class="focus-label">Project Name</label>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
              <input type="text" class="form-control floating">
              <label class="focus-label">Project Manager Name</label>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text">
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-striped custom-table datatable">
                <thead>
                  <tr>
                    <th>Project Name</th>
                    <th>Progress</th>
                    <th>Project Manager</th>
                    <th>Team</th>
                    <th>Deadline</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="{{route('projectDetail',  ['id' => 2])}}">Office Management</a>
                    </td>
                    <td>
                      <div class="progress progress-xs mb-0">
                        <div class="bg-success" role="progressbar" data-bs-toggle="tooltip" title="" style="width: 40%"
                          data-bs-original-title="40%" aria-label="40%"></div>
                      </div>
                    </td>
                    <td>
                      <ul class="team-members">
                        <li>
                          <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                              src="assets/img/profiles/avatar-16.jpg"></a>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa fa-users text-danger"></i> Team </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><span class="avatar flex-shrink-0"><img alt=""
                                src="assets/img/profiles/avatar-09.jpg"></span> Fahim</a>
                          <a class="dropdown-item" href="#"><span class="avatar flex-shrink-0"><img alt=""
                                src="assets/img/profiles/avatar-09.jpg"></span> Samia</a>
                        </div>
                      </div>
                    </td>
                    <td>17 Apr 2019 </td>
                    <td>
                      <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">
                      <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i
                              class="fa fa-pencil m-r-5"></i> Edit</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i
                              class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="{{route('projectDetail', ['id' => 1])}}">Office Management</a>
                    </td>
                    <td>
                      <div class="progress progress-xs mb-0">
                        <div class="bg-success" role="progressbar" data-bs-toggle="tooltip" title="" style="width: 40%"
                          data-bs-original-title="40%" aria-label="40%"></div>
                      </div>
                    </td>
                    <td>
                      <ul class="team-members">
                        <li>
                          <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                              src="assets/img/profiles/avatar-16.jpg"></a>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa fa-users text-danger"></i> Team </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><span class="avatar flex-shrink-0"><img alt=""
                                src="assets/img/profiles/avatar-09.jpg"></span> Fahim</a>
                          <a class="dropdown-item" href="#"><span class="avatar flex-shrink-0"><img alt=""
                                src="assets/img/profiles/avatar-09.jpg"></span> Samia</a>
                        </div>
                      </div>
                    </td>
                    <td>17 Apr 2019 </td>
                    <td>
                      <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                        </div>
                      </div>
                    </td>
                    <td class="text-end">
                      <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i
                              class="fa fa-pencil m-r-5"></i> Edit</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i
                              class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                 

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <div id="create_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create Project</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>



                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Project Name</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Start Date</label>
                      <div class="cal-icon">
                        <input class="form-control datetimepicker" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>End Date</label>
                      <div class="cal-icon">
                        <input class="form-control datetimepicker" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Budget</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>


                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Priority</label>
                      <select class="select">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Status</label>
                      <select class="select">
                        <option>Active</option>
                        <option>Inactive</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Add Project Manager</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Project Manager</label>
                      <div class="project-members">
                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                          <img src="assets/img/profiles/avatar-16.jpg" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Add Team Members</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Team Members</label>
                      <div class="project-members">
                        <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                          <img src="assets/img/profiles/avatar-16.jpg" alt="">
                        </a>
                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                          <img src="assets/img/profiles/avatar-09.jpg" alt="">
                        </a>
                        <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                          <img src="assets/img/profiles/avatar-10.jpg" alt="">
                        </a>
                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                          <img src="assets/img/profiles/avatar-05.jpg" alt="">
                        </a>
                        <span class="all-team">+2</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>




                <div class="submit-section">
                  <button class="btn btn-primary submit-btn">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div id="edit_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Project</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>


                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Project Name</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Start Date</label>
                      <div class="cal-icon">
                        <input class="form-control datetimepicker" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>End Date</label>
                      <div class="cal-icon">
                        <input class="form-control datetimepicker" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Budget</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Status</label>
                      <select class="select">
                        <option>Active</option>
                        <option>Inactive</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Priority</label>
                      <select class="select">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Add Project Manager</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Project Manager</label>
                      <div class="project-members">
                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                          <img src="assets/img/profiles/avatar-16.jpg" alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Add Team Members</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Team Members</label>
                      <div class="project-members">
                        <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                          <img src="assets/img/profiles/avatar-16.jpg" alt="">
                        </a>
                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                          <img src="assets/img/profiles/avatar-09.jpg" alt="">
                        </a>
                        <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                          <img src="assets/img/profiles/avatar-10.jpg" alt="">
                        </a>
                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                          <img src="assets/img/profiles/avatar-05.jpg" alt="">
                        </a>
                        <span class="all-team">+2</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>



                <div class="submit-section">
                  <button class="btn btn-primary submit-btn">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="modal custom-modal fade" id="delete_project" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="form-header">
                <h3>Delete Project</h3>
                <p>Are you sure want to delete?</p>
              </div>
              <div class="modal-btn delete-action">
                <div class="row">
                  <div class="col-6">
                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                  </div>
                  <div class="col-6">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div id="create_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create Project</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Project Name</label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Client</label>
                  <select class="select">
                    <option>Global Technologies</option>
                    <option>Delta Infotech</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Start Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>End Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Rate</label>
                  <input placeholder="$50" class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>&nbsp;</label>
                  <select class="select">
                    <option>Hourly</option>
                    <option>Fixed</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Priority</label>
                  <select class="select">
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Add Project Leader</label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Team Leader</label>
                  <div class="project-members">
                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                      <img src="assets/img/profiles/avatar-16.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Add Team</label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Team Members</label>
                  <div class="project-members">
                    <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                      <img src="assets/img/profiles/avatar-16.jpg" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                      <img src="assets/img/profiles/avatar-09.jpg" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                      <img src="assets/img/profiles/avatar-10.jpg" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                      <img src="assets/img/profiles/avatar-05.jpg" alt="">
                    </a>
                    <span class="all-team">+2</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Description</label>
              <div id="editor"></div>
            </div>
            <div class="form-group">
              <label>Upload Files</label>
              <input class="form-control" type="file">
            </div>
            <div class="submit-section">
              <button class="btn btn-primary submit-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="edit_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Project</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Project Name</label>
                  <input class="form-control" value="Project Management" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Client</label>
                  <select class="select">
                    <option>Global Technologies</option>
                    <option>Delta Infotech</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Start Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>End Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Rate</label>
                  <input placeholder="$50" class="form-control" value="$5000" type="text">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>&nbsp;</label>
                  <select class="select">
                    <option>Hourly</option>
                    <option selected>Fixed</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Priority</label>
                  <select class="select">
                    <option selected>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Add Project Leader</label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Team Leader</label>
                  <div class="project-members">
                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                      <img src="assets/img/profiles/avatar-16.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Add Team</label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Team Members</label>
                  <div class="project-members">
                    <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                      <img src="assets/img/profiles/avatar-16.jpg" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                      <img src="assets/img/profiles/avatar-09.jpg" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                      <img src="assets/img/profiles/avatar-10.jpg" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                      <img src="assets/img/profiles/avatar-05.jpg" alt="">
                    </a>
                    <span class="all-team">+2</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
            </div>
            <div class="form-group">
              <label>Upload Files</label>
              <input class="form-control" type="file">
            </div>
            <div class="submit-section">
              <button class="btn btn-primary submit-btn">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal custom-modal fade" id="delete_project" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>Delete Project</h3>
            <p>Are you sure want to delete?</p>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
              </div>
              <div class="col-6">
                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection