function keywordSegment($query)
{

	$prefix = newOrUsed($query);

	$deals = ['incentives','rebate','deal','tax credit','lease','discount','offers','apr','financing','promotions','specials','loyalty program','interest rates','finance','best time','when is','special','bonus','interest','zero'];

	$consumerReviews = ['problems','recalls','replacement','police interceptor','disable','complaint','flat tire','noise','replacement'];

	$featureSpecs = ['horsepower','tire size','mpg','hp','weight','specifications','gas tank size','width ','engine size','configurations','vtec','short bed','standard','capacity','engine','towing','conversion','length','motor','magnum','mileage','clearance','wheelbase','dimensions','levels','interior','reclining seat','option','fuel','expectancy','performance','gallon','options', 'spec'];

	$reviews = ['reviews','review','reliability','rating','road test','comparison'];

	$safety = ['safety','crash'];

	$new = ['2018','2019'];

	foreach($featureSpecs as $keyword)
	{

		if (stristr($query,$keyword))
		{
			return $prefix . '_feature_specs';
		}
	}

	foreach ($deals as $keyword)
	{
		if (stristr($query,$keyword))
		{
			return $prefix . '_car_incentives';
		}
	}

	foreach ($consumerReviews as $keyword)
	{

		if (stristr($query,$keyword))
		{
			return $prefix . '_consumer_reviews';
		}
	}


	foreach($reviews as $keyword)
	{
		if (stristr($query,$keyword))
		{
			return $prefix . '_review';
		}
	}

	foreach($safety as $keyword)
	{

		if (stristr($query,$keyword))
		{
			return $prefix . '_safety';
		}
	}

	return $prefix;

}
