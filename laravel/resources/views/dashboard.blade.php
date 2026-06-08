@extends('main')

@section('content')
    {{-- Ambil dari Highcharts.js --}}
    <script src="https://unpkg.com/highcharts/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <div class="row">
        <div id="container" class="col-md-6 mb-4"></div>
        <div id="container1" class="col-md-6 mb-4"></div>
    </div>
    <div class="row">
        <div id="container2" class="col-12"></div>
    </div>

    {{-- CSS --}}
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8f9fa; /* Warna background web yang bersih */
            color: #212529;
        }

        /* Memastikan container chart memiliki tinggi dan spasi yang baik */
        #container, #container1, #container2 {
            min-height: 400px;
            margin-bottom: 20px;
            background: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #e6e6e6;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tbody tr:nth-child(even) {
            background: #f7f7f7;
        }
    </style>

    {{-- JS --}}
    <script>
        // Palet warna kustom untuk chart agar terlihat modern & cerah
        const chartColors = ['#4361ee', '#3f37c9', '#4cc9f0', '#f72585', '#7209b7', '#ffb703'];

        // 1. Column Chart => Jumlah mahasiswa per prodi
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            colors: chartColors, // Menerapkan palet warna
            title: {
                text: 'Grafik Jumlah Mahasiswa UMDP per Program Studi'
            },
            subtitle: {
                text: 'Source: Aplikasi SIMPONI'
            },
            xAxis: {
                categories: [
                    @foreach ($grafikmhs as $data)
                        '{{ $data->nama_prodi }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Program Studi'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Mahasiswa'
                }
            },
            tooltip: {
                valueSuffix: ' (orang)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0,
                    colorByPoint: true // Membuat tiap batang prodi memiliki warna berbeda
                }
            },
            series: [
                {
                    name: 'Mahasiswa',
                    data: [
                        @foreach ($grafikmhs as $data)
                            {{ $data->jumlah_mhs }},
                        @endforeach
                    ]
                }
            ]
        });

        // 2. Column Chart => Jumlah mahasiswa per tahun 
        Highcharts.chart('container1', {
            chart: {
                type: 'column'
            },
            colors: ['#2ec4b6'], // Warna tunggal teal yang segar untuk tren tahunan
            title: {
                text: 'Grafik Jumlah Mahasiswa UMDP per Tahun Angkatan'
            },
            subtitle: {
                text: 'Source: Aplikasi SIMPONI'
            },
            xAxis: {
                categories: [
                    @foreach ($grafikmhspertahun as $data)
                        '{{ $data->tahun_angkatan }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Tahun Angkatan'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Mahasiswa'
                }
            },
            tooltip: {
                valueSuffix: ' (orang)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Mahasiswa',
                    data: [
                        @foreach ($grafikmhspertahun as $data)
                            {{ $data->jumlah_mhs }},
                        @endforeach
                    ]
                }
            ]
        });

        // 3. Line Chart => Trend jumlah mahasiswa per tahun
        Highcharts.chart('container2', {
            chart: {
                type: 'line'
            },
            colors: chartColors, // Warna garis yang berbeda untuk tiap prodi
            title: {
                text: 'Tren Jumlah Mahasiswa per Tahun',
                align: 'center'
            },
            subtitle: {
                text: 'Aplikasi Penerimaan Mahasiswa Baru',
                align: 'center'
            },
            yAxis: {
                title: {
                    text: 'Jumlah Mahasiswa'
                }
            },
            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2023 to 2025'
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2023,
                    lineWidth: 3, // Membuat garis sedikit lebih tebal agar jelas
                    marker: {
                        radius: 5 // Membuat titik poin lebih terlihat
                    }
                }
            },
            series: [
                @foreach ($grafiktrenmahasiswa as $data)
                    {
                        name: '{{ $data->nama_prodi }}',
                        data: [
                            {{ $data->jmhs_2023 }}, {{ $data->jmhs_2024 }}, {{ $data->jmhs_2025 }}
                        ]
                    },
                @endforeach
            ],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
@endsection