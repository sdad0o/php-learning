<?php

// --------------------- ENUMS IN PHP ---------------------
// Enums (introduced in PHP 8.1) define a fixed set of possible values for a variable.
// They improve code safety, readability, and prevent invalid values.

// Defining an enum for the days of the week.
enum DaysOfWeek
{
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

// Assigning an enum value to a variable
$today = DaysOfWeek::WEDNESDAY;

// Checking if today is Wednesday
if ($today === DaysOfWeek::WEDNESDAY) {
    echo "It is Wed!\n"; // Output: "It is Wed!"
}

// --------------------- BACKED ENUMS ---------------------
// Enums can also have associated values (backed enums).
// Here, we define a Colour enum with string values representing hex color codes.

enum Colour: string
{
    case RED = '#FF0000';   // Red color hex code
    case GREEN = '#00FF00'; // Green color hex code
    case BLUE = '#0000FF';  // Blue color hex code
}

// Accessing the value of a backed enum case
echo Colour::RED->value; // Output: "#FF0000"

// --------------------- ENUM FUNCTION USAGE ---------------------
// Functions can accept enum types as parameters, ensuring they only receive valid values.

function isWeekend(DaysOfWeek $day): bool
{
    // Returns true if the day is Saturday or Sunday, otherwise false
    return $day === DaysOfWeek::SATURDAY || $day === DaysOfWeek::SUNDAY;
}

// Checking if MONDAY is a weekend
echo isWeekend(DaysOfWeek::MONDAY) ? 'Yes' : 'No'; // Output: "No"
