<?php 
	if ( is_day() ){
		echo 'Daily archive'
	}elseif( is_month() ){
		echo 'Monthly archive'
	}
	elseif( is_year() ){
		echo 'Yearly archive'
	}

 

 // LWHH

      if(is_month()){
            $month = get_query_var("monthnum");
            $dateobj = DateTime::createFromFormat("!m",$month);
            echo $dateobj->format("F");
        } else if(is_year()){
            echo esc_html(get_query_var("year"));
        } else if(is_day()){
            $day = esc_html(get_query_var("day"));
            $month = esc_html(get_query_var("monthnum"));
            $year = esc_html(get_query_var("year"));
            printf("%s/%s/%s",$day,$month,$year);
        }

        ?>