@extends('spark::layouts.app')

@section('scripts')
    <script src="https://js.stripe.com/v2/"></script>
@endsection

@section('content')
    <div class="spark-screen container">
        <div class="row">
            <!-- Tabs -->
            <div class="col-md-3">
                <div class="panel panel-default panel-flush">
                    <div class="panel-heading">
                        Menu
                    </div>
                    <div class="panel-body">
                        <div class="spark-settings-tabs">
                            <ul class="nav spark-settings-stacked-tabs" role="tablist">
                                <!-- Profile Link -->

                                <li role="presentation" class="active">
                                    <a href="/settings/teams/{!! Request::segment(3) !!}">
                                        <i class="fa fa-fw fa-btn fa-arrow-left"></i> Portfolio Profile
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="/settings#teams">
                                        <i class="fa fa-fw fa-btn fa-arrow-left"></i>View All Portfolios
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab Panels -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Profile -->
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div>
                            <!-- Update Profile Photo -->
                            <div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Add Campaign
                                    </div>
                                    <div class="panel-body">
                                        <form action="/campaigns/store" method="post">
                                            @include('spark::campaigns.form')
                                        </form>
                                    </div>
                                </div>
                            </div><!--v-component-->
                        </div><!--v-component-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
