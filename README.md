# Gilded Rose Inn -- Weather Service

This is a simple weather service for the Gilded Rose inn. The service provides basic weather information like current temperature, min/max temperature for the day, and humidity. It uses an external weather API to fetch the data.

## Setup

### Prerequisites
* Docker for Mac (or Windows)

### Installation
1. Clone the repository.
```bash
git clone https://github.com/cgmurray/weather.git
cd weather
docker compose pull --include-deps
```

## Running the Application
1. Run the docker script
```
docker compose up -d
```

The application will be available at `http://localhost/docs/api/`.

## Endpoints
* GET `/weather/coordinates?lat={latitude}&lon={longitude}`
* GET `/weather/zip?zip={zipCode}`

## Access Keys

Information on where to place your access keys for the third-party weather services.

## System Overview

The system is built using API Platform, including the Symfony framework. It consists of a single controller with two actions, handling requests with either latitude/longitude or zip code query parameters. The controller uses a weather service to fetch the weather data from the third-party API (OpenWeatherMap.org) and returns a JSON response with the required information.

The weather service is designed to be easily extensible, so other weather providers can be added in the future.

## References

* ChatGPT - GPT-4 model
* API Platform - api-platform.com

## Third-Party Libraries and Tools
* API Platform reference application
* Symfony http-client

## Time Spent

* 3 hours

## Software Design and Best Practices
If I had unlimited time to spend on this project, I would:

1. Add support for more weather providers and implement a strategy to fallback between them in case of failures.
2. Write unit and functional tests to ensure the correctness of the application.
3. Implement caching for the weather data to reduce the number of requests to the third-party APIs.
4. Add proper error handling and user-friendly error messages.
5. Improve input validation for query parameters.
6. Implement additional features such as extended forecasts, historical data, etc.
7. Add API authentication to secure the service.

## Software Design and Best Practices
With more time, I would implement the following software design and best practices:

1. Dependency Injection: Ensure all dependencies are injected, making the code more modular and testable.
2. SOLID Principles: Follow SOLID principles to ensure a well-structured, maintainable, and scalable application.
3. Design Patterns: Utilize appropriate design patterns for better code organization and reusability.
4. Code Documentation: Add more comprehensive inline documentation for better understanding and maintainability.
5. Error Handling and Logging: Implement proper error handling, logging, and monitoring for a more robust application.
