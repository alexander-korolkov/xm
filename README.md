# Run project
This app required Docker Compose. In oder to run project go to "/app" directory and use:
`docker compose up -d`
Should work.

# Description
This is a simple API for getting historical data for Trading Tickers. The API uses Redis to store retrieved data and produce methods for filtering these data by date range.
The report with historical data sending to provided email address in CSV document.

# Endpoint
All requests should go to the following URL:
`http://localhost/api/v1/historical-quotes-endpoint`

Note: I also setup http://xm.dev as a local domain, but you will need to run: `docker network create xm.dev`
So better to use http://localhost

# Methods

POST /
Description: Retrieve historical data by Date Range.

Parameters:

companySymbol (sting, required): Ticker.
startDate (string, required): Date in (YYYY-mm-dd) format.
endDate (string, required): Date in (YYYY-mm-dd) format.
email (string, required): Email address.

Example of request:

POST /api/v1/historical-quotes-endpoint
Content-Type: application/json
`{
"companySymbol": "AAPL",
"startDate": "2022-01-01",
"endDate": "2022-01-01",
"email": "example@example.com",
}`

Example of successful response:

`{
    {
        date: 1711128600,
        open: 171.75999450683594,
        high: 173.0500030517578,
        low: 170.05999755859375,
    },
    ...
}`

Example of the error:

`{
"error": "Bad request error"
}`


GET /
Description: Retrieve historical data by Date Range.

Example of request:

`GET http://localhost/api/v1/historical-quotes-endpoint?companySymbol=AAPL&startDate=2022-01-01&endDate=2023-01-31&email=alexkorolkov1@gmail.com`

Example of successful response:

`{
{
date: 1711128600,
open: 171.75999450683594,
high: 173.0500030517578,
low: 170.05999755859375,
},
...
}`

Example of the error:

`{
"error": "Bed request error"
}`


# Authentication
At this moment service didn't requested any Authentication/Authorization. 

# Error processing
If errors occur while executing requests, the API returns the corresponding HTTP status code along with an error message in JSON format. Detailed descriptions of possible errors can be found in the Methods section.
TODO: add detailed description.

# Error logging
Logging organized with Monolog. The API logs all errors to the /var/log directory. This log contains the date and time the error occurred, as well as a description of the error.

# Test
Please take a look at tests in the "/app/tests" directory. In order to run tests, please use PHPUnit command:
`./bin/phpunit tests/Controller/HistoricalQuotesControllerTest.php`

# Environment variables 
Please use .env file to adjust any global variables.

# OpenAPI CONTRACT
Contract is located at "/app/contract". Please take a look.

# Cache 
This app store some cache data in Redis

# Emails
Emails should be sending by asynchronously through Messenger tool and gmail transport. 
Please do not spam anyone with my credentials))

# Note 
I removed "/app/var/" and "/app/vendor/" folders from .gitignore, just to easy run. You don't need to run `composer up`, but you can do it.
