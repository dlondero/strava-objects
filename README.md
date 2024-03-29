# StravaObjects
[![Build Status](https://travis-ci.org/dlondero/strava-objects.svg?branch=master)](https://travis-ci.org/dlondero/strava-objects)

TL;DR PHP model classes for Strava V3 API responses

The [Strava V3 API](https://developers.strava.com/docs/reference/) is 
the public interface allowing developers to access the rich 
[Strava](https://www.strava.com/) dataset. Retrieving information 
directly from the API or using one of the PHP client libraries available 
leaves us to work with JSON responses (to decode) or with the usual array 
of data.  

The goal of this package is to give structure to unstructured data stored 
in associative arrays. Model objects representing Strava models will give 
us the following advantages:

- We're able to **type hint** all responses
- Defined types for all propertis of our objects, so we're sure that 
their values are what we expect
- Because of typed properties, we can statically analyze them and have 
**auto completion**.

## Requirements
- PHP >= 7.4

## Installation
Using Composer:

```bash
composer require dlondero/strava-objects
```

Otherwise just download the package and add it to your autoloader. 
Namespaces are PSR-4 compliant.

## Usage

Let's look at the example to get an [activity](https://developers.strava.com/docs/reference/#api-Activities-getActivityById) 
(imagine to use a client library which returns associative arrays):

```php
$response = $client->getActivity(12345);

[
    'id' => 12345,
    'name' => 'Foo',
    'distance' => 28099,
    ...
]
````

Working with this array is difficult, as we'll always have to lookup to 
the documentation to know what's exactly in it. 
This package allows to instantiate proper objects for all models 
using the response array of data. 

**Every model defined in Strava documentation
is mapped 1:1 in this library so it's easy to understance which object to
create with a specific response from the API.**

```php
// According to Stava docs `getActivityById` returns the representation of 
// `DetailedActivity`. So we can use its response to create an instance of
// that model provided by StravaObjects.

use StravaObjects\Objects\DetailedActivity;

$response = $client->getActivityById(12345);
$detailedActivity = DetailedActivity::create($response);
```

Now we can use this data in a structured way thanks to the accessors of 
each model and auto completion in our preferred IDE.

### Collections
Many endpoints of Strava API return an array of objects (their 
representation), for such reason StravaObjects provides many collections
implementing `IteratorAggregate` interface. Passing the response to 
`Collection::create()` will create the collection and all its typed 
elements. 

```php
// According to Strava docs `getLoggedInAthleteActivities` returns an 
// array of `SummaryActivity` objects. Creating the related collection
// is a one liner operation.

use StravaObjects\Collections\Collection;
use StravaObjects\Objects\SummaryActivity;

$response = $client->getLoggedInAthleteActivities();
$summaryActivityCollection = Collection::create($response, SummaryActivity::class);
```

## Development

The StravaObjects library was created by Daniel Londero, 
[software engineer](https://remote-developer.io/) and 
[ultratrail runner](https://www.strava.com/athletes/16365833).

## License

The StravaObjects library is open-source software licensed under MIT license.
