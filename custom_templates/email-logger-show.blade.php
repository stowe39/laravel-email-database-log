<div class="row top-row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header admin-dashboard-header"><b>Email Details</b>
                <div class="float-end">
                    <a class="btn btn-secondary btn-sm" href="{{ route('email-log') }}">Back to List</a>
                </div>
            </div>
            <div class="card-body">

                <div class="mt-2">
                    <h5 class="font-18">{{ $email->subject }}</h5>

                    <hr/>

                    <div class="d-flex align-items-start mb-3 mt-1">
                        <img class="me-2 rounded-circle" src="{{ URL::to(config('constants.XHP_LOGO_PATH'))}}" alt="placeholder image" height="32">
                        <div class="flex-1">
                            <small class="float-end">{{ date(config('constants.NOTYFY_DISPLAY_TIME_FORMAT'),strtotime($email->date))}}</small>
                            <h6 class="m-0 font-14">{{ $email->from }}</h6>
                            <small class="text-muted">Message ID: {{ $email->messageId }}</small>
                        </div>
                    </div>

                    <div>{!! $email->body !!}</div>
                    <hr/>

                    <h5 class="mb-3">Attachments</h5>
                    @if(count($email->attachments))
                        <ul>
                            @foreach($email->attachments as $attachment)
                                <li>
                                    @if(array_key_exists('route', $attachment))
                                        <a href="{{ $attachment['route'] }}">{{ $attachment['name'] }}</a>
                                    @else
                                        {{ $attachment['name'] }} - {{ $attachment['message'] }}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @else
                        NONE
                    @endif
                </div>
                <div class="text-center mb-3">
                  <a class="btn btn-primary mt-3" href="{{ route('email-log') }}">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
