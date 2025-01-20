<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Water Management Board - Dharan</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('photos/logos.png') }}">

    <link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141734189-9');
    </script>


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
        } else {
            document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


</head>

<body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">


    <x-navbar />



    <div class="YRrCJSr_j5nopfm4duUc wfz9oKCp_svYP9oWrZuR wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom">

        <x-sidebar  />

        <div class="_SmdlCf6eUKB_V9S5IDj _LPVUrp9Uina5fcERqWC _DGThsbfFGclb6iwA4_9 QhmQ_v3mmDFIP9VaVOfb _JKsnSqP4tIzydAzf5aP yQK4azPzSPqQ3rmcKxWm" id="sidebarBackdrop"></div>

        <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D zW58fVqdWJHfumftUEwF h8KYXnua2NT4kTVzieom">
            <main>

                {{ $slot }}

            </main>


        </div>

    </div>



    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <!-- water level -->
      <!-- Second JavaScript Portion: Fetch Data and Update Chart -->
      <script>
        function updateWaterLevel() {
            fetch('/update-water-level')
                .then(response => response.json())
                .then(data => {
                    const currentLevel = data.current_level;
                    const incoming_rate = data.incoming_rate;
                    const outgoing_rate = data.outgoing_rate;
                    const customers = data.customers;
                    const employees = data.employees;
                    const total_amount = data.total_amount;
                    document.getElementById('water-level').textContent = currentLevel + ' liters';
                    document.getElementById('incoming-rate').textContent = incoming_rate;
                    document.getElementById('outgoing-rate').textContent = outgoing_rate;
                    document.getElementById('customers-no').textContent = customers;
                    document.getElementById('employees-no').textContent = employees;
                    document.getElementById('total-amount').textContent = total_amount;
                    // Calculate available water percentage and empty space
                    availableWater = (currentLevel / 1600000) * 100; // Assuming 1,600,000 is the tank's max capacity
                    emptySpace = 100 - availableWater;

                    // Update chart data
                    waterLevelChart.data.datasets[0].data = [availableWater, emptySpace];
                    waterLevelChart.update();


                    // to show time
                    const time = (currentLevel/1000)/(outgoing_rate*3.6);
                    document.getElementById('water-lasting-time').textContent = time.toFixed(2) + ' hours';
                    // document.getElementById('water-lasting-time').textContent = time.toFixed(2) + ' hours';
                })
                .catch(error => console.error('Error:', error));
        }

        // Update water level every second
        setInterval(updateWaterLevel, 100000);
    </script>

    

</body>

</html>