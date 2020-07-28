@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{ asset('colorAdmin/plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/nvd3/build/nv.d3.css')}}" rel="stylesheet" />

	<link href="{{ asset('colorAdmin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-autofill-bs4/css/autofill.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-colreorder-bs4/css/colreorder.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-keytable-bs4/css/keytable.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-rowreorder-bs4/css/rowreorder.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" />

	<link href="{{ asset('colorAdmin/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')

<div class="d-sm-flex align-items-center mb-3">
    <a href="{{url('wallet/request_withdrawal')}}" class="btn btn-inverse mr-2 text-truncate">
        <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i> 
        <span>Request Withdrawal</span>
        <b class="caret"></b>
    </a>
    <a href="{{url('wallet/transfer')}}" class="btn btn-inverse mr-2 text-truncate">
        <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i> 
        <span>Transfer</span>
        <b class="caret"></b>
    </a>
    <div class="text-muted f-w-600 mt-2 mt-sm-0">Note: Withdrawal <span id="">7, 14, 21 each months</span></div>
</div>
<div class="row">
    <!-- begin col-6 -->
    <div class="col-xl-6">
        <!-- begin card -->
        <div class="card border-0 mb-3 overflow-hidden bg-dark text-white">
            <!-- begin card-body -->
            <div class="card-body">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-7 -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- begin title -->
                        <div class="mb-3 text-grey">
                            <b>TOTAL BALANCE</b>
                            <span class="ml-2">
                                <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Total sales" data-placement="top" data-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels." data-original-title="" title=""></i>
                            </span>
                        </div>
                        <!-- end title -->
                        <!-- begin total-sales -->
                        <div class="d-flex mb-1">
                            <h2 class="mb-0">$<span data-animation="number" data-value="{{Auth::user()->wallet->current_balance}}">{{Auth::user()->wallet->current_balance}}</span></h2>
                            <div class="ml-auto mt-n1 mb-n1" style="position: relative;"><div id="total-sales-sparkline" style="min-height: 36px;"><div id="apexchartsr2vnaq5mk" class="apexcharts-canvas apexchartsr2vnaq5mk light" style="width: 200px; height: 36px;"><svg id="SvgjsSvg1122" width="200" height="36" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1124" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1123"><clipPath id="gridRectMaskr2vnaq5mk"><rect id="SvgjsRect1128" width="203" height="39" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskr2vnaq5mk"><rect id="SvgjsRect1129" width="202" height="38" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1135" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1136" stop-opacity="1" stop-color="#348fe2" offset="0"></stop><stop id="SvgjsStop1137" stop-opacity="1" stop-color="#8753de" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1127" x1="66.16666666666667" y1="0" x2="66.16666666666667" y2="36" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="66.16666666666667" y="0" width="1" height="36" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1139" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1140" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1143" class="apexcharts-grid"><g id="SvgjsG1144" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1146" x1="0" y1="0" x2="200" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1147" x1="0" y1="7.2" x2="200" y2="7.2" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1148" x1="0" y1="14.4" x2="200" y2="14.4" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1149" x1="0" y1="21.6" x2="200" y2="21.6" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1150" x1="0" y1="28.8" x2="200" y2="28.8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1151" x1="0" y1="36" x2="200" y2="36" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1145" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1153" x1="0" y1="36" x2="200" y2="36" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1152" x1="0" y1="1" x2="0" y2="36" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1131" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1132" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1138" d="M 0 13.314311999999997C 11.666666666666666 13.314311999999997 21.66666666666667 9.554711999999999 33.333333333333336 9.554711999999999C 45 9.554711999999999 55.00000000000001 18.488712 66.66666666666667 18.488712C 78.33333333333334 18.488712 88.33333333333334 20.941704 100 20.941704C 111.66666666666667 20.941704 121.66666666666667 16.98228 133.33333333333334 16.98228C 145 16.98228 155.00000000000003 20.204784 166.66666666666669 20.204784C 178.33333333333334 20.204784 188.33333333333334 4.996464000000003 200 4.996464000000003" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1135)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskr2vnaq5mk)" pathTo="M 0 13.314311999999997C 11.666666666666666 13.314311999999997 21.66666666666667 9.554711999999999 33.333333333333336 9.554711999999999C 45 9.554711999999999 55.00000000000001 18.488712 66.66666666666667 18.488712C 78.33333333333334 18.488712 88.33333333333334 20.941704 100 20.941704C 111.66666666666667 20.941704 121.66666666666667 16.98228 133.33333333333334 16.98228C 145 16.98228 155.00000000000003 20.204784 166.66666666666669 20.204784C 178.33333333333334 20.204784 188.33333333333334 4.996464000000003 200 4.996464000000003" pathFrom="M -1 36L -1 36L 33.333333333333336 36L 66.66666666666667 36L 100 36L 133.33333333333334 36L 166.66666666666669 36L 200 36"></path><g id="SvgjsG1133" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1159" r="0" cx="66.66666666666667" cy="18.488712" class="apexcharts-marker wwo6smcymg no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1134" class="apexcharts-datalabels"></g></g><line id="SvgjsLine1154" x1="0" y1="0" x2="200" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1155" x1="0" y1="0" x2="200" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1156" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1157" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1158" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1126" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1141" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1142" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 77.6667px; top: 6px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value">$7,296.37</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div><div class="resize-triggers"><div class="expand-trigger"><div style="width: 201px; height: 38px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <!-- end total-sales -->
                        <!-- begin percentage -->
                        <div class="mb-3 text-grey">
                            <i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">33.21</span>% compare to last week
                        </div>
                        <!-- end percentage -->
                        <hr class="bg-white-transparent-2">
                        <!-- begin row -->
                        <div class="row text-truncate">
                            <!-- begin col-6 -->
                            <div class="col-6">
                                <div class="f-s-12 text-grey">Total Sales Order</div>
                                <div class="f-s-18 m-b-5 f-w-600 p-b-1" data-animation="number" data-value="1568">1,568</div>
                                <div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
                                    <div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 55%;"></div>
                                </div>
                            </div>
                            <!-- end col-6 -->
                            <!-- begin col-6 -->
                            <div class="col-6">
                                <div class="f-s-12 text-grey">Total Sales Bonus</div>
                                <div class="f-s-18 m-b-5 f-w-600 p-b-1">$<span data-animation="number" data-value="41.20">41.20</span></div>
                                <div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
                                    <div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 55%;"></div>
                                </div>
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end col-7 -->
                    <!-- begin col-5 -->
                    <div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
                        <img src="{{asset('colorAdmin/img/svg/img-1.svg')}}" class="d-none d-lg-block" height="150px">
                    </div>
                    <!-- end col-5 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-6 -->
    <!-- begin col-6 -->
    <div class="col-xl-6">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-sm-6">
                <!-- begin card -->
                <div class="card border-0 text-truncate mb-3 bg-dark text-white">
                    <!-- begin card-body -->
                    <div class="card-body">
                        <!-- begin title -->
                        <div class="mb-3 text-grey">
                            <b class="mb-3">CONVERSION RATE</b> 
                            <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Conversion Rate" data-placement="top" data-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
                        </div>
                        <!-- end title -->
                        <!-- begin conversion-rate -->
                        <div class="d-flex align-items-center mb-1">
                            <h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">2.19</span>%</h2>
                            <div class="ml-auto" style="position: relative;">
                                <div id="conversion-rate-sparkline" style="min-height: 28px;"><div id="apexcharts3gvqes9u" class="apexcharts-canvas apexcharts3gvqes9u light" style="width: 160px; height: 28px;"><svg id="SvgjsSvg1161" width="160" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1163" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1162"><clipPath id="gridRectMask3gvqes9u"><rect id="SvgjsRect1168" width="163" height="31" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask3gvqes9u"><rect id="SvgjsRect1169" width="162" height="30" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1175" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1176" stop-opacity="1" stop-color="#ff5b57" offset="0"></stop><stop id="SvgjsStop1177" stop-opacity="1" stop-color="#f59c1a" offset="0.5"></stop><stop id="SvgjsStop1178" stop-opacity="1" stop-color="#90ca4b" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1167" x1="0" y1="0" x2="0" y2="28" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="28" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1180" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1181" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1184" class="apexcharts-grid"><g id="SvgjsG1185" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1187" x1="0" y1="0" x2="160" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1188" x1="0" y1="9.333333333333334" x2="160" y2="9.333333333333334" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1189" x1="0" y1="18.666666666666668" x2="160" y2="18.666666666666668" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1190" x1="0" y1="28" x2="160" y2="28" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1186" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1192" x1="0" y1="28" x2="160" y2="28" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1191" x1="0" y1="1" x2="0" y2="28" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1171" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1172" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1179" d="M 0 10.44767676767676C 9.333333333333334 10.44767676767676 17.333333333333336 6.346666666666657 26.666666666666668 6.346666666666657C 36 6.346666666666657 44 20.946262626262623 53.333333333333336 20.946262626262623C 62.66666666666667 20.946262626262623 70.66666666666667 28.000000000000004 80 28.000000000000004C 89.33333333333333 28.000000000000004 97.33333333333334 23.570909090909094 106.66666666666667 23.570909090909094C 116 23.570909090909094 124.00000000000001 27.835959595959597 133.33333333333334 27.835959595959597C 142.66666666666669 27.835959595959597 150.66666666666669 8.47919191919192 160 8.47919191919192" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1175)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask3gvqes9u)" pathTo="M 0 10.44767676767676C 9.333333333333334 10.44767676767676 17.333333333333336 6.346666666666657 26.666666666666668 6.346666666666657C 36 6.346666666666657 44 20.946262626262623 53.333333333333336 20.946262626262623C 62.66666666666667 20.946262626262623 70.66666666666667 28.000000000000004 80 28.000000000000004C 89.33333333333333 28.000000000000004 97.33333333333334 23.570909090909094 106.66666666666667 23.570909090909094C 116 23.570909090909094 124.00000000000001 27.835959595959597 133.33333333333334 27.835959595959597C 142.66666666666669 27.835959595959597 150.66666666666669 8.47919191919192 160 8.47919191919192" pathFrom="M -1 54.410505050505066L -1 54.410505050505066L 26.666666666666668 54.410505050505066L 53.333333333333336 54.410505050505066L 80 54.410505050505066L 106.66666666666667 54.410505050505066L 133.33333333333334 54.410505050505066L 160 54.410505050505066"></path><g id="SvgjsG1173" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1198" r="0" cx="0" cy="0" class="apexcharts-marker w2be39wy no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1174" class="apexcharts-datalabels"></g></g><line id="SvgjsLine1193" x1="0" y1="0" x2="160" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1194" x1="0" y1="0" x2="160" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1195" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1196" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1197" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1166" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1182" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1183" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 161px; height: 29px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <!-- end conversion-rate -->
                        <!-- begin percentage -->
                        <div class="mb-4 text-grey">
                            <i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.50</span>% compare to last week
                        </div>
                        <!-- end percentage -->
                        <!-- begin info-row -->
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-circle text-red f-s-8 mr-2"></i>
                                Added to cart
                            </div>
                            <div class="d-flex align-items-center ml-auto">
                                <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">262</span>%</div>
                                <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.79">3.79</span>%</div>
                            </div>
                        </div>
                        <!-- end info-row -->
                        <!-- begin info-row -->
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-circle text-warning f-s-8 mr-2"></i>
                                Reached checkout
                            </div>
                            <div class="d-flex align-items-center ml-auto">
                                <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">11</span>%</div>
                                <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="3.85">3.85</span>%</div>
                            </div>
                        </div>
                        <!-- end info-row -->
                        <!-- begin info-row -->
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-circle text-lime f-s-8 mr-2"></i>
                                Sessions converted
                            </div>
                            <div class="d-flex align-items-center ml-auto">
                                <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">57</span>%</div>
                                <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="2.19">2.19</span>%</div>
                            </div>
                        </div>
                        <!-- end info-row -->
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-6 -->
            <!-- begin col-6 -->
            <div class="col-sm-6">
                <!-- begin card -->
                <div class="card border-0 text-truncate mb-3 bg-dark text-white">
                    <!-- begin card-body -->
                    <div class="card-body">
                        <!-- begin title -->
                        <div class="mb-3 text-grey">
                            <b class="mb-3">STORE SESSIONS</b> 
                            <span class="ml-2"><i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-title="Store Sessions" data-placement="top" data-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
                        </div>
                        <!-- end title -->
                        <!-- begin store-session -->
                        <div class="d-flex align-items-center mb-1">
                            <h2 class="text-white mb-0"><span data-animation="number" data-value="70719">70,719</span></h2>
                            <div class="ml-auto" style="position: relative;">
                                <div id="store-session-sparkline" style="min-height: 28px;"><div id="apexchartsm6sooqya" class="apexcharts-canvas apexchartsm6sooqya light" style="width: 160px; height: 28px;"><svg id="SvgjsSvg1200" width="160" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1202" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1201"><clipPath id="gridRectMaskm6sooqya"><rect id="SvgjsRect1207" width="163" height="31" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskm6sooqya"><rect id="SvgjsRect1208" width="162" height="30" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1214" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1215" stop-opacity="1" stop-color="#00acac" offset="0"></stop><stop id="SvgjsStop1216" stop-opacity="1" stop-color="#348fe2" offset="0.5"></stop><stop id="SvgjsStop1217" stop-opacity="1" stop-color="#5ac8fa" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1206" x1="0" y1="0" x2="0" y2="28" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="28" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1219" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1220" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1223" class="apexcharts-grid"><g id="SvgjsG1224" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1226" x1="0" y1="0" x2="160" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1227" x1="0" y1="7" x2="160" y2="7" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1228" x1="0" y1="14" x2="160" y2="14" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1229" x1="0" y1="21" x2="160" y2="21" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1230" x1="0" y1="28" x2="160" y2="28" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1225" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1232" x1="0" y1="28" x2="160" y2="28" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1231" x1="0" y1="1" x2="0" y2="28" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1210" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1211" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1218" d="M 0 11.158000000000001C 9.333333333333334 11.158000000000001 17.333333333333336 9.124499999999998 26.666666666666668 9.124499999999998C 36 9.124499999999998 44 23.4115 53.333333333333336 23.4115C 62.66666666666667 23.4115 70.66666666666667 25.081 80 25.081C 89.33333333333333 25.081 97.33333333333334 15.358000000000004 106.66666666666667 15.358000000000004C 116 15.358000000000004 124.00000000000001 9.800000000000004 133.33333333333334 9.800000000000004C 142.66666666666669 9.800000000000004 150.66666666666669 1.5504999999999995 160 1.5504999999999995" fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1214)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskm6sooqya)" pathTo="M 0 11.158000000000001C 9.333333333333334 11.158000000000001 17.333333333333336 9.124499999999998 26.666666666666668 9.124499999999998C 36 9.124499999999998 44 23.4115 53.333333333333336 23.4115C 62.66666666666667 23.4115 70.66666666666667 25.081 80 25.081C 89.33333333333333 25.081 97.33333333333334 15.358000000000004 106.66666666666667 15.358000000000004C 116 15.358000000000004 124.00000000000001 9.800000000000004 133.33333333333334 9.800000000000004C 142.66666666666669 9.800000000000004 150.66666666666669 1.5504999999999995 160 1.5504999999999995" pathFrom="M -1 49L -1 49L 26.666666666666668 49L 53.333333333333336 49L 80 49L 106.66666666666667 49L 133.33333333333334 49L 160 49"></path><g id="SvgjsG1212" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1238" r="0" cx="0" cy="0" class="apexcharts-marker wqf8wlf71 no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1213" class="apexcharts-datalabels"></g></g><line id="SvgjsLine1233" x1="0" y1="0" x2="160" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1234" x1="0" y1="0" x2="160" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1235" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1236" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1237" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1205" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1221" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1222" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 161px; height: 29px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                        <!-- end store-session -->
                        <!-- begin percentage -->
                        <div class="mb-4 text-grey">
                            <i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">9.5</span>% compare to last week
                        </div>
                        <!-- end percentage -->
                        <!-- begin info-row -->
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-circle text-teal f-s-8 mr-2"></i>
                                Mobile
                            </div>
                            <div class="d-flex align-items-center ml-auto">
                                <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">25.7</span>%</div>
                                <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="53210">53,210</span></div>
                            </div>
                        </div>
                        <!-- end info-row -->
                        <!-- begin info-row -->
                        <div class="d-flex mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-circle text-blue f-s-8 mr-2"></i>
                                Desktop
                            </div>
                            <div class="d-flex align-items-center ml-auto">
                                <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">16.0</span>%</div>
                                <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="11959">11,959</span></div>
                            </div>
                        </div>
                        <!-- end info-row -->
                        <!-- begin info-row -->
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-circle text-aqua f-s-8 mr-2"></i>
                                Tablet
                            </div>
                            <div class="d-flex align-items-center ml-auto">
                                <div class="text-grey f-s-11"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">7.9</span>%</div>
                                <div class="width-50 text-right pl-2 f-w-600"><span data-animation="number" data-value="5545">5,545</span></div>
                            </div>
                        </div>
                        <!-- end info-row -->
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end col-6 -->
</div>
<div class="row">
    <div class="table-responsive-lg col-lg-12">
        <div class="d-sm-flex align-items-center mb-3">
        <a href="#" class="btn btn-inverse mr-2 text-truncate">
            <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i> 
            <span>Transactions</span>
            <b class="caret"></b>
        </a>
    </div>
        <table id="data-table-combine" class="table table-sm table-striped table-bordered table-td-valign-middle" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th width="1%">NO</th>
                    <th>DATE</th>
                    <th>AMOUNT</th>
                    <th>TYPE</th>
                    <th>TO ACCOUNT</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            
            @foreach($transactions as $row)
                @if($loop->odd)
                <tr class="odd gradeX">
                @else
                <tr class="even gradeC">
                @endif
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$row->updated}}</td>
                    <td>{{$row->amount}}</td>
                    <td>{{$row->type}}</td>
                    <td>{{$row->to_acc}}</td>
                    <td>{{$row->status}}</td>
                    <td class="row pl-5">
                        <button onclick="window.location='{{ url("transactions/".$row->id) }}'" class="m-5 btn-sm btn-gray">Show</button>        
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="table-responsive-lg col-lg-12">
        <div class="d-sm-flex align-items-center mb-3">
            <a href="#" class="btn btn-inverse mr-2 text-truncate">
                <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i> 
                <span>Withdrawals</span>
                <b class="caret"></b>
            </a>
        </div>
        <table id="data-table-combine-2" class="table table-sm table-striped table-bordered table-td-valign-middle" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th width="1%">NO</th>
                    <th>DATE</th>
                    <th>AMOUNT</th>
                    <th>TO ACCOUNT</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            
            @foreach($withdrawals as $row)
                @if($loop->odd)
                <tr class="odd gradeX">
                @else
                <tr class="even gradeC">
                @endif
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$row->updated_at}}</td>
                    <td>{{$row->amount}}</td>
                    <td>{{$row->account->acc_no}}</td>
                    <td>
                        @if($row->status === 0)
                        <span>Pending</span>
                        @elseif($row->status === 1)
                        <span>Cancel</span>
                        @elseif($row->status === 2)
                        <span>Processing</span>
                        @elseif($row->status === 3)
                        <span>Paid</span>
                        @elseif($row->status === 4)
                        <span>Rejected</span>
                        @endif
                    </td>
                    <td class="row pl-5">
                        <button onclick="window.location='{{ url("withdraws/".$row->id) }}'" class="m-5 btn-sm btn-gray">Show</button>  
                        <button onclick="window.location='{{ url("withdraws/".$row->id."/edit") }}'" class="m-5 btn-sm btn-gray">Update</button>      
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- end row -->

<hr>

@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('colorAdmin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-autofill/js/dataTables.autofill.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js')}}"></script>
	
	<script src="{{ asset('colorAdmin/plugins/datatables.net-rowreorder/js/dataTables.rowreorder.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-rowreorder-bs4/js/rowreorder.bootstrap4.min.js')}}"></script>
	
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/pdfmake/build/pdfmake.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/pdfmake/build/vfs_fonts.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/jszip/dist/jszip.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/js/demo/table-manage-combine.demo.js')}}"></script>
    <script src="{{ asset('colorAdmin/js/demo/table-manage-combine-2.demo.js')}}"></script>

	<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
	    $('.delete-user').click(function(e){
	         e.preventDefault() // Don't post the form, unless confirmed
	         if (confirm('Are you sure?')) {
	             // Post the form
	             $(e.target).closest('form').submit() // Post the surrounding form
	         }
	    });
	</script>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('colorAdmin/plugins/d3/d3.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/nvd3/build/nv.d3.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/jvectormap-next/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('colorAdmin/js/demo/dashboard-v3.js')}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
@endsection


               
            
            