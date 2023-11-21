<div class="row top-row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header admin-dashboard-header"><b>Sent Email List</b></div>
            <div class="card-body">

              <div class="adv-table table-responsive">

                  <table class="display table table-bordered" id="email_list_table">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Date</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Subject</th>
                          <th><i class="ri-attachment-line"></i></th>
                          <th>View</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($emails as $email)
                        <tr>
                            <td>{{ $email->id }}</td>
                            <td>{{ $email->date }}</td>
                            <td>{{ $email->from }}</td>
                            <td>{{ $email->to }}</td>
                            <td>{{ $email->subject }}</td>
                            <th>
                              @if(!empty($email->attachments))
                                <i class="ri-attachment-line"></i>
                              @endif
                            </th>
                            <td><a class="btn btn-accent1" href="{{ route('email-log.show', $email->id) }}">View</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
