<div class="m-3" >
{{--   hello from component--}}
{{--    {{$test}}--}}
    <div class="card text-white bg-danger mb-3" style="max-width: 22rem; margin: 0 auto">
        <div class="card-header">
            Coronavirus stats ({{$nation}})
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
{{--                    get data using props in laravel--}}
                    {{$report["cases"]}}
                </div>
                <div class="col">
                    {{$report["deaths"]}}
                </div>
                <div class="col">
                    {{$report["recovered"]}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Total Cases
                </div>
                <div class="col">
                    Death
                </div>
                <div class="col">
                    Recovered
                </div>
            </div>
        </div>
    </div>
</div>
