<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog Statistics — Webdevelopment-En-Meer | Robin Boers</title>

        <link rel="alternate stylesheet" href="/css/plain.css" title="plain" />       
        <script src="/js/plain-mode.js"></script>
  
        <link rel="stylesheet" href="/css/main.css" title="default" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3/dist/chart.min.js"></script>

        <script>
            String.prototype.toRGB = function() {
                var hash = 0;
                if (this.length === 0) return hash;
                for (var i = 0; i < this.length; i++) {
                    hash = this.charCodeAt(i) + ((hash << 5) - hash);
                    hash = hash & hash;
                }
                var rgb = [0, 0, 0];
                for (var i = 0; i < 3; i++) {
                    var value = (hash >> (i * 8)) & 255;
                    rgb[i] = value;
                }
                return `rgb(${rgb[0]}, ${rgb[1]}, ${rgb[2]})`;
            }

            let lastPartOfURL = function(str) {
                let parts = str.split('/');
                let lastSegment = parts.pop() || parts.pop();

                return lastSegment;
            }
        </script>

        <?php
            include "../connection.php";

            $current_month = date('Y-m-01');
            $monthly_query = "SELECT * FROM viewcount WHERE month='$current_month'";
            $result = $conn->query($monthly_query);

            $data = new stdClass();
            $monthly_views = 0;
            $total_views = 0;

            if($result->num_rows !== 0) { while($row = $result->fetch_object()) {
                    $monthly_views += $row->views;

                    $url = $row->url;
                    $data->$url = $row->views;
            } }

            $total_query = "SELECT * FROM viewcount";
            $result = $conn->query($total_query);

            if($result->num_rows !== 0) { while($row = $result->fetch_object()) {
                $total_views += $row->views;
            } }

            // for ($i = 0; $i < 10; $i++) {
            //     $total_views += $i;

            //     $url = "https://geheimesite.nl/posts/$i";
            //     $data->$url = $i;
            // } 

            $data = json_encode($data);
        ?>
    </head>
    <body>
        <main id="content" class="page-content mt-0 md:mt-6">
            <section>
                <h1>Blog statistics</h1>
                <p>
                    Showing stats for <span class="bold">Webdevelopment-En-Meer</span> from <?= date('Y-m'); ?> using data from PhpMyAdmin.
                </p>

                <p>
                    Views this month: <span class="bold"><?= $monthly_views ?></span><br>
                    Total views: <span class="bold"><?= $total_views ?></span>
                </p>

                <h3>Views per post</h3>
            </section>
            
            <div class="relative max-w-sm mx-auto my-5">
                <canvas class="pieChart">
                    <p>Your browser doesn't seem to support rendering to a canvas :(</p>

                    <code>
                        <?= $data ?>
                    </code>
                </canvas>
            </div>

            <script defer>
                let json = <?= $data ?>;
                let urls = [];
                let views = [];
                let colors = [];

                Object.keys(json).forEach(url => {
                    urls.push(lastPartOfURL(url));
                    views.push(json[url]);
                    colors.push(url.toRGB());
                });

                const data = {
                    labels: urls,
                    datasets: [{
                        label: 'Views per page',
                        data: views,
                        backgroundColor: colors,
                        hoverOffset: 4
                    }]
                };

                const config = {
                    type: 'pie',
                    data: data,
                    responsive: true,
                    options: {
                        plugins: {
                            legend: {
                                display: false,
                                position: 'bottom',
                            }
                        }
                    }
                };

                const ctx = document.querySelector('.pieChart').getContext('2d');
                const pieChart = new Chart(ctx, config);
            </script>

        </main>

        <footer class="page-footer">
            Created by Robin Boers using <a href="https://www.chartjs.org">Chart.js</a>, which is licensed as <a href="https://opensource.org/licenses/MIT">MIT</a>.
        </footer>
    </body>
</html>