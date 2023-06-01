<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/admin/side.css')
    @vite('resources/css/admin/dashboard.css')
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>
<body>
    <div class="container">
        @include('admin.partials.side')


        <div class="dashboard-content">
            <div class="en-tete">
                <div class="first-title">
                    <i class="fa-solid fa-cube icon"></i>
                    <h2>Dashboard</h2>
                </div>
                <div class="path-title">
                    <i class="fa-solid fa-house-chimney icon"></i>
                    <h2> / Dashboard / Home</h2>
                </div>

                <div class="beautiful--angelin">
                    <i class="fa-solid fa-circle-info icon "></i>
                    <div>This Dashboard is only for member of administration , they can control anythings about the website here </div>
                </div>

                <div class="first--graphique">
                    <div class="first--graphe-content">
                        <h6>Women Accounts</h6>
                        <div>
                            <div class="account">
                                <span class="first">558</span>
                                <span class="second">students</span>
                            </div>

                            <div class="first-circle">
                                <div class="second-circle">
                                    <span class="percent">0</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="first--graphe-content first--graphe-content-men">
                        <h6>Men Accounts</h6>
                        <div>
                            <div class="account account-men">
                                <span class="first first-men">558</span>
                                <span class="second second-men">students</span>
                            </div>

                            <div class="first-circle first-circle-men">
                                <div class="second-circle second-circle-men">
                                    <span class="percent percent-men">0</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="first--graphe-content first--graphe-content-teach">
                        <h6>Teachers </h6>
                        <div>
                            <div class="account account-teach"">
                                <span class="first first-teach">558</span>
                                <span class="second second-teach">Teachers</span>
                            </div>

                            <div class="first-circle first-circle-teach">
                                <div class="second-circle second-circle-teach">
                                    <span class="percent percent-teach">0</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="first--graphe-content first--graphe-content-room">
                        <h6>Rooms</h6>
                        <div>
                            <div class="account account-room">
                                <span class="first first-room">558</span>
                                <span class="second second-room">Rooms</span>
                            </div>

                            <div class="first-circle first-circle-room">
                                <div class="second-circle second-circle-room">
                                    <span class="percent percent-room">83</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="content--graphique">
                    <canvas id="myChart" aria-label="MyFirstCanvas" width="100%" height="30px"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/js/admin/side.js')
    <script text="/javascript">

        // les femmes =======================================================

        let compteurWomen = document.querySelector(".first-circle");
        let circlevalueWomen = document.querySelector(".percent");

        let startvalueW = 0;
        let endvalueW = 80;

        let ProgressW = setInterval(() => {
        startvalueW++;
        compteurWomen.style.background = `conic-gradient(var(--women-color) ${
            startvalueW * 3.6
        }deg ,#ededed 0deg)`;
        circlevalueWomen.textContent = ` ${startvalueW}%`;
        if (startvalueW == endvalueW) {
            clearInterval(ProgressW);
        }
        }, 10);

        // les femmes ========================================================

        // les hommes ========================================================
        let compteurMen = document.querySelector(".first-circle-men");
        let circlevalueMen = document.querySelector(".percent-men");

        let startvalueM = 0;
        let endvalueM = 73;

        let ProgressM = setInterval(() => {
        startvalueM++;
        compteurMen.style.background = `conic-gradient(var(--men-color) ${
            startvalueM * 3.6
        }deg ,#ededed 0deg)`;
        circlevalueMen.textContent = ` ${startvalueM}%`;
        if (startvalueM == endvalueM) {
            clearInterval(ProgressM);
        }
        }, 10);
        // les hommes ========================================================


        // les enseignats ========================================================
        let compteurT = document.querySelector(".first-circle-teach");
        let circlevalueT = document.querySelector(".percent-teach");

        let startvalueT = 0;
        let endvalueT = 100;

        let ProgressT = setInterval(() => {
        startvalueT++;
        compteurT.style.background = `conic-gradient(var(--teacher-color) ${
            startvalueT * 3.6
        }deg ,#ededed 0deg)`;
        circlevalueT.textContent = ` ${startvalueT}%`;
        if (startvalueT == endvalueT) {
            clearInterval(ProgressT);
        }
        }, 10);
        // les enseignats ========================================================


         // les classes ========================================================
         let compteurR = document.querySelector(".first-circle-room");
        let circlevalueR = document.querySelector(".percent-room");

        let startvalueR = 0;
        let endvalueR = 100;

        let ProgressR = setInterval(() => {
        startvalueR++;
        compteurR.style.background = `conic-gradient(var(--rooms-color) ${
            startvalueR * 3.6
        }deg ,#ededed 0deg)`;
        circlevalueR.textContent = ` ${startvalueR}%`;
        if (startvalueR == endvalueR) {
            clearInterval(ProgressR);
        }
        }, 10);
        // les classes ========================================================


        // Le Graphique ======================================================

        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['2019', '2019', '2020', '2021', '2022'],
            datasets: [{
                label: 'result of CEP',
                data: [100, 98.8, 75.33, 100, 95.7],
                borderWidth: 1,
                // backgroundColor: 'rgba(112, 162, 255, 0.99)',
            },
            {
                label: 'result of BEPC ',
                data: [56.52, 79.22, 89.5, 75.12, 86.5],
                borderWidth: 1,
                // backgroundColor: 'rgba(251, 175, 172, 0.99)',
            },
            {
                label: 'result of BAC ',
                data: [46.52, 39.22, 59.5, 55.12, 38.5],
                borderWidth: 1,
                // backgroundColor: 'rgba(255, 192, 152, 0.99)',
            }
            ]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        // Le Graphique ======================================================

        // Le mode nuit ======================================================




        // Le mode nuit ======================================================

    </script>
</body>
</html>
