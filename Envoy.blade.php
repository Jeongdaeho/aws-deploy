@setup
    // aws sdk 를 이용해서 받아와야 한다.
    require __DIR__.'/vendor/autoload.php';
    $client = new Aws\Ec2\Ec2Client([
        'region' => 'ap-northeast-2',
        'version' => '2016-11-15'
    ]);

    $result = $client->describeNetworkInterfaces([
        'Filters' => [
            [
                'Name' => 'group-name',
                'Values' => ['BizCare-Web'],    // sg 이름으로 변경해준다.
            ],
        ],
    ]);

    $server = [];
    $server['web'] = array_map(function ($item) {
        return $item['PrivateIpAddresses'][0]['PrivateIpAddress'];
    }, $result['NetworkInterfaces']);

@endsetup

@servers($server)

@task('deploy', ['on' => 'web', 'parallel' => true])
cd ~/
ls -al
{{-- git pull origin {{ $branch }} --}}
{{-- php artisan migrate --}}
@endtask