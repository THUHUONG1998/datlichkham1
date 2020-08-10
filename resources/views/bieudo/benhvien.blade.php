@extends('pages.layout.layouts')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="card mb-3">
            <div class="card-header" style="font-size: 20px">

                <i class="fa fa-area-chart"></i> Thống kê sách bán được theo tháng
                <div style="display: include; float: right;">
                    <select name="chart_year" id="chart_year">
                        
                    </select>
                </div>
            </div>

            <div class="card-body">
                <canvas id="myChart" width="100%" height="30"></canvas>  
            </div>
            <!-- <div class="card-footer small text-muted">Updated at ...</div> -->
        </div>

    </div>

    
</div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/Chart.min.js')}}"></script>

<script>
    new Chart(document.getElementById("myChart"), {
        type: 'bar',
        data: {
            labels: [
                @foreach($thongkeluongdattheobenhvien as $item)
                
                    '{{$item->id_benhvien}}',
                
                @endforeach
            ],
            datasets: [
                {
                    label: "Tổng tiền bán được: ",
                    backgroundColor: [
                        @foreach($mang_mau as $item)
                            '#{{$item}}',
                        @endforeach
                    ],
                    data: [
                        @foreach($thongkeluongdattheobenhvien as $item)
                            '{{$item->soluong}}' ,
                        @endforeach
                    ]
                }
            ]
        },
        options: {
           scales: {
            //    xAxes:[{
            //        time: {
            //            unit: 'date'
            //        },
            //        gridlines: {
            //            display: false
            //        },
            //        ticks: {
            //            maxTicksLimit: 7
            //        }
            //    }],
               yAxes:[{
                   ticks: {
                       min: 0,
                       max: 10000000,
                       maxTicksLimit: 500000
                   },
                   gridlines: {
                       color: "rgba(0,0,0, .125)"
                   }
               }],
           },
           legend: {
               display: false
           }
        }
    });

</script>


@endsection