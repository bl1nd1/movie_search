<?php

require 'movies.php';



echo "What's your age?\n";
$userAge = readline();

if (!is_numeric($userAge) || (int)$userAge < 0)
{
	return 0;
}

$recommendedFilms = [];

echo "That's your list of recommended films to you:\n";

$filmIndex = 1;

/** @var TYPE_NAME $movies */
foreach ($movies as $film)
{
	if ($film['age_restriction'] <= (int)$userAge)
	{
		echo $filmIndex
			. '. '
			. $film['title']
			. ' ('
			. $film['release_year']
			. ') '
			. $film['age_restriction']
			. '+. Rating - '
			. $film['rating']
			. "\n";
		$filmIndex++;
	}
}
