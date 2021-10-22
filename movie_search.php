<?php

require 'movies.php';

echo "What's your age?\n";
$userAge = readline();

if ($userAge < 0)
{
	return 0;
}

$recommendedFilms = [];

/** @var TYPE_NAME $movies */
foreach ($movies as $film)
{
	if ($film['age_restriction'] <= $userAge)
	{
		$recommendedFilms[] = $film;
	}
}

echo "That's your list of recommended films to you:\n";

foreach ($recommendedFilms as $filmIndex => $film)
{
	echo $filmIndex + 1
		. '. '
		. $film['title']
		. ' ('
		. $film['release_year']
		. ') '
		. $film['age_restriction']
		. '+. Rating - '
		. $film['rating']
		. "\n";
}