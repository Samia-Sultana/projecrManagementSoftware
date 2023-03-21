@extends('master')
@section('milestoneDetail')

<div class="page-wrapper">

<div class="content container-fluid">

  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="page-title">Hospital Admin</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Task Board</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row board-view-header">

    <div class="col-12 text-end">
      <a href="#" class="btn btn-white float-end ms-2" data-bs-toggle="modal" data-bs-target="#add_task_board"><i
          class="fa fa-plus"></i> Create Task</a>
    </div>

  </div>






  <div class="kanban-board card mb-0 ">
    <div class="card-body">
      <div class="kanban-cont">



        <div class="kanban-list kanban-list1 kanban-danger">

          <div class="kanban-wrap">
            <div class="card panel">
              <div class="kanban-box">
                <div class="task-board-header">
                  <div class="avatar">
                    <a href="" class="rounded-circle border border-white" data-bs-toggle="modal"
                      data-bs-target="#status_user"><i class="fas fa-square"></i></a>
                  </div>
                  <span class="status-title"><a href="task-view.html">Website redesign</a></span>
                  <div class="dropdown kanban-task-action">
                    <a href="" data-bs-toggle="dropdown">
                      <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#" data-bs-toggle="modal"
                        data-bs-target="#edit_task_modal">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="task-board-body">
                  <div class="kanban-info">
                  </div>
                  <div class="kanban-footer">
                    <span class="task-info-cont">
                      <span class="task-date"><i class="fa fa-clock-o"></i> Sep 26</span>
                      <span class="task-priority badge bg-inverse-danger">High</span>
                    </span>
                    <span class="task-users">
                      <div class="avatar-group">
                        <div class="avatar">
                          <img class="avatar-img rounded-circle border border-white" alt="User Image"
                            src="assets/img/profiles/avatar-02.jpg">
                        </div>
                        <div class="avatar">
                          <img class="avatar-img rounded-circle border border-white" alt="User Image"
                            src="assets/img/profiles/avatar-09.jpg">
                        </div>
                        <div class="avatar">
                          <img class="avatar-img rounded-circle border border-white" alt="User Image"
                            src="assets/img/profiles/avatar-12.jpg">
                        </div>
                        <div class="avatar">
                          <a href="" class="avatar-title rounded-circle border border-white"
                            data-bs-toggle="modal" data-bs-target="#assign_user"><i class="fa fa-plus"></i></a>
                    </span>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="add-new-task">
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New Task</a>
          </div>
        </div>





      </div>
    </div>
  </div>




</div>

<div id="add_task_board" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Task Board</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Task Name</label>
            <input type="text" class="form-control">
          </div>


          <div class="form-group">
            <label>Start Date</label>
            <div class="cal-icon">
              <input class="form-control datetimepicker" type="text">
            </div>
          </div>

          <div class="form-group">
            <label>End Date</label>
            <div class="cal-icon">
              <input class="form-control datetimepicker" type="text">
            </div>
          </div>



          <div class="form-group">
            <label>Status</label>
            <select class="select">
              <option>REVIEW</option>
              <option>IN PROGRESS</option>
              <option>COMPLETE</option>
            </select>
          </div>

          <div class="form-group">
            <label>Priority</label>
            <select class="select">
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>


          <div class="m-t-20 text-center">
            <button class="btn btn-primary btn-lg">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_task_board" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Task Board</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Task Board Name</label>
            <input type="text" class="form-control" value="Pending">
          </div>
          <div class="form-group task-board-color">
            <label>Task Board Color</label>
            <div class="board-color-list">
              <label class="board-control board-primary">
                <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                <span class="board-indicator"></span>
              </label>
              <label class="board-control board-success">
                <input name="radio" type="radio" class="board-control-input" value="success">
                <span class="board-indicator"></span>
              </label>
              <label class="board-control board-info">
                <input name="radio" type="radio" class="board-control-input" value="info">
                <span class="board-indicator"></span>
              </label>
              <label class="board-control board-purple">
                <input name="radio" type="radio" class="board-control-input" value="purple">
                <span class="board-indicator"></span>
              </label>
              <label class="board-control board-warning">
                <input name="radio" type="radio" class="board-control-input" value="warning">
                <span class="board-indicator"></span>
              </label>
              <label class="board-control board-danger">
                <input name="radio" type="radio" class="board-control-input" value="danger">
                <span class="board-indicator"></span>
              </label>
            </div>
          </div>
          <div class="m-t-20 text-center">
            <button class="btn btn-primary btn-lg">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="new_project" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create New Project</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Project Name</label>
            <input class="form-control" type="text">
          </div>
          <div class="submit-section">
            <button class="btn btn-primary submit-btn">Create Project</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="assign_leader" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Assign Leader to this project</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group m-b-30">
          <input placeholder="Search to add a leader" class="form-control search-input" type="text">
          <button class="btn btn-primary">Search</button>
        </div>
        <div>
          <ul class="chat-user-list">
            <li>
              <a href="#">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span>
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">Richard Miles</div>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0"><img alt="" src="assets/img/profiles/avatar-10.jpg"></span>
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">John Smith</div>
                    <span class="designation">Android Developer</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt="" src="assets/img/profiles/avatar-16.jpg">
                  </span>
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">Jeffery Lalor</div>
                    <span class="designation">Team Leader</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="submit-section">
          <button class="btn btn-primary submit-btn">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>




<div id="status_user" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Assign the user to this project</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div>
          <ul class="chat-user-list">
            <li>
              <a href="#">
                <div class="media d-flex">
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">TO DO</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <div class="media d-flex">
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">IN PROGRESS</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a href="#">
                <div class="media d-flex">
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">DONE</div>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="media d-flex">
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">COMPLETE</div>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>






<div id="assign_user" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Assign the user to this project</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="input-group m-b-30">
          <input placeholder="Search a user to assign" class="form-control search-input" type="text">
          <button class="btn btn-primary">Search</button>
        </div>
        <div>
          <ul class="chat-user-list">
            <li>
              <a href="#">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span>
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">Richard Miles</div>
                    <span class="designation">Web Developer</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0"><img alt="" src="assets/img/profiles/avatar-10.jpg"></span>
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">John Smith</div>
                    <span class="designation">Android Developer</span>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="media d-flex">
                  <span class="avatar flex-shrink-0">
                    <img alt="" src="assets/img/profiles/avatar-16.jpg">
                  </span>
                  <div class="media-body align-self-center text-nowrap">
                    <div class="user-name">Jeffery Lalor</div>
                    <span class="designation">Team Leader</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>



























        <div class="submit-section">
          <button class="btn btn-primary submit-btn">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="add_task_modal" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Task</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Task Name</label>
            <input type="text" class="form-control">
          </div>


          <div class="form-group">
            <label>Start Date</label>
            <div class="cal-icon">
              <input class="form-control datetimepicker" type="text">
            </div>
          </div>

          <div class="form-group">
            <label>End Date</label>
            <div class="cal-icon">
              <input class="form-control datetimepicker" type="text">
            </div>
          </div>



          <div class="form-group">
            <label>Status</label>
            <select class="select">
              <option>REVIEW</option>
              <option>IN PROGRESS</option>
              <option>COMPLETE</option>
            </select>
          </div>

          <div class="form-group">
            <label>Priority</label>
            <select class="select">
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>
          <div class="submit-section text-center">
            <button class="btn btn-primary submit-btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div id="edit_task_modal" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Task</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Task Name</label>
            <input type="text" class="form-control">
          </div>


          <div class="form-group">
            <label>Start Date</label>
            <div class="cal-icon">
              <input class="form-control datetimepicker" type="text">
            </div>
          </div>

          <div class="form-group">
            <label>End Date</label>
            <div class="cal-icon">
              <input class="form-control datetimepicker" type="text">
            </div>
          </div>



          <div class="form-group">
            <label>Status</label>
            <select class="select">
              <option>REVIEW</option>
              <option>IN PROGRESS</option>
              <option>COMPLETE</option>
            </select>
          </div>

          <div class="form-group">
            <label>Priority</label>
            <select class="select">
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>
          <div class="submit-section text-center">
            <button class="btn btn-primary submit-btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</div>


@endsection