SELECT t.day_of AS day, t.time1, t.time2, t.time3, t.time4, 
			t.time5
			FROM times AS t
			INNER JOIN locations AS l
			ON l.id = t.location_id
			WHERE l.name = 'RuneScape';