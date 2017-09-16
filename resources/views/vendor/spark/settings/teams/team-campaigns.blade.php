<div class="panel panel-default">
    <div class="panel-heading">
        Campaign List
        <a href="/campaigns/create/{!! Request::segment(3) !!}" class="btn btn-primary pull-right"> Add Campaign</a>
    </div>

    <div class="panel-body">
        <!-- Success Message -->
        <div class="alert alert-success" v-if="form.successful">
            Your team name has been updated!
        </div>

        <table class="table table-border m-b-none">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Action</th>
            </thead>
            <tbody>
            @if(!empty($campaigns))
                @foreach($campaigns as $campaign)
                    <tr>
                        <td>{!! $campaign->id !!} </td>
                        <td>{!! $campaign->name !!} </td>
                        <td>{!! $campaign->subject !!} </td>
                        <td>  </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5"> <p class="text-center"> There are no campaign found </p> </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>