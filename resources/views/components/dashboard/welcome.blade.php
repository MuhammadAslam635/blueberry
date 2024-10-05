<div>
    <x-mary-header title="Welcome To BlueBerry" subtitle="Dashboard">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-bolt" placeholder="Search..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-funnel" />
            <x-mary-button icon="o-plus" class="btn-primary" />
        </x-slot:actions>
    </x-mary-header>
    <x-mary-card class="p-5 my-2 rounded-md shadow-md bg-base-100">
    <div class="grid grid-cols-4 gap-5">
        <x-mary-stat title="Messages" value="44" icon="o-envelope" tooltip="Hello" />

        <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-up"
            tooltip-bottom="There" />

        <x-mary-stat title="Lost" description="This month" value="34" icon="o-arrow-trending-down"
            tooltip-left="Ops!" />

        <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-down"
            class="text-orange-500" color="text-pink-500" tooltip-right="Gosh!" />
    </div>
    </x-mary-card>
    <div class="grid grid-cols-2 gap-5">
        <x-mary-card class="p-5 rounded-md shadow-md bg-base-100">
            <div class="chart" id='chart'></div>
        </x-mary-card>
        <x-mary-card class="p-5 rounded-md shadow-md bg-base-100">
            <div class="line" id='line'></div>
        </x-mary-card>
    </div>

</div>
@push('js')
<script>
      var options = {
          series: [{
          name: 'Income',
          type: 'column',
          data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
        }, {
          name: 'Cashflow',
          type: 'column',
          data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
        }, {
          name: 'Revenue',
          type: 'line',
          data: [20, 29, 37, 36, 44, 45, 50, 58]
        }],
          chart: {
          height: 350,
          type: 'line',
          stacked: false
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [1, 1, 4]
        },
        title: {
          text: 'XYZ - Stock Analysis (2009 - 2016)',
          align: 'left',
          offsetX: 110
        },
        xaxis: {
          categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
        },
        yaxis: [
          {
            seriesName: 'Income',
            axisTicks: {
              show: true,
            },
            axisBorder: {
              show: true,
              color: '#008FFB'
            },
            labels: {
              style: {
                colors: '#008FFB',
              }
            },
            title: {
              text: "Income (thousand crores)",
              style: {
                color: '#008FFB',
              }
            },
            tooltip: {
              enabled: true
            }
          },
          {
            seriesName: 'Cashflow',
            opposite: true,
            axisTicks: {
              show: true,
            },
            axisBorder: {
              show: true,
              color: '#00E396'
            },
            labels: {
              style: {
                colors: '#00E396',
              }
            },
            title: {
              text: "Operating Cashflow (thousand crores)",
              style: {
                color: '#00E396',
              }
            },
          },
          {
            seriesName: 'Revenue',
            opposite: true,
            axisTicks: {
              show: true,
            },
            axisBorder: {
              show: true,
              color: '#FEB019'
            },
            labels: {
              style: {
                colors: '#FEB019',
              },
            },
            title: {
              text: "Revenue (thousand crores)",
              style: {
                color: '#FEB019',
              }
            }
          },
        ],
        tooltip: {
          fixed: {
            enabled: true,
            position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
            offsetY: 30,
            offsetX: 60
          },
        },
        legend: {
          horizontalAlign: 'left',
          offsetX: 40
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
        var options = {
          series: [{
          name: 'TEAM A',
          type: 'area',
          data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
        }, {
          name: 'TEAM B',
          type: 'line',
          data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
        }],
          chart: {
          height: 350,
          type: 'line',
        },
        stroke: {
          curve: 'smooth'
        },
        fill: {
          type:'solid',
          opacity: [0.35, 1],
        },
        labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
        markers: {
          size: 0
        },
        yaxis: [
          {
            title: {
              text: 'Series A',
            },
          },
          {
            opposite: true,
            title: {
              text: 'Series B',
            },
          },
        ],
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if(typeof y !== "undefined") {
                return  y.toFixed(0) + " points";
              }
              return y;
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#line"), options);
        chart.render();
</script>
@endpush
