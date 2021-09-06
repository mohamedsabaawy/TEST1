
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('front'.'/main.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    {{--    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>--}}
    <style>
        .header {
            background: none;

        }

        .flex-container {
            display: flex;

            margin: 20px 50px;
            background: #2e2e2e;
            flex-wrap: wrap;
            height: 250px;
        }

        .pic {
            flex-basis: 400px;
            flex: 1;

        }

        #photo {
            height: 250px;
        }

        .brief {
            flex-basis: 400px;
            flex: 2;
            margin-top: 10px;
            margin-left: 20px;
            margin-right: 50px;

        }


        h3 {
            border-bottom: 3px solid;
            width: 180px;
            margin-bottom: 10px;
            padding-top: 0;
        }

        .title {
            color: #fff;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2e2e2e;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }


        .dropdown-content a {
            border-bottom: 0.5px solid rgba(71, 71, 70, 0.3);
        }


        .dropdown:hover .dropdown-content {
            display: block;
        }


        .chart {
            width: 80%;
            margin: auto;
            padding-top: 40%;
            position: relative;

        }


        .chart iframe {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 90%;
        }

        #stats {
            color: #2e2e2e;
            margin: 20px 50px;
            display: flex;
        }

        #stats h2 {
            margin-left: 10px;
        }

        #link {
            text-decoration: none;
            color: inherit;
        }

        #title {
            width: 400px;
            margin-left: 25px;
            margin-bottom: 20px;
        }

        #title h1 {
            color: #2e2e2e;
            border-bottom: 5px solid;
        }



    </style>
