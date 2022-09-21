# Views API

This is a simple API I wrote to handle visitor counts on my [self-hosted blog](https://blog.geheimesite.nl). It has two endpoints:

-   `get.php`: takes a `url` as get param and returns the viewcount for that page.
-   `new.php`: takes a `url` as get param and increases viewcount by one

I also render the data I collect publicly using [Chart.js](https://www.chartjs.org). View [blog statistics for this month](https://geheimesite.nl/blog/stats)
